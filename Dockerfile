FROM php:8.4-fpm
LABEL maintainer="Ratiugtun <ratiug_tun@homail.com>"

ARG ROOT_URL=http://localhost
ENV ROOT_URL=$ROOT_URL

# Set Timezone
ARG TZ=UTC
ENV TZ ${TZ}

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Certificate Authorities
COPY ca-certificates/* /usr/local/share/ca-certificates
RUN update-ca-certificates

# Install system dependencies and Nginx
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libxpm-dev \
    libgd-dev \
    cron \
    supervisor \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
        --with-webp \
        --with-xpm \
    && docker-php-ext-install gd \
    && rm -rf /var/lib/apt/lists/*

# Keep environment variables (e.g. ROOT_URL) visible to PHP-FPM workers
RUN echo "clear_env = no" >> /usr/local/etc/php-fpm.d/www.conf

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application source code
COPY . /var/www/html

RUN mkdir -p /var/www/html/cache \
    && chown -R www-data:www-data cache \
    && chmod -R 755 cache \
    && composer install --no-dev --optimize-autoloader \
    && rm /etc/nginx/sites-enabled/default

COPY ./.docker/nginx.conf /etc/nginx/nginx.conf
COPY ./.docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Set up cron job to clean cache
COPY ./.docker/cleanup_cron /tmp/cleanup_cron
RUN crontab -u www-data /tmp/cleanup_cron && rm /tmp/cleanup_cron \
    && touch /var/log/cron_cleanup.log \
    && chown www-data:www-data /var/log/cron_cleanup.log


RUN chown -R www-data:www-data /var/www/html

EXPOSE 8678

CMD ["/usr/bin/supervisord"]

FROM php:7.3-apache
LABEL maintainer="Ratiugtun <ratiug_tun@homail.com>"

ARG http_proxy
ARG https_proxy
ARG no_proxy
ARG HTTP_PROXY=$http_proxy
ARG HTTPS_PROXY=$https_proxy

ARG ROOT_URL=http://localhost
ENV ROOT_URL=$ROOT_URL

###########################################################################
# Set Timezone
###########################################################################

ARG TZ=UTC
ENV TZ ${TZ}

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

###########################################################################
# Certificate Authorities
###########################################################################

COPY ca-certificates/* /usr/local/share/ca-certificates
RUN update-ca-certificates


###########################################################################
# Install PHP Extensions
###########################################################################

RUN apt-get update -y  \
    && apt-get install -y \
        libpng-dev \
        libzip-dev \
        libfreetype6-dev \
        libjpeg-dev \
        libmcrypt-dev \
        libapache2-mod-xsendfile \
        git

RUN docker-php-ext-install iconv \
    && docker-php-ext-configure gd \
        --with-freetype-dir=/usr/include/freetype2 \
        --with-png-dir=/usr/include \
        --with-jpeg-dir=/usr/include \
    && docker-php-ext-install gd zip mbstring \
    && docker-php-ext-enable gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

###########################################################################
# Apache Configuration
###########################################################################
RUN a2enmod rewrite xsendfile

RUN awk '/DocumentRoot \/var\/www\/html/{print $0 RS "\tXSendFile on" RS "\tXSendFilePath /var/www/html/cache";next}1' /etc/apache2/sites-available/000-default.conf > temp && mv temp /etc/apache2/sites-available/000-default.conf

###########################################################################
# Deploy ui-avatars
###########################################################################

WORKDIR /var/www/html

RUN mkdir -p cache && chmod 777 cache

COPY Utils ./Utils
COPY api ./api
COPY assets ./assets
COPY cron ./cron
COPY index.php ./index.php
COPY composer.json ./composer.json
COPY composer.lock ./composer.lock

# Install composer dependencies
RUN composer install --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader

# Enable mod_rewrite and pretty urls
COPY .htaccess /var/www/html/.htaccess

# Setup crontab to run cleanup.php daily on 00:00
RUN echo "0 0 * * * php /var/www/html/cron/cleanup.php" >> /etc/crontab
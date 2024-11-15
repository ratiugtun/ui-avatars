<?php
// Get root url from system environment
define( 'ROOT_URL', getenv( 'ROOT_URL' ) );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, user-scalable=no, maximum-scale=1.0"/>

	<meta name="author" content="Lasse Rafn">
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:site" content="@lasserafn"/>
	<meta name="twitter:creator" content="@lasserafn"/>
	<meta property="og:image" content="assets/meta.png"/>
	<meta name="twitter:image" content="assets/meta.png"/>
	<meta property="og:url" content="https://ui-avatars.com/"/>
	<meta property="og:title" content="Free API to generate avatars with initials - User Initial avatars"/>
	<meta name="twitter:title" content="Free API to generate avatars with initials - User Initial avatars"/>
	<meta name="description" content="Generate image avatars with user initials for free, just specify name. No limits or registration."/>
	<meta property="og:description" content="Generate image avatars with user initials for free, just specify name. No limits or registration."/>
	<meta name="twitter:description" content="Generate image avatars with user initials for free, just specify name. No limits or registration."/>

	<title>User Initial avatars</title>

	<style>*,legend{max-width:100%}.footer,.promo,.stat{text-align:center}code,svg:not(:root){overflow:hidden}button,hr,input{overflow:visible}audio,canvas,progress,video{display:inline-block}progress,sub,sup{vertical-align:baseline}[type=checkbox],[type=radio],legend{box-sizing:border-box;padding:0}html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}article,aside,details,figcaption,figure,footer,header,main,menu,nav,section{display:block}figure{margin:1em 40px}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}audio:not([controls]){display:none;height:0}img{border-style:none}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{padding:.35em .75em .625em}legend{color:inherit;display:table;white-space:normal}textarea{overflow:auto}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}[hidden],template{display:none}*{box-sizing:border-box}body{font:14px/1.5 'Open Sans',sans-serif;color:#222;background:#fff;margin:0;padding:0}.container{width:600px;margin:2em auto;padding:0 15px}.promo,h2{margin:2em 0 0}.footer{font-size:.875em;line-height:1.2}h1{font-size:3em;margin:0}h2{font-size:2em}h2.subtitle{font-weight:400;font-size:1.25em;margin:.25em 0 0}h3{font-weight:600;font-size:1.125em;margin:1em 0 .5em}hr{box-sizing:content-box;border:none;background:#d8d8d8;height:1px;margin:2em 0}a,a:visited{color:#568bbf}.stats{display:flex}.stat{margin:8px 0;width:50%;background:#f5f7f9;box-shadow:4px 4px 0 #e9ebed;padding:12px}.stat-value{font-size:32px;display:block}.stat-label{font-size:12px;display:block;color:#888}.stat:first-child{margin-right:8px}.stat:last-child{margin-left:8px}code{background:#f7f9fb;display:block;font-size:13px;margin-bottom:2em;padding:1em}code.inline{display:inline;padding:.25em;margin:0}code.get:before{color:#568bbf;content:'GET '}code.get:hover{cursor:pointer;background:#f2f4fd}code.get:hover:after{color:#568bbf;content:' TRY';float:right}code span.param{color:#A87847}code span.value{color:#6E9C40}@media all and (max-width:600px){code.get:hover:after{display:none}.stat-value{font-size:28px}.stat-label{font-size:11px}}.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>

</head>
<body>
<a href="https://github.com/LasseRafn/ui-avatars" class="github-corner" aria-label="View source on GitHub">
	<svg width="80" height="80" viewBox="0 0 250 250" style="fill:#151513; color:#fff; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true">
		<path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
		<path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2"
			  fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
		<path
			d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z"
			fill="currentColor" class="octo-body"></path>
	</svg>
</a>
<div class="container">
	<div class="header">
		<h1>UI Avatars</h1>
		<h2 class="subtitle">Generate avatars with initials from names.</h2>
		<p>UI Avatars has a simple-to-use API with no limiting or login. No usage tracking and no information is stored. The final images are cached, but nothing else. Just write name or surname, or both.</p>

		<p><strong>NEW!</strong> Bold font weight option</p>
		<p><strong>NEW!</strong> There is now a official <a href="https://github.com/Rackbeat/laravel-ui-avatars" target="_blank">Laravel Wrapper</a></p>

		<div class="promo">
			<img src="<?=ROOT_URL?>/assets/promo.png" width="651" alt="Example avatars"/>
		</div>
	</div>

	<div class="stats">
		<div class="stat">
			<span class="stat-value"><span id="daily-requests">-</span></span>
			<span class="stat-label">Daily Requests</span>
		</div>

		<div class="stat">
			<span class="stat-value"><span id="response-time">-</span><small>ms</small></span>
			<span class="stat-label">Avg. Response Time</span>
		</div>
	</div>

	<h2>Usage</h2>

	<p>All requests returns a image stream to be used directly in a <code class="inline">&lt;img/&gt;</code> tag.</p>

	<h3>Generate a avatar with default settings, for user "John Doe".</h3>
	<code class="get" onclick="window.open('<?=ROOT_URL?>' + '/api/?name=John+Doe')"><?=ROOT_URL?>/api/?<span class="param">name</span>=<span class="value">John+Doe</span></code>

	<h3>Generate a blue avatar</h3>
	<code class="get" onclick="window.open('<?=ROOT_URL?>' + '/api/?background=0D8ABC&color=fff')"><?=ROOT_URL?>/api/?<span class="param">background</span>=<span class="value">0D8ABC</span>&<span class="param">color</span>=<span
		class="value">fff</span></code>
		
	<h3>Generate a random background avatar.</h3>
	<p>Avoid passing color as it will be automatically set between black and white.</p>
		<code class="get" onclick="window.open('<?=ROOT_URL?>' + '/api/?background=random')"><?=ROOT_URL?>/api/?<span class="param">background</span>=<span class="value">random</span></code>
	
	<h2>Settings</h2>

	<h3>Image Size (<code class="inline">size</code>)</h3>
	<p>Avatar image size in pixels. Between: 16 and 512. Default: 64</p>
	<code class="get" onclick="window.open('<?=ROOT_URL?>' + '/api/?size=128')"><?=ROOT_URL?>/api/?<span class="param">size</span>=<span class="value">128</span></code>

	<h3>Font Size (<code class="inline">font-size</code>)</h3>
	<p>Font size in percentage of <code class="inline">size</code>. Between 0.1 and 1. Default: 0.5</p>
	<code class="get" onclick="window.open('<?=ROOT_URL?>' + '/api/?font-size=0.33')"><?=ROOT_URL?>/api/?<span class="param">font-size</span>=<span class="value">0.33</span></code>

	<h3>Initial Characters (<code class="inline">length</code>)</h3>
	<p>Length of the generated initials. Default: 2</p>
	<code class="get" onclick="window.open('<?=ROOT_URL?>' + '/api/?length=1')"><?=ROOT_URL?>/api/?<span class="param">length</span>=<span class="value">1</span></code>

	<h3>Name (<code class="inline">name</code>)</h3>
	<p>The name used to generate initials. You can specify the initials yourself as well. Default: John Doe</p>
	<code class="get" onclick="window.open('<?=ROOT_URL?>' + '/api/?name=Elon+Musk')"><?=ROOT_URL?>/api/?<span class="param">name</span>=<span class="value">Elon+Musk</span></code>

	<h3>Rounded Image (<code class="inline">rounded</code>)</h3>
	<p>Boolean specifying if the returned image should be a circle. Default: false</p>
	<code class="get" onclick="window.open('<?=ROOT_URL?>' + '/api/?rounded=true')"><?=ROOT_URL?>/api/?<span class="param">rounded</span>=<span class="value">true</span></code>

	<h3>Bold (<code class="inline">bold</code>)</h3>
	<p>Boolean specifying if the returned letters should use a bold font. Default: false</p>
	<code class="get" onclick="window.open('<?=ROOT_URL?>' + '/api/?bold=true')"><?=ROOT_URL?>/api/?<span class="param">bold</span>=<span class="value">true</span></code>

	<h3>Background Color (<code class="inline">background</code>)</h3>
	<p>Hex color for the image background, without the hash (#). Default: ddd</p>
	<code class="get" onclick="window.open('<?=ROOT_URL?>' + '/api/?background=a0a0a0')"><?=ROOT_URL?>/api/?<span class="param">background</span>=<span class="value">a0a0a0</span></code>

	<h3>Font Color (<code class="inline">color</code>)</h3>
	<p>Hex color for the font, without the hash (#). Default: 222</p>
	<code class="get" onclick="window.open('<?=ROOT_URL?>' + '/api/?color=ff0000')"><?=ROOT_URL?>/api/?<span class="param">color</span>=<span class="value">ff0000</span></code>

	<h3 id="uppercase">Uppercase (<code class="inline">uppercase</code>)</h3>
	<p>Decide if the API should uppercase the name/initials. Default: true</p>
	<code class="get" onclick="window.open('<?=ROOT_URL?>' + '/api/?uppercase=false&name=different+Case')"><?=ROOT_URL?>/api/?<span class="param">uppercase</span>=<span class="value">false</span>&<span
		class="param">name</span>=<span class="value">different+Case</span></code>

	<h3 id="format">Format (<code class="inline">format</code>)</h3>
	<p>Decide if the API should return SVG or PNG. Default: svg if the <code class="inline">Accept</code> header includes <code class="inline">image/svg+xml</code>, png otherwise</p>
	<code class="get" onclick="window.open('<?=ROOT_URL?>' + '/api/?format=svg')"><?=ROOT_URL?>/api/?<span class="param">format</span>=<span class="value">svg</span></code>

	<p>All settings above can be mixed together as you desire.</p>

	<h2>With Gravatar or similar</h2>
	<p>A good use-case would be using it as a fallback for Gravatar. Example:</p>
	<code>https://www.gravatar.com/avatar/<span class="value">EMAIL_MD5</span>?<span class="param">d</span>=<span class="value">https%3A%2F%2Fui-avatars.com%2Fapi%2F/Lasse+Rafn/128</span></code>

	<p>Because of limitations in Gravatar, we must pass in the parameters as sub-directories, instead of query-parameters. You should also consider urlencoding the name, in case it contains special characters. It's a
		limitation by Gravatar, not UI Avatars.</p>

	The order is as follows:

	<ul>
		<li>name</li>
		<li>size</li>
		<li>background</li>
		<li>color</li>
		<li>length</li>
		<li>font-size</li>
		<li>rounded</li>
		<li>uppercase</li>
		<li>bold</li>
        <li>format</li>
	</ul>

	<h2>Retina</h2>
	<p>I recommend using 1.5x or 2x sizes for your avatars, but keeping the img tag the original size, to ensure crisp avatars on high DPI screens.</p>

	<h2 id="language-script-support">Language/Script support</h2>
	<p>I have added support for some unicode scripts/languages that are not supported by the typical fonts. Current support:</p>
	<ul>
		<li>Arabic</li>
		<li>Armenian</li>
		<li>Bengali</li>
		<li>Georgian</li>
		<li>Hebrew</li>
		<li>Chinese</li>
		<li>Japanese</li>
		<li>Mongolian</li>
		<li>Thai</li>
		<li>Tibetan</li>
	</ul>

	<h2>WordPress plugin</h2>
	<p>It has WordPress plugin! If you have a WordPress site, you can use the <a href="https://wordpress.org/plugins/wp-initials-avatar/" rel="noopener">WordPress plugin</a>, which is also free.</p>

	<h2>Regions</h2>
	<p>Servers are setup in the following countries/cities:</p>
	<ul>
		<li>Frankfurt, Germany</li>
		<li>San Francisco, CA, USA</li>
		<!--<li>Bangalore, India <span style="padding: 3px 6px; background: #e7e9eb; border-radius: 2px; font-size: 0.8em; font-weight: bold;">NEW!</span></li>-->
	</ul>

	<h2 id="privacy">Privacy and Monitoring</h2>
	<p>No data is being stored on our serveres. Monitoring & logging is entirely disabled.</p>

	<hr>

	<div class="footer">
		<p>Made by <a href="https://twitter.com/lasserafn" rel="noopener" target="_blank">Lasse Rafn</a> with help of contributors</p>
		<p><a href="https://github.com/LasseRafn/ui-avatars" rel="noopener" target="_blank">Code on GitHub</a></p>
		<p><button onclick="toggleHeaders()">Show request headers</button></p>
		<div id="headers" style="display: none; text-align: left;">
		<?php
			foreach (getallheaders() as $name => $value) {
				echo "$name: $value<br>";
			}
		?>
		</div>
		<script>
			function toggleHeaders() {
				var x = document.getElementById("headers");
				if (x.style.display === "none") {
					x.style.display = "block";
				} else {
					x.style.display = "none";
				}
			}
		</script>
	</div>
</div>
</body>
</html>

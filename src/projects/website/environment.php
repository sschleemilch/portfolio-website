<?php
	$projects = "is-active";
	$projects_website = "is-active";
	$projects_website_environment = "is-active";
	$root = $_SERVER['DOCUMENT_ROOT'];
	$path = $root . "/templates/_header.php";
	include_once($path);
	$path = $root . "/projects/_projects.php";
	include_once($path);
?>

<div class="hero">
	<div class="hero-body">
		<div class="container">
			<h1 class="title"><strong>Environment Setup</strong></h1>
			<h2 class="subtitle">How I did setup my backend and development environment</h2>
		</div>
	</div>
</div>
<div class="hero is-dark">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">Backend Environment</h1>
            <h2 class="subtitle">Linux, Apache, PHP, SSL</h2>
			<div class="content">
				<p>
					A good development environment can make a huge difference to be effective
					when programming websites. Automation is in my opinion a very important factor.
					The backend consists of a server obviously that will deliver your content to the
					requesting client. Since all chosen technologies are available for Windows and Linux
					based server operating systems, you can choose your favourite there.
					There are a lot of webserver providers out there offering all kind of help setting up
					your server and offering prebuilt images and administration tools.
					In my case, I went for a Virtual Linux Ubuntu 16.04 Server where I do have root privileges.
					I am quite familiar with Linux and therefore this choice was being made before even looking
					at different providers. I chose <strong><a href="https://www.server4you.de/">Server4You</a></strong>
					which offers that kind of server with the following specs for 5€/month:
				</p>
				<ul>
					<li> 100 GB SSD or 200 GB HDD </li>
					<li> 2 vCores </li>
					<li> 4 GB RAM guaranteed </li>
					<li> 100 Mbit/s connection </li>
				</ul>
				<p>
					Since my background task activities I will perform on the server are quite minimal, 2 vCores and 4 GB RAM
					are pretty ok for me and so far I did not notice any performance issues.
					I did chose the 100 GB SSD since I also do not expect to store huge amount of data on the server even though
					I might add an SQL database in the future. For actually delivering content, you need of course a website server
					software that handles HTTP requests. I chose <strong><a href="https://httpd.apache.org/">Apache</a></strong> for that
					purpose but of course there are other choices out there like <strong><a href="https://nginx.org/en/">Nginx</a></strong>.
					<br><br>
					<strong>Design Decision</strong>: Backend HW, OS, SW 
				</p>
				<div class="columns has-text-centered">
					<div class="column ">
						<a href="https://www.server4you.de/virtual-server">
							<img src="/img/icon_is_large_server.png" alt="Icon::Server" width="42" height="42">
						</a>
						<p class="title is-4"> <strong> vServer </strong> </p>
						<p class="subtitle"> 2vCores, 4GB RAM, 100 GB SSD </p>
					</div>
					<div class="column">
						<a href="https://www.ubuntu.com/">
							<img src="/img/icon_is_large_ubuntu.png" alt="Icon::Ubuntu" width="42" height="42">
						</a>
						<p class="title is-4"> <strong> Ubuntu </strong> </p>
						<p class="subtitle"> Popular Linux OS with large community </p>
					</div>
					<div class="column">
						<a href="https://httpd.apache.org/">
							<img src="/img/icon_is_large_apache.png" alt="Icon::Apache" width="43" height="42">
						</a>
						<p class="title is-4"> <strong> Apache </strong> </p>
						<p class="subtitle"> Very common HTTP Server </p>
					</div>
				</div>
				<h1 class="title is-4"><strong>Installation</strong></h1>
				<p>
					The technologies I chose is often referred as LAMP stack:
					<strong>L</strong>inux, <strong>A</strong>pache, <strong>M</strong>ySQL, 
					<strong>P</strong>HP. Most Linux distributions will have installation instructions
					for it when you are searching for that term.
					First you have to login into a server. In case of a root Linux system you will most likely
					be able to login via SSH. For that you will need any SSH client on your development machine
					and of course your login data: Username, most likely "root", the password and your domain name.
					Most providers will also offer you special prizes for ordering a domain on their site.
					<br><br>
					For my setup, installing LAMP was quite easy through the Ubuntu package manager:
				</p>
				<div class="lb is-code">
<pre>
<code>
> <span class="bl">ssh</span> <span class="or">root</span><span class="gr">@</span><span class="com">sebastian-schleemilch.de</span>
$</span> <span class="bl">apt-get</span> <span class="com">install</span> apache2 libapache2-mod-php7.0 php7.0 php7.0-mysql mysql-server</span>
</code>
</pre>
				</div>
                <p> 
                    Of course, you can leave out the mysql parts if you are not planning on use mysql at all.
                    After that, you can test your if your Apache server is running by requesting your website through your browser e.g.
                    http://sebastian-schleemilch.de/ (or your provider given domain). You should see the Apache test site.
                    With default settings, your site will be hosted on the following absolute Linux server path:
                    <code>/var/www/html</code>.<br>
                    There you will find an <code>index.html</code>. To verify that your PHP installation was also a success,
                    you can rename this file to <code>index.php</code> and insert a small test snippet:
                </p>
                <div class="lb is-code">
<pre>
<code>
<span class="com">&lt;?php</span>
 <span class="bl">phpinfo()</span>;
<span class="com">?&gt;</span>
</code>
</pre>
                </div>
                <p>
                    When you now refresh your webbrowser, you should see a PHP information page about its version, environment variables
                    and more.
                </p>
                <h1 class="title is-5"><strong>HTTPS and forwarding from HTTP</strong></h1>
                <p>
                    Additionally, you should think about setting up HTTPS/SSL for your side in order to provide a secure connection to your
                    webpage. You can get a non-self signed certificate by paying for it. The other possibility is to use
                    <strong><a href="https://letsencrypt.org/">Let's Encrypt</a></strong> which is a free alternative and very easy to setup.
                    It offers scripts for automatically deploying valid certificates for your website using a python script called
                    <strong><a href="https://certbot.eff.org/#ubuntuxenial-apache">CertBot</a></strong>. For ubuntu and Apache, using that script is
                    quite simple:
                </p>
                 <div class="lb is-code">
<pre>
<code>
$ <span class="gr">sudo</span> <span class="bl">apt-get</span> <span class="com">update</span>
$ <span class="gr">sudo</span> <span class="bl">apt-get</span> <span class="com">install</span> software-properties-common
$ <span class="gr">sudo</span> <span class="bl">apt-get-repository</span> ppa:certbot/certbot
$ <span class="gr">sudo</span> <span class="bl">apt-get</span> <span class="com">update</span>
$ <span class="gr">sudo</span> <span class="bl">apt-get</span> <span class="com">install</span> python-certbot-apache

$ <span class="gr">sudo</span> <span class="bl">certbot</span> --apache
</code>
</pre>
                </div>
                <p>
                    You will have to input some information like your domain(s). They will be verified automatically and your Apache
                    server will be configured automatically. So easy!
                    Still there is one thing I also did. I decided to automatically forward HTTP to HTTPS.
                    For that, you need to modify your Apache configuration slightly. <br>
                    You should find your Apache configuration in the path <code>/etc/apache2/sites-enabled/</code>.
                    Inside of that you will find a configuration file for normal traffic (<code>000-default.conf</code>) as well
                    as for SSL/HTTPS traffic (<code>000-default-le-ssl.conf</code>). Names might differ for your installation.
                    We only need to add one line in the config file for normal traffic:
                </p>
                <div class="lb is-code">
<pre>
<code>
<span class="gr">Redirect</span> <span class="bl">/</span> <span class="com">https://sebastian-schleemilch.de</span>
</code>
</pre>             
                </div>
                <p>
                    You can verify the behavior after restarting Apache:
                    <code>sudo /etc/init.d/apache restart</code>.
                    When requesting your domain via HTTP you should now be forwarded automatically to your HTTPS encrypted site.
                    Our backend is now ready to serve our website and executing PHP code!
                </p>
			</div>
		</div>
	</div>
</div>

<div class="hero">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">Frontend Environment</h1>
            <h2 class="subtitle"> Sublime Text, Grunt, npm, Sass, wamp, Git</h2>
            <div class="content">
                <p>
                    For the actual development of the website I did want a setup that allows me to automate
                    as many steps as possible while being able to test the page behavior also locally 
                    without uploading the site on the backend every time I did a change and want to review it.
                    Since I am using <strong><a href="https://www.sublimetext.com/">Sublime Text</a></strong> 
                    for all kind of programming tasks, this was my Code editor of choice. It offers all kind
                    of plugins that can help you in the development process of your website like Code-Completion
                    for HTML, PHP and JavaScript.<br>
                    Of course, you should also think about a source code version control system.
                    It gives you the freedom of tracking your progress, reverting changes, testing features on branches
                    and of course as backup. 
                    Since I already was quite familiar with <strong><a href="https://git-scm.com/">Git</a></strong> I went for it.
                    As a Git backend server I do have a <strong><a href="https://github.com/">
                    GitHub</a></strong> Account with private repositories.<br><br>
                    But let's get into writing actual code! Before doing that, you should also think about structuring your project
                    in a folder structure. It makes sense to divide different kind of files in different directories. I went for the
                    following structure:
                </p>
                <ul>
                    <li><strong>css/</strong>, generated css files</li>
                    <li><strong>img/</strong>, images (<code>.png</code>) that will be used on different pages</li>
                    <li><strong>js/</strong>, JavaScript sources</li>
                    <li><strong>jsm/</strong>, minified JavaScript files</li>
                    <li><strong>sass/</strong>, SASS stylesheet sources </li>
                    <li><strong>&lt;main-sites&gt;.php</strong>, main sites from website root</li>
                    <li><strong>&lt;sites-with-subsites&gt;/</strong>, pages that do have subsites</li>
                </ul>
                <p>

                </p>
            </div>
        </div>
    </div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
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
		<div class="container is-danger">
			<h1 class="title"><strong>Environment Setup</strong></h1>
			<h2 class="subtitle">How I did setup my backend and development environment</h2>
		</div>
	</div>
</div>
<div class="hero is-dark">
	<div class="hero-body">
		<div class="container is-danger">
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
					at different providers. I chose <a href="https://www.server4you.de/">Server4You</a>
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
					software that handles HTTP requests. I chose <a href="https://httpd.apache.org/">Apache</a> for that
					purpose but of course there are other choices out there like <a href="https://nginx.org/en/">Nginx</a>.
					<br><br>
					<strong>Design Decision</strong>: Backend HW, OS, SW 
				</p>
				<div class="columns has-text-centered">
					<a class="column" href="https://www.server4you.de/virtual-server">
						<img src="/img/icon_is_large_server.png" alt="Icon::Server" width="42" height="42">
						<p class="title is-4"> <strong> vServer </strong> </p>
						<p class="subtitle"> 2vCores, 4GB RAM, 100 GB SSD </p>
					</a>
					<a class="column" href="https://www.ubuntu.com/">
						<img src="/img/icon_is_large_ubuntu.png" alt="Icon::Ubuntu" width="42" height="42">
						<p class="title is-4"> <strong> Ubuntu </strong> </p>
						<p class="subtitle"> Popular Linux OS with large community </p>
					</a>
					<a class="column" href="https://httpd.apache.org/">
						<img src="/img/icon_is_large_apache.png" alt="Icon::Apache" width="43" height="42">
						<p class="title is-4"> <strong> Apache </strong> </p>
						<p class="subtitle"> Very common HTTP Server </p>
					</a>
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
                    <a href="https://letsencrypt.org/">Let's Encrypt</a> which is a free alternative and very easy to setup.
                    It offers scripts for automatically deploying valid certificates for your website using a python script called
                    <a href="https://certbot.eff.org/#ubuntuxenial-apache">CertBot</a>. For ubuntu and Apache, using that script is
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
        <div class="container is-danger">
            <h1 class="title">Frontend Environment</h1>
            <h2 class="subtitle"> Sublime Text, Grunt, npm, Sass, wamp, Git</h2>
            <div class="content">
                <p>
                    For the actual development of the website I did want a setup that allows me to automate
                    as many steps as possible while being able to test the page behavior also locally 
                    without uploading the site on the backend every time I did a change and want to review it.
                    Since I am using <a href="https://www.sublimetext.com/">Sublime Text</a> 
                    for all kind of programming tasks, this was my Code editor of choice. It offers all kind
                    of plugins that can help you in the development process of your website like Code-Completion
                    for HTML, PHP and JavaScript.<br>
                    Of course, you should also think about a source code version control system.
                    It gives you the freedom of tracking your progress, reverting changes, testing features on branches
                    and of course as backup. 
                    Since I already was quite familiar with <a href="https://git-scm.com/">Git</a> I went for it.
                    As a Git backend server I do have a <a href="https://github.com/">
                    GitHub</a> Account with private repositories.<br><br>
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
                    <li><code>index.php</code>, website entry point &lt;root&gt;/</li>
                    <li><strong>&lt;pages_with_subpages&gt;/</strong>, pages that do have subsites (like <code>/profile/education</code>)</li>
                </ul>
                <p>
                    Yout might have noticed that <strong>css/</strong> only contains generated CSS code. Since you can only include a <code>.css</code> file
                    rather than directly <code>.sass</code> there has to be a step in between. So first thing to do is to install Sass in order to be able
                    to "compile" the Sass code into normal CSS to actually use it. Installation is described on the official
                    <a href="http://sass-lang.com/install">Sass</a> site. You do need Ruby and its package manager "gem" to install Sass.
                    The ruby windows installer can be found <a href="https://rubyinstaller.org/">here</a>.
                    After doing so, you can install Sass through it:
                </p>
                <div class="lb is-code">
<pre>
<code>
<span class="gr">gem</span> <span class="bl">install</span> <span class="com">sass</span>
</code>
</pre>             
                </div>
                <p>
                    Afterwards, Sass will be available on your command line by typing <code>sass</code>. To compile a Sass file the command line
                    call does look like this: <code>sass input.sass output.css</code>. Sass does support watching files so that it will compile
                    the input file as soon as it changes (e.g. hitting <code>ctrl-f</code> in your editor):
                    <code>sass --watch sass:css</code>. The command will watch your "sass" folder and will compile any Sass file immediately
                    into the equally named CSS counterpart in the directory "css".<br><br>
                    Although internet bandwith these days might not be that critical anymore (at least for non-mobile devices), you should 
                    still think about reducing size of your files wherever possible. That is why there do exist tools to minify code files
                    automatically by removing any whitespaces or even optimizing the code itself. This can be applied for CSS, JavaScript
                    and even HTML files. I am minifying only CSS and JavaScript files. Therefore, the "css" folder will in the end only
                    contain a single minified CSS file <code>style.min.css</code> and the "jsm" folder only <code>&lt;script-name&gt;.min.js</code> files.
                    <br>
                    That means, that in our HTML or PHP file respectively, we will only include those minified files for example like this:
                </p>
                 <div class="lb is-code">
<pre>
<code>
&lt;<span class="gr">link</span> <span class="bl">rel=</span><span class="com">"stylesheet"</span> <span class="bl">type=</span><span class="com">"text/css"</span> <span class="bl">href=</span><span class="com">"/css/style.min.css"</span>&gt;
</code>
</pre>            
                </div>
                <p>
                    So we do need additional steps after the Sass compiling step to minify our files. Also, there might be even more small
                    tasks we do want to execute automatically every time something is changing. Therefore, it is a good idea to think about
                    kind of a task runner build system. Of course there are a few out there that are specialized for that use case like
                    <a href="https://gruntjs.com/">Grunt</a> and <a href="https://gulpjs.com/">Gulp</a>.
                    They are both based on JavaScript. The installation leads to another point. You will need the JavaScript package manager
                    <a href="https://www.npmjs.com/">npm</a>. It is great for tracking your plugins and has a huge database
                    of JavaScript tools. I ended up using Grunt even though I also used Gulp in the past.<br><br>
                    npm can be installed through their website. Afterwards you will be able to execute the <code>npm</code> on your command line.
                    Now we can finally install our task runner of choice: Grunt
                </p>
                <div class="lb is-code">
<pre>
<code>
<span class="gr">npm</span> <span class="bl">install</span> <span class="or">-g</span> <span class="com">grunt-cli</span>
</code>
</pre>             
                </div>
                <p>
                    The <code>-g</code> flag means a global system install so that you are able to use grunt on your machine
                    project independently as a command line tool calling <code>grunt</code>.
                    There does exist the option since npm can handle your project dependencies locally. You can add project
                    specific dependencies without the global flag which will create a <code>node_modules/</code> directory
                    holding those packages. People that do want to contribute can then clone your sandbox, call
                    <code> npm install </code> in the project directory and will end up having the environment for getting started.<br><br>
                    Anyway, to define what grunt can do, you need to create a <code>Gruntfile.js</code> that specifies your tasks and
                    what they should do. Additionally we need to add grunt to our project dependencies which will create a "node-modules"
                    folder and a <code>package-lock.json</code> and <code>package.json</code> to track our packages and its versions.
                    To add grunt as a local dependency
                    type: <code>npm install --save-dev</code>. No we are ready to create our first task.
                    Grunt offers libraries with predefined tasks that can make your life quite easy. For Sass for example there does
                    exist a package <code>grunt-contrib-sass</code>. Installing this dependency is similar to grunt itself in your project:<br>
                    <code>npm install grunt-contrib sass --save-dev</code>. You can search for those package what they can do in details.
                    In the following code snippet I will show you how those task packages can be used with Sass as the main example:
                </p>
                <div class="lb is-code">
<pre>
<code>
<span class="or">module.</span><span class="bl">exports</span> = <span class=".gr">function</span>(<span class="or">grunt</span>) {
    grunt.<span class="bl">loadNpmTasks</span>(<span class="gr">'grunt-contrib-sass'</span>);
    grunt.<span class="bl">initConfig</span>({ <span class="com">// all task definitions do belong here</span>
        <span class="bl">sass</span>: {
            <span class="bl">all</span>: {
                <span class="bl">files</span>: {
                    <span class="gr">'style.css'</span>:<span class="gr">'style.sass'</span>
                }
            }
        }
    });
    grunt.<span class="bl">registerTask</span>(<span class="gr">'default'</span>,[<span class="gr">'sass'</span>]);
};
</code>
</pre>             
                </div>
                <p>
                    The code snippet will convert the <code>style.sass</code> in the same path as the <code>Gruntfile.js</code>
                    into <code>style.css</code> by just typing <code>grunt</code> since we assigned the "sass" task to be the
                    default one. By just specifying "sass", the task will execute all subtasks. In this case we only have one
                    ("all"). You could specify subtasks by changing the "sass" in "registerTask" to "sass:all".<br>
                    As you can see, you can assign an array of tasks to a main task. That is useful for connecting more than
                    just Sass. This way, I did setup a few more tasks that should run automatically:
                </p>
                <ul>
                    <li><code>grunt-contrib-jshint</code> to verify JavaScript files before runtime</li>
                    <li><code>grunt-contrib-watch</code> watch files and restart assigned tasks </li>
                    <li><code>grunt-contrib-uglify</code> minify JavaScript into minified JavaScript files </li>
                    <li><code>grunt-contrib-cssmin</code> minify CSS files </li>
                    <li><code>grunt-contrib-copy</code> copy files to another location </li>
                </ul>
                <p>
                    It makes sense to put the source code of the site itself and its folder structure shown above
                    into a project subfolder <code>src</code>. Then, you can write a task with the help of <code>copy</code>
                    to create a distribution directory (e.g. <code>dist</code>) that only contains the files that should finally
                    be uploaded to your server. There you can leave anything out that is not needed, like non-minified source files.
                    Here is my current complete Grunt task scheme: 
                    <a href="/data/Gruntfile.js" target="_blank">Gruntfile.js</a>
                    <br><br>
                    The next major step would be to test your site. It is definetely advised to setup a local server environemt to
                    imitate your backend. For windows you have the possibility of installing <a href="http://www.wampserver.com/en/">WAMP</a>.
                    It is the counterpart to my Linux server and runs locally. It has its "root" at <code>C:\wamp64\www</code>.
                    After installation, you should be able to request a testpage in your browser at <code>127.0.0.1</code> or <code>localhost</code>.
                    All that is left to do is to deploy your "dist" directory to this one. In the course of this, you can also think about the
                    deploy mechanism to your actual backend.<br>
                    I did write to small batch scripts to do that, <code>deploy_local.cmd</code> and <code>deploy.cmd</code>:
                </p>
                <div class="lb is-code">
<pre>
<code>
<span class="com"> // deploy_local.cmd </span>
<span class="gr">Robocopy.exe</span> <span class="bl">dist\html</span> <span class="or">C:\wamp64\www\</span> /MIR
<span class="com"> // end of deploy_local.cmd </span>

<span class="com"> // deploy.cmd </span>
<span class="bl">ssh</span> <span class="or">root</span><span class="gr">@</span><span class="com">sebastian-schleemilch.de</span> 'rm -rf /var/www/html/*'
<span class="bl">scp</span> -rp <span class="or">dist/html</span> <span class="gr">root@</span><span class="com">sebastian-schleemilch.de</span>:/var/www
<span class="com"> // end of deploy.cmd </span>
</code>
</pre>             
                </div>
                <p>
                    Robocopy is very useful for copying file trees with the <code>/MIR</code> option that detects newer version of files and
                    also deletes files that are no longer in the source but in the target directory.
                    At the backend, the script first cleans out the old content before copying the <code>dist/html</code> directory to it.
                    I am sure one could also integrate those deploy tasks into grunt! So far for the environment. The skeleton for the actual
                    content is there. In the next chapter we will look at a very basic functionality of a site that is still more complicated
                    that one would think: <a href="/projects/website/navigation.php">Navigation</a>.<br><br>

                    <strong>Design Decision:</strong> Development tool collection: 
                </p>
                <div class="columns has-text-centered">
                    <a class="column" href="https://www.sublimetext.com/">
                        <img src="/img/icon_is_large_sublime.png" alt="Icon::SublimeText" width="42" height="42">
                        <p class="title is-4"> <strong> Sublime Text </strong> </p>
                        <p class="subtitle"> Flexible fast editor </p>
                    </a>
                    <a class="column" href="https://gruntjs.com/">
                        <img src="/img/icon_is_large_grunt.png" alt="Icon::Grunt" width="42" height="42">
                        <p class="title is-4"> <strong> Grunt </strong> </p>
                        <p class="subtitle"> A JavaScript based Task-Runner </p>
                    <a class="column" href="https://www.npmjs.com/">
                        <img src="/img/icon_is_large_npm.png" alt="Icon::npm" width="42" height="42">
                        <p class="title is-4"> <strong> npm </strong> </p>
                        <p class="subtitle"> JavaScript package manager </p>
                    </a>
                </div>
                <div class="columns has-text-centered">
                    <a class="column" href="http://sass-lang.com/">
                        <img src="/img/icon_is_large_sass.png" alt="Icon::Sass" width="56" height="42">
                        <p class="title is-4"> <strong> Sass </strong> </p>
                        <p class="subtitle"> Powerful CSS preprocessor </p>
                    </a>
                    <a class="column" href="http://www.wampserver.com/en/">
                        <img src="/img/icon_is_large_wamp.png" alt="Icon::WAMP" width="42" height="42">
                        <p class="title is-4"> <strong> Wamp </strong> </p>
                        <p class="subtitle"> A local LAMP test environment </p>
                    </a>
                    <a class="column" href="https://git-scm.com/">
                        <img src="/img/icon_is_large_git.png" alt="Icon::Git" width="43" height="42">
                        <p class="title is-4"> <strong> Git </strong> </p>
                        <p class="subtitle"> Version control at its finest </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
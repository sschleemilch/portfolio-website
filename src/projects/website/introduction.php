<?php
	$projects = "is-active";
	$projects_website = "is-active";
	$projects_website_introduction = "is-active";
	$root = $_SERVER['DOCUMENT_ROOT'];
	$path = $root . "/templates/_header.php";
	include_once($path);
	$path = $root . "/projects/_projects.php";
	include_once($path);
    $path = $root . "/projects/website/_website.php";
    include_once($path);
?>

<div class="section">
	<div class="container is-danger">
		<div class="content has-text-centered">
            <a class="button is-danger is-outlined" href="https://github.com/sschleemilch/portfolio-website">
                        <span class="icon">
                            <i class="fa fa-github"></i>
                        </span>
                        <span>
                            View sources on GitHub
                        </span>
            </a>
        </div>
        <h1 class="title"><strong>About</strong></h1>
		<h2 class="subtitle">What this project is about</h2>
		<div class="content">
			<p>
				Obviously, this project is and was about the site you are currently reading.<br>
				For quite some time, I am playing around with web technologies here and there. Lately, even at work, to 
				setup a little overview page including some JavaScript. Still I never managed it to get something online from start
				to end. Therefore I made up my mind to program and design an own page from scratch. The content should be a short
				<a href="/profile/education.php">portfolio</a> of myself and a few sections about projects like this one to provide other people things I learned on the road.
				That said, the webiste project's goal was more or less the path itself rather than the finished product.<br><br>
				In the next sections, you will find information about my development setup, the technologies I decided to use and why I did chose them for me.
				Also, you will find some insights about the folder structuring of this site including a little bit of backend programming. Have fun!
				I suggest reading the very next section <a href="/projects/website/technologies.php">technologies</a> but of course you can jump in anywhere you want.
			</p>
		</div>
	</div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
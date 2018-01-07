<?php
	$projects = "is-active";
	$projects_overview = "is-active";
	$root = $_SERVER['DOCUMENT_ROOT'];
	$path = $root . "/templates/_header.php";
	include_once($path);
	$path = $root . "/projects/_projects.php";
	include_once($path);
?>

<div class="section">
	<div class="container is-danger">
		<h1 class="title"><strong>Projects Overview</strong></h1>
        <h1 class="subtitle">Which projects currently are released</h1>
        <div class="content has-text-centered">
            <div class="lb is-projects">
                <div class="columns">
                    <a class="column" href="/projects/website/introduction.php">
                        <span class="icon is-large" style="color:#333"><i class="fa fa-globe"></i></span>
                        <p class="title is-4"> <strong> Website </strong> </p>
                        <p class="subtitle">The website itself</p>
                    </a>
                    <a class="column" href="/projects/gitbash/introduction.php">
                        <img src="/img/git_128x128.png" alt="Git" width="42" height="42">
                        <p class="title is-4"> <strong> Git Bash </strong> </p>
                        <p class="subtitle">A custom Git Bash Prompt</p>
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
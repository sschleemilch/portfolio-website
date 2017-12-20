<?php
	$projects = "is-active";
	$projects_gitbash = "is-active";
	$projects_gitbash_introduction = "is-active";
	$root = $_SERVER['DOCUMENT_ROOT'];
	$path = $root . "/templates/_header.php";
	include_once($path);
	$path = $root . "/projects/_projects.php";
	include_once($path);
    $path = $root . "/projects/gitbash/_gitbash.php";
    include_once($path);
?>

<div class="section">
	<div class="container is-fullhd is-danger">
		<h1 class="title"><strong>About</strong></h1>
		<h2 class="subtitle">What this project is about</h2>
		<div class="content">
			<p>
				This little project is about developing an own customizable Git Bash Powerline application (Or to be fair just an eye candy extension but not only as we will see). As most of you might know, Git is a powerful and well known source code
                management tool to version software sources also for large scaling teams. If you do not know already about Git itself, I would suggest reading either the official
                <a href="https://git-scm.com/">documentation</a> or one of the many tutorials out there. By default, if you install Git from <a href="https://git-scm.com/downloads">
                here</a> it will look similar to this:
			</p>
            <div class="has-text-centered">
                <img src="/img/git_bash_vanilla.png" alt="Git:Bash:Vanilla" width="500" height="339">
            </div>
            <hr>
            <p>
                The out of the box experience using the Git Bash command line is very good. It uses
                <a href="https://mintty.github.io/">Mintty</a> which is again based on 
                <a href="http://cygwin.com/">Cygwin</a>. Therefore, inside the Git Bash you will have
                basic command line features out of the Linux world bundled with a Git specific prompt
                that will show you basic Git information (like the current branch).<br><br>
                This Git Bash prompt is very customizable in color and in terms of which information will be shown there. Still it was not quite enough for me. I was aiming for full control what and how Git information will be shown there. Although there are a lot of GUI clients out there, most of the time I switch back to the maybe "old-school" way on the command-line. Of course, GUIs have also their upsides, especially when you need to keep track of a lot of branches in your project and need to filter, highlight certain branches or if you want to investigate the past log. Good GUIs I can recommend are: 
            </p>
            <ul>
                <li><a href="http://www.syntevo.com/smartgit/">SmartGit</a></li>
                <li><a href="https://www.gitkraken.com/">GitKraken</a></li>
                <li><a href="https://git-scm.com/docs/gitk">GitK</a> (is shipped with the
                Git installation itself)</li>
                <li><a href="https://www.sourcetreeapp.com/">SourceTree</a></li>
            </ul>
            <p>
                The list is far away from being complete. If you do prefer using a GUI, you could stop
                reading here. However, if you are interested in building your own Git Bash Prompt extension or just want to use mine, please keep reading. To give the reader a little preview, the result will look like this (for modified files on the "master" branch):
            </p>
            <div class="has-text-centered">
                <img src="/img/git_bash_preview.png" alt="Git:Bash:Preview" width="500" height="202">
            </div>
            <p>
                This preview only shows a small part of the features that are currently implemented.
                In the following sections you can read about how I got there.
            </p>
		</div>
	</div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
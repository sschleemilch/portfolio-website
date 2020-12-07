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
	<div class="container is-danger">
        <article class="notification is-danger">
            Note that this project is deprecated and there exists a follow up project rewritten in C++.<br>
            The reason for rewriting are performance reasons. Since I am working professionally with quite large repositories, I did switch
            to a more efficient implementation using the <a href="https://libgit2.org/">libgit2</a> that results in a way faster information gathering
            that is also faster that a high level <code>git status</code> call.<br>
            You can find the source code of course as well in github <a href="https://github.com/sschleemilch/cpp-gitbash-powerline">here</a>.
        </article>
        <div class="content has-text-centered">
            <a class="button is-danger is-outlined" href="https://github.com/sschleemilch/gitbash-powerline">
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
                <img src="/img/git_bash_preview.PNG" alt="Git:Bash:Preview" width="500" height="202">
            </div>
            <p>
                This preview only shows a small part of the features that are currently implemented.
            </p>
		</div>
	</div>
</div>
<div class="hero is-dark">
    <div class="hero-body">
        <div class="container is-danger">
            <h1 class="title">Manipulating the Git Bash Prompt</h1>
            <h2 class="subtitle">.bashrc, .minttyrc, C#</h2>
            <div class="content">
                To be able to create your own Git Bash Prompt line, one needs to know how to manipulate the prompt string that is displayed after each
                command put into the Git Bash. The key for that is the <code>.bashrc</code> file. This file will be loaded on a Git Bash spawn, meaning
                while opening a new Git Bash instance. It might not exist on a fresh installation though. The <code>bash.exe</code> has a built in
                <code>bashrc</code> that defines the default behavior you will have out of the box and can be found in your installation path
                (e.g. <code>C:\Program Files\Git\etc\bash.bashrc</code>). The bash will also look in your home directory for an user defined
                file <code>.bashrc</code>.<br><br>
                Normally, the home directory will be something like <code>C:\Users\USER</code>. You can verify this by
                typing <code>echo $HOME</code> in a Git Bash session. If this directory does not yet contain a <code>.bashrc</code>, create it.
                There, you can manipulate the variable <code>PS1</code> to change the prompt string to any string you want.
                See <a href="https://wiki.ubuntuusers.de/Bash/Prompt/">here</a> for a good reference how you can style the prompt in general 
                using escape sequences. Additionally, the built in Git information are stored in the variable <code>__git_ps1</code>. 
                So to just style the built in information, you can use this variable and escape sequences to adapt the colors to your needs.
                <br><br>
                Like explained in the first section, we do want to extract those information by ourself.
                So we need to inject a program call to manipulate <code>PS1</code> after each prompt command.
                We can do this by adding the following lines to the <code>.bashrc</code>:
            </div>
            <div class="lb is-code">
<pre>
<code>
<span class="or">function</span> <span class="bl">_update_ps1()</span> <span class="com">{</span>
    PS1=<span class="gr">"$(program.exe)"</span>
<span class="com">}</span>

<span class="or">if</span> [ <span class="gr">"$TERM"</span> != <span class="gr">"linux"</span> ]; <span class="or">then</span>
    PROMPT_COMMAND=<span class="gr">"_update_ps1; $PROMPT_COMMAND"</span>
<span class="or">fi</span>
</code>
</pre>
            </div>
            <div class="content">
                This way, after every command that was executed out of the Git Bash, the program
                <code>program.exe</code> will be called and its return string will be stored in <code>PS1</code> and therefore displayed. The program being called could of course be also other programs or scripts (e.g. a Python script). Keep in mind that it is a good idea to specify
                the absolute path to the program here and not a relative one like I did in the example since your current working directory can of course change. Additionally, it could make sense to display whether the last command succeeded or not. If you wish to display that information, you need to forward the return code of the last command to your script/program. It can be accessed with <code>$?</code>. Also you might not be
                interested in displaying error channel information out of your program, so that
                adding a pipe to null makes sense by adding <code>2> /dev/null</code> in the end.
                <br><br>
                Regarding the style of your Git Bash window you also have the possibility to adapt
                the color scheme for it. You can do that in the Git Bash configuration GUI itself or adapt the configuration file for it, the <code>.minttyrc</code>. If you wish to use
                special symbols, it might be a good choice to install additional fonts that are able
                to display those kind of symbols (e.g "DejaVu Sans Mono for Powerline"). 
                <br><br>
                The actual implementation language is totally up to you, I decided to use
                <a href="https://docs.microsoft.com/de-de/dotnet/csharp/">C#</a> since I only plan to
                use this extension on Windows and it might be faster than a scripting language like Python.
                <br><br>
                In the following <a href="/projects/gitbash/implementation.php">section</a>, I will go through parts of my implementation to show how
                to extract Git information effectively. 
            </div>
        </div>
    </div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
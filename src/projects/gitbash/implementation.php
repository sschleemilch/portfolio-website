<?php
	$projects = "is-active";
	$projects_gitbash = "is-active";
	$projects_gitbash_implementation = "is-active";
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
		<h1 class="title"><strong>Program Structure</strong></h1>
		<div class="content">
            I decided to use an object orientated way of programming the behavior.
            While developing the following files including one class each came out of it:
            <ul>
                <li>
                    <a href="https://github.com/sschleemilch/gitbash-powerline/blob/master/gitbash-powerline/Program.cs"><code>Program.cs</code></a> defines the actual behavior of which sections
                    to print on which prompt position.
                </li>
                <li>
                    <a href="https://github.com/sschleemilch/gitbash-powerline/blob/master/gitbash-powerline/BashColor.cs"><code>BashColors.cs</code></a> abstracts the printing of colors by
                    providing function interfaces to print colored strings with defined enums for
                    each color.
                </li>
                <li>
                    <a href="https://github.com/sschleemilch/gitbash-powerline/blob/master/gitbash-powerline/UnicodeSymbols.cs"><code>UnicodeSymbols.cs</code></a> abstracts the symbols to be printed by assigning 
                    unicode characters to enums
                </li>
                <li>
                    <a href="https://github.com/sschleemilch/gitbash-powerline/blob/master/gitbash-powerline/GitRepo.cs"><code>GitRepo.cs</code></a> capsules the model of the current Git repository
                    the user might have navigated into. As a constructor, it needs the current
                    working directory to extract the information from
                </li>
            </ul>
            <code>Program.cs</code> is meant to be quite simple and understandable.
            I won't get into greater detail about the actual code here but rather pointing out some of the Git plumbing commands which I used to extract the relevant information.
            The only behavior that is implemented until now that does not have to do anything with Git
            is displaying the current working directory and replacing the home directory string with a
            <code>~</code> string. Also it will cut the string once it gets too long to still provide 
            a compact prompt line.
        </div>
	</div>
</div>

<div class="hero is-dark">
    <div class="hero-body">
        <div class="container">
            <h1 class="title"><strong>Relevant Git repository states</strong></h1>
            <div class="content">
                So what are the relevant information we are interested in as a developer? This list was extended a few times since once you are familiar with Git, as a developer or Git repository maintainer you really
                appreciate every bit of information you don't have to get by typing the git commands yourself. Currently, the following information will be evaluated:
                <ul>
                    <li>Branch name/Commit ID</li>
                    <li>Whether the current branch has an upstream counterpart and if yes, how many commits the
                    upstream counterpart is ahead/behind</li>
                    <li>Whether you have modified <strong>tracked</strong> files or not</li>
                    <li>Whether you have staged files or not</li>
                    <li>Whether you are currently in a merge state or not</li>
                    <li>Whether you have <strong>untracked</strong> files which are not in any <code>.gitignore</code> or not</li>
                    <li>Whether you have <strong>untracked</strong> files which are in a <code>.gitignore</code> or not</li>
                </ul>
                Those information should also be displayed correctly for submodules.
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container is-danger">
        <h1 class="title"><strong>Git Commands</strong></h1>
        <div class="content">
            I will now go through the mentioned relevant Git repository states and how to extract the desired information.
        </div>

        <h1 class="title is-4"><strong>Git repository?</strong></h1>
        <div class="content">
            One of the first thing that we need to assure before trying to extract Git repository information is whether the
            current directory is a Git repository or not. Also for future commands it is useful to know where the current
            repository root is.
            This can be done with the following command:

            <div class="lb is-code">
<pre>
<code>
<span class="bl">git.exe</span> <span class="gr">rev-parse --show-toplevel</span>
</code>
</pre>
            </div>

            The command will return a non-zero exit code in case of the current working directory not being a Git repository.
            Otherwise it returns the absolute path to the Git repository root.
        </div>
        <hr>
        <h1 class="title is-4"><strong>Branch name/Commit ID</strong></h1>
        <div class="content">
            One could say that this information is one of the most important ones when working with several branches
            and submodules to prevent commiting unintentionally on wrong branches or detached HEAD states.
            Depending on the state you are currently on, this information could be a real branch name or a commit ID in cases of
            specific checkouts or when navigating into submodule directories.
            <br>
            The easiest way of getting this information I have found so far is:
            <div class="lb is-code">
<pre>
<code>
<span class="bl">git.exe</span> <span class="gr">symbolic-ref</span> <span class="or">HEAD</span>
</code>
</pre>
            </div>
            This call will return a non-zero value in case of being not on a branch's HEAD. Otherwise it will return the branch
            name with a a prefix <code>refs/heads/</code> that can be replaced with an empty string to leave the raw branch name.
            In case of a non-zero return value we need to invoke another Git command to get the commit ID
            (if we do want to display that information).
            The following command will print the current commit ID where HEAD is pointing to:

            <div class="lb is-code">
<pre>
<code>
<span class="bl">git.exe</span> <span class="gr">rev-parse</span> <span class="or">HEAD</span>
</code>
</pre>
            </div>
        </div>
        <hr>
        <h1 class="title is-4"><strong>Branch upstream information</strong></h1>
        <div class="content">
            Unless you are creating branches on the fly locally, you will have an upstream branch. And if not, it might be a valuable information to display with the following command that will return zero in case of a present upstream counterpart and a non-zero value otherwise:
            <div class="lb is-code">
<pre>
<code>
<span class="bl">git.exe</span> <span class="gr">rev-parse --abbrev-ref --symbolic-full-name</span> <span class="or">@{u}</span>
</code>
</pre>
            </div>
            In case of the branch having an upstream branch, we can then examine how many commits the local branch is ahead/behind. The following command will print two values. The first one will be the number of commits the local branch is
            ahead and the second number the number of commits the local branch is behind. Therefore, we need a postprocessing step
            to parse this output string and extract those numbers. A simple regular expression like
            "<code>(\d+)\s*(\d+)</code>" is enough.
             <div class="lb is-code">
<pre>
<code>
<span class="bl">git.exe</span> <span class="gr">rev-list --left-right --count</span> <span class="or">BRANCH...origin/BRANCH</span>
</code>
</pre>
            </div>
        </div>
        <hr>
        <h1 class="title is-4"><strong>Modified/Staged files</strong></h1>
        <div class="content">
            Also a very basic and useful information is whether you have modified any file that is already tracked. 
            The following command <strong>without</strong> <code>--quiet</code> would list all files that have been
            modified. Since I decided to be only interested if there are any modified files at all, I am using the 
            quiet option that won't display anything but will return zero in case of no modified files.
            <div class="lb is-code">
<pre>
<code>
<span class="bl">git.exe</span> <span class="gr">diff-files --quiet</span>
</code>
</pre>
            </div>
            If you are interested in files that have been staged already, the command is slightly different but again
            provides the quiet option not to print them:
             <div class="lb is-code">
<pre>
<code>
<span class="bl">git.exe</span> <span class="gr">diff-files --quiet --cached</span> <span class="or">HEAD --</span>
</code>
</pre>
            </div>
            Files should also be of interest if they are not in one of your ignore list and therefore might be considered 
            to be added:
            <div class="lb is-code">
<pre>
<code>
<span class="bl">git.exe</span> <span class="gr">ls-files --exclude-standard --others</span>
</code>
</pre>
            </div>
            The command does not provide the quiet option and therefore we need to analyze the output of the command.
            If the output is an empty string, there are none.
            Last but not least, it might be of interest if there are files present that are in your ignore list, such 
            as build artifacts or IDE configuration files you do not want to track. That might be useful if you want to do a clean build and therefore this information would be visible directly in the prompt:
            <div class="lb is-code">
<pre>
<code>
<span class="bl">git.exe</span> <span class="gr">ls-files --exclude-standard --others --ignored</span>
</code>
</pre>
            </div>
        </div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
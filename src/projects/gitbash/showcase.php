<?php
	$projects = "is-active";
	$projects_gitbash = "is-active";
	$projects_gitbash_showcase = "is-active";
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
        <h1 class="title"><strong>Showcase</strong></h1>
        <h2 class="subtitle">How information representation looks like</h2>
        <div class="content">
            <table class="table">
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Example Picture</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Everything clean</th>
                        <th><img src="/img/gitbash_all_clean.png" alt="Gitbash:All Clean"></th>
                    </tr>
                    <tr>
                        <th>Behind + Ahead</th>
                        <th><img src="/img/gitbash_behind_and_ahead.png" alt="Gitbash:Behind and Ahead"></th>
                    </tr>
                    <tr>
                        <th>Detached Head</th>
                        <th><img src="/img/gitbash_detached_head.png" alt="Gitbash:Detached Head"></th>
                    </tr>
                    <tr>
                        <th>Ignored Files present</th>
                        <th><img src="/img/gitbash_ignored_files.png" alt="Gitbash:Ignored Files Present"></th>
                    </tr>
                    <tr>
                        <th>In Merge State</th>
                        <th><img src="/img/gitbash_in_merge.png" alt="Gitbash:In Merge State"></th>
                    </tr>
                    <tr>
                        <th>No Upstream Branch</th>
                        <th><img src="/img/gitbash_no_upstream.png" alt="Gitbash:No Upstream Branch"></th>
                    </tr>
                    <tr>
                        <th>Staged files</th>
                        <th><img src="/img/gitbash_staged_files.png" alt="Gitbash:Staged Files Present"></th>
                    </tr>
                    <tr>
                        <th>Untracked files</th>
                        <th><img src="/img/gitbash_untracked_files.png" alt="Gitbash:Untracked Files Present"></th>
                    </tr>
                    <tr>
                        <th>Untracked and Staged</th>
                        <th><img src="/img/gitbash_untracked_and_staged.png" alt="Gitbash:Untracked and Unstaged Files Present"></th>
                    </tr>
                    <tr>
                        <th>Detached Head and Files Staged</th>
                        <th><img src="/img/gitbash_detached_head_staged.png" alt="Gitbash:Detached Head and Files Staged"></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
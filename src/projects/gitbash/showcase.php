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
        <div class="content">
            <h1 class="title">Showcase</h1>
            <h2 class="subtitle">How information representation looks like</h2>
        </div>
    </div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
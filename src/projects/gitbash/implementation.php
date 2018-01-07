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
		<h1 class="title"><strong>Implementation</strong></h1>
		<h2 class="subtitle">Program Structure</h2>
		<div class="content">
        </div>
	</div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
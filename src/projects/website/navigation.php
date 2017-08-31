<?php
	$projects = "is-active";
	$projects_website = "is-active";
	$projects_website_navigation = "is-active";
	$root = $_SERVER['DOCUMENT_ROOT'];
	$path = $root . "/templates/_header.php";
	include_once($path);
	$path = $root . "/projects/_projects.php";
	include_once($path);
?>

<div class="section">
	<div class="container is-fullhd">
		<h1 class="title"><strong>Navigation</strong></h1>
		<h2 class="subtitle">No duplicated code, No JavaScript</h2>
		<div class="content">
		
		</div>
	</div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
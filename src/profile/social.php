<?php
	$profile = "is-active";
	$profile_social = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path);
	include_once("_profile.php");
?>

<section class="section">
	<div class="container has-text-centered">
		<span class="icon is-huge"><i class="fa fa-cogs"></i></span>
		<h1 class="title">Under Construction</h1>
	</div>
</section>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
<?php
	$profile = "is-active";
	$profile_work = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path);
	include_once("_profile.php");
?>

<section class="section">
	<div class="container">
		<h1 class="title"><strong>Work</strong> experience</h1>
		<hr>
		<div class="content">
			<p> My education: </p>
		</div>
	</div>
</section>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
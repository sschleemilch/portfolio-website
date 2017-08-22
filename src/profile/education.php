<?php
	$profile = "is-active";
	$profile_education = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path);
	include_once("_profile.php");
?>

<section class="section">
	<div class="container">
		<h1 class="title"><strong>School</strong> education</h1>
		<h2 class="subtitle">Yes, I also had to</h2>
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
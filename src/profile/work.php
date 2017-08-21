<?php
	$profile = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/_header.php";
	include_once($path)
?>

<?php
	$profile_work = "is-active";
	include "_profile.php";
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
	$profile = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/_footer.php";
	include_once($path)
?>
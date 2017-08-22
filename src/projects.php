<?php
	$projects = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path)
?>
<section class="section">
	<div class="container">
	<div class="notification is-warning">
	  <button class="delete"></button>
	  <strong>Warning</strong>: This site is still under construction. Come back later
	</div>
	</div>
</section>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>

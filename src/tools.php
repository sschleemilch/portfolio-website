<?php
	$tools = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path)
?>

<section class="hero is-warning is-medium">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title"><span class="icon is-huge"><i class="fa fa-wrench"></i></span></h1>
            <h1 class="title"><strong>Tools</strong></h1>
        </div>
    </div>
</section>

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

<?php
	$home = "is-active";
	include '_header.php';
?>

<section class="hero is-large is-light">
		<div class="hero-body">
			<div class="container">
			<div class="content has-text-centered">
				<h1 class="title">Welcome <strong><?php echo $_SERVER['REMOTE_ADDR'] ?>!</strong></h1>
				
				<img src="img/logo_schleemilch_big_milk.png" alt="Schleemilch:Sebastian" width="890" height="332">
				</div>
			</div>
		</div>
		</section>
		<section class="hero is-small is-warning">
		<div class="hero-body">
		<div class="container">
			<h1 class="title">Section::Hero Small Title</h1>
			<h2 class="subtitle"> Subtitle </h2>
		</div>
		</div>
		</section>
		<section class="section">
			<div class="container">
				<h1 class="title">Section Title</h1>
				<h2 class="subtitle">Section Subtitle</h2>
				<p> Section text </p>
				<a class="button is-primary">
	  				Button
				</a>
				<a class="button is-info">
				  Button
				</a>
				<a class="button is-success">
				  Button
				</a>
				<a class="button is-warning">
				  Button
				</a>
				<a class="button is-danger" disabled>
				  Button
				</a>
			</div>
</section>

<?php
	include '_footer.php';
?>

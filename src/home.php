<?php
	$home = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path)
?>

<section class="hero is-primary">
		<div class="hero-body">
			<div class="container">
				<h1 class="title">Welcome <strong><?php echo $_SERVER['REMOTE_ADDR'] ?></strong></h1>
				<h2 class="subtitle">I know, your name would be more suitable. Still I hope that you will stay for some time <i class="fa fa-smile-o"></i></h2>
				<br>
				<div class="has-text-centered">
				<img src="/img/logo_schleemilch_big_milk.png" alt="Schleemilch:Sebastian" width="890" height="332">
				</div>
			</div>
		</div>
		</section>
		<section class="hero is-dark">
			<div class="hero-body">
				<div class="container has-text-centered">
					<h1 class="title"><span class="icon is-large"><i class="fa fa-question-circle-o"></i></span>
						<br><strong>What </strong> this page is <strong> about</strong>
					</h1>
					<br>
					<div class="columns">
						<a class="column" href="/profile/education.php">
							<span class="icon is-large has-text-success"><i class="fa fa-user"></i></span>
							<p class="title is-4"> <strong> Portfolio </strong> </p>
							<p class="subtitle"> My past and present </p>
						</a>
						<a class="column" href="/projects/overview.php">
							<span class="icon is-large has-text-danger"><i class="fa fa-rocket"></i></span>
							<p class="title is-4"> <strong> Projects </strong> </p>
							<p class="subtitle">Current private projects</p>
						</a>
					</div>
				</div>
			</div>
		</section>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>

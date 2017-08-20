<?php
	$home = "is-active";
	include '_header.php';
?>

<section class="hero is-primary">
		<div class="hero-body">
			<div class="container">
				<h1 class="title is-1">Welcome <strong><?php echo $_SERVER['REMOTE_ADDR'] ?></strong></h1>
				<h2 class="subtitle">I know, your name would be more suitable. Still I hope that you will stay for some time <i class="fa fa-smile-o"></i></h2>
				<br>
				<div class="has-text-centered">
				<img src="img/logo_schleemilch_big_milk.png" alt="Schleemilch:Sebastian" width="890" height="332">
				</div>
			</div>
		</div>
		</section>
		<section class="hero is-dark">
			<div class="hero-body">
				<div class="container has-text-centered">
					<h1 class="title"><strong>What </strong> is this page <strong> about</strong>?</h1>
					<br>
					<div class="columns">
						<a class="column" href="profile.php">
							<span class="icon is-large" style="color: #3c8fff"><i class="fa fa-user-circle-o"></i></span>
							<p class="title is-4"> <strong> Portfolio </strong> </p>
							<p class="subtitle"> My past and present </p>
						</a>
						<a class="column" href="projects.php">
							<span class="icon is-large" style="color: #ff5050"><i class="fa fa-rocket"></i></span>
							<p class="title is-4"> <strong> Projects </strong> </p>
							<p class="subtitle">Current private projects</p>
						</a>
						<a class="column" href="tools.php">
							<span class="icon is-large" style="color: #9e9e9e"><i class="fa fa-wrench"></i></span>
							<p class="title is-4"> <strong> Tools </strong> </p>
							<p class="subtitle">Project results</p>
						</a>
					</div>
				</div>
			</div>
		</section>

<?php
	include '_footer.php';
?>

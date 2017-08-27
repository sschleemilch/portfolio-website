<?php
	$profile = "is-active";
	$profile_hobbies = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path);
	include_once("_profile.php");
?>

<section class="hero">
	<div class="hero-body">
		<div class="container has-text-centered">
			<h1 class="title"><span class="icon is-large"><i class="fa fa-users"></i></span><strong> Hobbies</strong></h1>
			<div class="box">
				<div class="columns">
					<div class="column is-one-third">
						<span class="icon is-large" style="color: #FF3860"><i class="fa fa-heartbeat"></i></span>
						<p class="title is-4"> <strong> Sport </strong> </p>
						<p class="subtitle"> Tennis, Fitness, Climbing </p>
					</div>
					<div class="column is-one-third">
						<span class="icon is-large" style="color: #23D160"><i class="fa fa-music"></i></span>
						<p class="title is-4"> <strong> Music </strong> </p>
						<p class="subtitle"> E-Guitar, Western-Guitar </p>
					</div>
					<div class="column is-one-third">
						<span class="icon is-large" style="color: #FF470F"><i class="fa fa-code"></i></span>
						<p class="title is-4"> <strong> Programming </strong> </p>
						<p class="subtitle"> Web, Microcontroller, Raspberry PI, AI </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
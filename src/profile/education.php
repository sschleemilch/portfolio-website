<?php
	$profile = "is-active";
	$profile_education = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path);
	include_once("_profile.php");
?>
<section class="hero">
	<div class="hero-body">
		<div class="container">
			<h1 class="title"><span class="icon is-large"><i class="fa fa-university"></i></span><strong> University</strong> education</h1>
			<div class="box">
				<div class="columns">
					<div class="column is-one-third">
						<h1 class="title is-4">2013-2016:</h1>
					</div>
					<div class="column is-one-third has-text-left">
						<h1 class="title is-3">Master</h1>
						<h2 class="subtitle is-5">Automotive Software Engineering</h2>
					</div>
					<div class="column is-one-third has-text-right">
						<a href="https://www.tum.de/"><img src="/img/logo_tum.png" alt="Logo:TUM-University" width="150" height="79"></a>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="columns">
					<div class="column is-one-third">
						<h1 class="title is-4">2010-2013:</h1>
					</div>
					<div class="column is-one-third has-text-left">
						<h1 class="title is-3">Bachelor</h1>
						<h2 class="subtitle is-5">Engineer in Mechatronics</h2>
					</div>
					<div class="column is-one-third has-text-right">
						<a href="https://www.fau.de/"><img src="/img/logo_fau_blue.png" alt="Logo:FAU-University" width="150" height="64"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr class="is-marginless">
<section class="hero">
	<div class="hero-body">
		<div class="container">
			<h1 class="title"><span class="icon is-large"><i class="fa fa-graduation-cap"></i></span><strong> School</strong> education</h1>
			<div class="box">
				<div class="columns">
					<div class="column is-one-third">
						<h1 class="title is-4">2000-2009:</h1>
					</div>
					<div class="column is-one-third">
						<h1 class="title is-3">Abitur</h1>
						<h2 class="subtitle is-5">Qualification for university entrance</h2>
					</div>
					<div class="column is-one-third has-text-right">
						<a href="http://www.sigmund-schuckert-gymnasium.de/wordpress/"><img src="/img/logo_ssg.png" alt="Logo:SSG-Gymnasium" width="110" height="80"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr class="is-marginless">

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
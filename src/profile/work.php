<?php
	$profile = "is-active";
	$profile_work = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path);
	include_once("_profile.php");
?>

<section class="hero">
	<div class="hero-body">
		<div class="container">
			<h1 class="title"><span class="icon is-large"><i class="fa fa-briefcase"></i></span><strong> Work</strong> experience</h1>
			<div class="box">
				<div class="columns">
					<div class="column is-one-third">
						<h1 class="title is-4">2016-present:</h1>
					</div>
					<div class="column is-one-third has-text-left">
						<h1 class="title is-3">Bosch GmbH</h1>
						<h2 class="subtitle is-5">Software Engineer: Software Integration</h2>
					</div>
					<div class="column is-one-third has-text-right">
						<a href="https://www.bosch.com/de/"><img src="/img/logo_bosch.png" alt="Logo:Bosch_GmbH" width="200" height="45"></a>
					</div>
				</div>
				<div class="columns">
					<div class="column is-8 is-offset-2">
						<div class="label-box is-yellow">
							<div class="content">
								<h1 class="title">TestContent</h1>
							</div>
						</div>
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
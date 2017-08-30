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
			<div class="lb is-blue is-step">
				<div class="columns">
					<div class="column is-2">
						<h1 class="title is-4">06/2016-present:</h1>
					</div>
					<div class="column is-7 has-text-left">
						<h1 class="title is-3">Bosch GmbH</h1>
						<h2 class="subtitle is-5">Software Engineer: Software Integration</h2>
					</div>
					<div class="column is-3 has-text-right">
						<a href="https://www.bosch.com/de/"><img src="/img/logo_bosch.png" alt="Logo:Bosch_GmbH" width="200" height="45"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hero">
	<div class="hero-body">
		<div class="container">
			<h1 class="title"><span class="icon is-large"><i class="fa fa-university"></i></span><strong> Work</strong> experience while <strong>studying</strong></h1>
			<div class="lb is-blue is-step">	
				<div class="columns">
					<div class="column is-2">
						<h1 class="title is-4">10/2014-07/2015:</h1>
					</div>
					<div class="column is-7 has-text-left">
						<h1 class="title is-3">BMW M GmbH</h1>
						<h2 class="subtitle is-5">Working Student: OBD department</h2>
					</div>
					<div class="column is-3 has-text-right">
						<a href="https://www.bmw-m.com/de/index.html"><img src="/img/logo_bmw.png" alt="Logo:BMW_M_GmbH" width="100" height="100"></a>
					</div>
				</div>
			</div>

			<div class="lb is-blue is-step">
				<div class="columns">
					<div class="column is-2">
						<h1 class="title is-4">11/2013-09/2014:</h1>
					</div>
					<div class="column is-7 has-text-left">
						<h1 class="title is-3">TUM</h1>
						<h2 class="subtitle is-5">Working Student: Energy economy and application technique</h2>
					</div>
					<div class="column is-3 has-text-right">
						<a href="https://www.tum.de/"><img src="/img/logo_tum.png" alt="Logo:TUM-University" width="150" height="79"></a>
					</div>
				</div>
			</div>
			<div class="lb is-blue is-step">
				<div class="columns">
					<div class="column is-2">
						<h1 class="title is-4">05/2013-09/2013:</h1>
					</div>
					<div class="column is-7 has-text-left">
						<h1 class="title is-3">Fraunhofer IISB</h1>
						<h2 class="subtitle is-5">Working Student: Integrated systems component technology</h2>
					</div>
					<div class="column is-3 has-text-right">
						<a href="https://www.iisb.fraunhofer.de/"><img src="/img/logo_fraunhofer_iisb.png" alt="Logo:Fraunehofer_IISB" width="150" height="43"></a>
					</div>
				</div>
			</div>
			<div class="lb is-blue is-step">
				<div class="columns">
					<div class="column is-2">
						<h1 class="title is-4">10/2012-04/2013:</h1>
					</div>
					<div class="column is-7 has-text-left">
						<h1 class="title is-3">Fraunhofer IIS</h1>
						<h2 class="subtitle is-5">Working Student: Geolocation and communication</h2>
					</div>
					<div class="column is-3 has-text-right">
						<a href="https://www.iis.fraunhofer.de/"><img src="/img/logo_fraunhofer_iis.png" alt="Logo:Fraunehofer_IIS" width="150" height="41"></a>
					</div>
				</div>
			</div>
			<div class="lb is-blue is-step">
				<div class="columns">
					<div class="column is-2">
						<h1 class="title is-4">10/2011-10/2012:</h1>
					</div>
					<div class="column is-7 has-text-left">
						<h1 class="title is-3">TUM</h1>
						<h2 class="subtitle is-5">Working Student Tutor: Java Course</h2>
					</div>
					<div class="column is-3 has-text-right">
						<a href="https://www.tum.de/"><img src="/img/logo_tum.png" alt="Logo:TUM-University" width="150" height="79"></a>
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
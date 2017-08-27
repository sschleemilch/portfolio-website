<?php
	$projects = "is-active";
	$projects_website = "is-active";
	$projects_website_technologies = "is-active";
	$root = $_SERVER['DOCUMENT_ROOT'];
	$path = $root . "/templates/_header.php";
	include_once($path);
	$path = $root . "/projects/_projects.php";
	include_once($path);
?>

<div class="section">
	<div class="container is-fullhd">
		<h1 class="title"><strong>Technologies</strong></h1>
		<h2 class="subtitle">What technologies I did choose and why</h2>
		<div class="content">
			<p>
				asdf
			</p>
		</div>
		<div class="columns">
			<div class="column is-1">
				<a href="/projects/website/introduction.php" class="button is-outlined">
					<span class="icon is-small">
						<i class="fa fa-chevron-left"></i>
					</span>
					<span>Previous</span>
				</a>
			</div> 
			<div class="column is-1 is-offset-11">
				<a href="#" class="button is-outlined">
					<span>Next</span>
					<span class="icon is-small">
						<i class="fa fa-chevron-right"></i>
					</span>
				</a>
			</div>
		</div>
	</div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
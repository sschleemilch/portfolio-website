<section class="hero is-medium is-danger">
	<div class="hero-body">
		<div class="container has-text-centered">
			<span class="icon is-huge"><i class="fa fa-rocket"></i></span>
			<h1 class="title"><strong>Projects</strong></h1>
		</div>
	</div>
	<div class="hero-foot">
		<div class="container">
			<nav class="tabs is-boxed">
				<ul>
					<li class="<?php if(isset($projects_website)){echo $projects_website;} ?>">
						<a href="education.php"></span>Website</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</section>
<div class="navbar has-shadow">
	<div class="container">
		<div class="navbar-brand">
			<a href="/projects/website/introduction.php" class="navbar-item is-tab <?php if(isset($projects_website_introduction)){echo $projects_website_introduction;}?>">Introduction</a>
			<a href="/projects/website/technologies.php" class="navbar-item is-tab <?php if(isset($projects_website_technologies)){echo $projects_website_technologies;}?>">Technologies</a>
		</div>
	</div>
</div>

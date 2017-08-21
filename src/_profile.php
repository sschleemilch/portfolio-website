<section class="hero is-info">
	<div class="hero-body">
		<div class="container has-text-centered">
			<span class="icon is-huge"><i class="fa fa-user-circle-o"></i></span>
			<h1 class="title"><strong>Profile</strong></h1>
		</div>
	</div>
	<div class="hero-foot">
		<div class="container">
			<nav class="tabs is-boxed">
				<ul>
					<li class="<?php if(isset($profile_education)){echo $profile_education;} ?>">
						<a href="profile_education.php">Education</a>
					</li>
					<li class="<?php if(isset($profile_work)){echo $profile_work;} ?>">
						<a href="profile_work.php">Work</a>
					</li>	
				</ul>
			</nav>
		</div>
	</div>
</section>
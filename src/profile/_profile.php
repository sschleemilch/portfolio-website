<section class="hero is-info is-medium">
	<div class="hero-body">
		<div class="container has-text-centered">
			<img src="/img/profile.png" alt="Schleemilch_Sebastian_Picture" width="200" height="200">
			<h1 class="title"><strong>Profile</strong></h1>
		</div>
	</div>
	<div class="hero-foot">
		<div class="container">
			<nav class="tabs is-boxed">
				<ul>
					<li class="<?php if(isset($profile_education)){echo $profile_education;} ?>">
						<a href="education.php">
                            <span class="icon is-small">
                                <i class="fa fa-graduation-cap"></i>
                            </span>
                            <span>
                                Education
                            </span>
                        </a>
					</li>
					<li class="<?php if(isset($profile_work)){echo $profile_work;} ?>">
						<a href="work.php">
                            <span class="icon is-small">
                                <i class="fa fa-briefcase"></i>
                            </span>
                            <span>
                                Work
                            </span>
                        </a>
					</li>
					<li class="<?php if(isset($profile_hobbies)){echo $profile_hobbies;} ?>">
						<a href="hobbies.php">
                            <span class="icon is-small">
                                <i class="fa fa-clock-o"></i>
                            </span>
                            <span>
                                Hobbies
                            </span>
                        </a>
					</li>	
				</ul>
			</nav>
		</div>
	</div>
</section>
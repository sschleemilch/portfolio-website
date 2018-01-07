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
                    <li class="<?php if(isset($projects_overview)){echo $projects_overview;} ?>">
                        <a href="/projects/overview.php">
                            <span class="icon is-small">
                                <i class="fa fa-list"></i>
                            </span>
                            <span>
                                Overview
                            </span>
                        </a>
                    </li>
					<li class="<?php if(isset($projects_website)){echo $projects_website;} ?>">
						<a href="/projects/website/introduction.php">
                            <span class="icon is-small">
                                <i class="fa fa-globe"></i>
                            </span>
                            <span>
                                Website
                            </span>
                        </a>
					</li>
                    <li class="<?php if(isset($projects_gitbash)){echo $projects_gitbash;} ?>">
                        <a href="/projects/gitbash/introduction.php">
                            <span class="icon is-small">
                                <i class="fa fa-code"></i>
                            </span>
                            <span>
                                Git-Powerline
                            </span>
                        </a>
                    </li>
				</ul>
			</nav>
		</div>
	</div>
</section>
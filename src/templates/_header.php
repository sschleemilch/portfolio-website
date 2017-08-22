<!doctype html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="x-ua-compatible" content="ie=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <title>Sebastian Schleemilch</title>

	  <!-- Main Style Sheet -->
	  <link rel="stylesheet" type="text/css" href="/css/style.min.css">
	  
	  <!-- Font Awesome Style Sheet -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  
	  <!-- Favicon -->
	  <link rel="icon" type="image/png" href="/img/favicon.png">

	  <!-- Scripts -->
	  <script type="text/javascript" charset="utf-8" src="/jsm/nav-mobile.min.js"></script>
	</head>

	<!-- Body -->
	<body>
		<navbar class="navbar" name="top">
			<div class="container">
				<div class="navbar-brand">
					<a class="navbar-item" href="/index.php">
						<img src="/img/logo_schleemilch_small_milk.png" alt="Schleemilch:Sebastian" width="70" height="28">
					</a>
				</div>
				<div class="navbar-burger" onclick="openMobileNav()">
	      			<span></span>
	      			<span></span>
	      			<span></span>
	    		</div>
	    		<div class="navbar-menu">
	    			<div class="navbar-start">
	    				<a href="/home.php" class="navbar-item <?php if(isset($home)){echo $home;} ?>"> 
	    					<span class="icon">
	  							<i class="fa fa-home"></i>
							</span>
							<span>
	    						&nbsp;Home
	    					</span> 
						</a>
						<div class="navbar-item has-dropdown is-hoverable">
	    					<a class=navbar-link <?php if(isset($profile)){echo $profile;}?>>
		    					<span class="icon">
		  							<i class="fa fa-vcard-o"></i>
								</span>
								<span>
		    						&nbsp;Profile
		    					</span>
	    					</a>
	    					<div class="navbar-dropdown">
	    						<a href="/profile/education.php" class="navbar-item <?php if(isset($profile_education)){echo $profile_education;}?>">
	    							Education
	    						</a>
	    						<a href="/profile/work.php" class="navbar-item <?php if(isset($profile_work)){echo $profile_work;}?>">
	    							Work
	    						</a>
	    					</div>
						</div>
						<a href="/projects.php" class="navbar-item <?php if(isset($projects)){echo $projects;} ?>"> 
	    					<span class="icon">
	  							<i class="fa fa-rocket"></i>
							</span>
							<span>
	    						&nbsp;Projects
	    					</span> 
						</a>
						<a href="/tools.php" class="navbar-item <?php if(isset($tools)){echo $tools;} ?>"> 
	    					<span class="icon">
	  							<i class="fa fa-wrench"></i>
							</span>
							<span>
	    						&nbsp;Tools
	    					</span> 
						</a>
	    			</div>	
	    			<div class="navbar-end">
	    				<div class="navbar-item <?php if(isset($contact)){echo $contact;} ?>">
	    					<a href="/contact.php" class="button is-primary is-outlined" <?php if(isset($contact_disabled)){echo $contact_disabled;} ?>>
	    						<span class="icon">
	  								<i class="fa fa-envelope-o"></i>
								</span>
								<span>
	    							Contact
	    						</span> 
    						</a>
	    				</div>
	    			</div>
	    		</div>
    		</div>
		</navbar>
		<aside class="menu nav-mobile" id="nav-mobile">
			<ul class="menu-list">
				<li><a href="/home.php" class="<?php if(isset($home)){echo $home;} ?>">
						<span class="icon">
	  						<i class="fa fa-home"></i>
						</span>
						Home
					</a>
				</li>
				<li><a href="/profile/education.php" class="<?php if(isset($profile)){echo $profile;} ?>">
						<span class="icon">
	  						<i class="fa fa-vcard-o"></i>
						</span>
						Profile
					</a>
				</li>
				<li><a href="/projects.php" class="<?php if(isset($projects)){echo $projects;} ?>">
						<span class="icon">
	  						<i class="fa fa-rocket"></i>
						</span>
						Projects
					</a>
				</li>
				<li><a href="/tools.php" class="<?php if(isset($tools)){echo $tools;} ?>">
						<span class="icon">
	  						<i class="fa fa-wrench"></i>
						</span>
						Tools
					</a>
				</li>
				<li><a href="/contact.php" class="<?php if(isset($contact)){echo $contact;} ?>">
						<span class="icon">
	  						<i class="fa fa-envelope-o"></i>
						</span>
						Contact
					</a>
				</li>
				<li><a href="javascript:void(0)" onclick="closeMobileNav()">
						<span class="icon">
	  						<i class="fa fa-times" style="color: #FF3860"></i>
						</span>
					</a>
				</li>
			</ul>
		</aside>
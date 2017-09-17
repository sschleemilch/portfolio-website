<!doctype html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="x-ua-compatible" content="ie=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <title>Sebastian Schleemilch</title>
	  <meta name="description" content="Sebastian Schleemilch - Portfolio, Projects, Tutorials">
	  <meta name="keywords" content="Schleemilch, Sebastian Schleemilch, Bulma, CSS, HTML, Portfolio, Projects">
	  <meta name="author" content="Sebastian Schleemilch">
	  <meta name="date" content="2017-08-30T10:00:00+02:00">
	  <!-- Main Style Sheet -->
	  <link rel="stylesheet" type="text/css" href="/css/style.min.css">
	  
	  <!-- Font Awesome Style Sheet -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  
	  <!-- Favicon -->
	  <link rel="icon" type="image/png" href="/img/favicon.png">

	  <!-- Scripts -->
	  <script type="text/javascript" charset="utf-8" src="/jsm/nav-mobile.min.js"></script>
      <script type="text/javascript" charset="utf-8" src="/jsm/details_dropdown.min.js"></script>
	</head>

	<!-- Body -->
	<body>
		<navbar class="navbar" name="top">
			<div class="container">
				<div class="navbar-brand">
					<a class="navbar-item" href="/index.php">
                        <?php
                            $postfix = "";
                            $base = "/img/logo_schleemilch_small_milk";
                            if(isset($home)){
                                $postfix = "home";
                            } elseif (isset($profile)) {
                                $postfix = "profile";
                            } elseif (isset($projects)) {
                                $postfix = "projects";
                            } elseif (isset($tools)) {
                                $postfix = "tools";
                            } elseif (isset($contact)) {
                                $postfix = "contact";
                            }
                            $complete_path = $base . "_" . $postfix . ".png";
                            echo "<img src=\"" . $complete_path . "\" alt=\"Schleemilch:Sebastian\" width=\"65\" height=\"28\">";
                        ?>
					</a>
    				<div class="navbar-burger burger" data-target="navMenuMobile">
    	      			<span></span>
    	      			<span></span>
    	      			<span></span>
    	    		</div>
                </div>
	    		<div class="navbar-menu" id="navMenuMobile">
	    			<div class="navbar-start">
	    				<a href="/home.php" class="navbar-item <?php if(isset($home)){echo $home;} ?> is-primary"> 
	    					<span class="icon">
	  							<i class="fa fa-home"></i>
							</span>
							<span>
	    						&nbsp;Home
	    					</span> 
						</a>
						<div class="navbar-item has-dropdown is-hoverable">
	    					<a class="navbar-link <?php if(isset($profile)){echo $profile;}?> is-success" href="/profile/work.php">
		    					<span class="icon">
		  							<i class="fa fa-vcard-o"></i>
								</span>
								<span>
		    						&nbsp;Profile
		    					</span>
	    					</a>
	    					<div class="navbar-dropdown is-success">
	    						<a href="/profile/education.php" class="navbar-item <?php if(isset($profile_education)){echo $profile_education;}?>">
	    							Education
	    						</a>
	    						<a href="/profile/work.php" class="navbar-item <?php if(isset($profile_work)){echo $profile_work;}?>">
	    							Work
	    						</a>
	    						<a href="/profile/hobbies.php" class="navbar-item <?php if(isset($profile_hobbies)){echo $profile_hobbies;}?>">
	    							Hobbies
	    						</a>
	    					</div>
						</div>
						<div class="navbar-item has-dropdown is-hoverable">
							<a class="navbar-link <?php if(isset($projects)){echo $projects;} ?> is-danger" href="/projects/website/introduction.php"> 
		    					<span class="icon">
		  							<i class="fa fa-rocket"></i>
								</span>
								<span>
		    						&nbsp;Projects
		    					</span> 
							</a>
							<div class="navbar-dropdown is-danger">
								<a href="/projects/website/introduction.php" class="navbar-item <?php if(isset($projects_website)){echo $projects_website;}?>">
	    							Website
	    						</a>
							</div>
						</div>
						<a href="/tools.php" class="navbar-item <?php if(isset($tools)){echo $tools;} ?> is-warning"> 
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
	    					<a href="/contact.php" class="button is-warning is-outlined" <?php if(isset($contact_disabled)){echo $contact_disabled;} ?>>
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
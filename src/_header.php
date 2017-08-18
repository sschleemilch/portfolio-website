<!doctype html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="x-ua-compatible" content="ie=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <title>Sebastian Schleemilch</title>

	  <!-- Main Style Sheet -->
	  <link rel="stylesheet" type="text/css" href="css/style.min.css">
	  
	  <!-- Font Awesome Style Sheet -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  
	  <!-- Favicon -->
	  <link rel="icon" type="image/png" href="img/favicon.png">

	  <!-- Scripts -->
	</head>

	<!-- Body -->
	<body>
		<navbar class="navbar has-shadow">
			<div class="container">
				<div class="navbar-brand">
					<a name="to-top" class="navbar-item" href="index.php">
						<img src="img/logo_schleemilch_small_milk.png" alt="Schleemilch:Sebastian" width="70" height="28">
					</a>
				</div>
				<div class="navbar-burger">
	      			<span></span>
	      			<span></span>
	      			<span></span>
	    		</div>
	    		<div class="navbar-menu">
	    			<div class="navbar-start">
	    				<a href="home.php" class="navbar-item <?php if(isset($home)){echo $home;} ?>"> 
	    					<span class="icon">
	  							<i class="fa fa-home"></i>
							</span>
							<span>
	    						&nbsp;Home
	    					</span> 
						</a>
						<a href="profile.php" class="navbar-item <?php if(isset($profile)){echo $profile;} ?>"> 
	    					<span class="icon">
	  							<i class="fa fa-vcard-o"></i>
							</span>
							<span>
	    						&nbsp;Profile
	    					</span> 
						</a>
	    			</div>	
	    			<div class="navbar-end">
	    				<div class="navbar-item">
	    					<a class="button is-primary is-outlined">
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
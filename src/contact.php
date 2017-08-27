<?php
	$contact = "is-active";
	$contact_disabled = "disabled";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path)
?>
<section class="hero is-primary is-medium">
	<div class="hero-body">
		<div class="container has-text-centered">
			<h1 class="title"><span class="icon is-huge"><i class="fa fa-envelope-open-o"></i></span></h1>
			<h1 class="title"><strong>Contact</strong></h1>
		</div>
	</div>
</section>
<section class="section">
	<div class="container">
		<h1 class="title"><strong>How to reach me</strong></h1>
		<div class="content">
			<p> You can <strong>either</strong> go through one of the following <strong>social media channels</strong> of your choice <strong>or</strong> just fill up the <strong>form</strong> right below to send me a mail directly. You can also find the social media links in every page footer. </p>
		</div>
	</div>
</section>
<section class="hero is-dark is-medium">
	<div class="hero-body">
		<div class="container has-text-centered">
			<h1 class="title"><span class="icon is-large"><i class="fa fa-comments-o"></i></span><br>Media Channels</h1>
			<br>
			<div class="columns">
				<div class="column is-one-third">
					<a href="https://www.facebook.com/sebastian.schleemilch">
						<span class="icon is-large" style="color: #3b5998"><i class="fa fa-facebook-square"></i></span>
						<p class="title is-4"> <strong>Facebook</strong> </p>
						<p class="subtitle"> Active at least once a week </p>
					</a>
				</div>
				<div class="column is-one-third">
					<a href="https://www.xing.com/profile/Sebastian_Schleemilch2?sc_o=mxb_p">
						<span class="icon is-large" style="color: #126567"><i class="fa fa-xing-square"></i></span>
						<p class="title is-4"> <strong>Xing</strong> </p>
						<p class="subtitle"> Most likely immediate response (Android app) </p>
					</a>
				</div>
				<div class="column is-one-third">
					<a href="https://www.linkedin.com/in/sschleemilch/">
						<span class="icon is-large" style="color: #0e76a8"><i class="fa fa-linkedin-square"></i></span>
						<p class="title is-4"> <strong>Linked-In</strong> </p>
						<p class="subtitle"> Most likely immediate response (Android app) </p>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container">	
		<div class="content">	
			<h1 class="title"> Mail Form </h1>
			<div class="columns is-centered">
				<div class="column is-half">
					<form method="post", action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<div class="field">
							<label class="label">Name</label>
							<div class="control has-icons-left">
								<input class="input" type="text" placeholder="Your Name">
								<span class="icon is-small is-left">
						      		<i class="fa fa-user"></i>
						    	</span>
							</div>
						</div>
						<div class="field">
							<label class="label">Email</label>
						  	<div class="control has-icons-left has-icons-right">
						    	<input class="input" type="text" placeholder="Your Email Address">
						    	<span class="icon is-small is-left">
						      		<i class="fa fa-envelope"></i>
						    	</span>
						  	</div>
						</div>
						<div class="field">
							<label class="label">Message</label>
							<div class="control">
								<textarea class="textarea" placeholder="Your Message..."></textarea>
							</div>
						</div>
						<div class="field is-grouped">
							<div class="control">
								<button class="button is-primary">Send</button>
							</div>
						  	<div class="control">
						    	<button class="button is-link">Clear fields</button>
						  	</div>
						</div>
					</form>
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

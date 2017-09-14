<?php
	$contact = "is-active";
	$contact_disabled = "disabled";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path)
?>

<?php
	// define variables and set to empty values
	$name = $email = $message = "";
	$nameErr = $emailErr = $messageErr = "";
	$nameSuccess = $emailSuccess = $messageSuccess = "";
	$nameHasErr = $emailHasErr = $messageHasErr = false;
	$nameIsState = $emailIsState = $messageIsState = "";
	$nameIsSet = $emailIsSet = $messageIsSet = false;

	$htmlDangerSign = "<span class=\"icon is-small is-right\">";
	$htmlDangerSign = $htmlDangerSign . "<i class=\"fa fa-warning\"></i></span>";

	$htmlSuccessSign = "<span class=\"icon is-small is-right\">";
	$htmlSuccessSign = $htmlSuccessSign . "<i class=\"fa fa-check\"></i></span>";

	$mailSuccess = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"]) && strlen($name) == 0){
			$nameHasErr = true;
			$nameErr = return_error_p("Please give your name");
			$nameIsState = "is-danger";
		} else {
			$name = test_input($_POST["name"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$nameErr = return_error_p("Only letters and white space allowed.");
				$nameHasErr = true;
				$nameIsState = "is-danger";
			} else {
				$nameIsSet = true;
				$nameIsState = "is-success";
				$nameSuccess = return_sucess_p("Your given name format was ok.");
			}
		}
		if (empty($_POST["email"]) && strlen($email) == 0){
			$emailHasErr = true;
			$emailErr = return_error_p("Please type in your email.");
			$emailIsState = "is-danger";
		} else {
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = return_error_p("Invalid email format.");
				$emailHasErr = true;
				$emailIsState = "is-danger";
			} else {
				$emailIsSet = true;
				$emailIsState = "is-success";
				$emailSuccess = return_sucess_p("Your given email format was ok.");
			}
		}
		if (empty($_POST["message"]) && strlen($message) == 0){
			$messageHasErr = true;
			$messageErr = return_error_p("Please type in a message");
			$messageIsState = "is-danger";
		} else {
			$message = test_input($_POST["message"]);
			$messageIsSet = true;
			$messageIsState = "is-success";
			$messageSuccess = return_sucess_p("Your given message format was ok.");
		}

		if (!$nameHasErr && !$emailHasErr && !$messageHasErr &&
			$nameIsSet && $emailIsSet && $messageIsSet){
			send_mail($email, $message, $name);
			$mailSuccess = return_success_message();
		}
	}

	function send_mail($from, $msg, $nme){
		$subject = "sebastian-schleemilch.de::Mail Contact";
		$header = "From: " . $from . "\r\n" . "Reply-To: " . $from . "\r\n" . "X-Mailer: PHP/" . phpversion();
		$msg = "From-Name: " . $nme . "\n" . $msg;
		mail("basti.schleemilch@onlinehome.de", $subject, $msg, $header);
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	function return_success_message(){
		return "<div class=\"columns is-centered\">
				<div class=\"column is-8\">
					<article class=\"message is-success\">
					  <div class=\"message-header\">
					    <p>Success</p>
					  </div>
					  <div class=\"message-body\">
					   	Your mail <strong>was sent successfully</strong>. I will reply as soon as I can. <strong>Thank you</strong>!
					  </div>
					</article>
				</div>
			</div>";
	}

	function return_error_p($msg){
		$p = "<p class=\"help is-danger\">";
		$p = $p . $msg;
		$p = $p . "</p>";
		return $p;
	}
	function return_sucess_p($msg){
		$p = "<p class=\"help is-success\">";
		$p = $p . $msg;
		$p = $p . "</p>";
		return $p;
	}
?>

<section class="hero is-warning is-medium">
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
			<h1 class="title"><span class="icon is-large"><i class="fa fa-comments-o"></i></span><br>Social Media Channels</h1>
			<br>
			<div class="columns">
				<a class="column is-one-third" href="https://www.facebook.com/sebastian.schleemilch">
					<span class="icon is-large" style="color: #3b5998"><i class="fa fa-facebook-square"></i></span>
					<p class="title is-4"> <strong>Facebook</strong> </p>
					<p class="subtitle"> Active at least once a week </p>
				</a>
				<a class="column is-one-third" href="https://www.xing.com/profile/Sebastian_Schleemilch2?sc_o=mxb_p">
					<span class="icon is-large" style="color: #126567"><i class="fa fa-xing-square"></i></span>
					<p class="title is-4"> <strong>Xing</strong> </p>
					<p class="subtitle"> Most likely immediate response (Android app) </p>
				</a>
				<a class="column is-one-third" href="https://www.linkedin.com/in/sschleemilch/">
					<span class="icon is-large" style="color: #0e76a8"><i class="fa fa-linkedin-square"></i></span>
					<p class="title is-4"> <strong>Linked-In</strong> </p>
					<p class="subtitle"> Most likely immediate response (Android app) </p>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container">	
		<div class="content">
			<div class="columns is-centered">
				<div class="column is-8">
					<h1 class="title has-text-centered" name="mail_form"><span class="icon is-large"><i class="fa fa-pencil-square-o"></i></span> <strong>Mail</strong> Form </h1>
				</div>
			</div>
			<div class="columns is-centered">
				<div class="column is-half">
					<form method="post", action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "#mail_form";?>" id="mail_form">
						<div class="field">
							<label class="label">Name</label>
							<div class="control has-icons-left has-icons-right">
								<input class="input <?php echo $nameIsState?>" type="text" name="name" placeholder="Your Name" value="<?php echo $name?>">
								<span class="icon is-small is-left">
						      		<i class="fa fa-user"></i>
						    	</span>
						    	<?php 
						    		if($nameHasErr){
						    			echo $htmlDangerSign;
						    		} elseif($nameIsSet){
						    			echo $htmlSuccessSign;
						    		}
						    	?>
							</div>
							<?php
								if($nameHasErr){
									echo $nameErr;
								}elseif($nameIsSet){
									echo $nameSuccess;
								}
							?>
						</div>
						<div class="field">
							<label class="label">Email</label>
						  	<div class="control has-icons-left has-icons-right">
						    	<input class="input <?php echo $emailIsState?>" type="text" name="email" placeholder="Your Email Address" value="<?php echo $email?>">
						    	<span class="icon is-small is-left">
						      		<i class="fa fa-address-book"></i>
						    	</span>
						    	<?php 
						    		if($emailHasErr){
						    			echo $htmlDangerSign;
						    		} elseif($emailIsSet){
						    			echo $htmlSuccessSign;
						    		}
						    	?>
						  	</div>
						  	<?php
								if($emailHasErr){
									echo $emailErr;
								}elseif($emailIsSet){
									echo $emailSuccess;
								}
							?>
						</div>
						<div class="field">
							<label class="label">Message</label>
							<div class="control has-icons-right">
								<textarea class="textarea <?php echo $messageIsState?>" name="message" placeholder="Your Message..."><?php echo $message?></textarea>
								<?php 
						    		if($messageHasErr){
						    			echo $htmlDangerSign;
						    		} elseif($messageIsSet){
						    			echo $htmlSuccessSign;
						    		}
						    	?>
							</div>
							<?php
								if($messageHasErr){
									echo $messageErr;
								}elseif($messageIsSet){
									echo $messageSuccess;
								}
							?>
						</div>
						<div class="field is-grouped">
							<div class="control">
								<button class="button is-warning" type="submit" value="Send" form="mail_form">
                                <span>Send</span>
                                <span class="icon is-small">
                                    <i class="fa fa-send-o"></i>
                                </span>
                                </button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php
				echo $mailSuccess; 
			?>
		</div>
	</div>
</section>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>

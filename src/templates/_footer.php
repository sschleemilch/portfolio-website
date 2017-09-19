		<hr class="is-marginless">
		<footer class="footer 
        <?php
            $activeColor = "";
            if(isset($home)){
                $activeColor = "is-primary";
            } elseif (isset($profile)) {
                $activeColor = "is-success";
            } elseif (isset($projects)) {
                $activeColor = "is-danger";
            } elseif (isset($tools)) {
                $activeColor = "is-warning";
            } elseif (isset($contact)) {
                $activeColor = "is-warning";
            }
            echo " " . $activeColor;
        ?>
        ">
			<div class="container">
				<div class="columns has-text-centered">
					<div class="column is-one-third">
						<div class="content"">
							<a href="#top" id="back_top">
							<span class="icon is-small">
	  							<i class="fa fa-angle-up"></i>
							</span>
							Back to top
							</a>
						</div>
					</div>
					<div class="column is-one-third">
						<div class="content">
							<p>
								Sebastian Schleemilch &copy; 2017 <br>
								<small>
								Source code licensed <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.<br>
								Website content licensed <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0</a>.
								</small>
							</p>
						</div>
					</div>
					<div class="column is-one-third">
						<div class="content">
	  						<a href="https://github.com/sschleemilch">
	  							<span class="icon is-medium" style="color: #333;"><i class="fa fa-github"></i>
								</span>
							</a>
	  						<a href="https://www.facebook.com/sebastian.schleemilch">
	  							<span class="icon is-medium" style="color: #3b5998;"><i class="fa fa-facebook-square"></i>
								</span>
							</a>
	  						<a href="https://www.xing.com/profile/Sebastian_Schleemilch2?sc_o=mxb_p">
	  							<span class="icon is-medium" style="color: #126567;"><i class="fa fa-xing-square"></i>
								</span>
							</a>
							<a href="https://www.linkedin.com/in/sschleemilch/">
								<span class="icon is-medium" style="color: #0e76a8;"><i class="fa fa-linkedin-square"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
                <div class="tags has-addons" style="display:block;text-align: center;">
                                <span class="tag is-dark">
                                    Visitors today:
                                </span><span class="tag
                                    <?php
                                        $activeColor = "";
                                        if(isset($home)){
                                            $activeColor = "is-primary";
                                        } elseif (isset($profile)) {
                                            $activeColor = "is-success";
                                        } elseif (isset($projects)) {
                                            $activeColor = "is-danger";
                                        } elseif (isset($tools)) {
                                            $activeColor = "is-warning";
                                        } elseif (isset($contact)) {
                                            $activeColor = "is-warning";
                                        }
                                        echo " " . $activeColor;
                                    ?>">
                                    <?php
                                    $root = $_SERVER['DOCUMENT_ROOT'];
                                    $path = $root . "/php/visitors.php";
                                    include($path);
                                    ?>
                                    (<?php
                                        $root = $_SERVER['DOCUMENT_ROOT'];
                                        $path = $root . "/php/hits.php";
                                        include($path);
                                    ?> hits)
                                </span>
                            </div>
			</div>
		</footer>
	</body>
</html>
		<hr class="is-marginless">
		<footer class="footer">
			<div class="container">
				<div class="columns has-text-centered">
					<div class="column is-one-third">
						<div class="content">
							<a href="#top">
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
							</a><br>
                            <p><small>Visitors today:</small> <small class="has-text-primary">
                            <?php
                                $root = $_SERVER['DOCUMENT_ROOT'];
                                $path = $root . "/php/visitors.php";
                                include($path);
                            ?></small>
                            <small> (</small><small class="has-text-grey"><?php
                                $root = $_SERVER['DOCUMENT_ROOT'];
                                $path = $root . "/php/hits.php";
                                include($path);
                            ?></small><small> hits)
                            </small>
                            </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
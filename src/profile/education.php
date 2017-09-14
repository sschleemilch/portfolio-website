<?php
	$profile = "is-active";
	$profile_education = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path);
	include_once("_profile.php");
?>
<section class="hero">
	<div class="hero-body">
		<div class="container">
            <h1 class="title">Education</h1>
            <ul class="timeline">
                <li class="timeline-header">
                    <span class="tag is-large is-success">03/2016</span>
                </li>
	           <li class="timeline-item is-success">
                    <div class="timeline-marker is-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-content is-100">
            			<div class="lb is-success is-done">
            				<div class="columns">
            					<div class="column is-2">
            						<h1 class="title is-5">2013-2016:</h1>
            					</div>
            					<div class="column is-7 has-text-left">
            						<h1 class="title is-3">Master</h1>
            						<h2 class="subtitle is-5">Automotive Software Engineering</h2>
            					</div>
            					<div class="column is-3 has-text-right">
            						<a href="https://www.tum.de/"><img src="/img/logo_tum.png" alt="Logo:TUM-University" width="150" height="79"></a>
            					</div>
            				</div>
            			</div>
                    </div>
                </li>
                 <li class="timeline-header">
                    <span class="tag is-medium is-dark">2013</span>
                </li>
                <li class="timeline-item is-success">
                    <div class="timeline-marker is-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-content is-100">
                        <div class="lb is-success is-done">
                            <div class="columns">
                                <div class="column is-2">
                                    <h1 class="title is-5">2010-2013:</h1>
                                </div>
                                <div class="column is-7 has-text-left">
                                    <h1 class="title is-3">Bachelor</h1>
                                    <h2 class="subtitle is-5">Engineer in Mechatronics</h2>
                                </div>
                                <div class="column is-3 has-text-right">
                                    <a href="https://www.fau.de/"><img src="/img/logo_fau_blue.png" alt="Logo:FAU-University" width="150" height="64"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-header">
                    <span class="tag is-medium is-dark">2009 - End of basic school</span>
                </li>
                <li class="timeline-item is-success">
                    <div class="timeline-marker is-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-content is-100">
                        <div class="lb is-success is-done">
                            <div class="columns">
                                <div class="column is-2">
                                    <h1 class="title is-5">2000-2009:</h1>
                                </div>
                                <div class="column is-7">
                                    <h1 class="title is-3">Abitur</h1>
                                    <h2 class="subtitle is-5">Qualification for university entrance</h2>
                                </div>
                                <div class="column is-3 has-text-right">
                                    <a href="http://www.sigmund-schuckert-gymnasium.de/wordpress/"><img src="/img/logo_ssg.png" alt="Logo:SSG-Gymnasium" width="110" height="80"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-header">
                    <span class="tag is-large is-success">2000</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
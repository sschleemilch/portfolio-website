<?php
	$profile = "is-active";
	$profile_work = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path);
	include_once("_profile.php");
?>

<section class="hero">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">Work experience</h1>
            <ul class="timeline">
                <li class="timeline-header">
                    <span class="tag is-large is-info">Present</span>
                </li>
                <li class="timeline-item is-primary">
                    <div class="timeline-marker">
                    </div>
                    <div class="timeline-content is-100">
                        <div class="lb is-primary is-active" style="min-width: 200px">
                            <div class="columns">
                                <div class="column is-2">
                                    <h1 class="title is-5">06/2016-present:</h1>
                                </div>
                                <div class="column is-7 has-text-left">
                                    <h1 class="title is-3">Bosch GmbH</h1>
                                    <h2 class="subtitle is-5">Software Engineer: Software Integration</h2>
                                </div>
                                <div class="column is-3 has-text-right">
                                    <a href="https://www.bosch.com/de/"><img src="/img/logo_bosch.png" alt="Logo:Bosch_GmbH" width="200" height="45"></a>
                                </div>
                            </div>
                            
                            <button class="button is-primary is-outlined" onclick="toggle_details('btn_work_details_bosch','work_details_bosch'); this.blur();" id="btn_work_details_bosch">
                              <span>Details</span>
                              <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                            </button>
                            <span><br></span>
                            <div id="work_details_bosch" style="display: none;">
                                <hr>
                                <h1 class="title is-4">Job Description</h1>
                                <div class="content">
                                    <p>
                                        I am a Software Integrator in video based driver assistance products. More specific, involved in the
                                        platform development that will serve several customers.<br>
                                        Therefore, I am working daily with the whole product lifecycle software including but not limited to:
                                        <ul>
                                            <li>Large scaled Continuous Integration</li>
                                            <li>Static Code Analysis</li>
                                            <li>Unit-Test-Frameworks</li>
                                            <li>Repository management and maintenance</li>
                                            <li>Compiler configuration</li>
                                            <li>First level debug</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-header">
                    <span class="tag is-medium is-dark">03/2016 - End of Studies</span>
                </li>
                <li class="timeline-item is-info">
                    <div class="timeline-marker is-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-content is-100">
                        <div class="lb is-info is-done">
                            <div class="columns">
                                <div class="column is-2">
                                    <h1 class="title is-5">10/2014-07/2015:</h1>
                                </div>
                                <div class="column is-7 has-text-left">
                                    <h1 class="title is-3">BMW M GmbH</h1>
                                    <h2 class="subtitle is-5">Working Student: OBD department</h2>
                                </div>
                                <div class="column is-3 has-text-right">
                                    <a href="https://www.bmw-m.com/de/index.html"><img src="/img/logo_bmw.png" alt="Logo:BMW_M_GmbH" width="100" height="100"></a>
                                </div>
                            </div>
                            <button class="button is-info is-outlined" onclick="toggle_details('btn_work_details_bmw','work_details_bmw'); this.blur();" id="btn_work_details_bmw">
                              <span>Details</span>
                              <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                            </button>
                            <span><br></span>
                            <div id="work_details_bmw" style="display: none;">
                                <hr>
                                <p> Details...</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-header">
                    <span class="tag is-medium is-dark">2014</span>
                </li>
                <li class="timeline-item is-info">
                    <div class="timeline-marker is-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-content is-100">
                        <div class="lb is-info is-done">
                            <div class="columns">
                                <div class="column is-2">
                                    <h1 class="title is-5">11/2013-09/2014:</h1>
                                </div>
                                <div class="column is-7 has-text-left">
                                    <h1 class="title is-3">TUM</h1>
                                    <h2 class="subtitle is-5">Working Student: Energy economy and application technique</h2>
                                </div>
                                <div class="column is-3 has-text-right">
                                    <a href="https://www.tum.de/"><img src="/img/logo_tum.png" alt="Logo:TUM-University" width="150" height="79"></a>
                                </div>
                            </div>
                            <button class="button is-info is-outlined" onclick="toggle_details('btn_work_details_tum','work_details_tum'); this.blur();" id="btn_work_details_tum">
                              <span>Details</span>
                              <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                            </button>
                            <span><br></span>
                            <div id="work_details_tum" style="display: none;">
                                <hr>
                                <p> Details... </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-item is-info">
                    <div class="timeline-marker is-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-content is-100">
                        <div class="lb is-info is-done">
                            <div class="columns">
                                <div class="column is-2">
                                    <h1 class="title is-5">05/2013-09/2013:</h1>
                                </div>
                                <div class="column is-7 has-text-left">
                                    <h1 class="title is-3">Fraunhofer IISB</h1>
                                    <h2 class="subtitle is-5">Working Student: Integrated systems component technology</h2>
                                </div>
                                <div class="column is-3 has-text-right">
                                    <a href="https://www.iisb.fraunhofer.de/"><img src="/img/logo_fraunhofer_iisb.png" alt="Logo:Fraunehofer_IISB" width="150" height="43"></a>
                                </div>
                            </div>
                            <button class="button is-info is-outlined" onclick="toggle_details('btn_work_details_iisb','work_details_iisb'); this.blur();" id="btn_work_details_iisb">
                              <span>Details</span>
                              <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                            </button>
                            <span><br></span>
                            <div id="work_details_iisb" style="display: none;">
                                <hr>
                                <p> Details... </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-header">
                    <span class="tag is-medium is-dark">2013</span>
                </li>
                <li class="timeline-item is-info">
                    <div class="timeline-marker is-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-content is-100">
                        <div class="lb is-info is-done">
                            <div class="columns">
                                <div class="column is-2">
                                    <h1 class="title is-5">10/2012-04/2013:</h1>
                                </div>
                                <div class="column is-7 has-text-left">
                                    <h1 class="title is-3">Fraunhofer IIS</h1>
                                    <h2 class="subtitle is-5">Working Student: Geolocation and communication</h2>
                                </div>
                                <div class="column is-3 has-text-right">
                                    <a href="https://www.iis.fraunhofer.de/"><img src="/img/logo_fraunhofer_iis.png" alt="Logo:Fraunehofer_IIS" width="150" height="41"></a>
                                </div>
                            </div>
                            <button class="button is-info is-outlined" onclick="toggle_details('btn_work_details_iis','work_details_iis'); this.blur();" id="btn_work_details_iis">
                              <span>Details</span>
                              <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                            </button>
                            <span><br></span>
                            <div id="work_details_iis" style="display: none;">
                                <hr>
                                <p> Details... </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-header">
                    <span class="tag is-medium is-dark">2012</span>
                </li>
                <li class="timeline-item is-info">
                    <div class="timeline-marker is-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-content is-100">
                        <div class="lb is-info is-done">
                            <div class="columns">
                                <div class="column is-2">
                                    <h1 class="title is-5">10/2011-10/2012:</h1>
                                </div>
                                <div class="column is-7 has-text-left">
                                    <h1 class="title is-3">FAU</h1>
                                    <h2 class="subtitle is-5">Working Student Tutor: Java Courses</h2>
                                </div>
                                <div class="column is-3 has-text-right">
                                    <a href="https://www.fau.de/"><img src="/img/logo_fau_blue.png" alt="Logo:FAU-University" width="150" height="64"></a>
                                </div>
                            </div>
                            <button class="button is-info is-outlined" onclick="toggle_details('btn_work_details_fau','work_details_fau'); this.blur();" id="btn_work_details_fau">
                              <span>Details</span>
                              <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                            </button>
                            <span><br></span>
                            <div id="work_details_fau" style="display: none;">
                                <hr>
                                <p> Details... </p>
                            </div>
                        </div>
                    </div>
                </li>
                 <li class="timeline-header">
                    <span class="tag is-large is-info">2011</span>
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
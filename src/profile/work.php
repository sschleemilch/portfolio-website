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
                    <span class="tag is-large is-success">Present</span>
                </li>
                <li class="timeline-item is-success">
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
                                <h1 class="title is-5">Job Description</h1>
                                <div class="content is-small">
                                    <p>
                                        I am a Software Integrator in video based driver assistance products in Stuttgart Leonberg.
                                        More specific, involved in the
                                        platform development that will serve several customers.<br>
                                        Therefore, I am working daily with the whole product lifecycle software including but not limited to:
                                        <ul>
                                            <li>Large scaled Continuous Integration (Jenkins, Groovy, Python, ...)</li>
                                            <li>Static Code Analysis</li>
                                            <li>Unit-Test-Frameworks</li>
                                            <li>Repository management and maintenance (Git, Bitbucket)</li>
                                            <li>Development Workflow</li>
                                            <li>Compiler configuration</li>
                                            <li>First level debug</li>
                                            <li>Coding Guidelines and Reviews (C, C++, Python, Groovy, ...) </li>
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
                <li class="timeline-item is-success">
                    <div class="timeline-marker is-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-content is-100">
                        <div class="lb is-success is-done">
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
                            <button class="button is-success is-outlined" onclick="toggle_details('btn_work_details_bmw','work_details_bmw'); this.blur();" id="btn_work_details_bmw">
                              <span>Details</span>
                              <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                            </button>
                            <span><br></span>
                            <div id="work_details_bmw" style="display: none;">
                                <hr>
                                <h1 class="title is-5">Task Description</h1>
                                <div class="content is-small">
                                    <p>
                                        I was a working student in the OBD (On Board Diagnosis) department of the BMW M GmbH
                                        in Munich 10 hours/week while studying. Mainly, I did large automated data processing and filtering
                                        using <a href="https://de.mathworks.com/products/matlab.html">Matlab</a> and Python.
                                        Also, I was involved in small user oriented frontend applications using 
                                        <a href="https://msdn.microsoft.com/de-de/library/office/ee814737(v=office.14).aspx">VBA</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-header">
                    <span class="tag is-medium is-dark">2014</span>
                </li>
                <li class="timeline-item is-success">
                    <div class="timeline-marker is-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-content is-100">
                        <div class="lb is-success is-done">
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
                            <button class="button is-success is-outlined" onclick="toggle_details('btn_work_details_tum','work_details_tum'); this.blur();" id="btn_work_details_tum">
                              <span>Details</span>
                              <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                            </button>
                            <span><br></span>
                            <div id="work_details_tum" style="display: none;">
                                <hr>
                                <h1 class="title is-5">Task Description</h1>
                                <div class="content is-small">
                                    <p>
                                        I was a workung student at the Energy economy and application technique <a href="https://www.ewk.ei.tum.de/startseite/">EWK</a>.
                                        It was about gathering data from different weather stations and process them accordingly to
                                        generate a database about wheather parameters over a long time period. The technology for implementing
                                        was Matlab.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-item is-success">
                    <div class="timeline-marker is-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-content is-100">
                        <div class="lb is-success is-done">
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
                            <button class="button is-success is-outlined" onclick="toggle_details('btn_work_details_iisb','work_details_iisb'); this.blur();" id="btn_work_details_iisb">
                              <span>Details</span>
                              <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                            </button>
                            <span><br></span>
                            <div id="work_details_iisb" style="display: none;">
                                <hr>
                                <h1 class="title is-5">Task Description</h1>
                                <div class="content is-small">
                                    In combination with my Bachelor's thesis, I did extend my involvement for a few ours in the same
                                    domain. It was about inductive charging of automotive vehicles. Main topics where:
                                    <ul>
                                        <li><a href="http://www.atmel.com/">Atmel</a> Microcontroller Programming in C</li>
                                        <li>Hardware layouting and routing with <a href="https://www.autodesk.de/products/eagle/overview">EAGLE</a></li>
                                        <li><a href="http://www.linear.com/designtools/software/">LTSpice</a> dynamic hardware behavior simulation </li>
                                        <li>Power electronics (coils, relais)</li> 
                                    </ul>
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
                            <button class="button is-success is-outlined" onclick="toggle_details('btn_work_details_iis','work_details_iis'); this.blur();" id="btn_work_details_iis">
                              <span>Details</span>
                              <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                            </button>
                            <span><br></span>
                            <div id="work_details_iis" style="display: none;">
                                <hr>
                                <h1 class="title is-5">Task Description</h1>
                                <div class="content is-small">
                                    <p>
                                        First programming experience in real life projects with microcontrollers from Atmel.
                                        The main application was based on wireless communication at 868 MHz and acceleration sensors
                                        for a boxing glove.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-header">
                    <span class="tag is-medium is-dark">2012</span>
                </li>
                <li class="timeline-item is-success">
                    <div class="timeline-marker is-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-content is-100">
                        <div class="lb is-success is-done">
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
                            <button class="button is-success is-outlined" onclick="toggle_details('btn_work_details_fau','work_details_fau'); this.blur();" id="btn_work_details_fau">
                              <span>Details</span>
                              <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                            </button>
                            <span><br></span>
                            <div id="work_details_fau" style="display: none;">
                                <hr>
                                <h1 class="title is-5">Task Description</h1>
                                <div class="content is-small">
                                    <p>
                                        I was tutor for Java based exercises and did the grading for them. In this round I also held exercises
                                        to repeat lecture content in a more practical context and live demos including Java and general computer
                                        science topics.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                 <li class="timeline-header">
                    <span class="tag is-large is-success">2011</span>
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
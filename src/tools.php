<?php
	$tools = "is-active";
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_header.php";
	include_once($path)
?>

<section class="hero is-warning is-medium">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title"><span class="icon is-huge"><i class="fa fa-wrench"></i></span></h1>
            <h1 class="title"><strong>Tools</strong></h1>
        </div>
    </div>
</section>

<section class="section">
	<div class="container">
        <div class="lb is-warning is-tool">
            <article class="media">
              <figure class="media-left">
                <p class="image is-64x64">
                  <img src="/img/git_128x128.png">
                </p>
              </figure>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>Git Bash Powerline</strong> <small>2017</small>
                    <br>
                    A Git Bash Powerline extension using C# to extract mostly Git relevant
                    information out of the current working directory
                  </p>
                </div>
                <nav class="level is-mobile">
                  <div class="level-left">
                    <span class="tag is-warning">C#</span>
                    <span class="tag is-warning">Git</span>
                    <span class="tag is-warning">Bash</span>
                  </div>
                </nav>
              </div>
              <div class="media-right">
                <a class="button is-warning is-outlined" href="https://github.com/sschleemilch/gitbash-powerline">
                    <span class="icon">
                        <i class="fa fa-github"></i>
                    </span>
                    <span>
                        GitHub
                    </span>
                </a>
              </div>
            </article>
        </div>
        <div class="lb is-warning is-lib">
            <article class="media">
              <figure class="media-left">
                <p class="image is-64x64">
                  <img src="/img/python_128x128.png">
                </p>
              </figure>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>Bapy</strong> <small>2017/18</small>
                    <br>
                    A personal Python library to help building visually appealing and effective Python scripts. 
                  </p>
                </div>
                <nav class="level is-mobile">
                  <div class="level-left">
                    <span class="tag is-warning">Python</span>
                  </div>
                </nav>
              </div>
              <div class="media-right">
                <a class="button is-warning is-outlined" href="https://github.com/sschleemilch/bapy">
                    <span class="icon">
                        <i class="fa fa-github"></i>
                    </span>
                    <span>
                        GitHub
                    </span>
                </a>
              </div>
            </article>
        </div>
	</div>
</section>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>

<?php
	$projects = "is-active";
	$projects_website = "is-active";
	$projects_website_technologies = "is-active";
	$root = $_SERVER['DOCUMENT_ROOT'];
	$path = $root . "/templates/_header.php";
	include_once($path);
	$path = $root . "/projects/_projects.php";
	include_once($path);
?>

<div class="section">
	<div class="container is-danger">
		<h1 class="title"><strong>(Web)-Technologies</strong></h1>
		<h2 class="subtitle">What technologies I did choose and why</h2>
		<div class="content">
			<p>
				The topic of web technologies is a tough call since the variety of
				technologies available is so large. I guess everyone who plans to develop
				a website has to find his own requirements regarding the effort he wants
				to put in himself for achieving a certain design, functionality, maintainability,
				performance and other factors like load time, client requirements etc. As you can
				see, the list gets kind a long. So let's start with the frontend, since it is the
				most visible component for the actual site and then get over to the backend.
			</p>
		</div>
	</div>
</div>
<div class="hero is-dark">
	<div class="hero-body">
		<div class="container is-danger">
			<h1 class="title">Frontend technologies</h1>
			<div class="content">
				<p>
					For frontend development, meaning that what your clients will see and feel, you don't
					have that many core technologies available but even more frameworks around that.
					For sure, nearly everyone of you will know the base technologies:
				</p>
				<div class="columns has-text-centered">
					<a class="column" href="https://www.w3schools.com/html/html5_intro.asp">
						<span class="icon is-large" style="color: #3273DC"><i class="fa fa-html5"></i></span>
						<p class="title is-4"> <strong> HTML(5) </strong> </p>
						<p class="subtitle"> Your choice when creating content </p>
					</a>
					<a class="column" href="https://www.w3schools.com/css/">
						<span class="icon is-large" style="color: #FF470F"><i class="fa fa-css3"></i></span>
						<p class="title is-4"> <strong> CSS(3) </strong> </p>
						<p class="subtitle"> Eye-candy for your webpage </p>
					</a>
					<a class="column" href="https://www.javascript.com/">
						<img src="/img/icon_is_large_javascript.png" alt="Icon::Javascript" width="37" height="42">
						<p class="title is-4"> <strong> JavaScript </strong> </p>
						<p class="subtitle"> Client side dynamic behavior </p>
					</a>
				</div>
				<p>
					For HTML and CSS there is and should be no alternative and they are the fundament of every web page
					since 1992 (HTML) and 1993 (CSS). For JavaScript, introduced 1996, you still do have the choice whether
					to use it or not. Since JavaScript had a few security critical bugs, I would say only a few people chose disabling it 
					as default for their web browsing experience. So there, you have to think about in general how relevant JavaScript is
					for your website in order to work correctly. A good practice should be that the general functionality of your webpage works
					even without JavaScript (like navigating and the pure content without too much eye candy). Since more and more 
					content is being viewed on mobile devices and even less people are deactivating JavaScript on mobile devices, my guess is that
					being Non-JavaScript compatible will be less and less important in the future.<br><br>
					For myself, I chose to use JavaScript as a minimum for the webiste look and feel itself, but I did not want to exclude it completely.
				</p>
			</div>
			<h1 class="title is-4"><strong>CSS Frameworks</strong></h1>
			<div class="content">
				<p>
					These days, you can choose between a variety of CSS frameworks that will make your life easier. Styling your webpage accordingly
					is just one factor of choosing the right one. Since webpages are viewed on a huge variety of devices, scaling and dynamic layout
					has become nearly the most important topic when talking about CSS. Again, here you have to decide what you want to have based on those
					criterias:
				</p>
				<ul>
					<li>How much effort do I want to put into styling myself?</li>
					<li>How important is page download size for me (and therefore loading time)?</li>
					<li>Do you want to customize the look and feel?</li>
				</ul>
				<p>
					After asking myself those questions I came to the result that I want to have the flexibility of adapting the look and feel myself
					easily while having a solid base that scales for mobile. A factor for me was also the overall size and the percentage I am planning to
					use. I found <a href="http://bulma.io/">Bulma</a> which fulfills almost everything I expected from a CSS framework without
					taking the possibility to introduce own changes.
					Just for completeness, there are of course a lot of alternatives with it's each up- and downsides regarding the points above:
				</p>
				<ul>
					<li><a href="http://getbootstrap.com/">Bootstrap</a>, one of the most popular and feature rich ones</li>
					<li><a href="https://purecss.io/">Pure.css</a>, extremely small (3.8 KB)</li>
					<li><a href="http://materializecss.com/">Materialize</a></li>
					<li><a href="http://getskeleton.com/">Skeleton</a>, also very small</li>
					<li>...</li>
				</ul>
				<p>
					I also did choose Bulma cause of its CSS-Preprocessor technology: <a href="http://sass-lang.com/">Sass</a>.<br>
					CSS-Preprocessors will make your daily life as a CSS programmer a lot easier. In my opinion, CSS lacks in regards to modularity, duplicated code 
					and maintainability. With a preprocessor like Sass and <a href="http://lesscss.org/">Less</a> you will have features like splitting
					your css code into different files and including them, use variables, use functions and a lot of other nice features. In the end, it will compile to
					normal CSS code. Since overall size matters, you should consider using even a step after generating the CSS from Sass: Minify it. It will be not human friendly readable then. But since you as a developer will have the sources in Sass, you should not care too much about it. <br><br>
					<strong>Design Decision</strong>: CSS Framework
				</p>
				<div class="columns has-text-centered">
					<a class="column" href="http://bulma.io/">
						<img src="/img/icon_is_large_bulma.png" alt="Icon::Bulma" width="42" height="42">
						<p class="title is-4"> <strong> Bulma </strong> </p>
						<p class="subtitle"> As the main extensible framework </p>
					</a>
					<a class="column" href="http://sass-lang.com/">
						<img src="/img/icon_is_large_sass.png" alt="Icon::Sass" width="56" height="42">
						<p class="title is-4"> <strong> Sass </strong> </p>
						<p class="subtitle"> As preprocessor and origin of Bulma </p>
					</a>
				</div>
			</div>
			<h1 class="title is-4"><strong>JavaScript Frameworks</strong></h1>
			<div class="content">
				<p>
					Like for CSS, there also do exist a lot of powerful frameworks with which you can build
					everything, from simple webpages to complex web applications.<br>
					In my case, I kept it simple and am not using one of the larger frameworks like:
				</p>
				<ul>
					<li><a href="https://angular.io/">AngularJS</a>, MVC framework for every need</li>
					<li><a href="https://facebook.github.io/react/">ReactJS</a>, more like a JavaScript library</li>
					<li><a href="https://vuejs.org/">VueJS</a>, minimal, focus on performance</li>
					<li> And of course countless more...</li>
				</ul>
				<p>
				Like I said, I wanted to keep the usage of JavaScript on a minimum and therefore am using only vanilla JavaScript
				and <a href="https://jquery.com/">jQuery</a> which will make your daily JavaScript life easier.<br><br>
				<strong>Design Decision:</strong> JavaScript framework/library:
				</p>
				<div class="columns has-text-centered">
					<a class="column" href="https://www.javascript.com/">
						<img src="/img/icon_is_large_javascript.png" alt="Icon::Javascript" width="37" height="42">
						<p class="title is-4"> <strong> JavaScript </strong> </p>
						<p class="subtitle"> Plain JavaScript </p>
					</a>
					<a class="column" href="https://jquery.com/">
						<img src="/img/icon_is_large_jquery.png" alt="Icon::jQuery" width="43" height="42">
						<p class="title is-4"> <strong> jQuery </strong> </p>
						<p class="subtitle">A comfortable and feature rith JavaScript library</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hero">
	<div class="hero-body">
		<div class="container is-danger">
			<h1 class="title">Backend technologies</h1>
			<div class="content">
				<p>
					Backend is the server sided logic what pages to deliver and to compute content of those pages.
					Again, here you have the choice of I would say four main technologies that are being used these days:
				</p>
				<div class="columns has-text-centered">
					<a class="column" href="https://nodejs.org/en/">
						<img src="/img/icon_is_large_nodejs.png" alt="Icon::NodeJS" width="37" height="42">
						<p class="title is-4"> <strong> NodeJS </strong> </p>
						<p class="subtitle"> Use your JavaScript knowledge </p>
					</a>
					<a class="column" href="http://php.net/manual/de/intro-whatis.php">
						<img src="/img/icon_is_large_php.png" alt="Icon::PHP" width="42" height="42">
						<p class="title is-4"> <strong> PHP </strong> </p>
						<p class="subtitle"> The oldest, but still great </p>
					</a>
					<a class="column" href="https://www.djangoproject.com/foundation/">
						<img src="/img/icon_is_large_django.png" alt="Icon::Django" width="42" height="42">
						<p class="title is-4"> <strong> Django </strong> </p>
						<p class="subtitle"> Based on Python </p>
					</a>
					<a class="column" href="https://www.ruby-lang.org/de/">
						<img src="/img/icon_is_large_ruby.png" alt="Icon::Ruby" width="42" height="42">
						<p class="title is-4"> <strong> Ruby </strong> </p>
						<p class="subtitle"> Good choice if already familiar with </p>
					</a>
				</div>
				<p>
					For me, the decision was about simplicity. Since I do not have and need computing intensive
					multithreading tasks, performance also did not matter for me. But there are differences of course.
					I guess this decision is a lot about personal preferences. NodeJS has definetely the upside that you
					won't learn a new language when being already familiar with JavaScript. Same thing should be the case 
					when choosing Django which is based on the Python programming language. Although I am quite familiar
					with JavaScript and Python, I still chose PHP.<br><br>
					<strong>Design Decision:</strong> Backend technology:
				</p>
				<div class="columns has-text-centered is-centered">
					<a class="column" href="http://php.net/manual/de/intro-whatis.php">
						<img src="/img/icon_is_large_php.png" alt="Icon::PHP" width="42" height="42">
						<p class="title is-4"> <strong> PHP </strong> </p>
						<p class="subtitle"> Simple, pure, good HTML integration</p>
					</a>
				</div>
				<p>
					So far so good. The base technologies are decided.<br>
					In the next <a href="/projects/website/environment.php">chapter</a>, I will talk about setting up the development environment.
					That includes setting up the backend-server and my local development suite.
				</p>
			</div>
		</div>
	</div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
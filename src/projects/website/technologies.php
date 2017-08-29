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
	<div class="container is-fullhd">
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
		<div class="container">
			<h1 class="title has-text-centered">Frontend technologies</h1>
			<div class="content">
				<p>
					For frontend development, meaning that what your clients will see and feel, you don't
					have that many core technologies available but even more frameworks around that.
					For sure, nearly everyone of you will know the base technologies:
				</p>
				<div class="columns has-text-centered">
					<div class="column">
						<span class="icon is-large" style="color: #3273DC"><i class="fa fa-html5"></i></span>
						<p class="title is-4"> <strong> HTML(5) </strong> </p>
						<p class="subtitle"> Your choice when creating content </p>
					</div>
					<div class="column">
						<span class="icon is-large" style="color: #FF470F"><i class="fa fa-css3"></i></span>
						<p class="title is-4"> <strong> CSS(3) </strong> </p>
						<p class="subtitle"> Eye-candy for your webpage </p>
					</div>
					<div class="column">
						<img src="/img/icon_is_large_javascript.png" alt="Icon::Javascript" width="37" height="42">
						<p class="title is-4"> <strong> JavaScript </strong> </p>
						<p class="subtitle"> Client side dynamic behavior </p>
					</div>
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
			<hr>
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
					use. I found <strong><a href="http://bulma.io/">Bulma</a></strong> which fulfills almost everything I expected from a CSS framework without
					taking the possibility to introduce own changes.
					Just for completeness, there are of course a lot of alternatives with it's each up- and downsides regarding the points above:
				</p>
				<ul>
					<li><strong><a href="http://getbootstrap.com/">Bootstrap</a></strong>, one of the most popular and feature rich ones</li>
					<li><strong><a href="https://purecss.io/">Pure.css</a></strong>, extremely small (3.8 KB)</li>
					<li><strong><a href="http://materializecss.com/">Materialize</a></strong></li>
					<li><strong><a href="http://getskeleton.com/">Skeleton</a></strong>, also very small</li>
					<li>...</li>
				</ul>
				<p>
					I also did choose <strong>Bulma</strong> cause of its CSS-Preprocessor technology: <strong><a href="http://sass-lang.com/">Sass</a></strong>.<br>
					CSS-Preprocessors will make your daily life as a CSS programmer a lot easier. In my opinion, CSS lacks in regards to modularity, duplicated code 
					and maintainability. With a preprocessor like Sass and <strong><a href="http://lesscss.org/">Less</a></strong> you will have features like splitting
					your css code into different files and including them, use variables, use functions and a lot of other nice features. In the end, it will compile to
					normal CSS code. Since overall size matters, you should consider using even a step after generating the CSS from Sass: Minify it. It will be not human friendly readable then. But since you as a developer will have the sources in Sass, you should not care too much about it. <br><br>
					<strong>Design Decision</strong>: CSS Framework
				</p>
				<div class="columns has-text-centered">
					<div class="column ">
						<a href="http://bulma.io/">
							<img src="/img/icon_is_large_bulma.png" alt="Icon::Bulma" width="42" height="42">
						</a>
						<p class="title is-4"> <strong> Bulma </strong> </p>
						<p class="subtitle"> As the main extensible framework </p>
					</div>
					<div class="column">
						<a href="http://sass-lang.com/">
							<img src="/img/icon_is_large_sass.png" alt="Icon::Sass" width="56" height="42">
						</a>
						<p class="title is-4"> <strong> Sass </strong> </p>
						<p class="subtitle"> As preprocessor and origin of Bulma </p>
					</div>
				</div>
			</div>
			<hr>
			<h1 class="title is-4"><strong>JavaScript Frameworks</strong></h1>
			<div class="content">
				<p>
					Like for CSS, there also do exist a lot of powerful frameworks with which you can build
					everything, from simple webpages to complex web applications.<br>
					In my case, I kept it simple and am not using one of the larger frameworks like:
				</p>
				<ul>
					<li><strong><a href="https://angular.io/">AngularJS</a></strong>, MVC framework for every need</li>
					<li><strong><a href="https://facebook.github.io/react/">ReactJS</a></strong>, more like a JavaScript library</li>
					<li><strong><a href="https://vuejs.org/">VueJS</a></strong>, minimal, focus on performance</li>
					<li> And of course countless more...</li>
				</ul>
				<p>
				Like I said, I wanted to keep the usage of JavaScript on a minimum and therefore am using only vanilla JavaScript
				and <strong><a href="https://jquery.com/">jQuery</a></strong> which will make your daily JavaScript life easier.<br><br>
				<strong>Design Decision:</strong> JavaScript framework/library:
				</p>
				<div class="columns has-text-centered">
					<div class="column ">
						<a href="http://bulma.io/">
							<img src="/img/icon_is_large_javascript.png" alt="Icon::Javascript" width="37" height="42">
						</a>
						<p class="title is-4"> <strong> JavaScript </strong> </p>
						<p class="subtitle"> Plain JavaScript </p>
					</div>
					<div class="column">
						<a href="http://sass-lang.com/">
							<img src="/img/icon_is_large_jquery.png" alt="Icon::jQuery" width="43" height="42">
						</a>
						<p class="title is-4"> <strong> jQuery </strong> </p>
						<p class="subtitle">A comfortable and feature rith JavaScript library</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hero">
	<div class="hero-body">
		<h1 class="title has-text-centered">Backend technologies</h1>
	</div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
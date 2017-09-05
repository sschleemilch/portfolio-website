<?php
	$projects = "is-active";
	$projects_website = "is-active";
	$projects_website_navigation = "is-active";
	$root = $_SERVER['DOCUMENT_ROOT'];
	$path = $root . "/templates/_header.php";
	include_once($path);
	$path = $root . "/projects/_projects.php";
	include_once($path);
?>

<div class="section">
	<div class="container is-fullhd">
		<h1 class="title"><strong>Navigation</strong></h1>
		<h2 class="subtitle">No duplicated code, No JavaScript</h2>
		<div class="content">
		  <p>
            Navigation is a very basic but very important part of your page.
            Even though it depends on the kind of design your page follows, most pages
            are using a common design which has a similar designed but not exactly the same
            header, footer and the main content like shown in the following picture.
          </p>
          <div class="columns is-centered">
              <div class="column is-2">
                  <figure class="image is-128x128">
                    <img src="/img/page_structure_is128x128.png">
                  </figure>
              </div>
          </div>
          <p>
            I also did choose that kind of design. Note that I mentioned that when changing
            the "content" part of a page when browsing to a website subpage the header structure
            is the same but not exactly the same. Since you do want to show your visitor on what subpage
            he is currently navigated to, you might want to set a few CSS attributes e.g.
            <code>is-active</code> in my case to your current navigation tab or change the complete
            color template of your header.<br>
            Since you do have every navigated page as a real file that will be requested, you should
            think about how to handle that similar page sections.
            I researched a little bit and in my opinion you do have three main choices:
          </p>
          <ol>
            <li> When creating a new page, copy the last one with your header and footer and adapt sections
            to match your current one </li>
            <li> On a navigation click, only exchange the "content" part dynamically without reloading the header and footer section </li>
            <li> Write header and footer section only once, save both in a file and just reference them on each page by including the content </li>
          </ol>
          <p>
            The first point is the most simple one and might be applicable for small sites and or small headers and footers.
            It has the major disadvantage that you do have duplicated code distributed in several files. If you want to change
            the general look of your header and footer, you will need to do a search and replace for all of your files, which 
            is of course very error-prone.<br>
            The second approach is the most bandwidth saving approach, since you load the header and footer only once, exchanging
            the content only. But, it also has some disadvantages. First, you do need the mechanism itself to do that. Most likely
            you will end up using JavaScript exchanging the content of your main content div and adding/removing CSS classes to your navigation
            tabs. So, you will end up having a hard JavaScript dependency on a core functionality of your site.
            Secondly, you would have to deal with how your site navigation content is referenceable through URLs. Since you are just
            exchanging content on the same requested page, you would not get a new URL by default. I guess one can solve that problem
            with a combination of JavaScript and Apache configuration but still I don't think that is the ideal approach.<br>
            Therefore I decided to look into the third approach.
            You should start defining the header and footer in your main page first. Design it, get it to work like you expect.
            Afterwards, you should transfer the code of the header in a seperate file. The filename should make clear that this
            page cannot be called by its own (like <code>_header.php</code>, <code>_footer.php</code>).
          </p>
		</div>
        <h1 class="title is-4"><strong>Including pages with PHP</strong></h1>
        <div class="content">
            <p>
                Since I decided to use PHP as a backend technology, I need to be able to include pages
                with it. Let's assume we do have a file defining our header in the root directory of our page named <code>_header.php</code>
                and one for the footer <code>_footer.php</code>. We do now want to include those files in our main one (<code>index.php</code>).
                In PHP, that can be achieved quite simple like shown in the following code snippet.
            </p>
            <div class="lb is-code">
<pre>
<code>
<span class="com">&lt;?php</span><span class="bl"> include_once(</span><span class="gr">"_header.php"</span><span class="bl">)</span>;<span class="com">?&gt;</span>

<span class="or">&lt;main&gt;</span>
    <span class="com">&lt;!-- Your page content... --&gt;</span>
<span class="or">&lt;/main&gt;</span>

<span class="com">&lt;?php</span><span class="bl"> include_once(</span><span class="gr">"_footer.php"</span><span class="bl">)</span>;<span class="com">?&gt;</span>
</code>
</pre>
            </div>
            <p>
                That will replace those PHP sections with the actual content of the referenced header and footer file.
                There is one additional challenge though that will arise as soon as you have pages that are embedded
                in directories like the one you are reading <code>projects/website/navigation.php</code>.
                If we do paste the code from above inside of that navigation page, we will end up having the PHP error
                that it cannot find the requesting header and footer page. That is because we are referencing the file
                to be included as a relative path. In general, you should reference your webiste links as absolute paths
                from your root <code>/</code>. In HTML that works out of the box: <code>&lt;a href="/projects/website/environment.php"&gt;</code>.
                The leading slash <code>/</code> will lead to the desired behavior.<br> Like this, it does not matter in which path that
                link is referenced.<br>
                For PHP, you would expect to just do the same inside of the <code>include_once()</code> function.
                Unfortunately, it does not work like this. Instead you do need to change the include snippet like this:
            </p>
            <div class="lb is-code">
<pre>
<code>
<span class="com">&lt;?php</span>
    <span class="bl">$</span>path</span> = <span class="bl">$</span>_SERVER<span class="bl">[</span><span class="gr">'DOCUMENT_ROOT'</span><span class="bl">]</span>;
    <span class="bl">$</span>path</span> .= <span class="gr">"/_header.php"</span>;
    <span class="bl">include_once($</span>path<span class="bl">)</span>;
<span class="com">?&gt;</span>
</code>
</pre>
            </div>
        </div>
        <h1 class="title is-4"><strong>Changing included page state</strong></h1>
        <div class="content">
            <p>
                So far so good. We are able to include our header and footer in every new page we want to add to our website.
                However, as I meantioned above, we would like to specialize the header and maybe also the footer to the current
                page. The common use-case is to toggle a CSS class on the currently active tab to visualize the visitor's
                current position. Let's assume we do have a navigation div containing some kind of elements (like <code>a</code>
                or <code>li</code>) that can be visually chosen active with a CSS class <code>is-active</code>.<br>
                In PHP, we can now add additional variables we can set before including the header and footer page like this:
            </p>
            <div class="lb is-code">
<pre>
<code>
<span class="com">&lt;?php</span>
    <span class="bl">$</span>projects_is_active</span> = <span class="gr">"is-active"</span>;
    <span class="bl">$</span>path</span> = <span class="bl">$</span>_SERVER<span class="bl">[</span><span class="gr">'DOCUMENT_ROOT'</span><span class="bl">]</span>;
    <span class="bl">$</span>path</span> .= <span class="gr">"/_header.php"</span>;
    <span class="bl">include_once($</span>path<span class="bl">)</span>;
<span class="com">?&gt;</span>
</code>
</pre>
            </div>
            <p>
                Well, now we defined a variable <code>projects_is_active</code> with the string content <code>"is-active"</code> but are not yet
                using it in the actual header file <code>_header.php</code>. The final step is now huge though.
                In our navigation element we can now check with PHP if that variable is set and if yes, return its value:
            </p>
            <div class="lb is-code">
<pre>
<code>
<span class="or">&lt;a</span> href=<span class="gr">"/projects.php"</span> class=<span class="gr">"</span> 
    <span class="com">&lt;?php</span>
        <span class="bl">if(isset($</span>projects_is_active<span class="bl">)){
            echo $</span>projects_is_active<span class="bl">;
        }</span>
    <span class="com">?&gt;</span><span class="gr">"</span><span class="or">&gt;</span>
<span class="or">&lt;/a&gt;
</code>
</pre>
            </div>
            <p>
                Like this, we achieved having one common header and footer file while still being able to
                adapt its look and feel with variables before including the page. Of course, you can do that
                in different ways and my approach might not be the most clean one.
            </p>
        </div>
	</div>
</div>

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/templates/_footer.php";
	include_once($path)
?>
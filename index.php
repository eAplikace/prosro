<?php
include_once 'common.php';
$page_id = 'ProSro';

$css['screen'][] = "css/mystyle.css";
HTML_Header($page_id,'ProSro', $css, $js);
?>

<section id="content" class="container clearfix">

	<h2 class="slogan align-center">Inteligentní aplikace pro vytvøení a správu smluv pro Vaše podnikání.<br />
	258 vzorù nejdùleitìjších smluv a jinıch dokumentù v rámci aplikace ZDARMA.</h2>
  
	<section id="products-slider" class="ss-slider index_banners" style="visibility: hidden; position: absolute;">
	  <a href='#' class='close-tour-butt' title='vypnout prohlidku'></a>
		<article class="slide">
		
			<img src="img/banner1_test.jpg" alt="" class="slide-bg-image" />
			
			<div class="slide-button">
				<span class="dropcap">1</span>
				<h5>FIDO - Vzory</h5>
				<span class="description">Vzory smluv a dokumentù</span>        				
			</div>
			
		  
			<div class="slide-content">		
         
				<h2>ZDARMA 248 vzorù</h2>
				<p>Je pro Vás pøipraveno 248 vzorù smluv a dalších uiteènıch dokumentù, které získáte s aplikací ZDARMA</p>
				<p><a class="button slide-link" href="#">Seznam dokumentù</a></p>
			  
			</div>
			
		</article>	
		
		<article class="slide">
		
			<img src="img/banner1_test.jpg" alt="" class="slide-bg-image" />
			
			<div class="slide-button">
				<span class="dropcap">2</span>
				<h5>FIDO - Tvorba smluv</h5>
				<span class="description">Vytoøte si smlouvu!</span>        				
			</div>
			
		  
			<div class="slide-content">		
         
				<h2>Vytvoøte si smlouvu bez poplatkù za právní sluby</h2>
				<p>Pomocí vzorù, které s aplikací získáte spolu s nápovìdou k èástem smluv a dokumentù bude sestavení smlouvy pro vaše úèely hraèkou.</p>
				<p><a class="button slide-link" href="#">Chci to vyzkoušet!</a></p>
			  
			</div>
			
		</article>
		
		<article class="slide">
		
			<img src="img/banner1_test.jpg" alt="" class="slide-bg-image" />
			
			<div class="slide-button">
				<span class="dropcap">3</span>
				<h5>FIDO - Organizace</h5>
				<span class="description">Organizace vytvoøenıch dokumentù</span>        				
			</div>
			
		  
			<div class="slide-content">		
         
				<h2>Organizace vytvoøenıch dokumentù</h2>
				<p>Vytvoøené smlouvy u nikdy nestratíte. Jednoduchı spùsob organizace dokumentù umoòuje ukládat smlouvy podle zamìstnancù, typu smlouvy, nebo jinıch kritérií, které si sami zadefinujete.</p>
				<p><a class="button slide-link" href="#">To chci vidìt!</a></p>
			  
			</div>
			
		</article>
		
	</section><!-- end #features-slider -->
	
   <div id='theBanner' class='index_banners'>
    
    <div class='banner-content-wrapper'>
      <img src="img/mainImg1_test.jpg" class="slide-main-image" />
    	<ul>
    	 <li><b>VYTVÁØENÍ</b> a správa smluv a dalších firemních dokumentù pomocí interaktivních vzorù</li>
    	 <li><b>NÁPOVÌDA</b> pøi tvorbì smluv</li>
    	 <li>K aplikaci <b>ZDARMA</b> získejte <b>248 interaktivních vzorù smluv a dalších dokumentù</b></li>
      </ul>
      <div class='product-buttons'>
        <a href='http://google.com' class='butt-zkusit main-butt'></a>
        <a href='#' class='butt-prohlidka main-butt'></a>
        <a href='#' class='butt-registrovat main-butt'></a>
      </div>
    </div> 
    <div class='clear'></div>
    <div class='banner-border-hline'></div>
   </div> 
   
   <div id='registrationPanel' class='index_banners'>
    <div class='banner-content-wrapper'>
      <form id='regForm' method='post' action='register.php' style='float:left'>
       <input type='hidden' name='act' value='proc_reg_form' />
       <div class='formFieldHolder'>
        <label>IÈO</label>
        <input type='text' name='ico' value='' placeholder='IÈO...' />
       </div>
       <div class='formFieldHolder'>
        <label>E-mail</label>
        <input type='text' name='email' value='' placeholder='email...' />
       </div>
       <div class='clear'></div>
       <div class='formFieldHolder'>
        <label>Heslo</label>
        <input type='text' name='psswd' value='' placeholder='heslo...' />
       </div>
       <div class='formFieldHolder'>
        <label>Heslo znova</label>
        <input type='text' name='psswd_confirm' value='' placeholder='potvrïte heslo...' />
       </div> 
       <div class='clear'></div>
       <div class='checkBoxElementContainer'>
        <input id='agreement' type='checkbox' name='agreement' value='1' />
        <label for='agreement'>Souhlasím s obchodními podmínkami</label>
       </div>
       <input type='text' name='tfield' value='' placeholder='email' /><!-- this is just spam-check --> 
       <input type="submit" value="Registrovat" style="margin-bottom: 20px;"/>        
      </form>
     </div>
     <div class='clear'></div>
     <div class='banner-border-hline'></div>
   </div>
   
   

	<h6 class="section-title">Rady a tipy pro Vaše podnikání</h6>

	<ul class="post-carousel">

		<li>

			<a href="single-post.html">
				<img src="img/placeholders/blog-post-1.jpg" alt="" class="entry-image">
			</a>

			<div class="entry-meta">

				<a href="single-post.html">
					<span class="post-format">Permalink</span>
				</a>

				<span class="date">Sep 17 2011</span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">

				<a href="single-post.html">
					<h5 class="title">10 typù jak vyuít NOZ 2014</h5>
				</a>

				<p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
					
			</div><!-- end .entry-body -->

		</li>

		<li>

			<div class="image-gallery-slider">

				<ul>

					<li>
						<a href="single-post.html">
							<img src="img/placeholders/blog-post-2.jpg" alt="" class="entry-image">
						</a>
					</li>

					<li>
						<a href="single-post.html">
							<img src="img/placeholders/blog-post-2.jpg" alt="" class="entry-image">
						</a>
					</li>

					<li>
						<a href="single-post.html">
							<img src="img/placeholders/blog-post-2.jpg" alt="" class="entry-image">
						</a>
					</li>

				</ul>
				
			</div><!-- end .image-gallery-slider -->

			<div class="entry-meta">

				<a href="single-post.html">
					<span class="post-format gallery">Permalink</span>
				</a>

				<span class="date">Sep 17 2011</span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">

				<a href="single-post.html">
					<h5 class="title">Neplate drahé právní sluby</h5>
				</a>

				<p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
					
			</div><!-- end .entry-body -->

		</li>

		<li>

			<iframe src="http://player.vimeo.com/video/32314979?portrait=0&amp;color=ffffff" width="220" height="125" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen class="entry-video"></iframe>

			<div class="entry-meta">

				<a href="single-post.html">
					<span class="post-format video">Permalink</span>
				</a>

				<span class="date">Sep 17 2011</span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">

				<a href="single-post.html">
					<h5 class="title">I vy mùete na NOZ 2014 získat</h5>
				</a>

				<p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
					
			</div><!-- end .entry-body -->

		</li>

		<li>

			<div class="entry-meta">

				<a href="single-post.html">
					<span class="post-format link">Permalink</span>
				</a>

				<span class="date">Sep 17 2011</span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">

				<a href="single-post.html">
					<h5 class="title">Tvorte smlouvy jednoduše a rychle</h5>
				</a>

				<p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
					
			</div><!-- end .entry-body -->

		</li>

		<li>

			<audio class="entry-audio AudioPlayerV1" controls>
				<source src="http://demo.samuli.me/_media/awesome-wp/hit-it-hard.ogg" type="audio/ogg" />
			</audio>

			<div class="entry-meta">

				<a href="single-post.html">
					<span class="post-format audio">Permalink</span>
				</a>

				<span class="date">Sep 17 2011</span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">

				<p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
					
			</div><!-- end .entry-body -->

		</li>

		<li>

			<div class="entry-meta">

				<a href="single-post.html">
					<span class="post-format quote">Permalink</span>
				</a>

				<span class="date">Sep 17 2011</span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">
				
				<blockquote class="simple">
					<p>I’ve decided on the photos that I would like you to use on the website. They are attached to this email. Please send them back when you’re finished as they are my only copies. Thanks!</p>
					<small>- Seriously...</small>
				</blockquote>
					
			</div><!-- end .entry-body -->

		</li>

		<li>

			<div class="entry-meta">

				<a href="single-post.html">
					<span class="post-format aside">Permalink</span>
				</a>

				<span class="date">Sep 17 2011</span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">

			<p><strong>Z vašich dopisù:</strong> Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
					
			</div><!-- end .entry-body -->

		</li>

	</ul><!-- end .post-carousel -->
	
</section><!-- end #content -->

<?php
HTML_footer($page_id);
?>

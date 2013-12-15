<?php
include_once 'common.php';
$page_id = 'ProSro';

$css['screen'][] = "css/mystyle.css";
HTML_Header($page_id,'ProSro', $css, $js);
?>

<section id="content" class="container clearfix">

	<h2 class="slogan align-center">Inteligentní aplikace pro vytvření a správu smluv pro Vaše podnikání.<br />
	258 vzorů nejdůležitějších smluv a jiných dokumentů v rámci aplikace ZDARMA.</h2>
  
	<section id="products-slider" class="ss-slider index_banners" style="visibility: hidden; position: absolute;">
	  <a href='#' class='close-tour-butt' title='vypnout prohlidku'></a>
		<article class="slide">
		
			<img src="img/banner1_test.jpg" alt="" class="slide-bg-image" />
			
			<div class="slide-button">
				<span class="dropcap">1</span>
				<h5>FIDO - Vzory</h5>
				<span class="description">Vzory smluv a dokumentů</span>        				
			</div>
			
		  
			<div class="slide-content">		
         
				<h2>ZDARMA 248 vzorů</h2>
				<p>Je pro Vás připraveno 248 vzorů smluv a dalších užitečných dokumentů, které získáte s aplikací ZDARMA</p>
				<p><a class="button slide-link" href="#">Seznam dokumentů</a></p>
			  
			</div>
			
		</article>	
		
		<article class="slide">
		
			<img src="img/banner1_test.jpg" alt="" class="slide-bg-image" />
			
			<div class="slide-button">
				<span class="dropcap">2</span>
				<h5>FIDO - Tvorba smluv</h5>
				<span class="description">Vytořte si smlouvu!</span>        				
			</div>
			
		  
			<div class="slide-content">		
         
				<h2>Vytvořte si smlouvu bez poplatků za právní služby</h2>
				<p>Pomocí vzorů, které s aplikací získáte spolu s nápovědou k částem smluv a dokumentů bude sestavení smlouvy pro vaše účely hračkou.</p>
				<p><a class="button slide-link" href="#">Chci to vyzkoušet!</a></p>
			  
			</div>
			
		</article>
		
		<article class="slide">
		
			<img src="img/banner1_test.jpg" alt="" class="slide-bg-image" />
			
			<div class="slide-button">
				<span class="dropcap">3</span>
				<h5>FIDO - Organizace</h5>
				<span class="description">Organizace vytvořených dokumentů</span>        				
			</div>
			
		  
			<div class="slide-content">		
         
				<h2>Organizace vytvořených dokumentů</h2>
				<p>Vytvořené smlouvy už nikdy nestratíte. Jednoduchý spůsob organizace dokumentů umožňuje ukládat smlouvy podle zaměstnanců, typu smlouvy, nebo jiných kritérií, které si sami zadefinujete.</p>
				<p><a class="button slide-link" href="#">To chci vidět!</a></p>
			  
			</div>
			
		</article>
		
	</section><!-- end #features-slider -->
	
   <div id='theBanner' class='index_banners'>
    
    <div class='banner-content-wrapper'>
      <img src="img/mainImg1_test.jpg" class="slide-main-image" />
    	<ul>
    	 <li><b>VYTVÁŘENÍ</b> a správa smluv a dalších firemních dokumentů pomocí interaktivních vzorů</li>
    	 <li><b>NÁPOVĚDA</b> při tvorbě smluv</li>
    	 <li>K aplikaci <b>ZDARMA</b> získejte <b>248 interaktivních vzorů smluv a dalších dokumentů</b></li>
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
        <label>IČO</label>
        <input type='text' name='ico' value='' placeholder='IČO...' />
       </div>
       <div class='formFieldHolder'>
        <label>E-mail</label>
        <input type='text' name='email' value='' placeholder='email...' />
       </div>
       <div class='clear'></div>
       <div class='formFieldHolder'>
        <label>Heslo</label>
        <input type='password' name='pswd' value='' placeholder='heslo...' />
       </div>
       <div class='formFieldHolder'>
        <label>Heslo znova</label>
        <input type='password' name='pswd_confirm' value='' placeholder='potvrďte heslo...' />
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
					<h5 class="title">10 typů jak využít NOZ 2014</h5>
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
					<h5 class="title">Neplaťte drahé právní služby</h5>
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
					<h5 class="title">I vy můžete na NOZ 2014 získat</h5>
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

			<p><strong>Z vašich dopisů:</strong> Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
					
			</div><!-- end .entry-body -->

		</li>

	</ul><!-- end .post-carousel -->
	
</section><!-- end #content -->

<?php
HTML_footer($page_id);
?>

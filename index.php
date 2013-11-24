<?php
include_once 'common.php';
$page_id = 'ProSro';

$css['screen'][] = "css/mystyle.css";
HTML_Header($page_id,'ProSro', $css, $js);
?>

<section id="content" class="container clearfix">

	<h2 class="slogan align-center">Inteligentn� aplikace pro vytv�en� a spr�vu smluv pro Va�e podnik�n�.<br />
	258 vzor� nejd�le�it�j��ch smluv a jin�ch dokument� v r�mci aplikace ZDARMA.</h2>
  
	<section id="products-slider" class="ss-slider index_banners" style="visibility: hidden; position: absolute;">
	  <a href='#' class='close-tour-butt' title='vypnout prohlidku'></a>
		<article class="slide">
		
			<img src="img/banner1_test.jpg" alt="" class="slide-bg-image" />
			
			<div class="slide-button">
				<span class="dropcap">1</span>
				<h5>FIDO - Vzory</h5>
				<span class="description">Vzory smluv a dokument�</span>        				
			</div>
			
		  
			<div class="slide-content">		
         
				<h2>ZDARMA 248 vzor�</h2>
				<p>Je pro V�s p�ipraveno 248 vzor� smluv a dal��ch u�ite�n�ch dokument�, kter� z�sk�te s aplikac� ZDARMA</p>
				<p><a class="button slide-link" href="#">Seznam dokument�</a></p>
			  
			</div>
			
		</article>	
		
		<article class="slide">
		
			<img src="img/banner1_test.jpg" alt="" class="slide-bg-image" />
			
			<div class="slide-button">
				<span class="dropcap">2</span>
				<h5>FIDO - Tvorba smluv</h5>
				<span class="description">Vyto�te si smlouvu!</span>        				
			</div>
			
		  
			<div class="slide-content">		
         
				<h2>Vytvo�te si smlouvu bez poplatk� za pr�vn� slu�by</h2>
				<p>Pomoc� vzor�, kter� s aplikac� z�sk�te spolu s n�pov�dou k ��stem smluv a dokument� bude sestaven� smlouvy pro va�e ��ely hra�kou.</p>
				<p><a class="button slide-link" href="#">Chci to vyzkou�et!</a></p>
			  
			</div>
			
		</article>
		
		<article class="slide">
		
			<img src="img/banner1_test.jpg" alt="" class="slide-bg-image" />
			
			<div class="slide-button">
				<span class="dropcap">3</span>
				<h5>FIDO - Organizace</h5>
				<span class="description">Organizace vytvo�en�ch dokument�</span>        				
			</div>
			
		  
			<div class="slide-content">		
         
				<h2>Organizace vytvo�en�ch dokument�</h2>
				<p>Vytvo�en� smlouvy u� nikdy nestrat�te. Jednoduch� sp�sob organizace dokument� umo��uje ukl�dat smlouvy podle zam�stnanc�, typu smlouvy, nebo jin�ch krit�ri�, kter� si sami zadefinujete.</p>
				<p><a class="button slide-link" href="#">To chci vid�t!</a></p>
			  
			</div>
			
		</article>
		
	</section><!-- end #features-slider -->
	
   <div id='theBanner' class='index_banners'>
    
    <div class='banner-content-wrapper'>
      <img src="img/mainImg1_test.jpg" class="slide-main-image" />
    	<ul>
    	 <li><b>VYTV��EN�</b> a spr�va smluv a dal��ch firemn�ch dokument� pomoc� interaktivn�ch vzor�</li>
    	 <li><b>N�POV�DA</b> p�i tvorb� smluv</li>
    	 <li>K aplikaci <b>ZDARMA</b> z�skejte <b>248 interaktivn�ch vzor� smluv a dal��ch dokument�</b></li>
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
        <label>I�O</label>
        <input type='text' name='ico' value='' placeholder='I�O...' />
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
        <input type='text' name='psswd_confirm' value='' placeholder='potvr�te heslo...' />
       </div> 
       <div class='clear'></div>
       <div class='checkBoxElementContainer'>
        <input id='agreement' type='checkbox' name='agreement' value='1' />
        <label for='agreement'>Souhlas�m s obchodn�mi podm�nkami</label>
       </div>
       <input type='text' name='tfield' value='' placeholder='email' /><!-- this is just spam-check --> 
       <input type="submit" value="Registrovat" style="margin-bottom: 20px;"/>        
      </form>
     </div>
     <div class='clear'></div>
     <div class='banner-border-hline'></div>
   </div>
   
   

	<h6 class="section-title">Rady a tipy pro Va�e podnik�n�</h6>

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
					<h5 class="title">10 typ� jak vyu��t NOZ 2014</h5>
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
					<h5 class="title">Nepla�te drah� pr�vn� slu�by</h5>
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
					<h5 class="title">I vy m��ete na NOZ 2014 z�skat</h5>
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
					<h5 class="title">Tvorte smlouvy jednodu�e a rychle</h5>
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
					<p>I�ve decided on the photos that I would like you to use on the website. They are attached to this email. Please send them back when you�re finished as they are my only copies. Thanks!</p>
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

			<p><strong>Z va�ich dopis�:</strong> Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
					
			</div><!-- end .entry-body -->

		</li>

	</ul><!-- end .post-carousel -->
	
</section><!-- end #content -->

<?php
HTML_footer($page_id);
?>

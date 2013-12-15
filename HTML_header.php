<?php
function print_CSS($CSS){
  if(empty($CSS)) return "";
  if(DEBUG) $rnd = rand(0, 9999);
  $html="";
  foreach($CSS as $media => $css_files)
    foreach($css_files as $css_file){
      $html.='<link rel="stylesheet" media="'.$media.'" href="'.$css_file.(((DEBUG) ? "?$rnd" : "")).'" />';
  }
  return $html;
}

function print_JS($JS){
  if(empty($JS)) return "";
  $html.="";
  foreach($JS as $js_file){
    $html.='<script type="text/javascript" src="'.$js_file.'"></script>';
  }
  return $html;
}

?>

<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="cs">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="cs">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="cs">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title><?=$title?></title>
	
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!--[if !lte IE 6]><!-->
		<link rel="stylesheet" href="css/style.css" media="screen" />

		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic&subset=latin-ext" />
		
		<link rel="stylesheet" href="css/fancybox.min.css" media="screen" />

		<link rel="stylesheet" href="css/video-js.min.css" media="screen" />

		<link rel="stylesheet" href="css/audioplayerv1.min.css" media="screen" />
	<!--<![endif]-->
	
	<?=print_CSS($CSS)?>

	<!--[if lte IE 6]>
		<link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
	<![endif]-->

	<!-- HTML5 Shiv + detect touch events -->
	<script src="js/modernizr.custom.js"></script>

	<!-- HTML5 video player -->
	<script src="js/video.min.js"></script>
	<script>_V_.options.flash.swf = 'http://localhost/smartstart/js/video-js.swf';</script>
	
  <?=print_JS($JS)?>
</head>
<body>

<header id="header" class="container clearfix">

	<a href="index.html" id="logo">
		<img src="img/logo.png" alt="SmartStart">
	</a>

	<nav id="main-nav">
		
		<ul>
			<li class="current">
				<a href="index.html" data-description="Seznamte se">Domov</a>
			</li>
			<li>
				<a href="elements.html" data-description="Co nabízíme">Produkty</a>
				<ul>
					<li><a href="about-us.html">Inteligentní firemní dokumenty</a></li>
				</ul>
			</li>
			<li>
				<a href="blog.html" data-description="Rady a tipy">Èlánky</a>
				<ul>
					<li><a href="single-post.html">Neskor kategoria 1</a></li>
					<li><a href="single-post.html">Neskor kategoria 2</a></li>
				</ul>
			</li>
			<li>
				<a href="portfolio-4-columns.html" data-description="Vyberte si">Ceník</a>
			</li>
			<li>
				<a href="contact-us.html" data-description="Víc o nás">O nás</a>
			</li>
			<li>
				<a href="contact-us.html" data-description="Napište nám">Kontakt</a>
			</li>
		</ul>

	</nav><!-- end #main-nav -->
	
</header><!-- end #header -->
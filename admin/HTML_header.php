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
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"> <![endif]-->
<!--[if gt IE 8]> <html class="animations ie gt-ie8 fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"> <![endif]-->
<!--[if !IE]><!--><html class="animations fluid top-full menuh-top sticky-top sidebar sidebar-full sidebar-collapsible sidebar-width-mini sticky-sidebar sidebar-hat"><!-- <![endif]-->
<head>
	<title><?=$title?></title>
	
	<!-- Meta -->
	<meta charset="windows-1250" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/responsive.css" rel="stylesheet" type="text/css" />
	
	<!-- Glyphicons Font Icons -->
	<link href="theme/fonts/glyphicons/css/glyphicons_regular.css" rel="stylesheet" />
	<link href="theme/fonts/glyphicons/css/glyphicons_social.css" rel="stylesheet" />
	<link href="theme/fonts/glyphicons/css/glyphicons_filetypes.css" rel="stylesheet" />
	

	<link rel="stylesheet" href="theme/fonts/font-awesome/css/font-awesome.min.css">
	<!--[if IE 7]><link rel="stylesheet" href="theme/fonts/font-awesome/css/font-awesome-ie7.min.css"><![endif]-->
	
	<!-- Uniform Pretty Checkboxes -->
	<link href="theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />
	
	<!-- PrettyPhoto -->
    <link href="theme/scripts/plugins/gallery/prettyphoto/css/prettyPhoto.css" rel="stylesheet" />
    
  <!-- JQuery -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
    <script src="theme/scripts/plugins/system/html5shiv.js"></script>
  <![endif]-->
	
	<!-- Main Theme Stylesheet :: CSS -->
	<link href="theme/css/style-default-menus-dark.css?1382019508" rel="stylesheet" type="text/css" />
	
	
	<!-- FireBug Lite -->
	<!-- <script src="https://getfirebug.com/firebug-lite-debug.js"></script> -->

	<!-- LESS.js Library -->
	<script src="theme/scripts/plugins/system/less.min.js"></script>
	
	<!-- Global -->
	<script>
	//<![CDATA[
	var basePath = '',
		commonPath = '';

	// colors
	var primaryColor = '#e5412d',
  		dangerColor  = '#b55151',
  		successColor = '#609450',
  		warningColor = '#ab7a4b',
  		inverseColor = '#45484d';

	var themerPrimaryColor = primaryColor;
	//]]>
	</script>
</head>
<body class="document-body ">
	
		<!-- Main Container Fluid -->
	<div class="container-fluid menu-hidden sidebar-hidden-phone fluid menu-left">
		
				<!-- Sidebar menu & content wrapper -->
		<div id="wrapper">
		
		<!-- Sidebar Menu -->
		<div id="menu" class="hidden-print">
		
			<!-- Brand -->
			<a href="index.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible" class="appbrand"><span class="text-primary">FLAT</span> <span>KIT</span></a>
		
			<!-- Scrollable menu wrapper with Maximum height -->
			<div class="slim-scroll" data-scroll-height="800px">
			
				<!-- Menu Toggle Button -->
				<button type="button" class="btn btn-navbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<!-- // Menu Toggle Button END -->
				
				<!-- Sidebar Profile -->
				<span class="profile center">
					<a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible"><img src="theme/images/avatar-74x74.jpg" alt="Avatar" /></a>
				</span>
				<!-- // Sidebar Profile END -->
				
				<!-- Menu -->
				<ul>
				 <li class="active"><a href="#" class="glyphicons dashboard"><i></i><span>Dashboard</span></a></li>
				 <li class="hasSubmenu">
          	<a href="#menu_components" data-toggle="collapse" class="glyphicons settings"><i></i><span>Administrace</span><span class="icon-chevron-down"></span></a>
          	<ul class="collapse" id="menu_components">
          	  <!-- Components Submenu Level 2 -->
          		<li class="hasSubmenu">
          			<a href="#menu_components_forms" data-toggle="collapse">Články<span class="badge badge-primary fix">4</span></a>
          			<ul class="collapse" id="menu_components_forms">
          				<li class=""><a href="#">Nový článek</a></li>
          				<li class=""><a href="#">Seznam článků</a></li>
          				<li class=""><a href="#">Tagy článků</a></li>
          			</ul>
          		</li>
          		<!-- // Components Submenu Level 2 END -->
          	</ul>
         </li>   							 					
				</ul>
				<div class="clearfix"></div>
				<!-- // Menu END -->
			
			</div>
			<!-- // Scrollable Menu wrapper with Maximum Height END -->
			
		</div>
		<!-- // Sidebar Menu END -->
				
		<!-- Content -->
		<div id="content">
		
		<!-- Top navbar -->
		<div class="navbar main hidden-print">
		
			<!-- Menu Toggle Button -->
			<button type="button" class="btn btn-navbar pull-left visible-xs">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<!-- // Menu Toggle Button END -->
			
						
						<ul class="topnav pull-left">
				<li><a href="index.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible" class="glyphicons dashboard"><i></i> Dashboard</a></li>
			</ul>
						
						<!-- Top Menu Right -->
			<ul class="topnav pull-right hidden-sm">
			
								
				<!-- Language menu -->
				<li class="hidden-xs dropdown dd-1 dd-flags" id="lang_nav">
					<a href="#" data-toggle="dropdown"><img src="theme/images/lang/en.png" alt="en" /></a>
			    	<ul class="dropdown-menu pull-right">
			      		<li class="active"><a href="?module=admin&amp;page=blank&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible&amp;lang=en" title="English"><img src="theme/images/lang/en.png" alt="English"> English</a></li>
			      		<li><a href="?module=admin&amp;page=blank&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible&amp;lang=ro" title="Romanian"><img src="theme/images/lang/ro.png" alt="Romanian"> Romanian</a></li>
			      		<li><a href="?module=admin&amp;page=blank&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible&amp;lang=it" title="Italian"><img src="theme/images/lang/it.png" alt="Italian"> Italian</a></li>
			      		<li><a href="?module=admin&amp;page=blank&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible&amp;lang=fr" title="French"><img src="theme/images/lang/fr.png" alt="French"> French</a></li>
			      		<li><a href="?module=admin&amp;page=blank&amp;url_rewrite=&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible&amp;lang=pl" title="Polish"><img src="theme/images/lang/pl.png" alt="Polish"> Polish</a></li>
			    	</ul>
				</li>
				<!-- // Language menu END -->
			
				<!-- Profile / Logout menu -->
				<li class="account dropdown dd-1">
					<a data-toggle="dropdown" href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible" class="glyphicons logout lock"><span class="hidden-md hidden-sm hidden-desktop-1">mosaicpro</span><i></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible" class="glyphicons cogwheel">Settings<i></i></a></li>
						<li><a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible" class="glyphicons camera">My Photos<i></i></a></li>
						<li class="profile">
							<span>
								<span class="heading">Profile <a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible" class="pull-right text-primary text-weight-regular">edit</a></span>
								<a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible" class="img thumb">
									<img src="theme/images/avatar-51x51.jpg" alt="Avatar" />
								</a>
								<span class="details">
									<a href="my_account_advanced.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible" class="strong text-regular">Mosaic Pro</a>
									contact@mosaicpro.biz
								</span>
								<span class="clearfix"></span>
							</span>
						</li>
						<li>
							<span>
								<a class="btn btn-default btn-mini pull-right" href="login.html?lang=en&amp;layout_type=fluid&amp;menu_position=menu-left&amp;style=style-default-menus-dark&amp;sidebar_type=collapsible">Sign Out</a>
							</span>
						</li>
					</ul>
									</li>
				<!-- // Profile / Logout menu END -->
				
			</ul>
			<!-- // Top Menu Right END -->
			
			<ul class="topnav pull-right hidden-sm">
				<li><a href="" class="glyphicons envelope single-icon"><i></i><span class="badge fix badge-primary">5</span></a></li>
				<li><a href="" class="glyphicons cup single-icon"><i></i><span class="badge fix badge-primary">7</span></a></li>
				<li class="hidden-sm"><a href="" class="glyphicons comments single-icon"><i></i><span class="badge fix badge-primary">3</span></a></li>
			</ul>
			<div class="clearfix"></div>
			
		</div>
		<!-- Top navbar END -->
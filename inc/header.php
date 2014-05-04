<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
    	<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
               
		<?php
		$path = $_SERVER['PHP_SELF'];
		$page = basename($path);
		$page = basename($path, '.php');
		?>

		<?php include_once("meta-data.php"); ?>
		
		<!-- Facebook OG -->
		<!--<meta property="og:title" content="COMPANY" />
		<meta property="og:type" content="company" />
		<meta property="og:site_name" content="COMPANY" />
		<meta property="fb:admins" content="878845157" />
		<meta property="og:url" content="http://www.facebook.com/" />
		<meta property="og:image" content="img/apple-touch-icon.png" />-->
		<!--/Facebook OG-->
        
        <meta name="viewport" content="width=device-width" />
        <link href="img/splash.png" rel="apple-touch-startup-image" />
        <link href="img/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed" />
        <link href="img/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" />
        <link href="img/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" />
        <link href="img/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" />
		<meta name="apple-mobile-web-app-capable" content="yes" />		
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />  
		
		<!--Geo-->
		<!--<meta name="geo.position" content="50.167958;-97.133185" />
		<meta name="geo.placename" content="Rockwood Rural Municipality, Manitoba, Canada" />
		<meta name="geo.region" content="en-gb" />
		<meta name="ICBM" content="50.167958, -97.133185" />-->
		<!--/Geo-->
        
        <link rel="shortcut icon" href="favicon.ico" />
        
        <link href="css/vendor/normalize.css" rel="stylesheet" type="text/css" />
        <link href="css/vendor/foundation.min.css" rel="stylesheet" type="text/css" /> 
        <link href="css/default.css" rel="stylesheet" type="text/css" />        
        <link href="css/print.css" rel="stylesheet" type="text/css" media="print" />
        <!--[if IE 9]><link href="css/ie9.css" rel="stylesheet" type="text/css" media="screen" /><![endif]-->
        <!--[if IE 10]><link href="css/ie10.css" rel="stylesheet" type="text/css" media="screen" /><![endif]-->
        
        <script type="text/javascript" src="js/vendor/modernizr.js"></script>		
	
		<!--GA Code--><!--/GA Code-->
    </head>
    
    <body>
        <a href="#startpage" class="hide" title="Skip Navigation" accesskey="1">Skip Navigation</a>
               
        <header>
        	<div class="contain-to-grid">        	
        		<nav class="top-bar" data-topbar>
        			<ul class="title-area">
    					<li class="name">
      						<h1><a href="#" id="logo">My Site</a></h1>
    					</li>
    					<li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  					</ul>
  					<section class="top-bar-section">
  						<ul class="left">
                			<li><a href="#" title="Home" accesskey="2">Home</a></li>
                			<li><a href="#" title="About" accesskey="3">About</a></li>
                			<li><a href="#" title="Section" accesskey="4">Section</a></li>
                			<li><a href="#" title="Contact" accesskey="5" <?php if($page == 'contact'): ?>class="active"<?php endif ?>>Contact</a></li>
               	 		</ul>
               	 	</section>
            	</nav>  
            </div>	
		</header>
			
		<div id="startpage"></div>
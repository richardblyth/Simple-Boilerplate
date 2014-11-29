<?php
  /* Setup current page script
  Usage: if($currentpage) == 'x' { do something */
  $path = $_SERVER['PHP_SELF'];
  $currentpage = basename($path);
  $currentpage = basename($path, '.php');
?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9" lang="en"><![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10" lang="en"><![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"><!--<![endif]-->
  <head>

    <title>Richard Blyth - Website Boilerplate</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <meta name="robots" content="no index, follow">
    <meta name="description" content="A simple website boilerplate built on HTML5 and PHP using jQuery and Zurb Foundation">

    <link rel="canonical" href="http://www.richardblyth.com">

    <!-- Icons -->
    <link rel="icon" type="image/png" href="img/speeddial-160px.png">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57x57-precomposed.png">

    <!-- Apple Touch -->
    <!--<link rel="apple-touch-startup-image" href="img/splash.png" >
    <meta name="apple-mobile-web-app-capable" content="yes">    
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">-->

    <!-- Facebook OG -->
    <!--<meta property="og:title" content="COMPANY">
    <meta property="og:type" content="company">
    <meta property="og:site_name" content="COMPANY">
    <meta property="fb:admins" content="878845157">
    <meta property="og:url" content="http://www.facebook.com/">
    <meta property="og:image" content="img/apple-touch-icon.png">-->
    <!--/Facebook OG-->

    <!--Geo-->
    <!--<meta name="geo.position" content="50.167958;-97.133185">
    <meta name="geo.placename" content="Rockwood Rural Municipality, Manitoba, Canada" />
    <meta name="geo.region" content="en-gb">
    <meta name="ICBM" content="50.167958, -97.133185">-->
    <!--/Geo-->

    <link rel="stylesheet" href="css/vendor/foundation.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr.js"></script>  
  </head>

  <body>
    <a class="hide" accesskey="1" href="#startpage" title="Skip the navigation">Skip the navigation</a>
    
    <header>
      <div class="row">
        <div class="small-12 medium-12 large-12 columns">Site Logo</div>
      </div>

      <nav class="row">
        <ul class="small-12 medium-12 large-12 columns">
          <li><a href="#" title="The page">The page</a></li>
        </ul>
      </nav>
    </header>
			
		<div id="startpage"></div>
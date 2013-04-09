<?php
/**
 * @package WordPress
 * @subpackage mb_1_Theme */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml" 
      <?php language_attributes(); ?>>
  <head profile="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta property="og:title" content="<?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?>" />
    <meta property="og:type" content="blog"/>
    <meta property="og:url" content="http://www.matthewbirtch.com"/>
    <meta property="og:image" content="<?php bloginfo('stylesheet_url'); ?>/images/logo.png"/>
    <meta property="og:site_name" content="matthewbirtch.com"/>
    <meta property="og:description"
          content="Designer Matthew Birtch"/>
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/jquery-css-transform.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/jquery-animate-css-rotate-scale.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/blog.js"></script>
    <script type="text/javascript" src="http://use.typekit.com/ynu8qth.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    <script type="application/x-javascript"> 
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3323495-5']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
  </head>

<body <?php body_class(); ?>>
<div id="main_wrapper">
    <div id="header">
  	  <div id="header_wrapper">
  	    <a id="logo" href="<?php bloginfo('url')?>">Matthew Birtch</a>
    	  <div id="header_right">
    	    <nav>
    	      <ul id="nav">
              <li class="blog"><a href="<?php bloginfo('url'); ?>">Blog</a></li>
          	  <!--<?php 
          	    $slug = basename(get_permalink());
          	    wp_list_pages('depth=1&title_li='); 
          	  ?>-->
          	</ul>
        	</nav>
        	<div id="search_bar">
        	 <?php get_search_form(); ?>
        	</div>
        	<ul id="social_nav">
        	 <li class="facebook"><a href="http://www.facebook.com/matthew.birtch" target="_blank" title="Find me on Facebook">Facebook</a></li>
        	 <li class="twitter"><a href="http://www.twitter.com/mrbirtch" target="_blank" title="Follow me on Twitter">Twitter</a></li>
        	 <li class="linkedin"><a href="http://www.linkedin.com/pub/matthew-birtch/13/221/91a" target="_blank" title="Connect with me on LinkedIn">LinkedIn</a></li>
        	 <li class="flickr"><a href="http://www.flickr.com/photos/matthewbirtch/" target="_blank" title="Find me on Flickr">Find me on Flickr</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="content_wrapper">

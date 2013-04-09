<?php
/**
 * @package WordPress
 * @subpackage mb_1_Theme */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml" 
      <?php language_attributes(); ?>>
<!--<![endif]-->
  <head profile="http://gmpg.org/xfn/11">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" 
          content="<?php bloginfo('html_type'); ?>; charset=<?php 
                   bloginfo('charset'); ?>" />
    <meta property="og:title" 
          content="<?php wp_title('&laquo;', true, 'right'); ?> <?php 
                   bloginfo('name'); ?>" />
    <meta property="og:type" content="blog"/>
    <meta property="og:url" content="http://www.matthewbirtch.com"/>
    <meta property="og:image" 
          content="<?php bloginfo('stylesheet_directory'); ?>/images/mb-logo-og.png"/>
    <meta property="og:site_name" content="matthewbirtch.com"/>
    <meta property="og:description"
          content="Matthew Birtch is a Designer/Front-end Developer from the Kitchener-Waterloo Ontario area.  "/>
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <script type="text/javascript" src="http://use.typekit.com/ynu8qth.js"></script>
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    <script type="application/x-javascript"> 
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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

  <?php if(is_page()) { $page_slug = 'page-'.$post->post_name; } ?>
	<body <?php body_class($page_slug); ?> >
  <header class="main-header">
    <div class='header-container'>
      <a href='<?php echo get_settings('home'); ?>' id='logo'>
        Matthew Birtch | Designer
      </a>
      <div class='nav-divider'>
        <a class='nav-divider-collapse-button'>
          <h4 class='nav-divider-title'>
            Menu
          </h4>
          <div class='nav-divider-collapse-icon'>
            « Hide
          </div>
        </a>
      </div>
      <nav id='nav-main'>
        <ul class='nav-main-list'>
          <li>
            <a href="<?php echo get_settings('home'); ?>">
              Blog
            </a>
          </li>
          <li>
            <a href="category/portfolio/">
              Portfolio
            </a>
          </li>
          <!--
          <li>
            <a>
              About
            </a>
          </li>
          <li>
            <a>
              Resumé
            </a>
          </li>
          -->
        </ul>
      </nav>
    	<nav id='nav-social'>
	      <ul class='nav-social-list'>
	        <li class='facebook'>
	          <a href='http://www.facebook.com/matthew.birtch' 
	             target='blank' title='facebook'>
	            Facebook
	          </a>
	        </li>
	        <li class='twitter'>
	          <a href='http://www.twitter.com/mrbirtch' 
	             target='blank' title='twitter'>
	            Twitter
	          </a>
	        </li>
	        <li class='linkedin'>
	          <a href='http://www.linkedin.com/pub/matthew-birtch/13/221/91a' 
	             target='blank' title='linkedin'>
	            LinkedIn
	          </a>
	        </li>
	        <li class='flickr'>
	          <a href='http://www.flickr.com/photos/matthewbirtch/' 
	             target='blank' title='flickr'>
	            Flickr
	          </a>
	        </li>
	      </ul>
	    </nav>
		</div>
  </header>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml" <?php language_attributes(); ?>>
<!--<![endif]-->
  <head profile="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta property="og:title" content="<?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?>" />
    <meta property="og:type" content="blog"/>
    <meta property="og:url" content="http://www.matthewbirtch.com"/>
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/images/mb-logo-og.png"/>
    <meta property="og:site_name" content="matthewbirtch.com"/>
    <meta property="og:description" content="Matthew Birtch is a Designer/Front-end Developer from the Kitchener-Waterloo Ontario area.  "/>
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <script type="text/javascript" src="//use.typekit.net/vry0tzm.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/ios-icon.png" />
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
    <?php wp_head(); ?>
  </head>

  <?php if(is_page()) { $page_slug = 'page-'.$post->post_name; } ?>
	<body <?php body_class($page_slug); ?> >
    <div class="grid-guide-wrapper">
      <div class="grid-guide">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  <div class="main-wrapper">
  <header class="main-header">
    <div id="nav-bar">
      <a href="<?php echo get_settings('home'); ?>" class="logo-icon">Home</a>
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      <div id="nav-bar-right">
        <?php get_search_form(); ?>
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
    </div>
    <a href='<?php echo get_settings('home'); ?>' id='logo'>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/matthew-birtch-logo.png" alt="Matthew Birtch | Designer"/>
    </a>
  </header>

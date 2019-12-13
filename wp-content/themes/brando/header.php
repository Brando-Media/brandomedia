<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Swift Studio</title>
        <meta name="description" content="Welcome to Swift Sutdio, the home of creativity. Working out of our studio space in the heart of London, we deliver only the best quality of work while always continually learning to take on the ever changing landscape of our industry.">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
        <link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/css/main.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
        <?php require_once('BFI_Thumb.php'); ?>
        <?php wp_head(); ?>
        
 
        <!--[if lt IE 9]> <script src="<?php bloginfo('template_directory'); ?>/javascript/html5shiv.js"></script> <![endif]-->
         
    </head>
    <body <?php body_class(); ?>>
        <?php
        $class = '';
        $domainurl = $_SERVER['HTTP_HOST'];
        if(is_singular('work')) $class = 'white-default';
        if(get_sub_field('title') == 'Consultancy'){
            $class = 'white-default';
        }else if(get_sub_field('title') == 'About'){
            $class = 'red-default';
        }
        ?>
        
         <!--div id="wrapper" class="<?php echo $class; ?>">
           <header id="header">
                <div class="container clearfix">
                    
                    <?php if(have_rows('content', 2)): ?>
                        <nav id="main-menu" class="float-right">
                            <ul>
                                <?php while(have_rows('content', 2)): the_row(); ?>
                                    <?php 
                                    $title       = get_sub_field('title');
                                    $sectionName = str_replace(' ', '', strtolower($title));
                                    $url = '#'.$sectionName;
                                    if(!is_page_template('front-page.php')) $url = get_bloginfo('url').$url;
                                    ?>
                                    <li><a href="<?php echo $url; ?>"><?php echo $title ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        </nav>
                    <?php endif; ?>
                </header>-->

               <div id="wrapper" class="<?php echo $class; ?>">
               
               <div class="fadeclass" id="fadeclassid"> </div>
               
                <header id="header" class="header">
    <div style="position:relative;" class="header__container mob-menu">
            <div class="brand-icon-block">
                <a href="#home" id="logo" class="float-left">
                    <img style="display:none; position:inherit;" class="mobile-logo" src="<?php bloginfo('template_url') ?>/assets/images/swiftsmalllogo.png" alt="Swift Studios" title="Swift Studios" />
                    <img id="whitelogo" class="white-logo" src="<?php bloginfo('template_url') ?>/assets/images/swiftsmallblack.png" alt="Swift Studios" title="Swift Studios" />
                    <img class="red-logo" src="<?php bloginfo('template_url') ?>/assets/images/swiftfulllogo.png" alt="Swift Studios" title="Swift Studios" />
                </a>
            </div>
		<div class="link-list-block abs1200" id="main-menu">
            
			<input type="checkbox" class="toggle-mob-menu-checkbox" id="mob_toggle">
          <label for="mob_toggle" class="open-mob-menu-btn" href="#"><span id="mobmenuwhite" class="open-mob-menu-btn__icon">&nbsp;</span></label>
          <ul class="header__list"> 
          <?php
            if (isset($page) && $page == 'home') { ?>
                 <!-- <?php while(have_rows('content', 2)): the_row(); ?>
                                    <?php  
                                    $title       = get_sub_field('title');
                                    $sectionName = str_replace(' ', '', strtolower($title));
                                    $url = '#'.$sectionName;
                                    if(!is_page_template('front-page.php')) $url = get_bloginfo('url').$url;
                                    ?>
                                    <li  class="header__list-item"><a onclick="hideMobileNav()" class="hover-underline-link about-link" href="<?php echo $url; ?>"><?php echo $title ?></a></li>
                                <?php endwhile; ?>-->
                                <li  class="header__list-item"><a onclick="hideMobileNav()" class="hover-underline-link about-link" href="#About">ABOUT</a></li>
                                <li  class="header__list-item"><a onclick="hideMobileNav()" class="hover-underline-link about-link" href="#featuredworks">OUR WORK</a></li>
                                <li  class="header__list-item"><a onclick="hideMobileNav()" class="hover-underline-link about-link" href="#services">SERVICES</a></li>
                                <li  class="header__list-item"><a onclick="hideMobileNav()" class="hover-underline-link about-link" href="#contact">CONTACT</a></li>
            <?php } else { ?>
              <!--  <?php while(have_rows('content', 2)): the_row(); ?>
                                    <?php 
                                    $title       = get_sub_field('title');
                                    $sectionName = str_replace(' ', '', strtolower($title));
                                    $url = '#'.$sectionName;
                                    if(!is_page_template('front-page.php')) $url = get_bloginfo('url').$url;
                                    ?>
                                    <li  class="header__list-item"><a onclick="hideMobileNav()" class="hover-underline-link about-link" href="<?php echo $url; ?>"><?php echo $title ?></a></li>
                                <?php endwhile; ?>-->
                                <li  class="header__list-item"><a onclick="hideMobileNav()" class="hover-underline-link about-link" href="#about">ABOUT</a></li>
                                <li  class="header__list-item"><a onclick="hideMobileNav()" class="hover-underline-link about-link" href="#featuredworks">OUR WORK</a></li>
                                <li  class="header__list-item"><a onclick="hideMobileNav()" class="hover-underline-link about-link" href="#services">SERVICES</a></li>
                                <li  class="header__list-item"><a onclick="hideMobileNav()" class="hover-underline-link about-link" href="#contact">CONTACT</a></li>
            <?php } ?>
        </ul>
		</div>
		
    </div>
   
</header>
            </div>
            

  

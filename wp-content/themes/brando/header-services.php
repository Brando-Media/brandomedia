<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
        <link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/css/main.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <?php require_once('BFI_Thumb.php'); ?>
        <?php wp_head(); ?>
 
        <!--[if lt IE 9]> <script src="<?php bloginfo('template_directory'); ?>/javascript/html5shiv.js"></script> <![endif]-->
        
    </head>
    <body <?php body_class(); ?>>
        <?php
        $domainurl = $_SERVER['HTTP_HOST'];
        $class = 'white-default';
        if(is_singular('work')) $class = 'white-default';
        if(get_sub_field('title') == 'Consultancy'){
            $class = 'white-default';
        }
        ?>
        <div id="wrapper" class="<?php echo $class; ?>">
            <header id="header">
                <div class="container clearfix">
                    <a href="http://brando.media/brando#home" id="logo" class="float-left">
                        <img class="white-logo" src="<?php bloginfo('template_url') ?>/assets/images/logo-white.png" alt="Brando Media" title="Brando Media" />
                        <img class="red-logo" src="<?php bloginfo('template_url') ?>/assets/images/logo-red.png" alt="Brando Media" title="Brando Media" />
                    </a>
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
                                    <?php if($sectionName == 'contact' || $sectionName == 'services'){ ?>
                                        <li><a href="<?php echo '#' . $sectionName; ?>"><?php echo $title ?></a></li>
                                    <?php }else{ ?>
                                        <li><a href="#" onclick='goToAnchor("<?php echo $sectionName ?>")'><?php echo $title ?></a></li>
                                    <?php } ?>
                                    
                                <?php endwhile; ?>
                            </ul>
                        </nav>
                    <?php endif; ?>
                </div>
            </header>

            <script>
                var baseURL = '<?php echo get_bloginfo('url')?>';
                function goToAnchor(anchor) {
                    $newurl = baseURL + '/#' + anchor;
                    console.log($newurl);
                    window.location.href = $newurl;
                    return false;
                }            
            </script>
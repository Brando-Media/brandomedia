<?php 
/*
Template Name: Front Page
*/
get_header(); ?>
    <section class="section red-bg" data-section-name="home"><div><img class="white-logo" style="max-width:100vw; min-width:100vw; max-height:100vh;" src="<?php bloginfo('template_url') ?>/assets/images/home.gif" alt="Brando Media" title="Brando Media" /><div></section>
    <?php 
    if(have_rows('content')){
        while(have_rows('content')){
            the_row();
            if(get_row_layout() == 'content') get_template_part('templates/content');
            if(get_row_layout() == 'services') get_template_part('templates/services');
            if(get_row_layout() == 'contact') get_template_part('templates/contact');
            if(get_row_layout() == 'featured_work') get_template_part('templates/featured_work');
        }
    }
    ?>
<?php get_footer(); ?>
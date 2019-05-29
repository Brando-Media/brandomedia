<?php
$bg          = get_sub_field('background');
$title       = get_sub_field('title');
$sectionName = str_replace(' ', '', strtolower($title));
?>
<section class="section <?php echo $bg; ?>-bg d-flex" data-section-name="<?php echo $sectionName; ?>">
    <div class="container container--small container--small align-self-center">
        <h2 class="main-title"><?php echo $title; ?></h2>
        <div class="row">
            <div class="services-content">
                <?php echo get_sub_field('content'); ?>
            </div>
        </div>
        
        
    </div> 
    <div class="services-line-pos">
        <div class="line">
        </div>  
    <div>
</section>

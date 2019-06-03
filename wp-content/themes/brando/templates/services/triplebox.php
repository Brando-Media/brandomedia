<?php
$bg          = get_sub_field('background');
$services    = get_sub_field('services');
$title       = get_sub_field('title');
$dtitle       = get_sub_field('displayed_title');
$sectionName = str_replace(' ', '', strtolower($title));
?>
<section class="section <?php echo $bg ?>-bg d-flex" data-section-name="<?php echo $sectionName; ?>">
    <div class="container container--small align-self-center">
        <h2 class="main-title" style="color:white"><?php echo $dtitle?></h2>
        <div class="row services-experts"> 
            <div class="col-lg-4" >
                <?php echo $services[0]['content'] ?>  
            </div>
            <div class="col-lg-4">
                <?php echo $services[1]['content'] ?>  
            </div>
            <div class="col-lg-4">
            <?php echo $services[2]['content'] ?>  
            </div>
        </div>
    </div>
</section>
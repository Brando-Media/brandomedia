<?php
$bg          = get_sub_field('background');
$services    = get_sub_field('services');
$title       = get_sub_field('title');
$sectionName = str_replace(' ', '', strtolower($title));
?>
<section class="section <?php echo $bg; ?>-bg d-flex" data-section-name="<?php echo $sectionName; ?>">
    <div class="container container--small align-self-center">
        <h2 class="main-title"><?php if($title != 'Services'){echo $title;}; ?></h2>
        <?php if($services): ?>
            <div class="row" style="font-size:16px">
                <?php foreach($services as $k=>$service): ?>
                    <?php
                    $class = '';
                    if($k%2==1) $class = 'ml-auto';
                    ?>
                    <div class="col-lg-5 list-service servicefont <?php echo $class; ?>">
                        <h3 style=""><?php echo $service['title']; ?></h3>
                        <p style="font-size:16px;"><?php echo $service['content']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
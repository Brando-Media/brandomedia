<?php
$image    = get_sub_field('image');
$title    = get_sub_field('title');
$leftContent  = get_sub_field('left_content');
$rightContent  = get_sub_field('right_content');
?>
<div class="grey-bg work-section-with-bg">
    <div class="container container--small main-content">
        <img class="img-fluid" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75); ?>">
        <?php echo $title ? "<h2 class='title'>{$title}</h2>" : '' ?>
        <div class="row">
            <div class="col-lg-6 left-content-work-block">
                <?php echo $leftContent; ?>
            </div>
            <div class="col-lg-6 right-content-work-block">
                <?php echo $rightContent ?>
            </div>
        </div>
    </div>
</div>
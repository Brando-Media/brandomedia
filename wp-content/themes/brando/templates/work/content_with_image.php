<?php 
$image    = get_sub_field('image');
$imagePos = get_sub_field('image_position');
$title    = get_sub_field('title');
$content  = get_sub_field('content');
?>
<div class="container container--small main-content">
    <div class="row d-flex">
        <?php if($imagePos=='Left'): ?>
            <div class="col-lg-6 text-center align-self-center left-content-work-block">
                <?php if($image): ?>
                    <img style="height:auto;" class="img-fluid content-image" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75); ?>">
                <?php endif; ?>
            </div>
            <div class="col-lg-6 align-self-center right-content-work-block">
                <?php echo $title ? "<h2 class='title'>{$title}</h2>" : '' ?>
                <?php echo $content; ?>
            </div>
        <?php elseif($imagePos=='Right'): ?>
            <div class="col-lg-6 align-self-center left-content-work-block">
                <?php echo $title ? "<h2 class='title'>{$title}</h2>" : '' ?>
                <?php echo $content; ?>
            </div> 
            <div class="col-lg-6 text-center align-self-center right-content-work-block">
                <?php if($image): ?>
                    <img style="height:auto;" class="img-fluid content-image" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75); ?>">
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
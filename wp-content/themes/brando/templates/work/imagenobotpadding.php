<?php
$image = get_sub_field('image');
$contain = get_sub_field('contain');
?>
<?php if($contain): ?>
    <div class="container container--small main-content text-center" style="padding-bottom:0px;">
        <img style="margin-bottom:0px; width:95%;" class="img-fluid" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75); ?>">
    </div>
<?php else: ?>
    <img style="margin-bottom:0px;" class="img-fluid w-100" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75); ?>">
<?php endif; ?>
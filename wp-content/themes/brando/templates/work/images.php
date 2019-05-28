<?php 
$images = get_sub_field('images'); ?>
<?php if($images): ?>
    <div class="row m-0">
        <?php foreach($images as $k=>$image): ?>
            <?php
            $class = 'pl-0 pr-2';
            if($k%2==1) $class = 'pr-0 pl-2';
            ?>
            <div class="col-lg-6 <?php echo $class; ?>">
                <img class="img-fluid w-100" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75) ?>">
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
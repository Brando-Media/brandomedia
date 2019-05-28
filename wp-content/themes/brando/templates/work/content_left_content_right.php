<?php
$titleLeft    = get_sub_field('title_left');
$titleRight    = get_sub_field('title_right');
$ContentLeft  = get_sub_field('content_left');
$ContentRight  = get_sub_field('content_right');
?>

<div class="container container--small main-content">
    <div class="row d-flex">
        <div class="col-lg-6 align-self-center left-content-work-block">
            <?php echo $titleLeft ? "<h2 class='title'>{$titleLeft}</h2>" : '' ?>
            <?php echo $ContentLeft; ?>
        </div>
        <div class="col-lg-6 align-self-center right-content-work-block">
            <?php echo $titleRight ? "<h2 class='title'>{$titleRight}</h2>" : '' ?>
            <?php echo $ContentRight ?>
        </div>
    </div>
</div>

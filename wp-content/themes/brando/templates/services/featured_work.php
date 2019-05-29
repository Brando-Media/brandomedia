<?php
    $bg          = get_sub_field('background');
    $link        = get_sub_field('page_link');
    $title       = get_sub_field('title');
    $sectionName = str_replace(' ', '', strtolower($title));

    $works = array(
        'post_type'      => 'work',
        'posts_per_page' => -1
    );
    $works = get_posts($works);
?>

<section class="section <?php echo $bg; ?>-bg d-flex" data-section-name="<?php echo $sectionName; ?>">
    <div class="container container--small the-featured-work">
        <h2 class="main-title"><?php echo $title; ?></h2>
        <?php if($works): ?>
            <div class="row">
                <?php foreach($works as $k=>$work): ?>
                    <?php 
                        $image = get_field('featured_image', $work->ID);
                        $done = get_field('what_we_done', $work->ID);
                        $class = '';
                        if($k>3) $class = 'd-none hidden-work';
                    ?>
                    <div class="col-lg-6 work-item <?php echo $class; ?>">
                        <div class="work-item-block">
                            <a href="<?php echo get_permalink($work->ID); ?>">
                                <?php if($image): ?>
                                    <img class="img-fluid w-100" src="<?php echo $image['url'] ?>" />
                                <?php endif; ?>
                                <h5><?php echo $work->post_title ?> / <span><?php echo implode(', ', $done) ?></span></h5>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-lg-12 show-btn-block">
                    <a href="#" class="btn-block show-more-work">Show More work</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php 
$completed = get_field('what_we_done');
get_header('work'); ?>
    <section class="section white-bg">
        <div class="container container--small main-content">
            <h1 class="main-title"><?php the_post(); the_title(); ?></h1>
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">Project Description</h2>
                    <div class="project-description left-content-work-block">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php if($completed): ?>
                    <div class="col-lg-6 work-completed">
                        <h2 class="title">Work Completed</h2>
                        <ul>
                            <?php foreach($completed as $complete): ?>
                                <li><?php echo $complete ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php 
        if(have_rows('content')){
            while(have_rows('content')){
                the_row();
                if(get_row_layout() == 'image') get_template_part('templates/work/image');
                if(get_row_layout() == 'content_with_image') get_template_part('templates/work/content_with_image');
                if(get_row_layout() == 'images') get_template_part('templates/work/images');
                if(get_row_layout() == 'content_with_image_at_top') get_template_part('templates/work/content_with_image_at_top');
                if(get_row_layout() == 'content_left_content_right') get_template_part('templates/work/content_left_content_right');
				if(get_row_layout() == 'imagenobotpadding') get_template_part('templates/work/imagenobotpadding');
            }
        }
        ?>
    </section>
<?php get_footer('services'); ?>
<?php 
$completed = get_field('what_we_done');
get_header('services'); ?>
            <div class="row">
                    <div class="services-content" style="font-size:42px;">
                        <p style="font-style:gotham-light"> <?php  the_content(); ?> </p>
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



                if(get_row_layout() == 'content') get_template_part('templates/services/content');
                if(get_row_layout() == 'services') get_template_part('templates/services/services');
                if(get_row_layout() == 'contact') get_template_part('templates/services/contact');
                if(get_row_layout() == 'featured_work') get_template_part('templates/services/featured_work');
                if(get_row_layout() == 'triplebox') get_template_part('templates/services/triplebox');
            }
        }
        ?>
<?php get_footer('services'); ?>
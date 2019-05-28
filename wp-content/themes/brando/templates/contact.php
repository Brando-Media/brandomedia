<?php
$bg          = get_sub_field('background');
$text        = get_sub_field('form_text');
$address     = get_sub_field('address');
$email       = get_sub_field('email');
$phone       = get_sub_field('phone_number');
$title       = get_sub_field('title');
$sectionName = str_replace(' ', '', strtolower($title));
?>
<section class="section <?php echo $bg ?>-bg d-flex" data-section-name="<?php echo $sectionName; ?>">
    <div class="container container--small align-self-center">
        <h2 class="main-title"><?php echo $title; ?></h2>
        <div class="row">
            <div class="col-lg-6 contact-form">
                <?php echo $text ? "<p>{$text}</p>" : '' ?>
                <?php echo do_shortcode('[contact-form-7 id="11" title="Contact Form"]') ?>
            </div>
            <div class="col-lg-6">
                <div class="contact-details">
                    <?php
                    echo $address ? "<p>{$address}</p>" : '';
                    echo $email ? "<p><a href='mailto:{$email}'>{$email}</a></p>" : '';
                    echo $phone ? "<p>{$phone}</p>" : '';
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
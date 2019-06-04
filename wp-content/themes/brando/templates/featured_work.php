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
    $workpos = 0;
?>

<section id="featuredworks" class="section <?php echo $bg; ?>-bg d-flex" data-section-name="<?php echo $sectionName; ?>">
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
                        $workpos++;
                    ?>
                    <div class="col-lg-6 work-item <?php echo $class; ?>">
                        <div class="work-item-block">
                            <a id="<?php echo $workpos ?>" href="<?php echo get_permalink($work->ID); ?>">
                                <?php if($image): ?>
                                    <img class="img-fluid w-100" src="<?php echo $image['url'] ?>" />
                                <?php endif; ?>
                                <h5><?php echo $work->post_title ?> / <span><?php echo implode(', ', $done) ?></span></h5>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div style="height:40px; z-index:100;">
                <section id="buttonsection" class="section white-bg" data-section-name="show-more-work"  style="z-index:1; height:40px; !important;">
                <div class="col-lg-12 show-btn-block" style="height:40px; margin-top:0px;">
                    <a id="brandoele" href="#featuredworks" class="btn-block show-more-work" onclick="goToAnchor('4')">Show More work</a>
                </div>
                <!--</section>-->
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<script>

window.addEventListener("scroll", function(e) {
    document.getElementById('buttonsection').style.height = "100px";
});

function goToAnchor(anchor) {
    console.log("test");
  var loc = document.location.toString().split('#')[0];
  document.location = loc + '#' + anchor;
  var element = document.getElementById("buttonsection");
  if(element.classList.contains("section")){
           element.classList.remove("section");
    }else{
        element.classList.add("section");
    }
  return false;
}
    window.addEventListener("scroll", function(e) {
        $(function() {
            var titlename = $.scrollify.current();
            var type = window.location.hash.substr(1);
            if(type == 'featuredwork'){

            }   
        });
    });

    window.addEventListener('wheel', function(e) {
        (function($){
            if (e.deltaY < 0) {
                var type = window.location.hash.substr(1);
                if(type == 'show-more-work'){
                    //$.scrollify.move("#featuredwork");
                }
                if(type == 'services'){
                    //$.scrollify.move("#featuredwork");
                   // console.log('test');
                }
                if($.scrollify.isDisabled()){
                   // console.log('wdh');
                }
            }
            if (e.deltaY > 0) {

            }
        })(jQuery);
    });

    
</script>
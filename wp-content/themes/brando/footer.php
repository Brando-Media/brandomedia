            <div id="brando-container" class="container"><span id="brando">Brando Media</span></div>
            <footer id="footer" class="container">
                <a href="#" class="float-right">Instagram</a>
            </footer>
        </div><?php //#wrapper ?>
        <?php wp_footer(); ?>
        <script src="<?php bloginfo('template_directory'); ?>/javascript/script.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/javascript/scrollify.js"></script>

        <script>
            /*
            <?php if(!is_singular('work')): ?>
                $(window).on('load', function(){
                    $.scrollify({
                        section : ".section",
                        before: function(i, el){
                            var nextEl = $(el[i]);
                            var wrapperClass = '';
                            if(nextEl.hasClass('red-bg')){
                                wrapperClass = 'red-default';
                            }
                            else if(nextEl.hasClass('pink-bg')){
                                wrapperClass = 'pink-default';
                            }
                            else if(nextEl.hasClass('blue-bg')){
                                wrapperClass = 'blue-default';
                            }
                            else if(nextEl.hasClass('green-bg')){
                                wrapperClass = 'green-default';
                            }
                            else if(nextEl.hasClass('white-bg')){
                                wrapperClass = 'white-default';
                            }

                            $('#wrapper').removeAttr('class');
                            $('#wrapper').addClass(wrapperClass);
                            $('#main-menu ul li a').removeClass('active');
                        },
                        after: function(i, el){
                            var current = $.scrollify.current();
                            current = $(current).data('section-name');
                            
                            $('#main-menu ul li a[href=#'+current+']').addClass('active');
                        },
                        sectionName : "section-name",
                        overflowScroll: true,
                    });
                });
            <?php endif; ?>

            $(function() {
                <?php if(!is_singular('work')): ?>
                    $('#main-menu ul li a').on('click', function (e) {
                        var target = $(this).attr('href');
                        target = target.replace('#', '');
                        target = $("[data-section-name='" + target + "']");
                        var t = $(target).offset().top;
                        $('body,html').animate({ 'scrollTop': t }, 1000);
                        $(this).parent('li').siblings('li').find('a').removeClass('active');
                        $(this).addClass("active");
                        return false;
                    });
                <?php endif; ?>

                $('#logo').on('click', function (e) {
                    var target = $(this).attr('href');
                    target = target.replace('#', '');
                    target = $("[data-section-name='" + target + "']");
                    var t = $(target).offset().top;
                    $('body,html').animate({ 'scrollTop': t }, 1000)
                    return false;
                });

                $('.show-more-work').on('click', function(){
                    $('.hidden-work').toggleClass('d-none');
                    if($('.hidden-work').is(':visible')){
                        $(this).text('Hide More Work');
                    }else{
                        $.scrollify.disable();
                        $(this).text('Show More Work');
                        setTimeout(function(){
                            $.scrollify.enable();
                        }, 500);
                    }
                    $.scrollify.update();
                    return false;
                });
            });

            $(document).ready(function(e){
                var type = window.location.hash.substr(1);
                $.scrollify.disable();
                //console.log(type);

                $(".downarrow").click(function(){
                    $.scrollify.next();
                });

            $(".uparrow").click(function(){
                $.scrollify.move();
            });
                setTimeout(function(){
                    $.scrollify.enable();
                    $.scrollify.move("#" + type);
                }, 200);
            });

        //so code to disable scrollify on pages too big
        /*    (function($){
            'use strict';
            var $section = $('.js-section');
            var $pager = $('#js-pager');
            var option = {
            section : '.js-section',
            sectionName:false,
            easing: "swing",
            scrollSpeed: 1500,
            scrollbars: true,
            overflowscroll: true,
            interstitialSection: ".header",
            before:function(index) {
                pagerCurrent(index);
            },
            afterRender:function() {
                createPager();
            }
            };

    $(document).ready(function(e){
        var type = window.location.hash.substr(1);
        $.scrollify.disable();
        console.log(type);
        $.scrollify(option);

        $(".downarrow").click(function(){
            $.scrollify.next();
        });

      $(".uparrow").click(function(){
        $.scrollify.move();
      });
        setTimeout(function(){
            $.scrollify.enable();
            $.scrollify.move("#" + type);
        }, 200);
    });

    function pagerCurrent(index = 0) {
      var $li = $pager.find('li');
      $li.removeClass('is-current');
      $li.eq(index).addClass('is-current');
    }

    function createPager() {
        $section.each(function(i, e){
            var sectionName = $(e).attr('data-section-name');
            var addClass = '';
            if (i === 0) {
                addClass = 'is-current';
            }
            var html = '';
            html += '<li class="' + addClass + '">';
            html += '<a href="#' + sectionName + '"></a>';
            html += '</li>';
            $pager.append(html);
        });
        pagerLink();
    }

    function pagerLink () {
      $pager.find('a').on('click', function() {
        $.scrollify.move($(this).attr("href"));
      });
    }

    
}(jQuery));*/
$(function() {
    $.scrollify({
    section : ".example-classname",
    sectionName : "section-name",
    interstitialSection : "",
    easing: "easeOutExpo",
    scrollSpeed: 1100,
    offset : 0,
    scrollbars: true,
    standardScrollElements: "",
    setHeights: true,
    overflowScroll: true,
    updateHash: true,
    touchScroll:true,
    before:function() {},
    after:function() {},
    afterResize:function() {},
    afterRender:function() {}
  });
});
        </script>
    </body>
</html>
<div id="brando-container" class="container"><span id="brando">Brando Media</span></div>
            <footer id="footer" class="container">
                <a href="#" class="float-right">Instagram</a>
            </footer>
        </div><?php //#wrapper ?>
        <?php wp_footer(); ?>
        <script src="<?php bloginfo('template_directory'); ?>/javascript/script.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/javascript/scrollify.js"></script>

        <script>
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
                    /*var target = $(this).attr('href');
                    target = target.replace('#', '');
                    target = $("[data-section-name='" + target + "']");
                    var t = $(target).offset().top;
                    $('body,html').animate({ 'scrollTop': t }, 1000)
                    return false;*/
                });

                $('.show-more-work').on('click', function(){
                    $('.hidden-work').toggleClass('d-none');
                    if($('.hidden-work').is(':visible')){
                        $(this).text('Hide More Work');
                    }else{
                        $(this).text('Show More Work');
                    }
                    $.scrollify.update();
                    return false;
                });
            });
        </script>
    </body>
</html>
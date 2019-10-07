<!--<div id="brando-container" class="container"><span id="brando">Brando Media</span></div>-->
           <!-- <footer id="footer" class="container">
                <a href="#" class="float-right">Instagram</a>
            </footer> -->
        </div><?php //#wrapper ?>
        <?php wp_footer(); ?>
        <script src="<?php bloginfo('template_directory'); ?>/javascript/script.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/javascript/scrollify.js"></script>

        <script>
        $.scrollify.disable();
                        var test = '<?php echo bloginfo('template_directory'); ?>';

            function hideMobileNav(){
                $(".header__list").fadeToggle("slow");
                $(".fadeclass").fadeToggle("slow");
                $(".fadeclass").css("display","none");
                $("#mobmenuwhite").toggleClass("menuwhitebg");
                $(".mobile-logo").toggle();
                $(".white-logo").toggle();
                $(".red-logo").toggle();
                if (document.getElementById('whitelogo').getAttribute('src') != test+"/assets/images/swiftsmalllogo.png"){
                    $(".white-logo").attr("src",test+"/assets/images/swiftsmalllogo.png");
                    $(".red-logo").attr("src",test+"/assets/images/swiftsmalllogo.png");
                }else{
                    $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
                    $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
                }
            }

            $(".open-mob-menu-btn").on("click", function() {
                $(".header__list").fadeToggle("slow");
                $(".fadeclass").fadeToggle("slow");
                $("#mobmenuwhite").toggleClass("menuwhitebg");
                $(".mobile-logo").toggle();
                $(".white-logo").toggle();
                $(".red-logo").toggle();
                if (document.getElementById('whitelogo').getAttribute('src') != test+"/assets/images/swiftsmalllogo.png"){
                    $(".white-logo").attr("src",test+"/assets/images/swiftsmalllogo.png");
                    $(".red-logo").attr("src",test+"/assets/images/swiftsmalllogo.png");
                }else{
                    $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
                    $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
                }

            });
            <?php if(!is_singular('work')): ?>
                $(window).on('load', function(){ 
                    $.scrollify({
                        section : ".section",
                        before: function(i, el){
                            var nextEl = $(el[i]);
                            var wrapperClass = '';
                            if(nextEl.hasClass('red-bg')){
                                wrapperClass = 'red-default';
                                if($('.white-logo').attr('src') == test+"/assets/images/swiftsmalllogo.png"){

                                }else{
                                    $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
                                    $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
                                }
                            }
                            else if(nextEl.hasClass('pink-bg')){
                                wrapperClass = 'pink-default';
                                if($('.white-logo').attr('src') == test+"/assets/images/swiftsmalllogo.png"){

                                }else{
                                    $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
                                    $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
                                }
                            }
                            else if(nextEl.hasClass('blue-bg')){
                                wrapperClass = 'blue-default';
                                if($('.white-logo').attr('src') == test+"/assets/images/swiftsmalllogo.png"){

                                }else{
                                    $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
                                    $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
                                }
                            }
                            else if(nextEl.hasClass('orange-bg')){
                                wrapperClass = 'orange-default';
                                if($('.white-logo').attr('src') == test+"/assets/images/swiftsmalllogo.png"){

                                }else{
                                    $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
                                    $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
                                }
                            }
                            else if(nextEl.hasClass('green-bg')){
                                wrapperClass = 'green-default';
                                if($('.white-logo').attr('src') == test+"/assets/images/swiftsmalllogo.png"){

                                }else{
                                    $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
                                    $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
                                }
                            }
                            else if(nextEl.hasClass('white-bg')){
                                wrapperClass = 'white-default';
                                if($('.white-logo').attr('src') == test+"/assets/images/swiftsmalllogo.png"){

                                }else{
                                    $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
                                    $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
                                }
                            }
                            else if(nextEl.hasClass('homeblue-bg')){
                                wrapperClass = 'homeblue-default';
                                if($(window).width() <= 991){
                                    $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
                                    $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
                                    console.log("gelo");
                                }else{
                                    $(".white-logo").attr("src",test+"/assets/images/swiftfulllogo.png");
                                    $(".red-logo").attr("src",test+"/assets/images/swiftfulllogo.png");
                                }  
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
                        $(this).text('Show More Work');
                    }
                    $.scrollify.update();
                    return false;
                });
            });

            $(window).load(function(){
                var project1 = $('section:nth-of-type(1)').offset();
                var project2 = $('section:nth-of-type(2)').offset();
                var project3 = $('section:nth-of-type(3)').offset();
                //var project6 = $('section:nth-of-type(6)').offset();
                var $window = $(window);
                
                $window.scroll(function() {
                    if ( $window.scrollTop() >= project3.top ) {
                        $("#wrapper").removeClass().addClass("white-default");

                    }else if ( $window.scrollTop() >= project2.top ) {
                        $("#wrapper").removeClass().addClass("blue-default");
                        $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
                    }else if ( $window.scrollTop() >= project1.top) {
                        $("#wrapper").removeClass().addClass("orange-default");
                    }
                }); 
            });
        </script>
    </body>
</html>
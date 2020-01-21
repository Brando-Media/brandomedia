            <!--<div id="brando-container" class="container"><span id="brando">Brando Media</span></div>-->
            <!--<footer id="footer" class="container">
                <a href="#" class="float-right">Instagram</a>
            </footer>-->
        </div><?php //#wrapper ?>
        <?php wp_footer(); ?>
        <script src="<?php bloginfo('template_directory'); ?>/javascript/script.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/javascript/scrollify.js"></script>
        

        <script>
        

            var test = '<?php echo bloginfo('template_directory'); ?>';
           // $.scrollify.disable();
            
            
            
            <?php if(!is_singular('work')): ?>
                $(window).on('load', function(){
                    //$.scrollify.move("#about");
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
            $(document).load( function() { $('body').fadeIn(); });


            $(function() {
                $(document).on('click', 'a[href^="#"]', function (event) {
                    event.preventDefault();

                    $('html, body').animate({
                        scrollTop: $($.attr(this, 'href')).offset().top
                    }, 1000);
                });
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
                   // $('.hidden-work').toggleClass('d-none');
                   if($(".hidden-work").css("display")=="block"){
                        $("#brandoele").text('Show More Work');
                   }else{
                        $("#brandoele").text('Hide More Work');
                   }
                    $(".hidden-work").fadeToggle("slow");
                    //$.scrollify.destroy();
                    //$.scrollify.update();
                    /*isf($('.hidden-work').is(':visible')){
                        //$(this).text('Hide More Work');
                        $.scrollify.update();
                    }else{
                        $.scrollify.update();
                        $.scrollify.disable();
                        //$(this).text('Show More Work');
                        setTimeout(function(){
                            $.scrollify.enable();
                            $.scrollify.update();
                        }, 500);
                    }
                    $.scrollify.update();*/
                    return false;
                });
            });

            $(document).ready(function(e){
                var type = window.location.hash.substr(1);
                $.scrollify.disable();
                $(".downarrow").click(function(){
                    $.scrollify.next();
                });

            $(".uparrow").click(function(){
                //$.scrollify.move();
            });
                setTimeout(function(){
                    //$.scrollify.enable();
                    //$.scrollify.move("#" + type);
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
$(function(){
				$('.UpMenus > li').click(function(){
					var ol = $(this).children('ol');
					var h = ol.height()?0:ol.children('li').length*21;
					var d = 0;
					ol.parent().parent().children('li').each(function(){
						if (d) {
							$(this).children('ol').animate({height:'0px'},800,function(){$(this).removeClass('Up');});
							$(this).animate({top:'0px'},800);
						} else if (!$(this).is(ol.parent())) {
							$(this).children('ol').animate({height:'0px'},800,function(){$(this).removeClass('Up');});
							$(this).animate({top:(h?-h:'0')+'px'},800);
						} else {
							if (h) ol.addClass('Up');
							ol.animate({height:h+'px'},800);
							$(this).animate({top:'0px'},800,function(){if(!h){ol.removeClass('Up')}});
							d = 1;
						}
					});
				});
			});
    $(window).on('load', function(){    
        menuMobile(); 

    });

    $(window).on('resize', function(){
        menuMobile();
        pageResized();
        headerChangeResize();
        //resizePageHeaderChange();

    })

    function pageResized(){
        if($("#fadeclassid").css("display")=="none"){
            $(".mobile-logo").css("display","none");
            $(".white-logo").css("display","block");
            $(".red-logo").css("display","block");
            $("#mobmenuwhite").removeClass("menuwhitebg");
        }
    }

    function menuMobile(){
        if($("#fadeclassid").css("display")=="none"){
            $(".header").css('background','#1e3b4c4a');
            //$(".mobile-logo").toggle();
            //$(".white-logo").toggle();
           // $(".red-logo").toggle();
        }else{

        }
        $(".fadeclass").css("display","none");

 
        if($(window).width() <= 1200){
            $(".header__list").css("display", "none");
        
        }else{
            $(".header__list").css("display", "block"); 
        }
        if($(window).width() <= 991){
            $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
            $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
        }else{
                $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
                $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
        }  
    }
    

    $('.header__list .header__list-item a').on('click', function (e) {
        var target = $(this).attr('href');
        target = target.replace('#', '');
        target = $("[data-section-name='" + target + "']");
        var t = $(target).offset().top;
        $('body,html').animate({ 'scrollTop': t }, 1000)
        $(".header__list").css("display", "none");
        return false;
    });
    function resizePageHeaderChange(){
        if($("#fadeclassid").css("display")=="none"){
            
            $(".showmoreworkbuttondiv").fadeToggle("slow");
            if (document.getElementById('whitelogo').getAttribute('src') != test+"/assets/images/swiftsmalllogo.png"){
                $(".white-logo").attr("src",test+"/assets/images/swiftsmalllogo.png");
                $(".red-logo").attr("src",test+"/assets/images/swiftsmalllogo.png");
            }else{
                $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
                $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
            }
        }else{
            
        }
    }
    function hideMobileNav(){
        $(".header__list").fadeToggle("slow");
        $(".fadeclass").fadeToggle("slow");
        if($("#fadeclassid").css("display")=="none"){

        }else{
           
            /*$("#mobmenuwhite").toggleClass("menuwhitebg");
            $(".mobile-logo").toggle();
            $(".white-logo").toggle();
            $(".red-logo").toggle();
            if (document.getElementById('whitelogo').getAttribute('src') != test+"/assets/images/swiftsmalllogo.png"){
                $(".white-logo").attr("src",test+"/assets/images/swiftsmalllogo.png");
                $(".red-logo").attr("src",test+"/assets/images/swiftsmalllogo.png");
            }else{
                $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
                $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
            }*/
        }
            
            $(".fadeclass").css("display","none");
        
    }

    $(".open-mob-menu-btn").on("click", function() {
        $(".header__list").fadeToggle("slow");
        $(".fadeclass").fadeToggle("slow");
        $("#mobmenuwhite").toggleClass("menuwhitebg");
        $(".mobile-logo").toggle();
        $(".white-logo").toggle();
        $(".red-logo").toggle();
        $(".showmoreworkbuttondiv").fadeToggle("slow");
        if (document.getElementById('whitelogo').getAttribute('src') != test+"/assets/images/swiftsmalllogo.png"){
            $(".white-logo").attr("src",test+"/assets/images/swiftsmalllogo.png");
            $(".red-logo").attr("src",test+"/assets/images/swiftsmalllogo.png");
        }else{
            $(".white-logo").attr("src",test+"/assets/images/swiftsmallblack.png");
            $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
        }

	});
	$(".logo-header").click(function() {
	  $("html, body").animate({ scrollTop: 0 }, 700);
	  return false;
    });
    function headerChangeResize(){
        if($(window).width() <= 991){
            $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
        }else{
            $(".red-logo").attr("src",test+"/assets/images/swiftfulllogo.png");
        }  
        var project1 = $('.homeblue-bg').offset();
        var project2 = $('.aboutsection').offset();
        var project3 = $('#featuredworks').offset();
        var project4 = $('.servicesclass').offset();
        var project5 = $('.contactclass').offset();
        //var project6 = $('section:nth-of-type(6)').offset();
        var $window = $(window);
    }
    $(window).load(function(){
        if($(window).width() <= 991){
            $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
        }else{
            $(".red-logo").attr("src",test+"/assets/images/swiftfulllogo.png");
        }  
        var project1 = $('.homeblue-bg').offset();
        var project2 = $('.aboutsection').offset();
        var project3 = $('#featuredworks').offset();
        var project4 = $('.servicesclass').offset();
        var project5 = $('.contactclass').offset();
        //var project6 = $('section:nth-of-type(6)').offset();
        var $window = $(window);
        
        $window.scroll(function() {
            var project1 = $('.homeblue-bg').offset();
            var project2 = $('.aboutsection').offset();
            var project3 = $('#featuredworks').offset();
            var project4 = $('.servicesclass').offset();
            var project5 = $('.contactclass').offset();
            if ( $window.scrollTop() >= project5.top - 85 ) {
                $(".header").css('background','transparent');
                $("#wrapper").removeClass().addClass("orange-default");
            }else if ( $window.scrollTop() >= project4.top - 85) {
                $(".header").css('background','transparent');
                $("#wrapper").removeClass().addClass("blue-default");
                $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");

            }else if ( $window.scrollTop() >= project3.top - 85) {
                $(".header").css('background','transparent');
                $("#wrapper").removeClass().addClass("white-default");

            }else if ( $window.scrollTop() >= project2.top - 85) {
                $(".header").css('background','transparent');
                $("#wrapper").removeClass().addClass("orange-default");

            }else if ( $window.scrollTop() >= project1.top - 85) {
                $(".header").css('background','#1e3b4c4a');
                $("#wrapper").removeClass().addClass("homeblue-default");
                if($(window).width() <= 991){
                    $(".red-logo").attr("src",test+"/assets/images/swiftsmallorange.png");
                }else{
                    $(".red-logo").attr("src",test+"/assets/images/swiftfulllogo.png");
                }  
            }
        });

    });
    $(document).ready(function(){
        
    });
        </script>
        <div class="footerdiv">Swift Studio Ltd © Copyright 2020</div>
    </body>
</html>
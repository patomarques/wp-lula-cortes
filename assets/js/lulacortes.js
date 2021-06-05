(function ($) {
    $(document).ready(function () {
        $('.nav-link').on('click', function(){            
            $('.toggle')[0].click();
            //$('.toggle')[0].toggleClass('noVisibile');

            var sectionToScroll = $(this).attr('href').replace('#', '#section-');
            $("html, body").animate({
                scrollTop: $(sectionToScroll).offset().top - 30
            });
        });

        $('.toggle').on('click', function () {
            $('.toggle').toggleClass('active');
            $('#overlay').toggleClass('open');
            //$(this).toggleClass('hidden ')
        });

        if($('#slider-banners').length > 0) {
            $('#slider-banners').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                variableWidth: false
            });
        }
        

        var $animation_elements = $('.slide');
        var $window = $(window);

        function isOnView() {
            var window_height = $window.height();
            var window_top_position = $window.scrollTop();
            var window_bottom_position = (window_top_position + window_height);
            $.each($animation_elements, function () {
                var $element = $(this);
                var element_height = $element.outerHeight();
                var element_top_position = $element.offset().top;
                var element_bottom_position = (element_top_position + element_height);
                if ((element_bottom_position >= window_top_position) &&
                    (element_top_position <= window_bottom_position)) $element.addClass('hasSlid');
                else $element.removeClass('hasSlid');
            });
        }

        function fixMenu(){
            let sectionElement = document.getElementById('section-bio');
            let menuElement = $('.menu-main');

            //console.log('menu effect ', sectionElement.scrollTop);
        }

        $window.on('scroll resize', isOnView);

        $window.on('scroll resize', fixMenu);

        let sliderElement = document.getElementById('slider-banners');

        if(sliderElement != null){
            let elementHeight = sliderElement.offsetHeight;

            $(window).scroll(function() {            
                
                if ($(document).scrollTop() > elementHeight) {
                    $('.menu-main').addClass('shrink menu-main--dark');
                } else {
                    $('.menu-main').removeClass('shrink menu-main--dark');
                }
            });
        }

        
    });
})(jQuery);
(function ($) {
    $(document).ready(function () {
        $('.toggle').on('click', function () {
            $('.toggle').toggleClass('active');
            $('#overlay').toggleClass('open');
        });

        $('#slider-banners').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true
        });

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

        let elementHeight = document.getElementById('slider-banners').offsetHeight;

        $(window).scroll(function() {            
            
            console.log('size ', elementHeight);
            
            if ($(document).scrollTop() > elementHeight) {
                $('.menu-main').addClass('shrink menu-main--dark');
            } else {
                $('.menu-main').removeClass('shrink menu-main--dark');
            }
        });
    });
})(jQuery);
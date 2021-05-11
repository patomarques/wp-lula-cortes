(function($) {
    $(document).ready(function(){
        $('#toggle').click(function () {
            $(this).toggleClass('active');
            $('#overlay').toggleClass('open');
        });

        // $('.banner-main').slick({
        //     infinite: true,
        //     slidesToShow: 1,
        //     slidesToScroll: 1
        // });
    });
})(jQuery);




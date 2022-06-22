(function ($) {
  $(document).ready(function () {
    //loadBannerSliders();
    loadSlickTeam();
    loadSlickSquares();

    function loadSlickSquares() {
      const elementIDS = [
        '#slick-galeria',
        '#slick-webnarios',
        '#slick-quadros',
        '#slick-gravuras',
        '#slick-esbocos',
        '#slick-memoria-grafica',
        '#slick-videos',
        '#slick-livros',
        '#slick-zines',
        '#slick-audiobooks'];

      for(let counter = 0; counter < elementIDS.length; counter++) {
        if ($(elementIDS[counter]).length > 0) {
          createSlickSquares($(elementIDS[counter]));
        }
      }
    }

    function createSlickSquares(element) {
      element.slick({
        slidesToShow: 4,
        dots: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1
            },
          },
          {
            breakpoint: 678,
            settings: {
              slidesToShow: 2.2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 320,
            settings: {
              slidesToShow: 1.1,
              slidesToScroll: 1,
            },
          },
        ]
      });

    }

    function loadSlickTeam() {
      $(".multiple-items").slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 2,
        dots: true,
        speed: 2000,
        autoplay: true,
        autoplaySpeed: 500,
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 3,
              infinite: true,
              dots: true,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 320,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    }

    function loadBannerSliders() {
      if ($("#slider-banners").length > 0) {
        $("#slider-banners").slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          variableWidth: false,
          centerMode: true,
          mobileFirst: true,
          adaptiveHeight: false,
          autoplay: false,
          autoplaySpeed: 3000,
          centerPadding: "0",
        });
      }
    }

  });
})(jQuery);

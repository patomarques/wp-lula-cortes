(function ($) {
  $(document).ready(function () {
    console.log('slick js custom was load');

    //loadBannerSliders();
    loadSlickTeam();
    loadSlickSquares();

    function loadSlickSquares() {
      let slickGaleria = $('#slick-galeria');
      let slickWebnarios = $('#slick-webnarios');

      let slickQuadros = $('#slick-quadros');
      let slickGravuras = $('#slick-gravuras');
      let slickEsbocos = $('#slick-esbocos');
      let slickMemoriaGrafica = $('#slick-memoria-grafica');

      let slickVideos = $('#slick-videos');

      let slickLivros = $('#slick-livros');
      let slickZines = $('#slick-zines');
      let slickAudiobooks = $('#slick-audiobooks');

      if (slickGaleria.length > 0) {
        createSlickSquares(slickGaleria);
      }

      if (slickWebnarios.length > 0) {
        createSlickSquares(slickWebnarios);
      }

      if (slickQuadros.length > 0) {
        createSlickSquares(slickQuadros);
      }

      if (slickGravuras.length > 0) {
        createSlickSquares(slickGravuras);
      }

      if (slickEsbocos.length > 0) {
        createSlickSquares(slickEsbocos);
      }

      if (slickMemoriaGrafica.length > 0) {
        createSlickSquares(slickMemoriaGrafica);
      }

      if (slickVideos.length > 0) {
        createSlickSquares(slickVideos);
      }

      if (slickLivros.length > 0) {
        createSlickSquares(slickLivros);
      }

      if (slickZines.length > 0) {
        createSlickSquares(slickZines);
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

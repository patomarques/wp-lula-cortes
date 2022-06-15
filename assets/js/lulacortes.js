(function ($) {
  $(document).ready(function () {

    //loadBannerSliders();
    loadSlickTeam();
    loadSlickSquares();
    //setSlickImages();

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

    function loadSlickSquares() {
      let slickGaleria = $('#slick-galeria');
      let slickWebnarios = $('#slick-webnarios');

      let slickQuadros = $('#slick-quadros');
      let slickGravuras = $('#slick-gravuras');
      let slickEsbocos = $('#slick-esbocos');
      let slickMemoriaGrafica = $('#slick-memoria-grafica');

      let slickVideos = $('#slick-videos');

      let slickLivros = $('#slick-livros');
      //let slickVideos = $('#slick-videos');
      //let slickVideos = $('#slick-videos');
      //let slickVideos = $('#slick-videos');

      if(slickGaleria.length > 0){
        createSlickSquares(slickGaleria);
      }

      if(slickWebnarios.length > 0){
        createSlickSquares(slickWebnarios);
      }

      if(slickQuadros.length > 0){
        createSlickSquares(slickQuadros);
      }

      if(slickGravuras.length > 0){
        createSlickSquares(slickGravuras);
      }

      if(slickEsbocos.length > 0){
        createSlickSquares(slickEsbocos);
      }

      if(slickMemoriaGrafica.length > 0){
        createSlickSquares(slickMemoriaGrafica);
      }

      if(slickVideos.length > 0){
        createSlickSquares(slickVideos);
      }

      if(slickLivros.length > 0){
        createSlickSquares(slickLivros);
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

    function setSlickImages() {
      let items = document.querySelectorAll(".banner-main__item");
      console.log("items", items);

      items.forEach(function (element) {
        //element.style.setProperty(':after', '');
        //this.style.setProperty(':after', 'background-image: url(' + element.dataSet('image') + ')');
      });
    }

    $(".nav-link").on("click", function () {
      let toggle = $(".toggle")[0];
      toggle.click();

      var sectionToScroll = $(this).attr("href").replace("#", "#section-");
      $("html, body").animate({
        scrollTop: $(sectionToScroll).offset().top - 30,
      });
    });

    $(".toggle").on("click", function () {
      $(".toggle").toggleClass("active");
      $("#overlay").toggleClass("open");
      $(".button_container")[0].classList.add("hidden");
    });

    var $animation_elements = $(".slide");
    var $window = $(window);

    function isOnView() {
      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = window_top_position + window_height;
      $.each($animation_elements, function () {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = element_top_position + element_height;
        if (
          element_bottom_position >= window_top_position &&
          element_top_position <= window_bottom_position
        )
          $element.addClass("hasSlid");
        else $element.removeClass("hasSlid");
      });
    }

    function loadBannerSliders() {
      if ($("#slider-banners").length > 0) {
        console.log('slider banner ', $("#slider-banners"));

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

    function fixMenu() {
      console.log('ta chamando');
      //menu-main--dark
      //console.log('menu effect ', sectionElement.scrollTop);
    }

    window.addEventListener('scroll', (event) => {
      console.log('Scrolling...');
    });

    window.onscroll = function(event) {
      console.log('Scrolling 222...');
    };

    let menuElement = $(".menu-main");
    let nextSectionContent = document.getElementById("page-content");

    console.log('nextSectionContent', nextSectionContent);

    if (nextSectionContent != null) {
      let elementHeight = nextSectionContent.offsetHeight;

      console.log('elementHeight', elementHeight);

      $(window).scroll(function () {
        console.log('scroll', elementHeight);
        if ($(document).scrollTop() > elementHeight) {
          menuElement.addClass("shrink menu-main--dark");
        } else {
          menuElement.removeClass("shrink menu-main--dark");
        }
      });
    }

    $window.on("scroll resize", isOnView);

    $window.on("scroll", fixMenu);

  });
})(jQuery);

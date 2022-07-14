(function ($) {
  $(document).ready(function () {

    const playerElement = document.getElementById('player-audio');

    // $(".nav-link").on("click", function () {
    //   let toggle = $(".toggle")[0];
    //   toggle.click();

    //   var sectionToScroll = $(this).attr("href").replace("#", "#section-");
    //   $("html, body").animate({
    //     scrollTop: $(sectionToScroll).offset().top - 30,
    //   });
    // });

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

    function fixMenu() {
      let nextSectionContent = document.getElementById("page-content");

      if (nextSectionContent != null) {
        let elementHeight = nextSectionContent.offsetHeight;

        $(window).scroll(function () {
          if ($(window).scrollTop() > elementHeight) {
            menuElement.addClass("shrink menu-main--dark");
          } else {
            menuElement.removeClass("shrink menu-main--dark");
          }
        });
      }
    }

    let menuElement = $(".menu-main");

    $window.on("scroll resize", isOnView);
    $window.on("scroll", fixMenu);

    $('.slick-squares__link').on('click', function () {
      let videoUrl = $(this).data('video-url');
      $('#modal-webnarios iframe').attr('src', videoUrl);
    });

    $('#grid-videos .grid-rectangles__link').on('click', function () {
      let videoUrl = $(this).data('video-url');
      let title = $(this).data('title');

      console.log('title ', title, videoUrl);
      $('#modal-videos .modal-title').text(title);
      $('#modal-videos iframe').attr('src', videoUrl);
    });

    function navSectionScroll() {
      let nav = $('#section-nav');
      let menuMain = $('.menu-main');
      let nav_height = nav.outerHeight();

      nav.find('a').on('click', function () {
        let $el = $(this);
        let id = $el.attr('href');

        $('html, body').animate({
          scrollTop: $(id).offset().top - nav_height
        }, 500);

        return false;
      });
    }

    $(window).on('scroll', function () {
      //console.log('scrollando;;;', $(this).scrollTop());
    });

    //navSectionScroll();

    function galleryFullscreen(element, galeryName) {
      if (element.lenght > 0) {
        //let lightbox = new FsLightbox();
        fsLightboxInstances[galeryName].open(0);
       /*  fsLightboxInstances[galeryName].props.onOpen = () => console.log('Lightbox open!');
        fsLightboxInstances[galeryName].props.onClose = () => console.log('Lightbox close!');
        fsLightboxInstances[galeryName].props.onSlideChange = (fsLightbox) => console.log(fsLightbox); */
        //fsLightboxInstances[galeryName].props.onShow = (fsLightbox) => console.log('event -> ', fsLightbox);

        //lightbox.props.onInit = () => console.log('Lightbox initialized!');
      }
    }

    galleryFullscreen($('.gallery-fullscreen'), 'lightbox-galeria');
    galleryFullscreen($('#grid-squares'), 'grid-lightbox-squares');

    if (window.location.pathname != '/') {
      $('.menu-main').addClass('shrink menu-main--dark');
    }

    $('.slick-squares__link').on('click', function() {
      $('.fslightbox-slide-btn-container-previous').on('click', function() {
        changeAudio();

      });

      $('.fslightbox-slide-btn-container-next').on('click', function() {
        changeAudio();
      });

      playerElement.src = $(this).data('audio');

      setTimeout(function() {
        $('.player-content').removeClass('hidden');
      }, 500);
    });

    function changeAudio() {
      let gallery = $('.fslightbox-source-outer');

      setTimeout(function() {
        gallery.each(function(index){
          if(gallery[index].style.cssText.indexOf('transform: translateX(0px);') > -1){
            for (const key in dataGallery) {
              if(dataGallery[key].url == gallery[index].querySelector('img').src){
                playerElement.src = dataGallery[key].audio;
              }
            }
          }
        });
      }, 500);

    }
  });
})(jQuery);


(function ($) {
  $(document).ready(function () {

    $(".nav-link").on("click", function () {
      let toggle = $(".toggle")[0];
      toggle.click();

      var sectionToScroll = $(this).attr("href").replace("#", "#section-");
      $("html, body").animate({
        scrollTop: $(sectionToScroll).offset().top - 30,
      });
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

    function fixMenu() {
      console.log('fix menu()');
      //menu-main--dark
      //console.log('menu effect ', sectionElement.scrollTop);
    }

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

    $('.slick-squares__link').on('click', function () {
      let videoUrl = $(this).data('video-url');
      $('#modal-webnarios iframe').attr('src', videoUrl);
    });

    $('.slick-videos .slick-squares__link').on('click', function () {
      let videoUrl = $(this).data('video-url');
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
      console.log('scrollando;;;', $(this).scrollTop());
    });

    navSectionScroll();
  });
})(jQuery);

(function ($) {
  $(document).ready(function () {

    function loadMenuButtonClickEffect() {
      $(".toggle").on("click", function () {
        $(".toggle").toggleClass("active");
        $("#overlay").toggleClass("open");
        $(".button_container")[0].classList.add("hidden");
      });
    }

    loadMenuButtonClickEffect();

    window.addEventListener('scroll', (event) => {
      //console.log('Scrolling...');
    });

    window.onscroll = function (event) {
      //console.log('Scrolling 222...');
    };

    $('.menu-main').addClass('shrink menu-main--dark');

  });
})(jQuery);

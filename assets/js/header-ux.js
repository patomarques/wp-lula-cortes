(function ($) {
  $(document).ready(function () {
    $(".toggle").on("click", function () {
      $(".toggle").toggleClass("active");
      $("#overlay").toggleClass("open");
      $(".button_container")[0].classList.add("hidden");
    });

  });
})(jQuery);

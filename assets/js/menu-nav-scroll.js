(function ($) {
  $(document).ready(function () {

    let menuFixedNav = $('.navMenuFixed');
    let menuMain = $('.menu-main');
    let sections = $('.section-nav');

    const headerElementHeight = menuMain.height() + menuFixedNav.height();

    if(menuFixedNav.length == 0){
      return;
    }

    let navHeight = menuFixedNav.outerHeight();

    $(window).on('scroll', function () {
      let cur_pos = $(this).scrollTop();

      sections.each(function () {
        let top = $(this).offset().top - navHeight - headerElementHeight;
        let bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
          menuFixedNav.find('li').removeClass('list-nav__item-actived');
          sections.removeClass('active');

          $(this).addClass('active');
          menuFixedNav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('list-nav__item-actived');
        }
      });
    });

    menuFixedNav.find('a').on('click', function () {
      let $el = $(this);
      let id = $el.attr('href');

      $('html, body').animate({
        scrollTop: $(id).offset().top - navHeight - headerElementHeight - 40
      }, 500);

      console.log('aqui scrollar');

      return false;
    });
  });
})(jQuery);

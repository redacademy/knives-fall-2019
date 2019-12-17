(function ($) {
  //***********SERvin instances and declarations */
  const $userWidth = document.documentElement.clientWidth;
  const thePage = getTerms(window.location.pathname);

  function getTerms(pathname) {
    pathname = pathname.replace('/kf/', '');
    pathname = pathname.replace('/', '');
    return pathname;
  }
  //implement styling and element's position
  if ($userWidth <= 499) {
    //**********************************for MOBILE
    // $('entry-content  ul  li:last-child()').append($('.how-btn'));
    $('.how-btn').appendTo('.steps-list li:last-child()');
    $('.how-img').appendTo('.steps-list li:last-child()');
    $('.banner .banner-events img').css({
      height: $('.banner').outerHeight()
    });
  }
  if (thePage !== 'events') {
    $('.banner-content').css({
      top: $('.banner').outerHeight() * 0.5
    });
  } else if (thePage == 'events') {
    if ($userWidth >= 500) {
      $('.btn-event').appendTo('.banner-content');
      if ($userWidth <= 999) {
        $('.banner-content').css({
          top: $('.banner').outerHeight() * 0.4
        });
      }
    }
  }
  $(document).on('click', '.investment-nav', function () {
    // console.log(location.origin + ' ' + location.pathname);
    $('.investment-nav a').attr({
      href: location.origin + location.pathname + 'our-story/#investment'
    });
  });

  // $('iframe').done(function() {
  //   alert('Video LOADED!');
  // });
})(jQuery);
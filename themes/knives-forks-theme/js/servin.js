(function($) {
  //***********SERvin instances and declarations */
  let $userWidth = document.documentElement.clientWidth;
  let $thePage = getTerms(location.pathname);
  function getTerms(pathname) {
    if (window.location.protocol === 'https:') {
      pathname = pathname.replace('/', '');
    } else {
      pathname = pathname.replace('/knivesforks/', '');
      pathname = pathname.replace('/', '');
    }
    return pathname;
  }
  //implement styling and element's position
  if ($userWidth <= 499) {
    //**********************************for MOBILE
    // $('entry-content  ul  li:last-child()').append($('.how-btn'));
    $('.how-btn').appendTo('.steps-list li:last-child()');
    $('.how-img').appendTo('.steps-list li:last-child()');
    // $('.banner .banner-outer-content').css({
    //   top: $('.banner').height() * 0.3
    // });
  }
  $('.btn-event').appendTo('.banner-content');

  if ($thePage !== 'events') {
    $('.banner-content').css({
      top: $('.banner').height() * 0.85 - $('.banner-content h2').height()
    });
  } else if ($thePage == 'events') {
    $('.banner-outer-content').css({
      top: $('.banner').height() * 0.2
      // 'margin-bottom': $('.main-navigation').height() * 2
    });

    if ($userWidth >= 500) {
      // $('.banner').css({
      //   top: $('.main-navigation').height() * 1,
      //   'margin-bottom': $('.main-navigation').height() * 1
      // });
      if ($userWidth <= 999) {
        // $('.banner .banner-outer-content').css({
        //   top: $('.banner').height() * 0.4
        // });
      }
    }
  }
  $(document).on('click', '.investment-nav', function() {
    // console.log(location.origin + ' ' + location.pathname);
    $('.investment-nav a').attr({
      href: location.origin + location.pathname + 'our-story/#investment'
    });
  });

  // $('iframe').done(function() {
  //   alert('Video LOADED!');
  // });
})(jQuery);

//***********SERvin instances and declarations */
const $userWidth = document.documentElement.clientWidth;
const thePage = getTerms(window.location.pathname);

function getTerms(pathname) {
  pathname = pathname.replace('/kf/', '');
  pathname = pathname.replace('/', '');
  return pathname;
}
(function($) {
  //implement styling and element's position
  if ($userWidth <= 499) {
    //**********************************for MOBILE
    // $('entry-content  ul  li:last-child()').append($('.how-btn'));
    $('.how-btn').appendTo('.steps-list li:last-child()');
    $('.how-img').appendTo('.steps-list li:last-child()');
  }
  if (thePage !== 'events') {
    $('.banner-content').css({
      top: $('.banner').outerHeight() * 0.5
    });
  } else if (thePage == 'events') {
    if ($userWidth >= 500) {
      $('.btn-event').appendTo('.banner-content');
    }
  }
})(jQuery);

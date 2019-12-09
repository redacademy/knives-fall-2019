(function ($) {
    $(function () {
        // when document is ready
        // click the hamburger menu
        const burger = $('#hamburger');

        const mobileMenu = $('.mobile-menu');
        // closing menu 
        const cross = $('#cross');

        burger.click(function () {
            mobileMenu.removeClass('hide');
        });

        cross.click(function () {
            mobileMenu.addClass('hide');
        });
        // opens up & display menu items

        //

(function($) {
  //implement styling and element's position
  $('.banner-content').css({
    top: $('.banner').height() * 0.6
  });
  $('.entry-content  ul  li:last-child()').append($('.how-btn'));

  // next button stylings for make-a-pitch
  $('.gform_next_button').addClass('btn');
})(jQuery);

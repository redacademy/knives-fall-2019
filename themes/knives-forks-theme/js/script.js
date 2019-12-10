(function($) {

    //***********instance and declarations */
    const $userWidth=document.documentElement.clientWidth;

    // when document is ready
    // click the hamburger menu
    const burger = $('#hamburger');
    const mobileMenu = $('.mobile-menu');
    // closing menu
    const cross = $('#cross');
    burger.click(function() {
      mobileMenu.removeClass('hide');
    });
    cross.click(function() {
      mobileMenu.addClass('hide');
    });
    // opens up & display menu items
    //
    //implement styling and element's position

    if($userWidth<=499){ //**********************************for MOBILE
      // $('entry-content  ul  li:last-child()').append($('.how-btn'));
      $('.how-btn').appendTo('.steps-list li:last-child()');
      $('.how-img').appendTo('.steps-list li:last-child()');
      
    }
    $('.banner-content').css({
      top: $('.banner').outerHeight() * 0.5
    });
    $(document).on('click','.btn',function(e){
      alert('test');
      e.preventDefault();
    });
    
    // next button stylings for make-a-pitch
    $('.gform_next_button').addClass('btn');

})(jQuery);

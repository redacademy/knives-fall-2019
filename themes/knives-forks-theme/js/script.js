(function($) {
  $(function() {
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
    $('.banner-content').css({
      top: $('.banner').height() * 0.6
    });
    $('.entry-content  ul  li:last-child()').append($('.how-btn'));
    // next button stylings for make-a-pitch
    $('.gform_next_button').addClass('btn');
    $('#gform_page_2_1').addClass('name-default');
    //const nextBtn = $('.gform_next_button');

    $("#gform_2 input[type='text']").change(iconColorChange);

    //work in progress for looping through each make-a-pitch section

    // for (let i = 0; i < myValidation.length; i++) {
    //     const element = myValidation[i];
    //     $(element.className + ' input[type="text"]').change(element, fn);

    // }

    // function fn(element) {
    //     let flag = true;
    //     for (let i = 0; i < element.value.validation.length; i++) {
    //         const field = element.value.validation[i];
    //         const $elem = $(element.className + " [aria-label=" + field + "]");
    //         if (!$elem.length) {
    //             flag = false;
    //         }
    //     }
    //     if(flag === false) {
    //         /// apply invalid class
    //         // $('className).addClass('x-default')
    //     } else {
    //         // apply the valid class
    //         // $('className').removeClass('x-default'). addClass('x-valid')
    //     }
    // }
    function iconColorChange() {
      const $firstNameVal = $('#input_2_1_3').val();
      const $lastNameVal = $('#input_2_1_6').val();
      // if name fields (first name, last name) !=='', $('.gform_page_2_1').addClass('name-valid')
      if ($firstNameVal.length !== 0 && $lastNameVal.length !== 0) {
        console.log('filled');
        $('#gform_page_2_1')
          .removeClass('name-default')
          .addClass('name-valid');
      }
    }
  }); //when document is ready
})(jQuery);

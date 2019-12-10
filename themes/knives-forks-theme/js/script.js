(function($) {
  $(function() {
    //***********instance and declarations */
    const $userWidth = document.documentElement.clientWidth;

    // when document is ready
    // click the hamburger menu
    // closing menu

    if ($userWidth <= 499) {
      //**********************************for MOBILE
      // $('entry-content  ul  li:last-child()').append($('.how-btn'));
      $('.how-btn').appendTo('.steps-list li:last-child()');
      $('.how-img').appendTo('.steps-list li:last-child()');
    }
    $('.banner-content').css({
      top: $('.banner').outerHeight() * 0.5
    });
    $(document).on('click', '.btn', function(e) {
      //alert('test');
      e.preventDefault();
    });
    const burger = $('#hamburger');

    const mobileMenu = $('.mobile-menu');

    const hiddenMenu = $('.hidden-menu');

    const cross = $('#cross');
    const hidCross = $('#hid-cross');

    const pendInvestment = $(
      '<li><a href="#investment">Our Investment</a></li>'
    );
    const navHiddenMenu = $('#hidden-menu');
    const investor = $('.menu-item-64');

    // when document is ready
    // click the hamburger menu
    // closing menu
    // opens up & display menu items
    burger.click(function() {
      mobileMenu.removeClass('hide');
      hiddenMenu.removeClass('hide');
    });

    cross.click(function() {
      mobileMenu.addClass('hide');
    });
    hidCross.click(function() {
      hiddenMenu.addClass('hide');
    });

    // add .btn to menu item
    investor.addClass('btn');
    // create a new list item for the hidden menu and link to our investments
    navHiddenMenu.prepend(
      '<li><a href="#investments">Our Investments</a></li>'
    );
    // create new list item after <li> events
    pendInvestment.insertAfter('.menu-item-45');

    // BROOKE'S WORK BELOW
    // opens up & display menu items
    // next button stylings for make-a-pitch
    $('.gform_next_button').addClass('btn');
    const $gField = $('.gfield');
    const $requiredField = $(`input[type='text'][aria-required='true']`);

    $gField.addClass('name-default');

    $requiredField.change(iconColorChange);
    //jim
    // loop thorugh each <li> (find common selector - gifeld??)
    // loop through <li> inputs
    //add change event listener
    //check val():
    //if(val().length !==0) {
    //$(this.'<li>').removeClass('inactive').addClass('active');
    //}

    function iconColorChange() {
      $.each($gField, function(index, value) {
        console.log(value);
        $.each($requiredField, function(index, value) {
          console.log(value);
          if ($requiredField.val().length !== 0) {
            $(this.$gField)
              .removeClass('name-default')
              .addClass('name-valid');
          }
        });
      });
    }
    //work in progress for looping through each make-a-pitch section

    //anvit
    // for (let i = 0; i < myValidation.length; i++) {
    //     const element = myValidation[i];
    //     $(element.className + ' input[type="text"]').change(element, fn);

    // }
    //myValidation [
    //{'pitch-name'}: {
    //valid: {}
    //invalid: {}
    //validation: {
    //valid: ['', '', '']
    //invalid: ['', '']
    //}
    //]
    //{'pitch-email'}:
    //}
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

    // function iconColorChange() {
    //   const $firstNameVal = $('#input_2_1_3').val();
    //   const $lastNameVal = $('#input_2_1_6').val();
    //   // if name fields (first name, last name) !=='', $('.gform_page_2_1').addClass('name-valid')
    //   if ($firstNameVal.length !== 0 && $lastNameVal.length !== 0) {
    //     console.log('filled');
    //     $('.pitch-name')
    //       .removeClass('name-default')
    //       .addClass('name-valid');
    //   }
    // }
  }); //when document is ready
})(jQuery);

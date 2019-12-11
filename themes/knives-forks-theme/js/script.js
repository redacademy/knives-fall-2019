(function($) {
  $(function() {
    //***********instance and declarations */
    const $userWidth = document.documentElement.clientWidth;
    // click the hamburger menu
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
    const thePage = getTerms(window.location.pathname);

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

    // $(document).on('click','.btn',function(e){
    //   alert('test');
    //   e.preventDefault();
    // });

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
    $('.gform_previous_button').addClass('btn');
    const $gField = $('.gform_page');
    //const $requiredField = $(`input[type='text'][aria-required='true']`);

    $gField.addClass('icon-default');

    //$requiredField.change(iconColorChange);
    //jim
    // loop thorugh each <li> (find common selector - gifeld??)
    // loop through <li> inputs
    //add change event listener
    //check val():
    //if(val().length !==0) {
    //$(this.'<li>').removeClass('inactive').addClass('active');
    //}

    // function iconColorChange() {
    //   $.each($gField, function(index, value) {
    //     console.log(value);
    //     $.each($requiredField, function(index, value) {
    //       console.log(value);
    //       if ($requiredField.val().length !== 0) {
    //         $(this.$gField)
    //           .removeClass('name-default')
    //           .addClass('name-valid');
    //       }
    //     });
    //   });
    // }
    //**************FUNCTIONS DECLARATIOS********** */
    function getTerms(pathname) {
      pathname = pathname.replace('/kf/', '');
      pathname = pathname.replace('/', '');
      return pathname;
    }
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

    $.each($('.gform_page'), function(index, value) {
      const group = value;
      const $inputs = $(this).find(`input[type='text']`);
      const $inputsArea = $(this).find(`textarea`);

      console.log('inputs', $inputs.length);
      console.log('textareas', $inputsArea.length);

      $inputs.on('keyup', function() {
        console.log('keyup');
        if ($(this).val() !== '') {
          $(this).addClass('filled');
          console.log('filled');
        } else {
          $(this).removeClass('filled');
        }
        checkInputs();
      });

      $inputsArea.on('keyup', function() {
        console.log('keyup');
        if ($(this).val() !== '') {
          $(this).addClass('filled');
          console.log('filled');
        } else {
          $(this).removeClass('filled');
        }
        checkInputs();
      });
      function checkInputs() {
        if ($(group).find('.filled').length === $inputs.length) {
          console.log('all inputs in group filled');
          $(group)
            .removeClass('icon-default')
            .addClass('icon-complete');
        } else if ($(group).find('.filled').length === $inputsArea.length) {
          console.log('textfields filled');
          $(group)
            .removeClass('icon-default')
            .addClass('icon-complete');
        } else {
          $(group).removeClass('icon-complete');
        }
      }
    });

    //work in progress for looping through each make-a-pitch section

    //anvit
    // for (let i = 0; i < myValidation.length; i++) {
    //     const element = myValidation[i];
    //     $(element.className + ' input[type="text"]').change(element, fn);
  }); //when document is ready
})(jQuery);

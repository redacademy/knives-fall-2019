(function($) {
  $(function() {
    // click the hamburger menu
    // VICTOR'S VARIABLES
    const burger = $('#hamburger');
    const mobileMenu = $('.mobile-menu');
    const hiddenMenu = $('.hidden-menu');
    const cross = $('#cross');
    const hidCross = $('#hid-cross');
    const pendInvestment = $(
      '<li><a href="#investment">Our Investment</a></li>'
    );
    const navHiddenMenu = $('#hidden-menu');
    const investor = $('.menu-item-201 a');
    // END OF VICTOR'S VARIABLES

    // VICTOR'S WORK

    // add .btn to menu item
    investor.addClass('btn');
    // create a new list item for the hidden menu and link to our investments
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
    // create new list item after <li> events
    // const investor = $('.menu-item-181') //staging
    // pendInvestment.insertAfter('.menu-item-45'); //local
    pendInvestment.insertAfter('.menu-item-189'); //staging

    navHiddenMenu.prepend('<li><a href="#investment">Our Investment</a></li>');
    //====================

    //END OF  VICTOR'S WORK

    // ===================

    // BROOKE'S WORK BELOW
    // next button stylings for make-a-pitch
    $('.gform_next_button').addClass('btn');
    $('.gform_previous_button').addClass('btn');
    $('.gform_button').addClass('btn');
    const gFormCurrentPage = parseInt(
      $('.gf_step_active .gf_step_number').text()
    );
    const gFormId = parseInt(
      $('.gform_wrapper')
        .attr('id')
        .replace('gform_wrapper_', '')
    );
    const gField = '#gform_page_' + gFormId + '_' + gFormCurrentPage;
    $(gField).addClass('icon-default');
    $(document).on(
      'blur',
      gField + ' input:not(.button), ' + gField + ' textarea',
      function() {
        console.log('blur');
        if ($(this).val() !== '') {
          $(this).addClass('filled');
          //console.log('filled');
        } else {
          $(this).removeClass('filled');
        }
        checkInputs('#gform_page_' + gFormId + '_' + gFormCurrentPage);
      }
    );
    $.each(
      $(gField).find(
        'input',
        gField + ' input:not(.button), ' + gField + ' textarea',
        function() {
          if ($(this).val() !== '') {
            $(this).addClass('filled');
          }
          checkInputs('#gform_page_' + gFormId + '_' + gFormCurrentPage);
        }
      )
    );
    function checkInputs(group) {
      const $inputs = $(group).find('input:not(.button)');
      const $inputsArea = $(this).find('textarea');
      console.log($inputs.length);
      console.log($(group).find('.filled').length);
      console.log($(group).find('.filled').length);
      console.log($inputsArea.length);
      if (
        $(group).find('.filled').length === $inputs.length &&
        $inputs.length > 0
      ) {
        console.log('all inputs in group filled');
        $(group)
          .removeClass('icon-default')
          .addClass('icon-complete');
      } else if (
        $(group).find('.filled').length === $inputsArea.length &&
        $inputsArea.length > 0
      ) {
        console.log('textfields filled');
        $(group)
          .removeClass('icon-default')
          .addClass('icon-complete');
      } else {
        $(group).removeClass('icon-complete');
      }
    }
    //=================

    // END OF BROOKE'S WORK

    //====================
  }); //when document is ready
})(jQuery);

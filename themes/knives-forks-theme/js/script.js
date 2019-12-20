(function($) {
  $(document).ready(function() {
    $('.embed-container').fitVids();

    //***********instance and declarations */
    // click the hamburger menu
    // VICTOR'S VARIABLES
    const burger = $('#hamburger');
    const mobileMenu = $('.mobile-menu');
    const hiddenMenu = $('.hidden-menu');
    const cross = $('#cross');
    const hidCross = $('#hid-cross');
    const pendInvestment = $(
      '<li class="investment-nav"><a href="#investment">Our Investment</a></li>'
    );
    const navHiddenMenu = $('#hidden-menu');
    const investor = $('.menu-item-201 a');
    // END OF VICTOR'S VARIABLES

    //*************Refresh the DOM when change ORIENTATION */
    $(window).on('orientationchange', function() {
      document.location.reload();
    });

    // VICTOR'S WORK

    // add .btn to menu item
    investor.addClass('btn');
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

    pendInvestment.insertAfter('.menu-item-189'); //staging

    navHiddenMenu.prepend(
      '<li class="investment-nav"><a href="#investment">Our Investment</a></li>'
    );
    //====================

    //END OF  VICTOR'S WORK

    // ===================

    //const thePage = getTerms(window.location.pathname);

    // BROOKE'S WORK BELOW

    //for downloading memorandum of association
    $('.gform_page').on('click', '.download-agreement', function(event) {
      event.preventDefault();
      window.open(knivesForksVars.invest_download_file);
    });

    // button stylings
    $('.gform_next_button').addClass('btn btn-gravity-form');
    $('.gform_previous_button').addClass('btn btn-gravity-form');
    $('.gform_button').addClass('btn btn-gravity-form');

    // adding icon as ::before to each form page
    const gFormCurrentPage = parseInt(
      $('.gf_step_active .gf_step_number').text()
    );
    const formWrapper = $('.gform_wrapper');
    const gFormId = parseInt(
      formWrapper.attr('ID').replace('gform_wrapper_', '')
    );
    const gField = '#gform_page_' + gFormId + '_' + gFormCurrentPage;

    switch (gField) {
      //name
      case '#gform_page_3_1':
      case '#gform_page_1_1':
      case '#gform_page_4_1':
        console.log('name');
        $(gField).addClass('gform_name');
        break;

      //email
      case '#gform_page_3_2':
      case '#gform_page_1_2':
      case '#gform_page_4_2':
        $(gField).addClass('gform_email');
        break;
      //business adress
      case '#gform_page_1_3':
        $(gField).addClass('gform_home');
        break;
      //phone
      case '#gform_page_1_4':
        $(gField).addClass('gform_phone');
        break;
      //company name
      case '#gform_page_1_5':
        $(gField).addClass('gform_company');
        break;
      //details
      case '#gform_page_1_6':
        $(gField).addClass('gform_details');
        break;
      //application form
      case '#gform_page_3_3':
      case '#gform_page_4_3':
        $(gField).addClass('gform_application');
        break;
      //memorandum
      case '#gform_page_3_4':
      case '#gform_page_4_4':
        $(gField).addClass('gform_memo');
        break;
      //fee
      case '#gform_page_3_5':
      case '#gform_page_4_5':
        $(gField).addClass('gform_fee');
        break;
      default:
        $(gField).addClass('gform_appliation');
    }

    $(document).on(
      'blur',
      gField +
        ' input:not(.button):not([type="hidden"]), ' +
        gField +
        ' textarea',
      function() {
        if ($(this).val() !== '') {
          $(this).addClass('filled');
        } else {
          $(this).removeClass('filled');
        }
        checkInputs(gField);
      }
    );

    function checkInputs(gField) {
      const $inputs = $(gField).find('input:not(.button):not([type="hidden"])');
      const $inputsArea = $(this).find('textarea');
      console.log($inputs.length);
      if (
        $(gField).find('.filled').length === $inputs.length &&
        $inputs.length > 0
      ) {
        $(gField).addClass('gform_check');
      } else if (
        $(gField).find('.filled').length === $inputsArea.length &&
        $inputsArea.length > 0
      ) {
        $(gField).addClass('gform_check');
      } else {
        $(gField).removeClass('icon-complete');
      }
    }

    const stickySteps = $('.gf_page_steps');
    let footerHeight = $('.site-footer').height();
    let unstickPoint = $(document).height() - footerHeight;

    $(window).scroll(stickyProgression);

    function stickyProgression() {
      let scrollY = $(window).scrollTop();
      if (0 < scrollY < unstickPoint) {
        $(stickySteps).addClass('sticky');
      } else {
        console.log('unstick');
        $(stickySteps).removeClass('sticky');
      }
      //});
    }
    //=================

    // END OF BROOKE'S WORK

    //====================
  }); //when document is ready
})(jQuery);

(function($) {
  $(document).ready(function() {
    $('.embed-container').fitVids();

    //***********instance and declarations */
    const $userWidth = document.documentElement.clientWidth;
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

    navHiddenMenu.prepend(
      '<li class="investment-nav"><a href="#investment">Our Investment</a></li>'
    );
    //====================

    //END OF  VICTOR'S WORK

    // ===================

    //const thePage = getTerms(window.location.pathname);

    //implement styling and element's position
    if ($userWidth <= 499) {
      //**********************************for MOBILE
      // $('entry-content  ul  li:last-child()').append($('.how-btn'));
      $('.how-btn').appendTo('.steps-list li:last-child()');
      $('.how-img').appendTo('.steps-list li:last-child()');
    }

    // BROOKE'S WORK BELOW

    //for downloading the memorandum of association
    $('.gform_page').on('click', '.download-agreement', function(event) {
      event.preventDefault();
      window.open(knivesforks_vars.invest_download_file);
    });

    // button stylings for make-a-pitch
    $('.gform_next_button').addClass('btn');
    $('.gform_previous_button').addClass('btn');
    $('.gform_button').addClass('btn');

    // adding icon as ::before to each form page
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
      // console.log($inputs.length);
      //console.log($(gField).find('.filled').length);
      //   console.log($(group).find('.filled').length);
      //   console.log($inputsArea.length);
      console.log($inputs.length);
      if (
        $(gField).find('.filled').length === $inputs.length &&
        $inputs.length > 0
      ) {
        $(gField)
          .removeClass('icon-default')
          .addClass('icon-complete');
      } else if (
        $(gField).find('.filled').length === $inputsArea.length &&
        $inputsArea.length > 0
      ) {
        $(gField)
          .removeClass('icon-default')
          .addClass('icon-complete');
      } else {
        $(gField).removeClass('icon-complete');
      }
    }

    // make step progression sticky

    const stickySteps = $('.gf_page_steps');
    let footerHeight = $('.site-footer').height();
    let unstickPoint = $(document).height() - footerHeight;
    // console.log(footerHeight);
    // console.log($(document).height());
    // console.log(unstickPoint);

    $(window).scroll(stickyProgression);

    function stickyProgression() {
      let scrollY = $(window).scrollTop();
      //console.log(scrollY);
      if (0 < scrollY < unstickPoint) {
        // console.log('sticking point');
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

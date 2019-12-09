(function($) {
  //brute force apply styles for flickity at HOW-it-WORKS Page
  $(document).on('click', '.flickity-button', function() {
    // alert('hello');
    $('.flickity-viewport').css({
      height: $('.is-selected').outerHeight() * 1.3
      // 'flex-flow': 'column nowrap',
      // 'align-content': 'center',
      // 'align-items': 'center'
    });
  });

})(jQuery);

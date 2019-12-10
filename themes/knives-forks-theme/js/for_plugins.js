(function($) {
  //brute force apply styles for flickity at HOW-it-WORKS Page
  let $car=$('.carousel').flickity();

  $car.on('change.flickity',function(){
    // alert('hello');
    $('.flickity-viewport').css({
        height: $('.is-selected').outerHeight() * 1.2
      });
  });

})(jQuery);

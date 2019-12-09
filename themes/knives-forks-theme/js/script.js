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



        //implement styling and element's position
        $('.banner-content').css({
            top: $('.banner').height() * 0.60
        });
        $('.entry-content  ul  li:last-child()').append($('.how-btn'));

    }); //when document is ready

})(jQuery)
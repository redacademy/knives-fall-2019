(function ($) {
    $(function () {
        const burger = $('#hamburger');

        const mobileMenu = $('.mobile-menu');

        const hiddenMenu = $('.hidden-menu');

        const cross = $('#cross');
        const hidCross = $('#hid-cross');

        const pendInvestment = $('<li><a href="#investment">Our Investment</a></li>');
        const navHiddenMenu = $('#hidden-menu');
        const investor = $('.menu-item-64');

        // when document is ready
        // click the hamburger menu
        // closing menu 
        // opens up & display menu items
        burger.click(function () {
            mobileMenu.removeClass('hide');
            hiddenMenu.removeClass('hide');
        });

        cross.click(function () {
            mobileMenu.addClass('hide');
        });
        hidCross.click(function () {
            hiddenMenu.addClass('hide');
        });

        // add .btn to menu item
        investor.addClass('btn');
        // create a new list item for the hidden menu and link to our investments
        navHiddenMenu.prepend('<li><a href="#investments">Our Investments</a></li>')
        // create new list item after <li> events
        pendInvestment.insertAfter('.menu-item-45');



        //implement styling and element's position
        $('.banner-content').css({
            top: $('.banner').height() * 0.60
        });
        $('.entry-content  ul  li:last-child()').append($('.how-btn'));

    }); //when document is ready

})(jQuery)
jQuery(document).ready(function () {
    jQuery('header .mobile-menu').meanmenu();
    //    meanmenu js end

    $(window).load(function () {
        $("#main-header").sticky({
            topSpacing: 0
        });
    });

    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 200, // Animation in speed (ms)
            animationOutSpeed: 200, // Animation out speed (ms)
            scrollText: 'Scroll to top', // Text for element
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
    });
    //    scroll up end

    //    slicky header
    $('.main-slider').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        nav: true,
        dots:true,
        autoplayHoverPause: false,
        margin: 0,
        smartSpeed: 1000,
        autoplayTimeout: 8000,
        mouseDrag: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    });

    //   slider end




});

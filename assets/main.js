(function($) {
    $('#mobile-menu-icon').click(function() {
        $('.menu-links').toggleClass('mobile-open');
    })

    $('#search-mobile-icon').click(function() {
        $('.search-bar').toggleClass('search-bar-open');
        $('svg', this).toggleClass("fa-search fa-times");
    })


    $(window).on('scroll', debounce(stickyNav, 50, true));

    var header = document.getElementById("sticky-nav");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function stickyNav() {
    if (window.pageYOffset >= sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
    console.log('functions executed');
    }

    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };
})(jQuery);


(function($) {

    //Mobile Menu
    $('#mobile-menu-icon').click(function() {
        $('.menu-links').toggleClass('mobile-open');
    })

    //Mobile Search
    $('#search-mobile-icon').click(function() {
        $('.search-bar').toggleClass('search-bar-open');
        $('svg', this).toggleClass("fa-search fa-times");
    })

    //Slider
    $(document).ready(function(){
        $('.highlight-carousel').slick({
            autoplay:true,
            autoplaySpeed:4000,
        })
      });

    //Stick Nav
    $(window).on('scroll', debounce(stickyNav, 20, true));

    var header = document.getElementById("sticky-nav");
    var sticky = header.offsetTop;
    function stickyNav() {
        if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
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


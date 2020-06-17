import AOS from 'aos';

function imageScroll() {
  // If the width of the browser is more than 992px
  if ($(window).width() > 992) {
    var $selectorWrapper = $('.js-scroll');
    var currentPosition = $(window).scrollTop();
    var percentage = 0;

    // Loop through all selectorWrappers
    $.each($($selectorWrapper), function () {
      var height = $(window).height();
      var $selector = $(this).find('.js-scroll-elem');
      var endPosition = height;

      // If the browser windows current position is more than the end position
      if (currentPosition <= endPosition) {
        percentage = parseInt((currentPosition / endPosition) * 500);
        // Add a transform attribute that changes based on the elements position
        $selector.css('transform', 'translateY(' + percentage + 'px)');
      }
    });
  }
}

export default {
  init() {
    setTimeout(() => {
      AOS.init({
        once: true,
        duration: false,
      });
    }, 1000)
    $(window).on('scroll', function() {
      imageScroll();
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

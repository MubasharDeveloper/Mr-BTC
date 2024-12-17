
(function() {
  "use strict";

  // function aosInit() {
  //   AOS.init({
  //     duration: 600,
  //     easing: 'ease-in-out',
  //     once: true,
  //     mirror: false
  //   });
  // }
  // window.addEventListener('load', aosInit);

  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        // setTimeout(() => {
        //   let section = document.querySelector(window.location.hash);
        //   let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
        //   window.scrollTo({
        //     top: section.offsetTop - parseInt(scrollMarginTop),
        //     behavior: 'smooth'
        //   });
        // }, 100);
      }
    }
  });

})();
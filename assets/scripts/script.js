"use strict";
!(function (l) {
  l(".toggle-menu").on("click", function (e) {
    l(e.currentTarget).toggleClass("opened"), l(".nav").toggleClass("opened");
  }),
    window.addEventListener("resize", function () {
      l(".partners__item").css("min-height", l(".partners__item").innerWidth());
    }),
    l(".partners__item").css("min-height", l(".partners__item").innerWidth());
})(jQuery);

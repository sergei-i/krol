"use strict";
var _createClass = function () {
    function e(e, s) {
        for (var i = 0; i < s.length; i++) {
            var r = s[i];
            r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
        }
    }

    return function (s, i, r) {
        return i && e(s.prototype, i), r && e(s, r), s
    }
}();

function _classCallCheck(e, s) {
    if (!(e instanceof s)) throw new TypeError("Cannot call a class as a function")
}

/*window, new (function () {
    function e() {
        _classCallCheck(this, e), this.config = {
            navToggle: document.querySelector(".nav-toggle"),
            nav: document.querySelector(".mobile-nav")
        }, this.toggleMenu = this.toggleMenu.bind(this), this.addEventListeners(), $(".reviews-slider, .video-slider").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            adaptiveHeight: !0,
            arrows: !0,
            prevArrow: '<div class="slick-arrow slick-arrow_prev"><svg class="slick-arrow__icon"><use xlink:href="img/icons.svg#icon-arrow"></svg></div>',
            nextArrow: '<div class="slick-arrow slick-arrow_next"><svg class="slick-arrow__icon"><use xlink:href="img/icons.svg#icon-arrow"></svg></div>',
            responsive: [{breakpoint: 1024, settings: {slidesToShow: 2}}, {
                breakpoint: 900,
                settings: {slidesToShow: 1}
            }]
        }), $(".slider-for").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: !1,
            fade: !0,
            asNavFor: ".slider-nav"
        }), $(".slider-nav").slick({
            prevArrow: '<div class="slick-arrow slick-arrow_prev"><svg class="slick-arrow__icon"><use xlink:href="img/icons.svg#icon-arrow"></svg></div>',
            nextArrow: '<div class="slick-arrow slick-arrow_next"><svg class="slick-arrow__icon"><use xlink:href="img/icons.svg#icon-arrow"></svg></div>',
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: ".slider-for",
            focusOnSelect: !0,
            vertical: !0,
            verticalSwiping: !0
        }), $(".select").selectric()
    }

    return _createClass(e, [{
        key: "toggleMenu", value: function (e) {
            e.preventDefault();
            var s = this.config, i = s.navToggle, r = s.nav;
            i.classList.toggle("expanded"), r.classList.toggle("expanded")
        }
    }, {
        key: "addEventListeners", value: function () {
            var e = this;
            this.config.navToggle.addEventListener("click", function (s) {
                return e.toggleMenu(s)
            })
        }
    }]), e
}());*/


$("[data-open]").on("click", function (s) {
    s.preventDefault();
    var e = $(this).data("open"),
        o = $('[data-modal="' + e + '"]').get(0);
    $(o).addClass("modal_show"), $(".modals__back").addClass("modals__back_show"), $("html, body").animate({
        scrollTop: 150
    }, 1e3)
});
$(".modal__close").on("click", function (s) {
    s.preventDefault(), $(".modals__back_show").removeClass("modals__back_show"), $(this).closest(".modal").removeClass("modal_show")
});
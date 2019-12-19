(function (root) {

    class App {
        constructor() {
            this.config = {
                navToggle: document.querySelector('.nav-toggle'),
                nav: document.querySelector('.mobile-nav')
            };
            //console.log(this.config.navToggle);
            //console.log(document.querySelector('.nav-toggle'));

            this.toggleMenu = this.toggleMenu.bind(this);
            this.addEventListeners();

            $(".reviews-slider, .video-slider").slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                adaptiveHeight: true,
                arrows: true,
                prevArrow: '<div class="slick-arrow slick-arrow_prev"><svg class="slick-arrow__icon"><use xlink:href="img/icons.svg#icon-arrow"></svg></div>',
                nextArrow: '<div class="slick-arrow slick-arrow_next"><svg class="slick-arrow__icon"><use xlink:href="img/icons.svg#icon-arrow"></svg></div>',
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                        }
                    },

                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ]
            });

            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });

            $('.slider-nav').slick({
                prevArrow: '<div class="slick-arrow slick-arrow_prev"><svg class="slick-arrow__icon"><use xlink:href="img/icons.svg#icon-arrow"></svg></div>',
                nextArrow: '<div class="slick-arrow slick-arrow_next"><svg class="slick-arrow__icon"><use xlink:href="img/icons.svg#icon-arrow"></svg></div>',
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                // centerMode: true,
                focusOnSelect: true,
                vertical: true,
                verticalSwiping: true
            });

            $('.select').selectric();
        }

        toggleMenu(e) {
            e.preventDefault();

            const {navToggle, nav} = this.config;

            navToggle.classList.toggle('expanded');
            nav.classList.toggle('expanded');
        }

        addEventListeners() {
            this.config.navToggle.addEventListener('click', e => this.toggleMenu(e));
        }
    }

    new App();

})(window);

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

$(function () {
    var button = $('.btn.btn_shadow[data-open="modal-request"]');

    button.on('click', function (e) {
        var id = e.target.getAttribute('data-id');

        var input = $('#trainer-id');
        input.val(id);
    });

    $('#modalform').submit(function () {
        var data = $(this).serialize();
        $.ajax({
            url: '/local/ajax/customer-order.php',
            type: 'POST',
            data: data,
            success: function (res) {
                if (res === 'true') {
                    $('.button p').html('Ваша заявка принята!');
                    setTimeout(function () {
                        $('#modalform')[0].reset();
                        $('.modal.modal_size-s').removeClass('modal_show');
                        $('.modals__back').removeClass('modals__back_show');
                        $('.button p').empty();
                    }, 2000);
                } else {
                    alert('Произошла ошибка! Попробуйте позже!');
                }

            },
            error: function () {
                alert('Error');
            }
        });
        return false;
    })
});


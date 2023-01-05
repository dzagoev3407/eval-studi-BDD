!(function (a) {
    "use strict";
    function e(a) {
        return (a < 0 && (a = 0), a < 10) ? "0" + a : "" + a;
    }
    a(window).on("load", function () {
        a('[data-loader="circle-side"]').fadeOut(), a("#preloader").addClass("loaded");
    }),
        setInterval(function () {
            var t = new Date("July 15 2023 13:30:00 GMT+0100"),
                n = new Date(),
                o = Math.floor((t.getTime() - n.getTime()) / 1e3),
                l = e(o % 60),
                i = e((o = Math.floor(o / 60)) % 60),
                c = e((o = Math.floor(o / 60)) % 24),
                r = (o = Math.floor(o / 24));
            a(".countdown #seconds").html(l), a(".countdown #minutes").html(i), a(".countdown #hours").html(c), a(".countdown #days").html(r);
        }, 1e3),
        a('input[name="dates"]').daterangepicker({ autoUpdateInput: !1, minDate: new Date(), locale: { cancelLabel: "Clear" } }),
        a('input[name="dates"]').on("apply.daterangepicker", function (e, t) {
            a(this).val(t.startDate.format("MM-DD-YY") + "  >  " + t.endDate.format("MM-DD-YY"));
        }),
        a('input[name="dates"]').on("cancel.daterangepicker", function (e, t) {
            a(this).val("");
        }),
        a(".datepicker_translation").daterangepicker({
            autoUpdateInput: !1,
            minDate: new Date(),
            showCustomRangeLabel: !1,
            locale: {
                separator: " > ",
                direction: "ltr",
                format: "DD/MM/YY",
                applyLabel: "Valider",
                cancelLabel: "Annuler",
                fromLabel: "De",
                toLabel: "\xe0",
                daysOfWeek: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
                monthNames: ["Janvier", "F\xe9vrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Ao\xfbt", "Septembre", "Octobre", "Novembre", "D\xe9cembre"],
            },
        }),
        a(".datepicker_translation").on("apply.daterangepicker", function (e, t) {
            a(this).val(t.startDate.format("DD-MM-YY") + "  >  " + t.endDate.format("DD-MM-YY"));
        }),
        a(".datepicker_translation").on("cancel.daterangepicker", function (e, t) {
            a(this).val("");
        }),
        a(".carousel_item_1").owlCarousel({ center: !0, items: 1, loop: !1, autoplay: !1, addClassActive: !0, margin: 0, autoplayTimeout: 3e3, autoplayHoverPause: !0, responsive: { 0: { dots: !0 }, 991: { dots: !0 } } }),
        a("#modal-offers-open").on("click", function (e) {
            var t = a("#main"),
                n = a("#modal-offers");
            t.animate({ opacity: 0 }, 400, function () {
                a("html,body").scrollTop(0), n.addClass("modal-active").fadeIn(400);
            }),
                e.preventDefault(),
                a(".modal-close, .modal-close-2").on("click", function (a) {
                    n.removeClass("modal-active").fadeOut(400, function () {
                        t.animate({ opacity: 1 }, 400);
                    }),
                        a.preventDefault();
                });
        }),
        a("#modal-notified-open").on("click", function (e) {
            var t = a("#main"),
                n = a("#modal-notified");
            t.animate({ opacity: 0 }, 400, function () {
                a("html,body").scrollTop(0), n.addClass("modal-active").fadeIn(400);
            }),
                e.preventDefault(),
                a(".modal-close").on("click", function (a) {
                    n.removeClass("modal-active").fadeOut(400, function () {
                        t.animate({ opacity: 1 }, 400);
                    }),
                        a.preventDefault();
                });
        }),
        a("#modal-contacts-open").on("click", function (e) {
            var t = a("#main"),
                n = a("#modal-contacts");
            t.animate({ opacity: 0 }, 400, function () {
                a("html,body").scrollTop(0), n.addClass("modal-active").fadeIn(400);
            }),
                e.preventDefault(),
                a(".modal-close").on("click", function (a) {
                    n.removeClass("modal-active").fadeOut(400, function () {
                        t.animate({ opacity: 1 }, 400);
                    }),
                        a.preventDefault();
                });
        });
})(window.jQuery),
    $(".qtyplus").on("click", function (a) {
        a.preventDefault(), (fieldName = $(this).attr("name"));
        var e = parseInt($("input[name=" + fieldName + "]").val());
        isNaN(e) ? $("input[name=" + fieldName + "]").val(1) : $("input[name=" + fieldName + "]").val(e + 1);
    }),
    $(".qtyminus").on("click", function (a) {
        a.preventDefault(), (fieldName = $(this).attr("name"));
        var e = parseInt($("input[name=" + fieldName + "]").val());
        !isNaN(e) && e > 0 ? $("input[name=" + fieldName + "]").val(e - 1) : $("input[name=" + fieldName + "]").val(0);
    });
$(function() {
    "use strict";
    $('body').vegas({
        slides: [
            { src: 'img/slide-one.jpg' },
            { src: 'img/slide-two.jpg' },
            { src: 'img/slide-three.jpg' }
        ],
        overlay: true,
            transition: 'fade2',
            animation: 'kenburnsUpRight',
            transitionDuration: 1000,
            delay: 10000,
            animationDuration: 30000
    });
});
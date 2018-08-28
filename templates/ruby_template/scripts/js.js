
jQuery.noConflict();
jQuery(document).ready(function($){


        //portfolioFunction
        var i = $("#portfolio-tabs"),
            t = $("#portfolio-body");
        $(".portfolio-tabs__item:first").addClass("active"), i.owlCarousel({
            nav: !0,
            navText: ['<i class="icon-arrow-left"></i>', '<i class="icon-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    nav: !1,
                    autoWidth: !0,
                    items: 8
                }
            }
        }), t.owlCarousel({
            items: 1
        });
        var e = $(".portfolio-tabs__item");
        if (e.on("click", function() {
            e.each(function() {
                $(this).removeClass("active")
            }), $(this).addClass("active");
            var i = $(this).attr("data-tab");
            t.trigger("to.owl.carousel", [i, 500, !0])
        }), t.on("changed.owl.carousel", function(t) {
            var e = t.item.index;
            $(".portfolio-tabs__item").removeClass("active"), $("[data-tab = " + e + "]").addClass("active"), i.trigger("to.owl.carousel", [e, 500, !0])
        }), $(window).innerWidth() < 577) {
            var a = i.find(".owl-next"),
                s = i.find(".owl-prev");
            a.on("click", function() {
                t.trigger("next.owl.carousel", [300])
            }), s.on("click", function() {
                t.trigger("prev.owl.carousel", [300])
            })
        }
        // end //portfolioFunction


       //digitalFunction
        var i = $(".digital-item__info-wrap");
        $(".digital-item__tabs--first").each(function() {
            $(this).children(".digital-item__tab:first").addClass("active")
        }), $(".digital-item__tab").on("click", function() {
            var i = $(this).attr("data-tab-dig");
            $(this).parent().parent().find(".digital-item__tab").removeClass("active"), $(this).addClass("active"), $(this).parent().parent().find(".digital-item__info-wrap").trigger("to.owl.carousel", [i, 500, !0])
        }), i.each(function() {
            $(this).owlCarousel({
                items: 1,
                nav: !1
            })
        }), i.each(function() {
            $(this).on("changed.owl.carousel", function(i) {
                var t = i.item.index;
                $(this).parent().find(".digital-item__tab").removeClass("active"), $(this).parent().find("[data-tab-dig = " + t + "]").addClass("active")
            })
        })
        // end digitalFunction

});
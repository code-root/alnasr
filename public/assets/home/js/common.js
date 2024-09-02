!(function (e) {
    "use strict";
    if (
        (e(window).on("load", function () {
            var o = e(".preloader");
            e("body").hasClass("preloader-hide")
                ? (e("body").addClass("animated--active"),
                  e("body").addClass("animated--swiper--active"))
                : (o.find(".preloader__spinner").fadeOut(500),
                  setTimeout(function () {
                      o.addClass("closed"),
                          e("body").addClass("animated--swiper--active");
                  }, 500),
                  setTimeout(function () {
                      o.addClass("loaded"),
                          e("body").addClass("animated--active");
                  }, 1500));
        }),
        Splitting({ by: "lines" }),
        ScrollOut({ targets: "[data-amazing-scroll]", once: !0 }),
        e(".word").wrap("<span></span>"),
        e("[data-amazing-overlay]").append(
            '<div class="amazing-overlay"></div>'
        ),
        e(".amazing-header").length)
    ) {
        var o,
            a = 0;
        e(window).on("scroll", function () {
            var i = e(".amazing-header");
            a < (o = window.scrollY) && o > 50
                ? (i.removeClass("slideDown"),
                  i.addClass("slideUp"),
                  i.addClass("sticky"))
                : o < 50
                ? (i.removeClass("slideDown"), i.removeClass("sticky"))
                : a > o &&
                  (i.removeClass("slideUp"),
                  i.addClass("slideDown"),
                  i.addClass("sticky")),
                (a = o);
        });
    }
    if (
        (e(".amazing-menu-btn").on("click", function () {
            var o = e(this);
            return (
                o.hasClass("btn--active")
                    ? (e("body").removeClass("amazing--noscroll"),
                      e(".amazing-header").removeClass("header--active"),
                      o.removeClass("btn--active"),
                      o.addClass("amazing--notouch"),
                      o
                          .parent()
                          .find(".amazing-menu-popup")
                          .removeClass("menu--ready"),
                      o
                          .parent()
                          .find(".amazing-menu-container")
                          .addClass("amazing--noscroll"),
                      setTimeout(function () {
                          o.parent()
                              .find(".amazing-menu-popup")
                              .removeClass("menu--open");
                      }, 300),
                      setTimeout(function () {
                          o.removeClass("amazing--notouch"),
                              o
                                  .parent()
                                  .find(".amazing-menu-popup")
                                  .removeClass("menu--visible");
                      }, 1600))
                    : (e("body").addClass("amazing--noscroll"),
                      e(".amazing-header").addClass("header--active"),
                      o.addClass("btn--active"),
                      o.addClass("amazing--notouch"),
                      o
                          .parent()
                          .find(".amazing-menu-popup")
                          .addClass("menu--visible"),
                      o
                          .parent()
                          .find(".amazing-menu-popup")
                          .addClass("menu--open"),
                      setTimeout(function () {
                          o.removeClass("amazing--notouch"),
                              o
                                  .parent()
                                  .find(".amazing-menu-container")
                                  .removeClass("amazing--noscroll"),
                              o
                                  .parent()
                                  .find(".amazing-menu-popup")
                                  .addClass("menu--ready");
                      }, 600)),
                !1
            );
        }),
        e(".amazing-menu").on("click", "a", function () {
            e(this).parent().hasClass("menu-item-has-children") ||
                e(".amazing-header .amazing-menu-btn.btn--active").trigger(
                    "click"
                );
        }),
        e(".amazing-menu").on(
            "click",
            ".menu-item-has-children > .icon, .dropdown-link > a",
            function () {
                return (
                    e(this).closest("li").hasClass("opened")
                        ? e(this).closest("li").removeClass("opened")
                        : (e(this)
                              .closest("ul")
                              .find("> li")
                              .removeClass("opened"),
                          e(this).closest("li").addClass("opened")),
                    !1
                );
            }
        ),
        e(".footer--fixed").length)
    ) {
        var i = e(".footer--fixed .amazing-footer").height();
        e(".wrapper").css({ "margin-bottom": i + "px" });
    }
    function s() {
        e(".amazing-page").addClass("parallax--dark"),
            e(".amazing-header").removeClass("header--white"),
            e(".amazing-hero-parallax .amazing-prev").removeClass("nav--white"),
            e(".amazing-hero-parallax .amazing-next").removeClass("nav--white");
    }
    e(".amazing-intro.intro--black").length &&
        e(".amazing-header").addClass("header--white"),
        e(".js-hero-parallax").each(function () {
            var o = e(this),
                a = o.attr("data-loop");
            o.pagepiling({
                direction: "vertical",
                scrollingSpeed: 700,
                easing: "swing",
                normalScrollElementTouchThreshold: 5,
                touchSensitivity: 10,
                css3: !0,
                loopTop: a,
                loopBottom: a,
                sectionSelector: ".amazing-hero-parallax-section",
                afterRender: function () {
                    o
                        .find(".amazing-hero-parallax-section.active")
                        .hasClass("section--dark") && s(),
                        e("#pp-nav").append(
                            '<div class="pp-nav-active"></div>'
                        ),
                        e("#pp-nav").appendTo(o),
                        e(".js-hero-parallax-navs").on(
                            "click",
                            ".js-hero-parallax-prev",
                            function () {
                                e.fn.pagepiling.moveSectionUp();
                            }
                        ),
                        e(".js-hero-parallax-navs").on(
                            "click",
                            ".js-hero-parallax-next",
                            function () {
                                e.fn.pagepiling.moveSectionDown();
                            }
                        );
                },
                afterLoad: function (a, i) {
                    var t = o.find(".amazing-hero-parallax-section.active"),
                        n = e("#pp-nav ul li a.active").position().top;
                    e(".pp-nav-active").css({ top: n + "px" }),
                        t.hasClass("section--dark")
                            ? s()
                            : (e(".amazing-page").removeClass("parallax--dark"),
                              e(".amazing-header").addClass("header--white"),
                              e(
                                  ".amazing-hero-parallax .amazing-prev"
                              ).addClass("nav--white"),
                              e(
                                  ".amazing-hero-parallax .amazing-next"
                              ).addClass("nav--white"));
                },
            }),
                o.find(".image").each(function () {
                    var o = e(this).attr("data-dimg"),
                        a = e(this).attr("data-mimg");
                    768 > e(window).width()
                        ? 0 != a
                            ? e(this).css({
                                  "background-image": "url(" + a + ")",
                              })
                            : e(this).css({
                                  "background-image": "url(" + o + ")",
                              })
                        : 0 != o &&
                          e(this).css({ "background-image": "url(" + o + ")" });
                });
        }),
        e(".js-hero-slider").each(function () {
            var o = e(this),
                a = o.data("autoplay"),
                i = o.data("loop");
            if (a > 1) {
                var s = !0;
                o.find(".swiper-slide").attr("data-swiper-autoplay", a);
            } else var s = !1;
            (i = !!i),
                o
                    .find(".amazing-paginations-container")
                    .append('<div class="swiper-nav-active"></div>'),
                new Swiper(o, {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    loop: i,
                    speed: 1200,
                    parallax: !0,
                    autoplay: s,
                    grabCursor: !1,
                    watchSlidesProgress: !0,
                    pagination: {
                        el: ".js-hero-pagination",
                        type: "bullets",
                        clickable: !0,
                    },
                    navigation: {
                        nextEl: ".js-hero-slider-next",
                        prevEl: ".js-hero-slider-prev",
                    },
                    on: {
                        progress: function () {
                            for (
                                var e = this, o = 0;
                                o < e.slides.length;
                                o++
                            ) {
                                var a,
                                    i = e.slides[o].progress * (0.5 * e.width);
                                e.slides[o].querySelector(
                                    ".image"
                                ).style.transform = "translateX(" + i + "px)";
                            }
                        },
                        touchStart: function () {
                            for (var e = this, o = 0; o < e.slides.length; o++)
                                e.slides[o].style.transition = "";
                        },
                        setTransition: function (e) {
                            for (var o = this, a = 0; a < o.slides.length; a++)
                                (o.slides[a].style.transition = e + "ms"),
                                    (o.slides[a].querySelector(
                                        ".image"
                                    ).style.transition = e + "ms");
                        },
                        slideChange: function () {
                            var e = o
                                .find(".swiper-pagination-bullet-active")
                                .position().left;
                            o.find(".swiper-nav-active").css({
                                left: e + "px",
                            });
                        },
                    },
                }),
                o.find(".image:not(.video)").each(function () {
                    var o = e(this).attr("data-dimg"),
                        a = e(this).attr("data-mimg");
                    768 > e(window).width()
                        ? 0 != a
                            ? e(this).css({
                                  "background-image": "url(" + a + ")",
                              })
                            : e(this).css({
                                  "background-image": "url(" + o + ")",
                              })
                        : 0 != o &&
                          e(this).css({ "background-image": "url(" + o + ")" });
                });
        }),
        e(".js-hero-carousel").each(function () {
            var o = e(this),
                a = o.data("mousewheel"),
                i = o.data("autoplay"),
                s = o.data("loop");
            if (i > 1) {
                var t = !0;
                o.find(".swiper-slide").attr("data-swiper-autoplay", i);
            } else var t = !1;
            (s = !!s),
                new Swiper(".js-hero-carousel", {
                    slidesPerView: "auto",
                    rewind: !0,
                    preventInteractionOnTransition: !0,
                    loop: s,
                    mousewheel: a,
                    autoplay: t,
                    spaceBetween: 20,
                    pagination: !1,
                    breakpoints: {
                        0: { slidesPerView: 1 },
                        768: { slidesPerView: "auto" },
                    },
                    navigation: {
                        nextEl: ".js-hero-carousel-next",
                        prevEl: ".js-hero-carousel-prev",
                    },
                });
        }),
        e(".js-blog-carousel").each(function () {
            var o = e(this),
                a = o.data("autoplay"),
                i = o.data("loop");
            if (a > 1) {
                var s = !0;
                o.find(".swiper-slide").attr("data-swiper-autoplay", a);
            } else var s = !1;
            (i = !!i),
                o
                    .parent()
                    .find(".amazing-paginations-container")
                    .append('<div class="swiper-nav-active"></div>'),
                new Swiper(o, {
                    slidesPerView: "2",
                    noSwipingSelector: "a",
                    watchSlidesProgress: !0,
                    watchSlidesVisibility: !0,
                    loop: i,
                    autoplay: s,
                    spaceBetween: 20,
                    pagination: {
                        el: ".js-blog-pagination",
                        type: "bullets",
                        clickable: !0,
                    },
                    navigation: {
                        nextEl: ".js-blog-carousel-next",
                        prevEl: ".js-blog-carousel-prev",
                    },
                    breakpoints: {
                        0: { slidesPerView: 1 },
                        1024: { slidesPerView: 2 },
                    },
                    on: {
                        slideChange: function () {
                            var e = o
                                .parent()
                                .find(".swiper-pagination-bullet-active")
                                .position().left;
                            o.parent()
                                .find(".swiper-nav-active")
                                .css({ left: e + "px" });
                        },
                    },
                });
        });
    var t = e(".js-ticker-slider").data("autoplay");
    new Swiper(".js-ticker-slider", {
        spaceBetween: 30,
        centeredSlides: !0,
        speed: t,
        autoplay: { delay: 0 },
        loop: !0,
        slidesPerView: "auto",
        allowTouchMove: !1,
        disableOnInteraction: !0,
    }),
        e(".js-reviews-carousel").each(function () {
            var o = e(this),
                a = o.data("autoplay"),
                i = o.data("loop");
            if (a > 1) {
                var s = !0;
                o.find(".swiper-slide").attr("data-swiper-autoplay", a);
            } else var s = !1;
            (i = !!i),
                new Swiper(o, {
                    slidesPerView: 1,
                    effect: "fade",
                    loop: i,
                    autoplay: s,
                    spaceBetween: 50,
                    pagination: !1,
                    navigation: {
                        nextEl: ".js-reviews-carousel-next",
                        prevEl: ".js-reviews-carousel-prev",
                    },
                });
        }),
        e(".js-history-slider").each(function () {
            var o = e(this),
                a = o.data("autoplay");
            if (a > 1) {
                var i = !0;
                o.find(".swiper-slide").attr("data-swiper-autoplay", a);
            } else var i = !1;
            o
                .find(".amazing-paginations-container")
                .append('<div class="swiper-nav-active"></div>'),
                new Swiper(o, {
                    slidesPerView: 1,
                    noSwipingSelector: "a",
                    watchSlidesProgress: !0,
                    watchSlidesVisibility: !0,
                    loop: !1,
                    autoplay: i,
                    spaceBetween: 20,
                    pagination: {
                        el: ".js-history-pagination",
                        type: "bullets",
                        clickable: !0,
                    },
                    navigation: {
                        nextEl: ".js-history-next",
                        prevEl: ".js-history-prev",
                    },
                    on: {
                        slideChange: function () {
                            var e = o
                                .find(".swiper-pagination-bullet-active")
                                .position().left;
                            o.find(".swiper-nav-active").css({
                                left: e + "px",
                            });
                        },
                    },
                }),
                o
                    .find(".js-history-pagination .swiper-pagination-bullet")
                    .each(function () {
                        var a = e(this).index() + 1,
                            i = o
                                .find(
                                    ".swiper-slide:nth-child(" +
                                        a +
                                        ") .subtitle"
                                )
                                .text();
                        e(this).append("<span>" + i + "</span>");
                    });

        }),e(".amazing-play-btn").on("click", function () {
            // تحديد URL الصوت
            var audioUrl = "/assets/bumlbee-action-sport-intro-176526.mp3"; // استبدل هذا بالرابط الفعلي للصوت
        
            // إنشاء عنصر audio إذا لم يكن موجودًا
            var audioElement = e(this).parent().find("audio");
            if (audioElement.length === 0) {
                audioElement = e("<audio>").attr("src", audioUrl).appendTo(e(this).parent());
            }
        
            // التحكم في تشغيل أو إيقاف الصوت
            if (audioElement.prop("paused")) {
                // تشغيل الصوت
                audioElement.trigger("play");
                e(this).addClass("active");
            } else {
                // إيقاف الصوت
                audioElement.trigger("pause");
                e(this).removeClass("active");
            }
        
            // منع السلوك الافتراضي للرابط أو الزر
            return false;
        });
        
        e(".amazing-service-grid-item.active--default").each(function () {
            e(this)
                .closest(".amazing-services-grid-fw")
                .hover(
                    function () {
                        e(this)
                            .find(".amazing-service-grid-item")
                            .hasClass("active--default") &&
                            e(this)
                                .find(".amazing-service-grid-item")
                                .removeClass("active");
                    },
                    function () {
                        e(this)
                            .find(".amazing-service-grid-item")
                            .hasClass("active--default") &&
                            e(this)
                                .find(
                                    ".amazing-service-grid-item.active--default"
                                )
                                .addClass("active");
                    }
                );
        }),
        e(".amazing-circle-text .label").each(function () {
            e(this).html(
                e(this)
                    .text()
                    .split("")
                    .map(
                        (e, o) =>
                            `<span style="transform:rotate(${
                                8.5 * o
                            }deg)">${e}</span>`
                    )
                    .join("")
            );
        }),
        e(".amazing-showcase-items").length &&
            e(".amazing-showcase-items")
                .find(".amazing-showcase-item:first-child")
                .addClass("hover"),
        e(".amazing-showcase-item").mouseenter(function () {
            var o = e(this);
            o
                .closest(".amazing-showcase-items")
                .find(".amazing-showcase-item")
                .removeClass("hover"),
                o.addClass("hover");
        }),
        e(window).width() > 767 &&
            (e(".amazing-services-showcase").length &&
                e(".amazing-services-showcase")
                    .find(".items ul li:first-child")
                    .addClass("hover"),
            e(".amazing-services-showcase .items ul li .title").mouseenter(
                function () {
                    var o = e(this).closest("li");
                    o.closest("ul").find("li").removeClass("hover"),
                        o.addClass("hover");
                }
            )),
        e(".amazing-video").on("click", ".play, .image", function () {
            return (
                e(this).closest(".amazing-video").addClass("active"),
                (function e(o) {
                    var a = o.data("src");
                    o.attr("src", a);
                })(e(this).closest(".amazing-video").find(".js-video-iframe")),
                !1
            );
        }),
        e(".amazing-counter").each(function () {
            var o = e(this).find(".js-counter"),
                a = !1,
                i = e(window).scrollTop() + e(window).height(),
                s = e(this).offset().top;
            function t() {
                o.each(function () {
                    var o = parseInt(e(this).attr("data-end-value"), 10);
                    e(this).easy_number_animate({
                        start_value: 0,
                        end_value: o,
                        duration: 2500,
                    });
                }),
                    (a = !0);
            }
            !a && i >= s && t(),
                e(window).on("scroll", function () {
                    (i = e(window).scrollTop() + e(window).height()),
                        !a && i >= s && t();
                });
        }),
        e("button.amazing-btn.amazing-hover-btn").each(function () {
            var o = e(this).text();
            e(this).html("<span>" + o + "</span>");
        }),
        e(".pager").each(function () {
            var o = e(this).find(".next"),
                a = e(this).find(".prev");
            o.html("<i></i>"),
                a.html("<i></i>"),
                o.addClass("amazing-next amazing-hover-2"),
                a.addClass("amazing-prev amazing-hover-2");
        });
    var n = e(".amazing-portfolio-items");
    n.imagesLoaded(function () {
        n.isotope({
            itemSelector: ".amazing-portfolio-col",
            percentPosition: !0,
        });
    }),
        e(".amazing-filter-nav-active").each(function () {
            e(this).css({
                width:
                    e(this)
                        .closest(".amazing-filter.filter--default")
                        .find(".item--active")
                        .parent()
                        .width() +
                    6 +
                    "px",
            });
        }),
        e(".amazing-filter").on("click", "button", function () {
            var o = e(this).attr("data-filter");
            n.isotope({ filter: o }),
                e(o).find(".image").attr("data-scroll", "in"),
                e(o).find(".splitting").attr("data-scroll", "in"),
                e(".amazing-filter button").removeClass("item--active"),
                e(this).addClass("item--active");
            var a = e(this)
                    .closest(".amazing-filter.filter--default")
                    .find(".item--active")
                    .parent()
                    .position().left,
                i = e(this)
                    .closest(".amazing-filter.filter--default")
                    .find(".item--active")
                    .parent()
                    .width();
            e(this)
                .closest(".amazing-filter.filter--default")
                .find(".amazing-filter-nav-active")
                .css({ width: i + 6 + "px" }),
                e(this)
                    .closest(".amazing-filter.filter--default")
                    .find(".amazing-filter-nav-active")
                    .css({ left: a - 3 + "px" });
        }),
        e(".amazing-collapse-item").on(
            "click",
            ".amazing-collapse-btn",
            function () {
                e(this).closest(".amazing-collapse-item").hasClass("opened")
                    ? (e(this)
                          .closest(".amazing-collapse-item")
                          .removeClass("opened"),
                      e(this).removeClass("active"),
                      e(this).next().slideUp())
                    : (e(this)
                          .closest(".amazing-collapse-item")
                          .addClass("opened"),
                      e(this).addClass("active"),
                      e(this).next().slideDown());
            }
        ),
        e(".mfp-image").magnificPopup(),
        e(".cform").length &&
            e("#cform").validate({
                rules: {
                    name: { required: !0 },
                    tel: { required: !0 },
                    email: { required: !0, email: !0 },
                    message: { required: !0 },
                },
                success: "valid",
                submitHandler: function () {
                    e.ajax({
                        url: "mailer/feedback.php",
                        type: "post",
                        dataType: "json",
                        data:
                            "name=" +
                            e("#cform").find('input[name="name"]').val() +
                            "&email=" +
                            e("#cform").find('input[name="email"]').val() +
                            "&tel=" +
                            e("#cform").find('input[name="tel"]').val() +
                            "&message=" +
                            e("#cform").find('textarea[name="message"]').val(),
                        beforeSend: function () {},
                        complete: function () {},
                        success: function (o) {
                            e("#cform").fadeOut(),
                                e(".alert-success").delay(1e3).fadeIn();
                        },
                    });
                },
            });
})(jQuery);

   ! function(a) {
            var b = {},
                c = {
                    mode: "horizontal",
                    slideSelector: "",
                    infiniteLoop: !0,
                    hideControlOnEnd: !1,
                    speed: 500,
                    easing: null,
                    slideMargin: 0,
                    startSlide: 0,
                    randomStart: !1,
                    captions: !1,
                    ticker: !1,
                    tickerHover: !1,
                    adaptiveHeight: !1,
                    adaptiveHeightSpeed: 500,
                    video: !1,
                    useCSS: !0,
                    preloadImages: "visible",
                    responsive: !0,
                    slideZIndex: 50,
                    wrapperClass: "bx-wrapper",
                    touchEnabled: !0,
                    swipeThreshold: 50,
                    oneToOneTouch: !0,
                    preventDefaultSwipeX: !0,
                    preventDefaultSwipeY: !1,
                    pager: !0,
                    pagerType: "full",
                    pagerShortSeparator: " / ",
                    pagerSelector: null,
                    buildPager: null,
                    pagerCustom: null,
                    controls: !0,
                    nextText: "Next",
                    prevText: "Prev",
                    nextSelector: null,
                    prevSelector: null,
                    autoControls: !1,
                    startText: "Start",
                    stopText: "Stop",
                    autoControlsCombine: !1,
                    autoControlsSelector: null,
                    auto: !1,
                    pause: 4e3,
                    autoStart: !0,
                    autoDirection: "next",
                    autoHover: !1,
                    autoDelay: 0,
                    autoSlideForOnePage: !1,
                    minSlides: 1,
                    maxSlides: 1,
                    moveSlides: 0,
                    slideWidth: 0,
                    onSliderLoad: function() {},
                    onSlideBefore: function() {},
                    onSlideAfter: function() {},
                    onSlideNext: function() {},
                    onSlidePrev: function() {},
                    onSliderResize: function() {}
                };
            a.fn.bxSlider = function(d) {
                if (0 == this.length) return this;
                if (this.length > 1) return this.each(function() {
                    a(this).bxSlider(d)
                }), this;
                var e = {},
                    f = this;
                b.el = this;
                var g = a(window).width(),
                    h = a(window).height(),
                    j = function() {
                        e.settings = a.extend({}, c, d), e.settings.slideWidth = parseInt(e.settings.slideWidth), e.children = f.children(e.settings.slideSelector), e.children.length < e.settings.minSlides && (e.settings.minSlides = e.children.length), e.children.length < e.settings.maxSlides && (e.settings.maxSlides = e.children.length), e.settings.randomStart && (e.settings.startSlide = Math.floor(Math.random() * e.children.length)), e.active = {
                            index: e.settings.startSlide
                        }, e.carousel = e.settings.minSlides > 1 || e.settings.maxSlides > 1, e.carousel && (e.settings.preloadImages = "all"), e.minThreshold = e.settings.minSlides * e.settings.slideWidth + (e.settings.minSlides - 1) * e.settings.slideMargin, e.maxThreshold = e.settings.maxSlides * e.settings.slideWidth + (e.settings.maxSlides - 1) * e.settings.slideMargin, e.working = !1, e.controls = {}, e.interval = null, e.animProp = "vertical" == e.settings.mode ? "top" : "left", e.usingCSS = e.settings.useCSS && "fade" != e.settings.mode && function() {
                            var a = document.createElement("div"),
                                b = ["WebkitPerspective", "MozPerspective", "OPerspective", "msPerspective"];
                            for (var c in b)
                                if (void 0 !== a.style[b[c]]) return e.cssPrefix = b[c].replace("Perspective", "").toLowerCase(), e.animProp = "-" + e.cssPrefix + "-transform", !0;
                            return !1
                        }(), "vertical" == e.settings.mode && (e.settings.maxSlides = e.settings.minSlides), f.data("origStyle", f.attr("style")), f.children(e.settings.slideSelector).each(function() {
                            a(this).data("origStyle", a(this).attr("style"))
                        }), k()
                    },
                    k = function() {
                        f.wrap('<div class="' + e.settings.wrapperClass + '"><div class="bx-viewport"></div></div>'), e.viewport = f.parent(), e.loader = a('<div class="bx-loading" />'), e.viewport.prepend(e.loader), f.css({
                            width: "horizontal" == e.settings.mode ? 100 * e.children.length + 215 + "%" : "auto",
                            position: "relative"
                        }), e.usingCSS && e.settings.easing ? f.css("-" + e.cssPrefix + "-transition-timing-function", e.settings.easing) : e.settings.easing || (e.settings.easing = "swing");
                        q();
                        e.viewport.css({
                            width: "100%",
                            overflow: "hidden",
                            position: "relative"
                        }), e.viewport.parent().css({
                            maxWidth: o()
                        }), e.settings.pager || e.viewport.parent().css({
                            margin: "0 auto 0px"
                        }), e.children.css({
                            float: "horizontal" == e.settings.mode ? "left" : "none",
                            listStyle: "none",
                            position: "relative"
                        }), e.children.css("width", p()), "horizontal" == e.settings.mode && e.settings.slideMargin > 0 && e.children.css("marginRight", e.settings.slideMargin), "vertical" == e.settings.mode && e.settings.slideMargin > 0 && e.children.css("marginBottom", e.settings.slideMargin), "fade" == e.settings.mode && (e.children.css({
                            position: "absolute",
                            zIndex: 0,
                            display: "none"
                        }), e.children.eq(e.settings.startSlide).css({
                            zIndex: e.settings.slideZIndex,
                            display: "block"
                        })), e.controls.el = a('<div class="bx-controls" />'), e.settings.captions && z(), e.active.last = e.settings.startSlide == r() - 1, e.settings.video && f.fitVids();
                        var b = e.children.eq(e.settings.startSlide);
                        "all" == e.settings.preloadImages && (b = e.children), e.settings.ticker ? e.settings.pager = !1 : (e.settings.pager && w(), e.settings.controls && x(), e.settings.auto && e.settings.autoControls && y(), (e.settings.controls || e.settings.autoControls || e.settings.pager) && e.viewport.after(e.controls.el)), l(b, m)
                    },
                    l = function(b, c) {
                        var d = b.find("img, iframe").length;
                        if (0 == d) return void c();
                        var e = 0;
                        b.find("img, iframe").each(function() {
                            a(this).one("load", function() {
                                ++e == d && c()
                            }).each(function() {
                                this.complete && a(this).load()
                            })
                        })
                    },
                    m = function() {
                        if (e.settings.infiniteLoop && "fade" != e.settings.mode && !e.settings.ticker) {
                            var b = "vertical" == e.settings.mode ? e.settings.minSlides : e.settings.maxSlides,
                                c = e.children.slice(0, b).clone().addClass("bx-clone"),
                                d = e.children.slice(-b).clone().addClass("bx-clone");
                            f.append(c).prepend(d)
                        }
                        e.loader.remove(), t(), "vertical" == e.settings.mode && (e.settings.adaptiveHeight = !0), e.viewport.height(n()), f.redrawSlider(), e.settings.onSliderLoad(e.active.index), e.initialized = !0, e.settings.responsive && a(window).bind("resize", Q), e.settings.auto && e.settings.autoStart && (r() > 1 || e.settings.autoSlideForOnePage) && J(), e.settings.ticker && K(), e.settings.pager && F(e.settings.startSlide), e.settings.controls && I(), e.settings.touchEnabled && !e.settings.ticker && M()
                    },
                    n = function() {
                        var b = 0,
                            c = a();
                        if ("vertical" == e.settings.mode || e.settings.adaptiveHeight)
                            if (e.carousel) {
                                var d = 1 == e.settings.moveSlides ? e.active.index : e.active.index * s();
                                for (c = e.children.eq(d), i = 1; i <= e.settings.maxSlides - 1; i++) c = d + i >= e.children.length ? c.add(e.children.eq(i - 1)) : c.add(e.children.eq(d + i))
                            } else c = e.children.eq(e.active.index);
                        else c = e.children;
                        return "vertical" == e.settings.mode ? (c.each(function(c) {
                            b += a(this).outerHeight()
                        }), e.settings.slideMargin > 0 && (b += e.settings.slideMargin * (e.settings.minSlides - 1))) : b = Math.max.apply(Math, c.map(function() {
                            return a(this).outerHeight(!1)
                        }).get()), "border-box" == e.viewport.css("box-sizing") ? b += parseFloat(e.viewport.css("padding-top")) + parseFloat(e.viewport.css("padding-bottom")) + parseFloat(e.viewport.css("border-top-width")) + parseFloat(e.viewport.css("border-bottom-width")) : "padding-box" == e.viewport.css("box-sizing") && (b += parseFloat(e.viewport.css("padding-top")) + parseFloat(e.viewport.css("padding-bottom"))), b
                    },
                    o = function() {
                        var a = "100%";
                        return e.settings.slideWidth > 0 && (a = "horizontal" == e.settings.mode ? e.settings.maxSlides * e.settings.slideWidth + (e.settings.maxSlides - 1) * e.settings.slideMargin : e.settings.slideWidth), a
                    },
                    p = function() {
                        var a = e.settings.slideWidth,
                            b = e.viewport.width();
                        return 0 == e.settings.slideWidth || e.settings.slideWidth > b && !e.carousel || "vertical" == e.settings.mode ? a = b : e.settings.maxSlides > 1 && "horizontal" == e.settings.mode && (b > e.maxThreshold || b < e.minThreshold && (a = (b - e.settings.slideMargin * (e.settings.minSlides - 1)) / e.settings.minSlides)), a
                    },
                    q = function() {
                        var a = 1;
                        if ("horizontal" == e.settings.mode && e.settings.slideWidth > 0)
                            if (e.viewport.width() < e.minThreshold) a = e.settings.minSlides;
                            else if (e.viewport.width() > e.maxThreshold) a = e.settings.maxSlides;
                        else {
                            var b = e.children.first().width() + e.settings.slideMargin;
                            a = Math.floor((e.viewport.width() + e.settings.slideMargin) / b)
                        } else "vertical" == e.settings.mode && (a = e.settings.minSlides);
                        return a
                    },
                    r = function() {
                        var a = 0;
                        if (e.settings.moveSlides > 0)
                            if (e.settings.infiniteLoop) a = Math.ceil(e.children.length / s());
                            else
                                for (var b = 0, c = 0; b < e.children.length;) ++a, b = c + q(), c += e.settings.moveSlides <= q() ? e.settings.moveSlides : q();
                        else a = Math.ceil(e.children.length / q());
                        return a
                    },
                    s = function() {
                        return e.settings.moveSlides > 0 && e.settings.moveSlides <= q() ? e.settings.moveSlides : q()
                    },
                    t = function() {
                        if (e.children.length > e.settings.maxSlides && e.active.last && !e.settings.infiniteLoop) {
                            if ("horizontal" == e.settings.mode) {
                                var a = e.children.last(),
                                    b = a.position();
                                u(-(b.left - (e.viewport.width() - a.outerWidth())), "reset", 0)
                            } else if ("vertical" == e.settings.mode) {
                                var c = e.children.length - e.settings.minSlides,
                                    b = e.children.eq(c).position();
                                u(-b.top, "reset", 0)
                            }
                        } else {
                            var b = e.children.eq(e.active.index * s()).position();
                            e.active.index == r() - 1 && (e.active.last = !0), void 0 != b && ("horizontal" == e.settings.mode ? u(-b.left, "reset", 0) : "vertical" == e.settings.mode && u(-b.top, "reset", 0))
                        }
                    },
                    u = function(a, b, c, d) {
                        if (e.usingCSS) {
                            var g = "vertical" == e.settings.mode ? "translate3d(0, " + a + "px, 0)" : "translate3d(" + a + "px, 0, 0)";
                            f.css("-" + e.cssPrefix + "-transition-duration", c / 1e3 + "s"), "slide" == b ? (f.css(e.animProp, g), f.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function() {
                                f.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"), G()
                            })) : "reset" == b ? f.css(e.animProp, g) : "ticker" == b && (f.css("-" + e.cssPrefix + "-transition-timing-function", "linear"), f.css(e.animProp, g), f.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function() {
                                f.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"), u(d.resetValue, "reset", 0), L()
                            }))
                        } else {
                            var h = {};
                            h[e.animProp] = a, "slide" == b ? f.animate(h, c, e.settings.easing, function() {
                                G()
                            }) : "reset" == b ? f.css(e.animProp, a) : "ticker" == b && f.animate(h, speed, "linear", function() {
                                u(d.resetValue, "reset", 0), L()
                            })
                        }
                    },
                    v = function() {
                        for (var b = "", c = r(), d = 0; d < c; d++) {
                            var f = "";
                            e.settings.buildPager && a.isFunction(e.settings.buildPager) ? (f = e.settings.buildPager(d), e.pagerEl.addClass("bx-custom-pager")) : (f = d + 1, e.pagerEl.addClass("bx-default-pager")), b += '<div class="bx-pager-item"><a href="" data-slide-index="' + d + '" class="bx-pager-link">' + f + "</a></div>"
                        }
                        e.pagerEl.html(b)
                    },
                    w = function() {
                        e.settings.pagerCustom ? e.pagerEl = a(e.settings.pagerCustom) : (e.pagerEl = a('<div class="bx-pager" />'), e.settings.pagerSelector ? a(e.settings.pagerSelector).html(e.pagerEl) : e.controls.el.addClass("bx-has-pager").append(e.pagerEl), v()), e.pagerEl.on("click", "a", E)
                    },
                    x = function() {
                        e.controls.next = a('<a class="bx-next" href="">' + e.settings.nextText + "</a>"), e.controls.prev = a('<a class="bx-prev" href="">' + e.settings.prevText + "</a>"), e.controls.next.bind("click", A), e.controls.prev.bind("click", B), e.settings.nextSelector && a(e.settings.nextSelector).append(e.controls.next), e.settings.prevSelector && a(e.settings.prevSelector).append(e.controls.prev), e.settings.nextSelector || e.settings.prevSelector || (e.controls.directionEl = a('<div class="bx-controls-direction" />'), e.controls.directionEl.append(e.controls.prev).append(e.controls.next), e.controls.el.addClass("bx-has-controls-direction").append(e.controls.directionEl))
                    },
                    y = function() {
                        e.controls.start = a('<div class="bx-controls-auto-item"><a class="bx-start" href="">' + e.settings.startText + "</a></div>"), e.controls.stop = a('<div class="bx-controls-auto-item"><a class="bx-stop" href="">' + e.settings.stopText + "</a></div>"), e.controls.autoEl = a('<div class="bx-controls-auto" />'), e.controls.autoEl.on("click", ".bx-start", C), e.controls.autoEl.on("click", ".bx-stop", D), e.settings.autoControlsCombine ? e.controls.autoEl.append(e.controls.start) : e.controls.autoEl.append(e.controls.start).append(e.controls.stop), e.settings.autoControlsSelector ? a(e.settings.autoControlsSelector).html(e.controls.autoEl) : e.controls.el.addClass("bx-has-controls-auto").append(e.controls.autoEl), H(e.settings.autoStart ? "stop" : "start")
                    },
                    z = function() {
                        e.children.each(function(b) {
                            var c = a(this).find("img:first").attr("title");
                            void 0 != c && ("" + c).length && a(this).append('<div class="bx-caption"><span>' + c + "</span></div>")
                        })
                    },
                    A = function(a) {
                        e.settings.auto && f.stopAuto(), f.goToNextSlide(), a.preventDefault()
                    },
                    B = function(a) {
                        e.settings.auto && f.stopAuto(), f.goToPrevSlide(), a.preventDefault()
                    },
                    C = function(a) {
                        f.startAuto(), a.preventDefault()
                    },
                    D = function(a) {
                        f.stopAuto(), a.preventDefault()
                    },
                    E = function(b) {
                        e.settings.auto && f.stopAuto();
                        var c = a(b.currentTarget);
                        if (void 0 !== c.attr("data-slide-index")) {
                            var d = parseInt(c.attr("data-slide-index"));
                            d != e.active.index && f.goToSlide(d), b.preventDefault()
                        }
                    },
                    F = function(b) {
                        var c = e.children.length;
                        return "short" == e.settings.pagerType ? (e.settings.maxSlides > 1 && (c = Math.ceil(e.children.length / e.settings.maxSlides)), void e.pagerEl.html(b + 1 + e.settings.pagerShortSeparator + c)) : (e.pagerEl.find("a").removeClass("active"), void e.pagerEl.each(function(c, d) {
                            a(d).find("a").eq(b).addClass("active")
                        }))
                    },
                    G = function() {
                        if (e.settings.infiniteLoop) {
                            var a = "";
                            0 == e.active.index ? a = e.children.eq(0).position() : e.active.index == r() - 1 && e.carousel ? a = e.children.eq((r() - 1) * s()).position() : e.active.index == e.children.length - 1 && (a = e.children.eq(e.children.length - 1).position()), a && ("horizontal" == e.settings.mode ? u(-a.left, "reset", 0) : "vertical" == e.settings.mode && u(-a.top, "reset", 0))
                        }
                        e.working = !1, e.settings.onSlideAfter(e.children.eq(e.active.index), e.oldIndex, e.active.index)
                    },
                    H = function(a) {
                        e.settings.autoControlsCombine ? e.controls.autoEl.html(e.controls[a]) : (e.controls.autoEl.find("a").removeClass("active"), e.controls.autoEl.find("a:not(.bx-" + a + ")").addClass("active"))
                    },
                    I = function() {
                        1 == r() ? (e.controls.prev.addClass("disabled"), e.controls.next.addClass("disabled")) : !e.settings.infiniteLoop && e.settings.hideControlOnEnd && (0 == e.active.index ? (e.controls.prev.addClass("disabled"), e.controls.next.removeClass("disabled")) : e.active.index == r() - 1 ? (e.controls.next.addClass("disabled"), e.controls.prev.removeClass("disabled")) : (e.controls.prev.removeClass("disabled"), e.controls.next.removeClass("disabled")))
                    },
                    J = function() {
                        if (e.settings.autoDelay > 0) {
                            setTimeout(f.startAuto, e.settings.autoDelay)
                        } else f.startAuto();
                        e.settings.autoHover && f.hover(function() {
                            e.interval && (f.stopAuto(!0), e.autoPaused = !0)
                        }, function() {
                            e.autoPaused && (f.startAuto(!0), e.autoPaused = null)
                        })
                    },
                    K = function() {
                        var b = 0;
                        if ("next" == e.settings.autoDirection) f.append(e.children.clone().addClass("bx-clone"));
                        else {
                            f.prepend(e.children.clone().addClass("bx-clone"));
                            var c = e.children.first().position();
                            b = "horizontal" == e.settings.mode ? -c.left : -c.top
                        }
                        u(b, "reset", 0), e.settings.pager = !1, e.settings.controls = !1, e.settings.autoControls = !1, e.settings.tickerHover && !e.usingCSS && e.viewport.hover(function() {
                            f.stop()
                        }, function() {
                            var b = 0;
                            e.children.each(function(c) {
                                b += "horizontal" == e.settings.mode ? a(this).outerWidth(!0) : a(this).outerHeight(!0)
                            });
                            var c = e.settings.speed / b,
                                d = "horizontal" == e.settings.mode ? "left" : "top",
                                g = c * (b - Math.abs(parseInt(f.css(d))));
                            L(g)
                        }), L()
                    },
                    L = function(a) {
                        speed = a ? a : e.settings.speed;
                        var b = {
                                left: 0,
                                top: 0
                            },
                            c = {
                                left: 0,
                                top: 0
                            };
                        "next" == e.settings.autoDirection ? b = f.find(".bx-clone").first().position() : c = e.children.first().position();
                        var d = "horizontal" == e.settings.mode ? -b.left : -b.top,
                            g = "horizontal" == e.settings.mode ? -c.left : -c.top,
                            h = {
                                resetValue: g
                            };
                        u(d, "ticker", speed, h)
                    },
                    M = function() {
                        e.touch = {
                            start: {
                                x: 0,
                                y: 0
                            },
                            end: {
                                x: 0,
                                y: 0
                            }
                        }, e.viewport.bind("touchstart", N)
                    },
                    N = function(a) {
                        if (e.working) a.preventDefault();
                        else {
                            e.touch.originalPos = f.position();
                            var b = a.originalEvent;
                            e.touch.start.x = b.changedTouches[0].pageX, e.touch.start.y = b.changedTouches[0].pageY, e.viewport.bind("touchmove", O), e.viewport.bind("touchend", P)
                        }
                    },
                    O = function(a) {
                        var b = a.originalEvent,
                            c = Math.abs(b.changedTouches[0].pageX - e.touch.start.x),
                            d = Math.abs(b.changedTouches[0].pageY - e.touch.start.y);
                        if (3 * c > d && e.settings.preventDefaultSwipeX ? a.preventDefault() : 3 * d > c && e.settings.preventDefaultSwipeY && a.preventDefault(), "fade" != e.settings.mode && e.settings.oneToOneTouch) {
                            var f = 0;
                            if ("horizontal" == e.settings.mode) {
                                var g = b.changedTouches[0].pageX - e.touch.start.x;
                                f = e.touch.originalPos.left + g
                            } else {
                                var g = b.changedTouches[0].pageY - e.touch.start.y;
                                f = e.touch.originalPos.top + g
                            }
                            u(f, "reset", 0)
                        }
                    },
                    P = function(a) {
                        e.viewport.unbind("touchmove", O);
                        var b = a.originalEvent,
                            c = 0;
                        if (e.touch.end.x = b.changedTouches[0].pageX, e.touch.end.y = b.changedTouches[0].pageY, "fade" == e.settings.mode) {
                            var d = Math.abs(e.touch.start.x - e.touch.end.x);
                            d >= e.settings.swipeThreshold && (e.touch.start.x > e.touch.end.x ? f.goToNextSlide() : f.goToPrevSlide(), f.stopAuto())
                        } else {
                            var d = 0;
                            "horizontal" == e.settings.mode ? (d = e.touch.end.x - e.touch.start.x, c = e.touch.originalPos.left) : (d = e.touch.end.y - e.touch.start.y, c = e.touch.originalPos.top), !e.settings.infiniteLoop && (0 == e.active.index && d > 0 || e.active.last && d < 0) ? u(c, "reset", 200) : Math.abs(d) >= e.settings.swipeThreshold ? (d < 0 ? f.goToNextSlide() : f.goToPrevSlide(), f.stopAuto()) : u(c, "reset", 200)
                        }
                        e.viewport.unbind("touchend", P)
                    },
                    Q = function(b) {
                        if (e.initialized) {
                            var c = a(window).width(),
                                d = a(window).height();
                            g == c && h == d || (g = c, h = d, f.redrawSlider(), e.settings.onSliderResize.call(f, e.active.index))
                        }
                    };
                return f.goToSlide = function(b, c) {
                    if (!e.working && e.active.index != b)
                        if (e.working = !0, e.oldIndex = e.active.index, b < 0 ? e.active.index = r() - 1 : b >= r() ? e.active.index = 0 : e.active.index = b, e.settings.onSlideBefore(e.children.eq(e.active.index), e.oldIndex, e.active.index), "next" == c ? e.settings.onSlideNext(e.children.eq(e.active.index), e.oldIndex, e.active.index) : "prev" == c && e.settings.onSlidePrev(e.children.eq(e.active.index), e.oldIndex, e.active.index), e.active.last = e.active.index >= r() - 1, e.settings.pager && F(e.active.index), e.settings.controls && I(), "fade" == e.settings.mode) e.settings.adaptiveHeight && e.viewport.height() != n() && e.viewport.animate({
                            height: n()
                        }, e.settings.adaptiveHeightSpeed), e.children.filter(":visible").fadeOut(e.settings.speed).css({
                            zIndex: 0
                        }), e.children.eq(e.active.index).css("zIndex", e.settings.slideZIndex + 1).fadeIn(e.settings.speed, function() {
                            a(this).css("zIndex", e.settings.slideZIndex), G()
                        });
                        else {
                            e.settings.adaptiveHeight && e.viewport.height() != n() && e.viewport.animate({
                                height: n()
                            }, e.settings.adaptiveHeightSpeed);
                            var d = 0,
                                g = {
                                    left: 0,
                                    top: 0
                                };
                            if (!e.settings.infiniteLoop && e.carousel && e.active.last)
                                if ("horizontal" == e.settings.mode) {
                                    var h = e.children.eq(e.children.length - 1);
                                    g = h.position(), d = e.viewport.width() - h.outerWidth()
                                } else {
                                    var i = e.children.length - e.settings.minSlides;
                                    g = e.children.eq(i).position()
                                }
                            else if (e.carousel && e.active.last && "prev" == c) {
                                var j = 1 == e.settings.moveSlides ? e.settings.maxSlides - s() : (r() - 1) * s() - (e.children.length - e.settings.maxSlides),
                                    h = f.children(".bx-clone").eq(j);
                                g = h.position()
                            } else if ("next" == c && 0 == e.active.index) g = f.find("> .bx-clone").eq(e.settings.maxSlides).position(), e.active.last = !1;
                            else if (b >= 0) {
                                var k = b * s();
                                g = e.children.eq(k).position()
                            }
                            if ("undefined" != typeof g) {
                                var l = "horizontal" == e.settings.mode ? -(g.left - d) : -g.top;
                                u(l, "slide", e.settings.speed)
                            }
                        }
                }, f.goToNextSlide = function() {
                    if (e.settings.infiniteLoop || !e.active.last) {
                        var a = parseInt(e.active.index) + 1;
                        f.goToSlide(a, "next")
                    }
                }, f.goToPrevSlide = function() {
                    if (e.settings.infiniteLoop || 0 != e.active.index) {
                        var a = parseInt(e.active.index) - 1;
                        f.goToSlide(a, "prev")
                    }
                }, f.startAuto = function(a) {
                    e.interval || (e.interval = setInterval(function() {
                        "next" == e.settings.autoDirection ? f.goToNextSlide() : f.goToPrevSlide()
                    }, e.settings.pause), e.settings.autoControls && 1 != a && H("stop"))
                }, f.stopAuto = function(a) {
                    e.interval && (clearInterval(e.interval), e.interval = null, e.settings.autoControls && 1 != a && H("start"))
                }, f.getCurrentSlide = function() {
                    return e.active.index
                }, f.getCurrentSlideElement = function() {
                    return e.children.eq(e.active.index)
                }, f.getSlideCount = function() {
                    return e.children.length
                }, f.redrawSlider = function() {
                    e.children.add(f.find(".bx-clone")).width(p()), e.viewport.css("height", n() + 30), e.settings.ticker || t(), e.active.last && (e.active.index = r() - 1), e.active.index >= r() && (e.active.last = !0), e.settings.pager && !e.settings.pagerCustom && (v(), F(e.active.index))
                }, f.destroySlider = function() {
                    e.initialized && (e.initialized = !1, a(".bx-clone", this).remove(), e.children.each(function() {
                        void 0 != a(this).data("origStyle") ? a(this).attr("style", a(this).data("origStyle")) : a(this).removeAttr("style")
                    }), void 0 != a(this).data("origStyle") ? this.attr("style", a(this).data("origStyle")) : a(this).removeAttr("style"), a(this).unwrap().unwrap(), e.controls.el && e.controls.el.remove(), e.controls.next && e.controls.next.remove(), e.controls.prev && e.controls.prev.remove(), e.pagerEl && e.settings.controls && e.pagerEl.remove(), a(".bx-caption", this).remove(), e.controls.autoEl && e.controls.autoEl.remove(), clearInterval(e.interval), e.settings.responsive && a(window).unbind("resize", Q))
                }, f.reloadSlider = function(a) {
                    void 0 != a && (d = a), f.destroySlider(), j()
                }, j(), this
            }
        }(jQuery),
        function(a) {
            "use strict";
            "function" == typeof define && define.amd ? define(["jquery"], a) : a(jQuery)
        }(function(a) {
            "use strict";

            function b(a) {
                if (a instanceof Date) return a;
                if (String(a).match(g)) return String(a).match(/^[0-9]*$/) && (a = Number(a)), String(a).match(/\-/) && (a = String(a).replace(/\-/g, "/")), new Date(a);
                throw new Error("Couldn't cast `" + a + "` to a date object.")
            }

            function c(a) {
                var b = a.toString().replace(/([.?*+^$[\]\\(){}|-])/g, "\\$1");
                return new RegExp(b)
            }

            function d(a) {
                return function(b) {
                    var d = b.match(/%(-|!)?[A-Z]{1}(:[^;]+;)?/gi);
                    if (d)
                        for (var f = 0, g = d.length; f < g; ++f) {
                            var h = d[f].match(/%(-|!)?([a-zA-Z]{1})(:[^;]+;)?/),
                                j = c(h[0]),
                                k = h[1] || "",
                                l = h[3] || "",
                                m = null;
                            h = h[2], i.hasOwnProperty(h) && (m = i[h], m = Number(a[m])), null !== m && ("!" === k && (m = e(l, m)), "" === k && m < 10 && (m = "0" + m.toString()), b = b.replace(j, m.toString()))
                        }
                    return b = b.replace(/%%/, "%")
                }
            }

            function e(a, b) {
                var c = "s",
                    d = "";
                return a && (a = a.replace(/(:|;|\s)/gi, "").split(/\,/), 1 === a.length ? c = a[0] : (d = a[0], c = a[1])), Math.abs(b) > 1 ? c : d
            }
            var f = [],
                g = [],
                h = {
                    precision: 100,
                    elapse: !1,
                    defer: !1
                };
            g.push(/^[0-9]*$/.source), g.push(/([0-9]{1,2}\/){2}[0-9]{4}( [0-9]{1,2}(:[0-9]{2}){2})?/.source), g.push(/[0-9]{4}([\/\-][0-9]{1,2}){2}( [0-9]{1,2}(:[0-9]{2}){2})?/.source), g = new RegExp(g.join("|"));
            var i = {
                    Y: "years",
                    m: "months",
                    n: "daysToMonth",
                    d: "daysToWeek",
                    w: "weeks",
                    W: "weeksToMonth",
                    H: "hours",
                    M: "minutes",
                    S: "seconds",
                    D: "totalDays",
                    I: "totalHours",
                    N: "totalMinutes",
                    T: "totalSeconds"
                },
                j = function(b, c, d) {
                    this.el = b, this.$el = a(b), this.interval = null, this.offset = {}, this.options = a.extend({}, h), this.instanceNumber = f.length, f.push(this), this.$el.data("countdown-instance", this.instanceNumber), d && ("function" == typeof d ? (this.$el.on("update.countdown", d), this.$el.on("stoped.countdown", d), this.$el.on("finish.countdown", d)) : this.options = a.extend({}, h, d)), this.setFinalDate(c), this.options.defer === !1 && this.start()
                };
            a.extend(j.prototype, {
                start: function() {
                    null !== this.interval && clearInterval(this.interval);
                    var a = this;
                    this.update(), this.interval = setInterval(function() {
                        a.update.call(a)
                    }, this.options.precision)
                },
                stop: function() {
                    clearInterval(this.interval), this.interval = null, this.dispatchEvent("stoped")
                },
                toggle: function() {
                    this.interval ? this.stop() : this.start()
                },
                pause: function() {
                    this.stop()
                },
                resume: function() {
                    this.start()
                },
                remove: function() {
                    this.stop.call(this), f[this.instanceNumber] = null, delete this.$el.data().countdownInstance
                },
                setFinalDate: function(a) {
                    this.finalDate = b(a)
                },
                update: function() {
                    if (0 === this.$el.closest("html").length) return void this.remove();
                    var b, c = void 0 !== a._data(this.el, "events"),
                        d = new Date;
                    b = this.finalDate.getTime() - d.getTime(), b = Math.ceil(b / 1e3), b = !this.options.elapse && b < 0 ? 0 : Math.abs(b), this.totalSecsLeft !== b && c && (this.totalSecsLeft = b, this.elapsed = d >= this.finalDate, this.offset = {
                        seconds: this.totalSecsLeft % 60,
                        minutes: Math.floor(this.totalSecsLeft / 60) % 60,
                        hours: Math.floor(this.totalSecsLeft / 60 / 60) % 24,
                        days: Math.floor(this.totalSecsLeft / 60 / 60 / 24) % 7,
                        daysToWeek: Math.floor(this.totalSecsLeft / 60 / 60 / 24) % 7,
                        daysToMonth: Math.floor(this.totalSecsLeft / 60 / 60 / 24 % 30.4368),
                        weeks: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 7),
                        weeksToMonth: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 7) % 4,
                        months: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 30.4368),
                        years: Math.abs(this.finalDate.getFullYear() - d.getFullYear()),
                        totalDays: Math.floor(this.totalSecsLeft / 60 / 60 / 24),
                        totalHours: Math.floor(this.totalSecsLeft / 60 / 60),
                        totalMinutes: Math.floor(this.totalSecsLeft / 60),
                        totalSeconds: this.totalSecsLeft
                    }, this.options.elapse || 0 !== this.totalSecsLeft ? this.dispatchEvent("update") : (this.stop(), this.dispatchEvent("finish")))
                },
                dispatchEvent: function(b) {
                    var c = a.Event(b + ".countdown");
                    c.finalDate = this.finalDate, c.elapsed = this.elapsed, c.offset = a.extend({}, this.offset), c.strftime = d(this.offset), this.$el.trigger(c)
                }
            }), a.fn.countdown = function() {
                var b = Array.prototype.slice.call(arguments, 0);
                return this.each(function() {
                    var c = a(this).data("countdown-instance");
                    if (void 0 !== c) {
                        var d = f[c],
                            e = b[0];
                        j.prototype.hasOwnProperty(e) ? d[e].apply(d, b.slice(1)) : null === String(e).match(/^[$A-Z_][0-9A-Z_$]*$/i) ? (d.setFinalDate.call(d, e), d.start()) : a.error("Method %s does not exist on jQuery.countdown".replace(/\%s/gi, e))
                    } else new j(this, b[0], b[1])
                })
            }
        }), $(document).ready(function() {
            function a() {
                window.innerWidth < 800 && (i = 1, console.log("line 1"), setTimeout(function() {
                    $("ul.bxslider li").css("padding-left", "90px")
                }, 100), b(i)), window.innerWidth > 800 && (i = 5, console.log("line 2"), b(i))
            }

            function b(a) {
                $(".bxslider").bxSlider({
                    minSlides: a,
                    maxSlides: a,
                    slideWidth: 360,
                    slideMargin: 10
                })
            }
            a();
            var c = !0;
            $(".navbar-toggle").on("click", function() {
                c && ($(".mobileNav").css("display", "block"), $(".mobileNav").animate({
                    height: "480px"
                }, "slow"), setTimeout(function() {
                    c = !1
                }, 1e3)), c || ($(".mobileNav").animate({
                    height: "0"
                }, "slow"), setTimeout(function() {
                    c = !0, $(".mobileNav").css("display", "none")
                }, 1e3))
            });
            var d = new Date,
                e = parseInt(d.getHours()),
                f = parseInt(d.getDate());
            e >= 14 && (f += 1);
            var g = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + f + " 14:00:00";
            $("#TDwrapper").countdown(g, function(a) {
                $("#clock-a").html(a.offset.hours + "<span>H</span>"), $("#clock-b").html(a.offset.minutes + "<span>M</span>"), $("#clock-c").html(a.offset.seconds + "<span>S</span>")
            });
            var h, i = 1;
           
        });
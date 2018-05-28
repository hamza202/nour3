$(window).load(function () {
    $(".loading").fadeOut(1e3, function () {
        $("body").css("overflow", "auto"), $(this).remove()
    })
}), $("#main-nav ul li:has(ul)").addClass("hasChaild"), $(".categories_list li:has(ul)").addClass("hasChaildd"), $(".categories_list a").on("click", "span", function (e) {
    e.preventDefault()
}), $("#p_reg").validate({
    rules: {
        username: {required: !0, minlength: 2},
        comp_name: {required: !0, minlength: 2},
        mobile: {required: !0, minlength: 2, number: !0},
        model: {required: !0, minlength: 2},
        serial: {required: !0, minlength: 2},
        address: {required: !0, minlength: 2},
        p_name: {required: !0, minlength: 2},
        date: {required: !0, minlength: 2},
        password: {required: !0, minlength: 5},
        confirm_password: {required: !0, minlength: 5, equalTo: "#password"},
        email: {required: !0, email: !0},
        agree: "required"
    },
    messages: {
        username: {
            required: "Please enter a Name",
            minlength: "Your username must consist of at least 2 characters"
        },
        password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        },
        confirm_password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
        },
        email: "Please enter a valid email address"
    }
}), $("#signupForm").validate({
    rules: {
        username: {required: !0, minlength: 2},
        model: {required: !0, minlength: 2},
        serial: {required: !0, minlength: 2},
        address: {required: !0, minlength: 2},
        p_name: {required: !0, minlength: 2},
        date: {required: !0, minlength: 2},
        password: {required: !0, minlength: 5},
        confirm_password: {required: !0, minlength: 5, equalTo: "#password"},
        email: {required: !0, email: !0},
        agree: "required"
    },
    messages: {
        username: {
            required: "Please enter a Name",
            minlength: "Your username must consist of at least 2 characters"
        },
        password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        },
        confirm_password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
        },
        email: "Please enter a valid email address"
    }
}), function (e) {
    "use strict";
    jQuery(document).ready(function (e) {
        jQuery(".stellarnav").stellarNav({theme: "light"})
    });
    var t = e.Deferred();
    e(window).bind("load", function () {
        t.resolve()
    }), e(function () {
        function i() {
            e(".ellipsis").hide().each(function () {
                var t = e(this);
                t.css({width: t.parent().outerWidth(), "white-space": "nowrap"}), t.show()
            })
        }

        e.fx.speeds._default = 500, e.fn.css3Animate = function (t) {
            return e(this).on("click", function (i) {
                var a = t;
                e(this).toggleClass("active"), i.preventDefault(), a.hasClass("opened") ? (a.removeClass("opened").addClass("closed"), setTimeout(function () {
                    a.removeClass("closed")
                }, 500)) : a.addClass("opened")
            })
        }, e("#lang_button").css3Animate(e("#lang_button").next(".dropdown_list")), e("#currency_button").css3Animate(e("#currency_button").next(".dropdown_list")), e.fn.waypointInit = function (t, i, a, n) {
            return e(this).waypoint(function (i) {
                var o = e(this);
                "down" === i ? a ? setTimeout(function () {
                    o.addClass(t)
                }, a) : o.addClass(t) : 1 == n && o.removeClass(t)
            }, {offset: i})
        }, e.fn.waypointSynchronise = function (t) {
            function i(e, i) {
                e.eq(i).addClass(t.classN)
            }

            var a = e(this);
            return a.closest(t.container).waypoint(function (e) {
                a.each(function (n) {
                    "down" === e ? void 0 != t.globalDelay ? setTimeout(function () {
                        setTimeout(function () {
                            i(a, n)
                        }, n * t.delay)
                    }, t.globalDelay) : setTimeout(function () {
                        i(a, n)
                    }, n * t.delay) : t.inv && setTimeout(function () {
                        a.eq(n).removeClass(t.classN)
                    }, n * t.delay)
                })
            }, {offset: t.offset}), a
        }, t.done(function () {
            e(".products_container:not(.a_type_2) .photoframe.animate_ftb").waypointSynchronise({
                container: ".products_container",
                delay: 200,
                offset: 700,
                classN: "animate_vertical_finished"
            }), e(".products_container.a_type_2 .photoframe.animate_ftb").waypointSynchronise({
                container: ".products_container",
                delay: 200,
                offset: 700,
                classN: "animate_vertical_finished"
            }), e(".wfilter_carousel .photoframe.animate_ftb").waypointSynchronise({
                container: ".wfilter_carousel",
                delay: 200,
                offset: 700,
                classN: "animate_vertical_finished"
            }), e(".bestsellers_carousel .photoframe.animate_ftb").waypointSynchronise({
                container: ".bestsellers_carousel",
                delay: 200,
                offset: 700,
                globalDelay: 400,
                classN: "animate_vertical_finished"
            }), e('.banner_type_2[class*="animate_ft"]').waypointSynchronise({
                container: ".row",
                delay: 200,
                offset: 800,
                classN: "animate_vertical_finished"
            }), e(".animate_half_tc").waypointSynchronise({
                container: ".row",
                delay: 0,
                offset: 830,
                classN: "animate_horizontal_finished"
            }), e(".heading2").waypointInit("animate_sj_finished animate_fade_finished", "800px"), e(".nav_buttons_wrap.animate_fade").waypointInit("animate_sj_finished animate_fade_finished", "800px"), e(".product_brands a.animate_fade").waypointSynchronise({
                container: ".product_brands",
                delay: 200,
                offset: 830,
                classN: "animate_sj_finished animate_fade_finished"
            }), e(".blog_carousel a.photoframe").waypointSynchronise({
                container: ".blog_animate.animate_ftr",
                delay: 0,
                offset: 830,
                classN: "animate_vertical_finished"
            }), e(".blog_carousel .mini_post_content > .animate_ftr").waypointSynchronise({
                container: ".blog_animate.animate_ftr",
                delay: 200,
                offset: 830,
                classN: "animate_horizontal_finished"
            }), e(".blog_animate.animate_ftr").waypointInit("animate_horizontal_finished", "800px"), e(".ti_animate.animate_ftr").waypointInit("animate_horizontal_finished", "800px", 1e3), e(".testiomials_carousel .animate_ftr:first").waypointInit("animate_horizontal_finished", "851px", 1200), e(".testiomials_carousel .animate_ftr:nth-child(2)").waypointInit("animate_horizontal_finished", "973px", 1400), e(".testiomials_carousel .animate_ftr:nth-child(3)").waypointInit("animate_horizontal_finished", "987px", 1600), e(".heading1.animate_ftr").waypointInit("animate_horizontal_finished", "1000px"), e(".isotope_menu > li.animate_ftr").waypointSynchronise({
                container: ".isotope_menu",
                delay: 200,
                offset: 1e3,
                classN: "animate_horizontal_finished"
            }), e(".flexslider.animate_ftr").waypointInit("animate_horizontal_finished", "1000px"), setTimeout(function () {
                e(".s_banners .d_block.animate_ftr").waypointSynchronise({
                    container: ".s_banners",
                    delay: 300,
                    offset: 830,
                    classN: "animate_horizontal_finished"
                })
            }, 200), e(".widget.animate_ftr").waypointInit("animate_horizontal_finished", "800px", 200), e(".heading5").waypointInit("animate_horizontal_finished", "800px"), e(".banner.animate_ftr").waypointSynchronise({
                container: ".row",
                delay: 200,
                offset: 1e3,
                globalDelay: 800,
                classN: "animate_horizontal_finished"
            }), e(".nc_carousel .photoframe.animate_ftb").waypointSynchronise({
                container: ".nc_carousel",
                delay: 200,
                offset: 700,
                classN: "animate_vertical_finished"
            }), e(".info_blocks_container .animate_ftr").waypointSynchronise({
                container: ".info_blocks_container",
                delay: 200,
                offset: 700,
                classN: "animate_vertical_finished"
            }), e(".our_recent_work_carousel .animate_ftb").waypointSynchronise({
                container: ".our_recent_work_carousel",
                delay: 200,
                offset: 700,
                classN: "animate_vertical_finished"
            }), e(".p_tables .animate_fade").waypointSynchronise({
                container: ".p_tables",
                delay: 200,
                offset: 700,
                classN: "animate_fade_finished"
            }), e(".animate_corporate_container .animate_fade").waypointSynchronise({
                container: ".animate_corporate_container",
                delay: 200,
                offset: 700,
                classN: "animate_fade_finished"
            })
        }), e(".jackbox[data-group]").length && jQuery(".jackbox[data-group]").jackBox("init", {
            showInfoByDefault: !1,
            preloadGraphics: !0,
            fullscreenScalesContent: !0,
            autoPlayVideo: !0,
            flashVideoFirst: !1,
            defaultVideoWidth: 960,
            defaultVideoHeight: 540,
            baseName: ".jackbox",
            className: ".jackbox",
            useThumbs: !0,
            thumbsStartHidden: !1,
            thumbnailWidth: 75,
            thumbnailHeight: 50,
            useThumbTooltips: !0,
            showPageScrollbar: !1,
            useKeyboardControls: !0
        }), e('[role="banner"]').on("click", ".close_product", function () {
            e(this).closest("li").animate({opacity: "0"}, function () {
                e(this).slideUp(500)
            })
        }), e("#shopping_button").on("mouseenter", function () {
            e(this).css("z-index", "300")
        }).on("mouseleave", function () {
            e(this).css("z-index", "189")
        }), e('[role="banner"]').on("click", ".search_button", function () {
            e(".searchform_wrap").addClass("opened")
        }), e('[role="banner"]').on("click", ".close_search_form", function () {
            e(".searchform_wrap").removeClass("opened").addClass("closed"), setTimeout(function () {
                e(".searchform_wrap").removeClass("closed")
            }, 400)
        }), e("html").hasClass("ie9") && e("input[placeholder]").each(function () {
            e(this).val(e(this).attr("placeholder"));
            var t = e(this).val();
            e(this).on("focus", function () {
                e(this).val() === t && e(this).val("")
            }).on("blur", function () {
                "" == e(this).val() && e(this).val(t)
            })
        }), e(".r_slider").length && e(".r_slider").revolution({
            delay: 5e3,
            startwidth: 1140,
            startheight: 620,
            autoHeight: "off",
            fullScreenAlignForce: "off",
            onHoverStop: "on",
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 3,
            hideThumbsOnMobile: "off",
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResoluition: 0,
            hideTimerBar: "on",
            hideThumbs: 0,
            navigationType: "bullet",
            navigationArrows: "solo",
            navigationStyle: "round",
            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 0,
            navigationVOffset: 15,
            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 40,
            soloArrowLeftVOffset: 0,
            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 40,
            soloArrowRightVOffset: 0,
            touchenabled: "on",
            stopAtSlide: -1,
            stopAfterLoops: -1,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            hideSliderAtLimit: 0,
            dottedOverlay: "none",
            fullWidth: "off",
            forceFullWidth: "off",
            fullScreen: "off",
            fullScreenOffsetContainer: "#topheader-to-offset",
            shadow: 0
        }).bind("revolution.slide.onloaded", function (t, i) {
            var a = e(".revolution_slider");
            a.find(".tp-leftarrow").append('<i class="fa fa-angle-left"></i>'), a.find(".tp-rightarrow").append('<i class="fa fa-angle-right"></i>'), function () {
                for (var t = e(".r_slider [data-custom-thumb]"), i = t.length, a = e(".tp-bullets .bullet"), n = 0; n < i; n++) a.eq(n).append('<div class="custom_thumb tr_all_hover"><img src="' + t.eq(n).data("custom-thumb") + '" alt=""></div>')
            }(), e(".tp-bullets .bullet").each(function () {
                var t = e(this);
                t.on("mouseenter mouseleave", function () {
                    t.children(".custom_thumb").toggleClass("active")
                })
            })
        }), function () {
            var t = e(".wfilter_carousel"), i = e(".wfilter_prev"), a = e(".wfilter_next"),
                n = e("[data-carousel-filter]"), o = [], s = t.find(".photoframe"), l = s.length;
            if (t.length) {
                var r = t.owlCarousel({
                    itemsCustom: [[1199, 4], [992, 4], [768, 3], [590, 2], [300, 1]],
                    autoPlay: !1,
                    slideSpeed: 1e3,
                    autoHeight: !0
                });
                i.on("click", function () {
                    r.trigger("owl.prev")
                }), a.on("click", function () {
                    r.trigger("owl.next")
                });
                for (var c = 0; c < l; c++) o.push(s.eq(c)[0].outerHTML);
                n.on("click", "li", function () {
                    var i = e(this), a = i.children("[data-filter]").data("filter");
                    t.addClass("changed").find(".owl-wrapper").animate({opacity: 0}, function () {
                        e(this);
                        t.children().remove(), "*" == a ? e.each(o, function (e, i) {
                            t.append(i)
                        }) : e.each(o, function (e, i) {
                            -1 !== i.indexOf(a) && t.append(i)
                        }), t.data("owlCarousel").destroy(), t.owlCarousel({
                            itemsCustom: [[1199, 4], [992, 4], [768, 3], [590, 2], [300, 1]],
                            autoPlay: !1,
                            slideSpeed: 1e3,
                            autoHeight: !0,
                            afterInit: function () {
                                t.addClass("no_children_animate")
                            }
                        }), e(window).trigger("resize")
                    }), i.closest("li").addClass("active").siblings().removeClass("active")
                })
            }
        }(), function () {
            var t = e(".bestsellers_carousel");
            if (t.length) {
                var i = t.owlCarousel({
                    itemsCustom: [[1199, 4], [992, 4], [768, 3], [590, 2], [300, 1]],
                    autoPlay: !1,
                    slideSpeed: 1e3,
                    autoHeight: !0
                });
                e(".bestsellers_prev").on("click", function () {
                    i.trigger("owl.prev")
                }), e(".bestsellers_next").on("click", function () {
                    i.trigger("owl.next")
                })
            }
        }(), function () {
            var t = e(".our_recent_work_carousel");
            if (t.length) {
                var i = t.owlCarousel({
                    itemsCustom: [[1199, 3], [992, 3], [768, 3], [421, 2], [10, 1]],
                    autoPlay: !1,
                    slideSpeed: 1e3,
                    autoHeight: !0
                });
                e(".orw_prev").on("click", function () {
                    i.trigger("owl.prev")
                }), e(".orw_next").on("click", function () {
                    i.trigger("owl.next")
                })
            }
        }(), function () {
            var t = e(".nc_carousel");
            if (t.length) {
                var i = t.owlCarousel({
                    itemsCustom: [[1199, 3], [992, 3], [768, 3], [575, 2], [300, 1]],
                    autoPlay: !1,
                    slideSpeed: 1e3,
                    autoHeight: !0
                });
                e(".nc_prev").on("click", function () {
                    i.trigger("owl.prev")
                }), e(".nc_next").on("click", function () {
                    i.trigger("owl.next")
                })
            }
        }(), function () {
            var t = e(".camera_wrap");
            t.length && (t.camera({
                height: "41%",
                navigation: !0,
                pagination: !0,
                playPause: !1,
                thumbnails: !1,
                time: 4e3,
                transPeriod: 1e3,
                navigationHover: !1,
                onLoaded: function () {
                    var t = e(".camera_wrap .camera_src > [data-src]"), i = t.length,
                        a = e(".camera_wrap .camera_pag_ul > li");
                    if (!a.find(".custom_thumb").length) {
                        for (var n = 0; n < i; n++) a.eq(n).append('<div class="custom_thumb tr_all_hover"><img src="' + t.eq(n).data("custom-thumb") + '" alt=""></div>');
                        a.on("mouseenter mouseleave", function () {
                            e(this).children(".custom_thumb").toggleClass("active")
                        })
                    }
                }
            }), t.find(".camera_prev").append('<i class="fa fa-angle-left"></i>'), t.find(".camera_next").append('<i class="fa fa-angle-right"></i>'))
        }(), e("body").on("click", ".rating_list li", function () {
            e(this).siblings().removeClass("active"), e(this).addClass("active").prevAll().addClass("active")
        }), function () {
            if (e(".product_brands").length) {
                var t = e(".product_brands").owlCarousel({
                    itemsCustom: e(".product_brands").hasClass("with_sidebar") ? [[1199, 4], [992, 4], [768, 3], [480, 3], [300, 2]] : [[1199, 6], [992, 5], [768, 4], [480, 3], [300, 2]],
                    autoPlay: !0,
                    stopOnHover: !0,
                    slideSpeed: 600,
                    addClassActive: !0
                });
                e(".pb_prev").on("click", function () {
                    t.trigger("owl.prev")
                }), e(".pb_next").on("click", function () {
                    t.trigger("owl.next")
                })
            }
        }(), function () {
            if (e(".blog_carousel").length) var t = e(".blog_carousel").owlCarousel({
                singleItem: !0,
                stopOnHover: !0,
                slideSpeed: 600,
                autoHeight: !0,
                transitionStyle: "backSlide"
            });
            e(".blog_prev").on("click", function () {
                t.trigger("owl.prev")
            }), e(".blog_next").on("click", function () {
                t.trigger("owl.next")
            })
        }(), function () {
            if (e(".testiomials_carousel").length) {
                var t = e(".testiomials_carousel").owlCarousel({
                    singleItem: !0,
                    autoPlay: !1,
                    stopOnHover: !0,
                    slideSpeed: 1e3,
                    autoHeight: !0
                });
                e(".ti_prev").on("click", function () {
                    t.trigger("owl.prev")
                }), e(".ti_next").on("click", function () {
                    t.trigger("owl.next")
                })
            }
        }(), function () {
            if (e(".testiomials_carousel_2").length) {
                var t = e(".testiomials_carousel_2").owlCarousel({
                    singleItem: !0,
                    autoPlay: !1,
                    stopOnHover: !0,
                    slideSpeed: 1e3,
                    autoHeight: !0
                });
                e(".ti_2_prev").on("click", function () {
                    t.trigger("owl.prev")
                }), e(".ti_2_next").on("click", function () {
                    t.trigger("owl.next")
                })
            }
        }(), e("#go_to_top").waypointInit("animate_horizontal_finished", "0px", 0, !0), e("#go_to_top").on("click", function () {
            e("html,body").animate({scrollTop: 0}, 500)
        }), e(".sw_button").on("click", function () {
            e(this).parent().toggleClass("opened").siblings().removeClass("opened")
        }), window.rmenu = function () {
            function t() {
                e(window).width() < 767 ? (n.off("click").on("click", function () {
                    i.stop().slideToggle(), e(this).toggleClass("active")
                }), a.children("li").children("a").off("click").on("click", function (t) {
                    var i = e(this);
                    i.closest("li").toggleClass("current_click").find(".sub_menu_wrap").stop().slideToggle().end().closest("li").siblings("li").removeClass("current_click").children("a").removeClass("prevented").parent().find(".sub_menu_wrap").stop().slideUp(), i.hasClass("prevented") ? i.removeClass("prevented") : (t.preventDefault(), i.addClass("prevented"))
                })) : e(window).width() > 767 && (i.removeAttr("style").find(".sub_menu_wrap").removeAttr("style"), a.children("li").children("a").off("click"))
            }

            var i = e('[role="navigation"]'), a = e(".main_menu"), n = e("#menu_button");
            t(), e(window).on("resize", t)
        }, rmenu(), e(".custom_select").each(function () {
            var t = e(this).children("ul"), i = e(this).find("select"), a = e(this).find(".select_title");
            if (a.css("min-width", a.outerWidth()), e(this).find("[data-filter]").length) for (var n = 0, o = i.children("option").length; n < o; n++) t.append('<li data-filter="' + i.children("option").eq(n).data("filter") + '" class="tr_delay_hover">' + i.children("option").eq(n).text() + "</li>"); else for (var n = 0, o = i.children("option").length; n < o; n++) t.append('<li class="tr_delay_hover">' + i.children("option").eq(n).text() + "</li>");
            i.hide(), a.on("click", function () {
                t.slideToggle(400), e(this).toggleClass("active")
            }), t.on("click", "li", function () {
                var n = e(this).text();
                a.text(n), t.slideUp(400), i.val(n), a.toggleClass("active")
            })
        }), function () {
            var t;
            e("#price").length && (t = e("#price").slider({
                orientation: "horizontal",
                range: !0,
                values: [0, 237],
                min: 0,
                max: 250,
                slide: function (t, i) {
                    e(this).next().find(".first_limit").val("$" + i.values[0]), e(this).next().find(".last_limit").val("$" + i.values[1])
                }
            }));
            var i = e(".select_color").on("click", function () {
                e(this).addClass("active").parent().siblings().children("button").removeClass("active")
            });
            e(".close_fieldset").on("click", function () {
                e(this).closest("fieldset").animate({opacity: "0"}, function () {
                    e(this).slideUp()
                })
            }), e('button[type="reset"]:not(#styleswitcher button[type="reset"])').on("click", function () {
                i.eq(0).addClass("active").parent().siblings().children("button").removeClass("active"), t.slider("option", "values", [0, 237])
            }), e(".categories_list").on("click", "a", function (t) {
                e(this).parent().children("ul").length && e(this).parent().toggleClass("active").end().next().slideToggle()
            }), e(".categories_list > li > a").on("click", function (t) {
                e(this).parent().children("ul").length && e(this).toggleClass("scheme_color").toggleClass("color_dark")
            })
        }(), function () {
            var t = e(".qv_carousel"), i = e(".qv_carousel_single");
            if (t.length) {
                var a = t.owlCarousel({items: 3, autoPlay: !1, slideSpeed: 1e3, autoHeight: !0});
                e(".qv_btn_prev").on("click", function () {
                    a.trigger("owl.prev")
                }), e(".qv_btn_next").on("click", function () {
                    a.trigger("owl.next")
                })
            }
            if (i.length) {
                var n = i.owlCarousel({
                    itemsCustom: [[1199, 3], [992, 3], [768, 3], [480, 3], [300, 3]],
                    autoPlay: !1,
                    slideSpeed: 1e3,
                    autoHeight: !0
                });
                e(".qv_btn_single_prev").on("click", function () {
                    n.trigger("owl.prev")
                }), e(".qv_btn_single_next").on("click", function () {
                    n.trigger("owl.next")
                })
            }
        }(), e(".quantity").on("click", "button", function () {
            var t = e(this).data("direction"), i = e(this).parent().children('input[type="text"]'), a = i.val();
            if ("up" == t) a++, i.val(a); else if ("down" == t) {
                if (1 == a) return;
                a--, i.val(a)
            }
        }), function () {
            e(".popup").on("popup/position", function () {
                var t = e(this), i = setTimeout(function () {
                    var e = t.outerHeight() / -2, a = t.outerWidth() / -2;
                    t.css({"margin-left": a, "margin-top": e}), clearTimeout(i)
                }, 100)
            });
            var t = e(".popup > .close");
            e("[data-popup]").length && e("body").on("click", "[data-popup]", function (t) {
                var i = e(this).data("popup");
                e(i).find(".popup").trigger("popup/position"), e(i).fadeIn(function () {
                    var t = e(".custom_scrollbar");
                    if (t.length) var a = setInterval(function () {
                        t.is(":visible") && (t.customScrollbar({preventDefaultScroll: !0}), clearInterval(a))
                    }, 100);
                    e(i).on("click", function (t) {
                        e(t.target).hasClass("popup_wrap") && e(this).fadeOut()
                    })
                }), t.preventDefault()
            }), t.on("click", function () {
                e(this).closest(".popup_wrap").fadeOut()
            })
        }(), function () {
            var t = e(".tabs");
            t.length && t.tabs({
                beforeActivate: function (e, t) {
                    var i = t.newTab.children("li a").attr("href");
                    window.location.hash = i
                }, hide: {effect: "fadeOut", duration: 450}, show: {effect: "fadeIn", duration: 450}
            })
        }(), function () {
            var t = e(".accordion:not(.toggle) .accordion_item"), i = t.find(".a_title"),
                a = e(".accordion.toggle .accordion_item"), n = a.find(".a_title");
            t.add(a).children(".a_title").not(".active").next().hide(), i.on("click", function () {
                e(this).removeClass("bg_light_color_1 color_dark").addClass("active color_light").next().stop().slideDown().parent().siblings().children(".a_title").removeClass("active color_light").addClass("bg_light_color_1 color_dark").next().stop().slideUp()
            }), n.on("click", function () {
                e(this).toggleClass("active color_light bg_light_color_1 color_dark").next().stop().slideToggle()
            })
        }(), function () {
            var t = e(".related_projects");
            if (t.length) {
                var i = t.owlCarousel({
                    itemsCustom: t.hasClass("product_full_width") ? [[1199, 4], [992, 4], [768, 3], [480, 1], [300, 1]] : [[1199, 3], [992, 3], [768, 3], [480, 1], [300, 1]],
                    autoPlay: !1,
                    slideSpeed: 1e3,
                    autoHeight: !0
                });
                e(".rp_prev").on("click", function () {
                    i.trigger("owl.prev")
                }), e(".rp_next").on("click", function () {
                    i.trigger("owl.next")
                })
            }
        }(), function () {
            var t = e(".block_select");
            t.each(function () {
                var t = e(this);
                t.find('input[type="radio"]').is(":checked") && t.addClass("selected")
            }), t.on("click", function () {
                e(this).addClass("selected").find('input[type="radio"]').prop("checked", !0).end().siblings(".selected").removeClass("selected")
            })
        }(), function () {
            var t = e(".specials_carousel");
            if (t.length) {
                var i = t.owlCarousel({
                    itemsCustom: [[1199, 1], [992, 1], [768, 1], [480, 2], [300, 1]],
                    autoPlay: !1,
                    slideSpeed: 500,
                    autoHeight: !0,
                    transitionStyle: "backSlide"
                });
                e(".sc_prev").on("click", function () {
                    i.trigger("owl.prev")
                }), e(".sc_next").on("click", function () {
                    i.trigger("owl.next")
                })
            }
        }(), i(), e(window).on("resize", i), function () {
            var t = e("#contactform");
            t.append('<div class="message_container d_none m_top_20"></div>'), t.on("submit", function (i) {
                var a, n = e(this);
                e.ajax({url: "bat/mail.php", type: "post", data: n.serialize()}).then(function (i) {
                    "1" == i ? (a = "Your message has been sent successfully!", t.find('input:not([type="submit"]),textarea').val(""), e(".message_container").html('<div class="alert_box r_corners color_green success"><i class="fa fa-smile-o"></i><p>' + a + "</p></div>").delay(150).slideDown(300).delay(4e3).slideUp(300, function () {
                        e(this).html("")
                    })) : (t.find("textarea").val().length < 20 && (a = "Message must contain at least 20 characters!"), "" == t.find("input").val() && (a = "All required fields must be filled!"), e(".message_container").html('<div class="alert_box r_corners error"><i class="fa fa-exclamation-triangle"></i><p>' + a + "</p></div>").delay(150).slideDown(300).delay(4e3).slideUp(300, function () {
                        e(this).html("")
                    }))
                }, function () {
                    e(".message_container").html('<div class="alert_box r_corners error"><i class="fa fa-exclamation-triangle"></i><p>Connection to server failed!</p></div>').delay(150).slideDown(300).delay(4e3).slideUp(300, function () {
                        e(this).html("")
                    })
                }), i.preventDefault()
            })
        }(), function () {
            var t = e("#newsletter");
            t.append('<div class="message_container_subscribe d_none m_top_20"></div>');
            var i, a = e(".message_container_subscribe");
            t.on("submit", function (t) {
                var n = e(this);
                "" == n.find('input[type="email"]').val() ? (i = "Please enter your e-mail!", a.html('<div class="alert_box r_corners error"><i class="fa fa-exclamation-triangle"></i><p>' + i + "</p></div>").slideDown().delay(4e3).slideUp(function () {
                    e(this).html("")
                })) : (n.find("span.error").hide(), e.ajax({
                    type: "POST",
                    url: "bat/newsletter.php",
                    data: n.serialize(),
                    success: function (t) {
                        "1" == t ? (i = "Your email has been sent successfully!", a.html('<div class="alert_box r_corners color_green success"><i class="fa fa-smile-o"></i><p>' + i + "</p></div>").slideDown().delay(4e3).slideUp(function () {
                            e(this).html("")
                        }).prevAll('input[type="email"]').val("")) : (i = "Invalid email address!", a.html('<div class="alert_box r_corners error"><i class="fa fa-exclamation-triangle"></i><p>' + i + "</p></div>").slideDown().delay(4e3).slideUp(function () {
                            e(this).html("")
                        }))
                    }
                })), t.preventDefault()
            })
        }(), function () {
            var t = e(".popup_wrap .qv_preview > img");
            e(".popup_wrap .qv_carousel .owl-item:first-child li").addClass("active"), e(".popup_wrap .qv_carousel").on("click", "li:not(.active)", function () {
                e(this).addClass("active").parent().siblings().children("li").removeClass("active");
                var i = e(this).data("src");
                e("html").hasClass("ie9") ? t.attr("src", i) : (t.addClass("hide"), setTimeout(function () {
                    t.attr("src", i).removeClass("hide")
                }, 400)), e('.popup_wrap [class*="qv_carousel"]').each(function () {
                    var t = e(this).closest(".qv_carousel_wrap").prev(".qv_preview").children("img");
                    e(this).on("click", "li", function () {
                        var i = e(this).data("src");
                        e("html").hasClass("ie9") ? t.attr("src", i) : (t.addClass("hide"), setTimeout(function () {
                            t.attr("src", i).removeClass("hide")
                        }, 400))
                    })
                })
            })
        }(), function () {
            if (e("[data-zoom-image]").length) {
                var t = e('.qv_preview [class*="button_type_"]');
                e("#zoom_image").elevateZoom({
                    gallery: "qv_carousel_single",
                    zoomWindowFadeIn: 500,
                    zoomWindowFadeOut: 500
                }), t.on("click", function (t) {
                    var i = e("#zoom_image").data("elevateZoom");
                    e.fancybox(i.getGalleryList()), t.preventDefault()
                })
            }
        }(), e('[class*="first_letter"]').each(function () {
            var t = e(this), i = t.text().charAt(0);
            t.text(t.text().substr(1)).prepend('<span class="fl r_corners t_align_c f_left d_block">' + i + "</span>")
        })
    }), e(window).load(function () {
        !function () {
            var t = e(".flexslider:not(.simple_slide_show)");
            t.length && t.flexslider({
                animation: "slide",
                animationSpeed: 1e3,
                prevText: "<i class='fa fa-angle-left'></i>",
                nextText: "<i class='fa fa-angle-right'></i>",
                slideshow: !1,
                start: function () {
                    for (var t = e(".flexslider [data-custom-thumb]"), i = t.length, a = e(".flex-control-nav li"), n = 0; n < i; n++) a.eq(n).append('<div class="custom_thumb tr_all_hover"><img src="' + t.eq(n).data("custom-thumb") + '" alt=""></div>');
                    e(".flex-control-nav li").each(function () {
                        var t = e(this);
                        t.on("mouseenter mouseleave", function () {
                            t.children(".custom_thumb").toggleClass("active")
                        })
                    }), a.find(".custom_thumb").on("click", function () {
                        return !1
                    })
                }
            })
        }(), function () {
            function t() {
                var t = e(this), i = t.data("flexslider").currentSlide;
                t.find(".slides").children("li").eq(i + 1).children(".simple_s_caption").addClass("active").parent().siblings().children(".simple_s_caption").removeClass("active")
            }

            var i = e(".simple_slide_show");
            i.length && i.each(function () {
                var i = e(this);
                i.flexslider({
                    animation: "slide",
                    animationSpeed: 1e3,
                    prevText: "<i class='fa fa-angle-left'></i>",
                    nextText: "<i class='fa fa-angle-right'></i>",
                    slideshow: !0,
                    controlNav: !1,
                    start: function () {
                        t.call(i)
                    },
                    after: function () {
                        t.call(i)
                    }
                })
            })
        }()
    })
}(jQuery);
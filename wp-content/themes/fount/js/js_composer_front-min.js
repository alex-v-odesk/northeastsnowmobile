function vc_plugin_flexslider(t){var e=t?t.find(".wpb_flexslider"):jQuery(".wpb_flexslider");e.each(function(){var t=jQuery(this),e=800,i=1e3*parseInt(t.attr("data-interval")),n=t.attr("data-flex_fx"),a=!0;0==i&&(a=!1),t.is(":visible")&&t.flexslider({animation:n,slideshow:a,slideshowSpeed:i,sliderSpeed:e,smoothHeight:!0})})}function vc_twitterBehaviour(){jQuery(".wpb_twitter_widget .tweets").each(function(t){var e=jQuery(this),i=e.attr("data-tw_name");tw_count=e.attr("data-tw_count"),e.tweet({username:i,join_text:"auto",avatar_size:0,count:tw_count,template:"{avatar}{join}{text}{time}",auto_join_text_default:"",auto_join_text_ed:"",auto_join_text_ing:"",auto_join_text_reply:"",auto_join_text_url:"",loading_text:'<span class="loading_tweets">loading tweets...</span>'})})}function vc_googleplus(){jQuery(".wpb_googleplus").length>0&&!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://apis.google.com/js/plusone.js";var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)}()}function vc_pinterest(){jQuery(".wpb_pinterest").length>0&&!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="http://assets.pinterest.com/js/pinit.js";var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)}()}function vc_progress_bar(){"undefined"!=typeof jQuery.fn.waypoint&&(is_mobile()?jQuery(".vc_progress_bar").find(".vc_single_bar").each(function(){var t=jQuery(this),e=t.find(".vc_bar"),i=e.data("percentage-value");t.css({opacity:"1"}),e.css({width:i+"%"})}):jQuery(".vc_progress_bar").waypoint(function(){jQuery(this).find(".vc_single_bar").each(function(t){var e=jQuery(this),i=e.find(".vc_bar"),n=i.data("percentage-value");setTimeout(function(){e.css({opacity:"1"}),i.css({width:n+"%"})},200*t)})},{offset:"95%"}))}function vc_waypoints(){"undefined"!=typeof jQuery.fn.waypoint&&(is_mobile()?(jQuery(".wpb_animate_when_almost_visible").removeClass("wpb_animate_when_almost_visible"),jQuery(".fount_counter").each(function(){var t=jQuery(this);t.counter({autoStart:!0,duration:parseInt(t.attr("data-duration"),10),countFrom:t.attr("data-origin"),countTo:t.attr("data-counter"),runOnce:!0,placeholder:"",easing:"easeOutCubic",onStart:function(){},onComplete:function(){},numberFormatter:function(t){return Math.ceil(t)}})})):(jQuery(".wpb_animate_when_almost_visible:not(.wpb_start_animation,.pls_manual_anim)").waypoint(function(){var t=jQuery(this);if(t.is('[class*="delay-"]')){for(var e=t.attr("class").split(" "),i=0,n=0;n<e.length;n++)if("delay-"===e[n].substr(0,6)){i=e[n].substr(6,e[n].length);break}setTimeout(function(){t.addClass("wpb_start_animation")},parseInt(i,10)+100)}else setTimeout(function(){t.addClass("wpb_start_animation")},parseInt(i,10)+300)},{offset:"90%"}),jQuery(".fount_counter").waypoint(function(){var t=jQuery(this);t.counter({autoStart:!0,duration:parseInt(t.attr("data-duration"),10),countFrom:t.attr("data-origin"),countTo:t.attr("data-counter"),runOnce:!0,placeholder:"",easing:"easeOutCubic",onStart:function(){},onComplete:function(){},numberFormatter:function(t){return Math.ceil(t)}})},{offset:"85%"})))}function vc_toggleBehaviour(){jQuery(".wpb_toggle").unbind("click").click(function(t){return jQuery(this).next().is(":animated")?!1:void(jQuery(this).hasClass("wpb_toggle_title_active")?jQuery(this).removeClass("wpb_toggle_title_active").next().slideUp(500):jQuery(this).addClass("wpb_toggle_title_active").next().slideDown(500))}),jQuery(".wpb_toggle_content").each(function(t){0==jQuery(this).next().is("h4.wpb_toggle")&&jQuery('<div class="last_toggle_el_margin"></div>').insertAfter(this)})}function vc_tabsBehaviour(){jQuery(function($){$(document.body).off("click.preview","a")}),jQuery(".wpb_tabs, .wpb_tour").each(function(t){var e,i=jQuery(this).attr("data-interval"),n=[];e=jQuery(this).find(".wpb_tour_tabs_wrapper").tabs({show:function(t,e){},beforeActivate:function(t,e){var i=e.panel||e.newPanel},activate:function(t,e){var i=e.panel||e.newPanel}}),jQuery(this).find(".wpb_tab").each(function(){n.push(this.id)})})}function vc_accordionBehaviour(){jQuery(".wpb_accordion").each(function(t){var e,i=jQuery(this).attr("data-interval"),n=!isNaN(jQuery(this).data("active-tab"))&&parseInt(jQuery(this).data("active-tab"))>0?parseInt(jQuery(this).data("active-tab"))-1:!1,a=n===!1||"yes"===jQuery(this).data("collapsible"),o={header:"fount_fa-plus",activeHeader:"fount_fa-minus"};e=jQuery(this).find(".wpb_accordion_wrapper").accordion({header:"> div > h3",icons:o,autoHeight:!1,heightStyle:"content",active:n,collapsible:a,navigation:!0,activate:function(t,e){vc_carouselBehaviour();var i=e.panel||e.newPanel}})})}function vc_teaserGrid(){var t={fitrows:"fitRows",masonry:"masonry"};jQuery(".wpb_grid .teaser_grid_container:not(.wpb_carousel), .wpb_filtered_grid .teaser_grid_container:not(.wpb_carousel)").each(function(){var e=jQuery(this),i=e.find(".wpb_thumbnails"),n=i.attr("data-layout-mode");i.isotope({itemSelector:".isotope-item",layoutMode:void 0==t[n]?"fitRows":t[n]}),e.find(".categories_filter a").data("isotope",i).click(function(t){t.preventDefault();var e=jQuery(this).data("isotope");jQuery(this).parent().parent().find(".active").removeClass("active"),jQuery(this).parent().addClass("active"),e.isotope({filter:jQuery(this).attr("data-filter")})}),jQuery(window).bind("load resize",function(){i.isotope("layout")})})}function vc_carouselBehaviour(t){var e=t?t.find(".wpb_carousel"):jQuery(".wpb_carousel");e.each(function(){var t=jQuery(this);if(t.data("carousel_enabled")!==!0&&t.is(":visible")){t.data("carousel_enabled",!0);var e=jQuery(this).width(),i=getColumnsCount(jQuery(this)),n=500;jQuery(this).hasClass("columns_count_1")&&(n=900);var a=jQuery(this).find(".wpb_thumbnails-fluid li");a.css({"margin-right":a.css("margin-left"),"margin-left":0}),jQuery(this).find(".wpb_wrapper:eq(0)").jCarouselLite({btnNext:jQuery(this).find(".next"),btnPrev:jQuery(this).find(".prev"),visible:i,speed:n}).width("100%");var o=jQuery(this).find("ul.wpb_thumbnails-fluid");o.width(o.width()+300),jQuery(window).resize(function(){var t=screen_size;screen_size=getSizeName(),t!=screen_size&&window.setTimeout("location.reload()",20)})}}),void 0!==window.Swiper&&jQuery(".swiper-container").each(function(){var t=jQuery(this),e,i=0,n=jQuery(this).data("settings");"vertical"===n.mode&&(t.find(".swiper-slide").each(function(){var t=jQuery(this).outerHeight(!0);t>i&&(i=t)}),t.height(i),t.css("overflow","hidden")),jQuery(window).resize(function(){t.find(".swiper-slide").each(function(){var t=jQuery(this).outerHeight(!0);t>i&&(i=t)}),t.height(i)}),e=jQuery(this).swiper(jQuery.extend(n,{onFirstInit:function(e){e.slides.length<2?t.find(".vc_arrow-left,.vc_arrow-right").hide():0===e.activeIndex&&e.params.loop!==!0?t.find(".vc_arrow-left").hide():t.find(".vc_arrow-left").show()},onSlideChangeStart:function(e){e.slides.length>1&&e.params.loop!==!0&&(0===e.activeIndex?t.find(".vc_arrow-left").hide():t.find(".vc_arrow-left").show(),e.slides.length-1===e.activeIndex?t.find(".vc_arrow-right").hide():t.find(".vc_arrow-right").show())}})),t.find(".vc_arrow-left").click(function(t){t.preventDefault(),e.swipePrev()}),t.find(".vc_arrow-right").click(function(t){t.preventDefault(),e.swipeNext()}),e.reInit()})}function vc_slidersBehaviour(){jQuery(".wpb_gallery_slides").each(function(t){var e=jQuery(this),i=0;if(e.hasClass("wpb_image_grid")){var n=e.find(".wpb_image_grid_ul");n.isotope({itemSelector:".isotope-item",layoutMode:"fitRows"}),jQuery(window).load(function(){n.isotope("layout")})}})}function vc_prettyPhoto(){}function vc_google_fonts(){}function getColumnsCount(t){for(var e=!1,i=1;0==e;){if(t.hasClass("columns_count_"+i))return e=!0,i;i++}}function getSizeName(){var t="",e=jQuery(window).width();return e>1170?t="desktop_wide":e>960&&1169>e?t="desktop":e>768&&959>e?t="tablet":e>300&&767>e?t="mobile":300>e&&(t="mobile_portrait"),t}function loadScript(t,e,i){var n=document.createElement("script");n.type="text/javascript",n.readyState&&(n.onreadystatechange=function(){("loaded"==n.readyState||"complete"==n.readyState)&&(n.onreadystatechange=null,i())}),n.src=t,e.get(0).appendChild(n)}function wpb_prepare_tab_content(t,e){var i=e.panel||e.newPanel,n=i.find(".vc_pie_chart:not(.vc_ready)"),a=i.find('[data-ride="vc_carousel"]'),o,r;if(vc_carouselBehaviour(),vc_plugin_flexslider(i),n.length&&jQuery.fn.vcChat&&n.vcChat(),a.length&&jQuery.fn.carousel&&a.carousel("resizeAction"),o=i.find(".isotope"),r=i.find(".wpb_gmaps_widget"),o.length>0&&o.isotope("layout"),r.length&&!r.is(".map_ready")){var s=r.find("iframe");s.attr("src",s.attr("src")),r.addClass("map_ready")}i.parents(".isotope").length&&i.parents(".isotope").each(function(){jQuery(this).isotope("layout")})}document.documentElement.className+=" js_active ",document.documentElement.className+="ontouchstart"in document.documentElement?" vc_mobile ":" vc_desktop ",function(){var t=["-webkit-","-o-","-moz-","-ms-",""];for(var e in t)t[e]+"transform"in document.documentElement.style&&(document.documentElement.className+=" vc_transform ")}(),jQuery(window).load(function(){});var vc_js=function(){vc_twitterBehaviour(),vc_toggleBehaviour(),vc_tabsBehaviour(),vc_accordionBehaviour(),vc_teaserGrid(),vc_carouselBehaviour(),vc_slidersBehaviour(),vc_prettyPhoto(),vc_googleplus(),vc_pinterest(),vc_progress_bar(),vc_plugin_flexslider(),vc_google_fonts(),window.setTimeout(vc_waypoints,1500)};jQuery(document).ready(function($){}),"function"!=typeof window.vc_plugin_flexslider,"function"!=typeof window.vc_twitterBehaviour,"function"!=typeof window.vc_googleplus,"function"!=typeof window.vc_pinterest,"function"!=typeof window.vc_progress_bar,"function"!=typeof window.vc_waypoints,"function"!=typeof window.vc_toggleBehaviour,"function"!=typeof window.vc_tabsBehaviour,"function"!=typeof window.vc_accordionBehaviour,"function"!=typeof window.vc_teaserGrid,"function"!=typeof window.vc_carouselBehaviour,"function"!=typeof window.vc_slidersBehaviour,"function"!=typeof window.vc_prettyPhoto,"function"!=typeof window.vc_google_fonts;var screen_size=getSizeName();+function($){"use strict";function t(t,i){var n;return n=Array.prototype.slice.call(arguments,1),this.each(function(){var a,o;a=$(this),o=a.data("vc.accordion"),o||(o=new e(a,$.extend(!0,{},i)),a.data("vc.accordion",o)),"string"==typeof t&&o[t].apply(o,n)})}var e,i,n,a;e=function(t,e){this.$element=t,this.activeClass="vc_active",this.animatingClass="vc_animating",this.useCacheFlag=void 0,this.$target=void 0,this.$targetContent=void 0,this.selector=void 0,this.$container=void 0,this.animationDuration=void 0,this.index=0},e.transitionEvent=function(){var t,e,i;i=document.createElement("vcFakeElement"),e={transition:"transitionend",MSTransition:"msTransitionEnd",MozTransition:"transitionend",WebkitTransition:"webkitTransitionEnd"};for(t in e)if(void 0!==i.style[t])return e[t]},e.emulateTransitionEnd=function(t,i){var n,a;a=!1,i||(i=250),t.one(e.transitionName,function(){a=!0}),n=function(){a||t.trigger(e.transitionName)},setTimeout(n,i)},e.DEFAULT_TYPE="collapse",e.transitionName=e.transitionEvent(),e.prototype.controller=function(i){var n;n=this.$element,"string"!=typeof i&&(i=n.data("vcAction")||this.getContainer().data("vcAction")),void 0===i&&(i=e.DEFAULT_TYPE),"string"==typeof i&&t.call(n,i)},e.prototype.isCacheUsed=function(){var t,e;return e=this,t=function(){return!1!==e.$element.data("vcUseCache")},void 0===this.useCacheFlag&&(this.useCacheFlag=t()),this.useCacheFlag},e.prototype.getSelector=function(){var t,e;return e=this.$element,t=function(){var t;return t=e.data("vcTarget"),t||(t=e.attr("href")),t},this.isCacheUsed()?(void 0===this.selector&&(this.selector=t()),this.selector):t()},e.prototype.findContainer=function(){var t;return t=this.$element.closest(this.$element.data("vcContainer")),t.length||(t=$("body")),t},e.prototype.getContainer=function(){return this.isCacheUsed()?(void 0===this.$container&&(this.$container=this.findContainer()),this.$container):this.findContainer()},e.prototype.getTarget=function(){var t;return t=this.getSelector(),this.isCacheUsed()?(void 0===this.$target&&(this.$target=this.getContainer().find(t)),this.$target):this.getContainer().find(t)},e.prototype.getTargetContent=function(){var t,e;return t=this.getTarget(),this.isCacheUsed()?(void 0===this.$targetContent&&(e=t,t.data("vcContent")&&(e=t.find(t.data("vcContent")),e.length||(e=t)),this.$targetContent=e),this.$targetContent):t.data("vcContent")&&(e=t.find(t.data("vcContent")),e.length)?e:t},e.prototype.getTriggers=function(){var t;return t=0,this.getContainer().find("[data-vc-accordion]").each(function(){var e,i;i=$(this),e=i.data("vc.accordion"),void 0===e&&(i.vcAccordion(),e=i.data("vc.accordion")),e&&e.setIndex&&e.setIndex(t++)})},e.prototype.setIndex=function(t){this.index=t},e.prototype.getIndex=function(){return this.index},e.prototype.triggerEvent=function(t){var e;"string"==typeof t&&(e=$.Event(t),this.$element.trigger(e))},e.prototype.getActiveTriggers=function(){var t;return t=this.getTriggers().filter(function(){var t,e;return t=$(this),e=t.data("vc.accordion"),e.getTarget().hasClass(e.activeClass)})},e.prototype.changeLocationHash=function(){var t,e;e=this.getTarget(),e.length&&(t=e.attr("id")),t&&(history.pushState?history.pushState(null,null,"#"+t):location.hash="#"+t)},e.prototype.isActive=function(){return this.getTarget().hasClass(this.activeClass)},e.prototype.getAnimationDuration=function(){var t,e;return e=this,t=function(){var t,i;return t=e.getTargetContent(),i=t.css("transition-duration"),i=i.split(",")[0],parseFloat(i)?i:!1},this.isCacheUsed()?(void 0===this.animationDuration&&(this.animationDuration=t()),this.animationDuration):t()},e.prototype.isAnimated=function(){return!!this.getAnimationDuration()},e.prototype.show=function(){var t,i,n;i=this,t=i.getTarget(),n=i.getTargetContent(),i.isActive()||(i.isAnimated()?(i.triggerEvent("beforeShow.vc.accordion"),t.queue(function(a){n.one(e.transitionName,function(){t.removeClass(i.animatingClass),n.attr("style",""),i.triggerEvent("afterShow.vc.accordion")}),e.emulateTransitionEnd(n),a()}).queue(function(t){n.css({position:"absolute",visibility:"hidden",display:"block"});var e=n.height();n.data("vcHeight",e),n.attr("style",""),t()}).queue(function(t){n.height(0),n.css("padding-top",0),n.css("padding-bottom",0),t()}).queue(function(e){t.addClass(i.animatingClass),t.addClass(i.activeClass),i.changeLocationHash(),i.triggerEvent("show.vc.accordion"),e()}).queue(function(t){var e=n.data("vcHeight");n.height(e),n.css("padding-top",""),n.css("padding-bottom",""),t()})):(t.addClass(i.activeClass),i.triggerEvent("show.vc.accordion")))},e.prototype.hide=function(){var t,i,n;i=this,t=i.getTarget(),n=i.getTargetContent(),i.isActive()&&(i.isAnimated()?(i.triggerEvent("beforeHide.vc.accordion"),t.queue(function(a){n.one(e.transitionName,function(){t.removeClass(i.animatingClass),n.attr("style",""),i.triggerEvent("afterHide.vc.accordion")}),e.emulateTransitionEnd(n),a()}).queue(function(e){t.addClass(i.animatingClass),t.removeClass(i.activeClass),i.triggerEvent("hide.vc.accordion"),e()}).queue(function(t){var e=n.height();n.height(e),t()}).queue(function(t){n.height(0),n.css("padding-top",0),n.css("padding-bottom",0),t()})):(t.removeClass(i.activeClass),i.triggerEvent("hide.vc.accordion")))},e.prototype.toggle=function(){var e;e=this.$element,this.isActive()?t.call(e,"hide"):t.call(e,"show")},e.prototype.collapse=function(){var e,i;e=this.$element,i=this.getActiveTriggers().filter(function(){return e[0]!==this}),i.length&&t.call(i,"hide"),t.call(e,"show")},e.prototype.collapseAll=function(){var e,i;e=this.$element,i=this.getActiveTriggers().filter(function(){return e[0]!==this}),i.length&&t.call(i,"hide"),t.call(e,"toggle")},e.prototype.showNext=function(){var e,i,n;if(e=this.getTriggers(),i=this.getActiveTriggers(),e.length){if(i.length){var a;a=i.eq(i.length-1).vcAccordion().data("vc.accordion"),a&&a.getIndex&&(n=a.getIndex())}n>-1&&n+1<e.length?t.call(e.eq(n+1),"controller"):t.call(e.eq(0),"controller")}},e.prototype.showPrev=function(){var e,i,n;if(e=this.getTriggers(),i=this.getActiveTriggers(),e.length){if(i.length){var a;a=i.eq(i.length-1).vcAccordion().data("vc.accordion"),a&&a.getIndex&&(n=a.getIndex())}n>-1?n-1>=0?t.call(e.eq(n-1),"controller"):t.call(e.eq(e.length-1),"controller"):t.call(e.eq(0),"controller")}},e.prototype.showAt=function(e){var i;i=this.getTriggers(),i.length&&e&&e<i.length&&t.call(i.eq(e),"controller")},n=$.fn.vcAccordion,$.fn.vcAccordion=t,$.fn.vcAccordion.Constructor=e,$.fn.vcAccordion.noConflict=function(){return $.fn.vcAccordion=n,this},i=function(e){var i;i=$(this),e.preventDefault(),t.call(i,"controller")},a=function(){var t,e,i,n,a,o;n=.3,a=300,o=0,t=window.location.hash,t&&(e=$(t),e.length&&(i=e.find("[data-vc-accordion]"),i.length&&(setTimeout(function(){$("html, body").animate({scrollTop:e.offset().top-$(window).height()*n},o)},a),i.trigger("click"))))},$(document).on("click.vc.accordion.data-api","[data-vc-accordion]",i),$(document).ready(a)}(window.jQuery),+function($){"use strict";function t(t,i){var n;return n=Array.prototype.slice.call(arguments,1),this.each(function(){var a,o;a=$(this),o=a.data("vc.tabs"),o||(o=new e(a,$.extend(!0,{},i)),a.data("vc.tabs",o)),"string"==typeof t&&o[t].apply(o,n)})}var e,i,n,a;e=function(t,e){this.$element=$(t),this.activeClass="vc_active",this.tabSelector="[data-vc-tab]",this.useCacheFlag=void 0,this.$target=void 0,this.selector=void 0,this.$targetTab=void 0,this.$relatedAccordion=void 0,this.$container=void 0},e.prototype.isCacheUsed=function(){var t,e;return e=this,t=function(){return!1!==e.$element.data("vcUseCache")},void 0===this.useCacheFlag&&(this.useCacheFlag=t()),this.useCacheFlag},e.prototype.getContainer=function(){return this.isCacheUsed()?(void 0===this.$container&&(this.$container=this.findContainer()),this.$container):this.findContainer()},e.prototype.findContainer=function(){var t;return t=this.$element.closest(this.$element.data("vcContainer")),t.length||(t=$("body")),t},e.prototype.getContainerAccordion=function(){return this.getContainer().find("[data-vc-accordion]")},e.prototype.getSelector=function(){var t,e;return e=this.$element,t=function(){var t;return t=e.data("vcTarget"),t||(t=e.attr("href")),t},this.isCacheUsed()?(void 0===this.selector&&(this.selector=t()),this.selector):t()},e.prototype.getTarget=function(){var t;return t=this.getSelector(),this.isCacheUsed()?(void 0===this.$target&&(this.$target=this.getContainer().find(t)),this.$target):this.getContainer().find(t)},e.prototype.getRelatedAccordion=function(){var t,e;return t=this,e=function(){var e;return e=t.getContainerAccordion().filter(function(){var e,i;return e=$(this),i=e.data("vc.accordion"),void 0===i&&(e.vcAccordion(),i=e.data("vc.accordion")),t.getSelector()===i.getSelector()}),e.length?e:void 0},this.isCacheUsed()?(void 0===this.$relatedAccordion&&(this.$relatedAccordion=e()),this.$relatedAccordion):e()},e.prototype.triggerEvent=function(t){var e;"string"==typeof t&&(e=$.Event(t),this.$element.trigger(e))},e.prototype.getTargetTab=function(){var t;return t=this.$element,this.isCacheUsed()?(void 0===this.$targetTab&&(this.$targetTab=t.closest(this.tabSelector)),this.$targetTab):t.closest(this.tabSelector)},e.prototype.tabClick=function(){this.getRelatedAccordion().trigger("click")},e.prototype.show=function(){this.getTargetTab().hasClass(this.activeClass)||(this.triggerEvent("show.vc.tab"),this.getTargetTab().addClass(this.activeClass))},e.prototype.hide=function(){this.getTargetTab().hasClass(this.activeClass)&&(this.triggerEvent("hide.vc.tab"),this.getTargetTab().removeClass(this.activeClass))},i=$.fn.vcTabs,$.fn.vcTabs=t,$.fn.vcTabs.Constructor=e,$.fn.vcTabs.noConflict=function(){return $.fn.vcTabs=i,this},n=function(e){var i;i=$(this),e.preventDefault(),t.call(i,"tabClick")},a=function(e){var i;i=$(e.target).data("vc.accordion"),void 0===i.getRelatedTab&&(i.getRelatedTab=function(){var t;return t=function(){var t;return t=i.getContainer().find("[data-vc-tabs]").filter(function(){var t,e;return t=$(this),e=t.data("vc.accordion"),void 0===e&&t.vcAccordion(),e=t.data("vc.accordion"),e.getSelector()===i.getSelector()})},i.isCacheUsed()?(void 0===i.relatedTab&&(i.relatedTab=t()),i.relatedTab):t()}),t.call(i.getRelatedTab(),e.type)},$(document).on("click.vc.tabs.data-api","[data-vc-tabs]",n),$(document).on("show.vc.accordion hide.vc.accordion",a)}(window.jQuery),+function($){"use strict";function t(){$("[data-vc-tta-autoplay]").each(function(){$(this).vcTtaAutoPlay()})}var e,i,n;e=function(t,e){var n;return n=Array.prototype.slice.call(arguments,1),this.each(function(){var a,o;a=$(this),o=a.data("vc.tta.autoplay"),o||(o=new i(a,$.extend(!0,{},i.DEFAULTS,a.data("vc-tta-autoplay"),e)),a.data("vc.tta.autoplay",o)),"string"==typeof t?o[t].apply(o,n):o.start(n)})},i=function(t,e){this.$element=t,this.options=e},i.DEFAULTS={delay:5e3,pauseOnHover:!0,stopOnClick:!0},i.prototype.show=function(){this.$element.find("[data-vc-accordion]:eq(0)").vcAccordion("showNext")},i.prototype.hasTimer=function(){return void 0!==this.$element.data("vc.tta.autoplay.timer")},i.prototype.setTimer=function(t){this.$element.data("vc.tta.autoplay.timer",t)},i.prototype.getTimer=function(){return this.$element.data("vc.tta.autoplay.timer")},i.prototype.deleteTimer=function(){this.$element.removeData("vc.tta.autoplay.timer")},i.prototype.start=function(){function t(t){t.preventDefault&&t.preventDefault(),a.hasTimer()&&e.call(n,"stop")}function i(t){t.preventDefault&&t.preventDefault(),a.hasTimer()&&e.call(n,"mouseleave"===t.type?"resume":"pause")}var n,a;n=this.$element,a=this,this.hasTimer()||(this.setTimer(window.setInterval(this.show.bind(this),this.options.delay)),this.options.stopOnClick&&n.on("click.vc.tta.autoplay.data-api","[data-vc-accordion]",t),this.options.pauseOnHover&&n.hover(i))},i.prototype.resume=function(){this.hasTimer()&&this.setTimer(window.setInterval(this.show.bind(this),this.options.delay))},i.prototype.stop=function(){this.pause(),this.deleteTimer(),this.$element.off("click.vc.tta.autoplay.data-api mouseenter mouseleave")},i.prototype.pause=function(){var t;t=this.getTimer(),void 0!==t&&window.clearInterval(t)},n=$.fn.vcTtaAutoPlay,$.fn.vcTtaAutoPlay=e,$.fn.vcTtaAutoPlay.Constructor=i,$.fn.vcTtaAutoPlay.noConflict=function(){return $.fn.vcTtaAutoPlay=n,this},$(document).ready(t)}(window.jQuery);
!function(o){"use strict";o(window).on("elementor/frontend/init",(function(){elementorFrontend.hooks.addAction("frontend/element_ready/prooty_elementor_ova_video.default",(function(){o(".ova-video").each((function(){var t=o(this),e=t.find(".video_active"),n=t.find(".ova-modal-container"),a=t.find(".modal-close"),d=t.find(".modal-video");e.on("click",(function(){var t=o(this).find(".video-btn"),e=function(o){var t=/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/,e=o.match(t);return e&&11==e[2].length?e[2]:"error"}(t.data("src")),a=t.data("autoplay"),i=t.data("mute"),r=t.data("loop"),c=t.data("controls"),s=t.data("modest"),l="?";l+="yes"==a?"autoplay=1":"autoplay=0",l+="yes"==i?"&mute=1":"&mute=0",l+="yes"==r?"&loop=1":"&loop=0",l+="yes"==c?"&controls=1":"&controls=0",l+="yes"==t.data("show_info")?"&showinfo=1":"&showinfo=0",l+="yes"==s?"&modestbranding=1":"&modestbranding=0","error"!=e&&(d.attr("src","https://www.youtube.com/embed/"+e+l),n.css("display","flex"))})),a.on("click",(function(){n.hide(),d.removeAttr("src")})),o(window).click((function(o){"ova-modal-container"==o.target.className&&(n.hide(),d.removeAttr("src"))}))}))}))}))}(jQuery);
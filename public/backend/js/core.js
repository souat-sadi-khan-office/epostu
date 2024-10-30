"use strict";
$(document).ready(function() {
    $.sidebarMenu($('.vertical-menu'));
    $(function() {
        for (var a = window.location, abc = $(".vertical-menu a").filter(function() {
            return this.href == a;
        }).addClass("active").parent().addClass("active"); ;) {
            if (!abc.is("li")) break;
            abc = abc.parent().addClass("in").parent().addClass("active");
        }
    });

    $("#infobar-settings-open").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
        $("#infobar-settings-sidebar").addClass("sidebarshow");
    }); 
    $("#infobar-settings-close").on("click", function(e) {
        e.preventDefault();
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-settings-sidebar").removeClass("sidebarshow");
    });

    $(".menu-hamburger").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("toggle-menu");
        $(".menu-hamburger i").toggle();
    });

    $(".topbar-toggle-hamburger").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("topbar-toggle-menu");
        $(".topbar-toggle-hamburger i").toggle();    
    });

    function mediaSize() { 
        if (window.matchMedia('(max-width: 767px)').matches) {
            $("body").removeClass("toggle-menu");
            $(".menu-hamburger i.menu-hamburger-close").hide();
            $(".menu-hamburger i.menu-hamburger-collapse").show();         
        }
    };
    mediaSize();
    window.addEventListener('resize', mediaSize, false);
    /* -- Switchery -- */
    var setting_first = document.querySelector('.js-switch-setting-first');
    var switchery = new Switchery(setting_first, { color: '#0442ba', size: 'small' });
    var setting_second = document.querySelector('.js-switch-setting-second');
    var switchery = new Switchery(setting_second, { color: '#0442ba', size: 'small' });
    var setting_third = document.querySelector('.js-switch-setting-third');
    var switchery = new Switchery(setting_third, { color: '#0442ba', size: 'small' });
    var setting_fourth = document.querySelector('.js-switch-setting-fourth');
    var switchery = new Switchery(setting_fourth, { color: '#0442ba', size: 'small' });
    var setting_fifth = document.querySelector('.js-switch-setting-fifth');
    var switchery = new Switchery(setting_fifth, { color: '#0442ba', size: 'small' });
    var setting_sixth = document.querySelector('.js-switch-setting-sixth');
    var switchery = new Switchery(setting_sixth, { color: '#0442ba', size: 'small' });
    var setting_seventh = document.querySelector('.js-switch-setting-seventh');
    var switchery = new Switchery(setting_seventh, { color: '#0442ba', size: 'small' });
    var setting_eightth = document.querySelector('.js-switch-setting-eightth');
    var switchery = new Switchery(setting_eightth, { color: '#0442ba', size: 'small' });

    $('[data-toggle="popover"]').popover();
    $('[data-toggle="tooltip"]').tooltip();
});
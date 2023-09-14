$(document).ready(function () {
    $('.loading').animsition();
});

$(function () {
    $('#maximage').maximage({
        cycleOptions: {
            fx: 'fade',
            speed: 1000,
            timeout: 5000,
            prev: '#arrow_left',
            next: '#arrow_right',
            pager: '#cycle-nav ul',
            pagerAnchorBuilder: function (idx, slide) {
                return '<li><a href="#"></a></li>';
            }
        }, onFirstImageLoaded: function () {
            jQuery('#cycle-loader').hide();
            jQuery('#maximage').fadeIn('fast');
        }
    });
});



$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $(".section_menu").addClass("scroll_menu")
        } else {
            $(".section_menu").removeClass("scroll_menu")
        }
    })
});




$(document).ready(function () {
    $('#toggle_menu').click(function () {
        $(this).toggleClass('active');
        $('#overlay_popup').toggleClass('open');
        $('body').toggleClass('fix_body');

    });
});


$(document).ready(function () {
    $('.slide_accommodation').owlCarousel({
        loop: true,
        navText: ["<div><i class='fa fa-angle-left' aria-hidden='true'></i> </div>", "<div><i class='fa fa-angle-right' aria-hidden='true'></i></div>"],
        autoplay: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        dots: false,
        pagination: false,
        autoplayHoverPause: true,
        margin: 0,
        responsive: {0: {items: 1}, 1201: {items: 4}}
    });

        $('.slide_accommodation1').owlCarousel({
        loop: true,
        navText: ["<div><i class='fa fa-angle-left' aria-hidden='true'></i> </div>", "<div><i class='fa fa-angle-right' aria-hidden='true'></i></div>"],
        autoplay: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        dots: false,
        pagination: false,
        autoplayHoverPause: true,
        margin: 0,
        responsive: {0: {items: 1}, 1201: {items: 2}}
    });
    $('.slide_promotion').owlCarousel({
        loop: true,
        navText: ["<div><i class='fa fa-angle-left' aria-hidden='true'></i> </div>", "<div><i class='fa fa-angle-right' aria-hidden='true'></i></div>"],
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        dots: false,
        pagination: false,
        autoplayHoverPause: true,
        margin: 30,
        responsive: {0: {items: 1}, 768: {items: 2}, 1201: {items: 3}, 1500: {items: 4}}
    });
    $('.slide_facilities').owlCarousel({
        loop: true,
        navText: ["<div><i class='fa fa-angle-left' aria-hidden='true'></i> </div>", "<div><i class='fa fa-angle-right' aria-hidden='true'></i></div>"],
        autoplay: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        dots: false,
        pagination: false,
        autoplayHoverPause: true,
        margin: 50,
        responsive: {0: {items: 1}}
    });
    $('.slide_pooup').owlCarousel({
        loop: true,
        navText: ["<div><i class='fa fa-angle-left' aria-hidden='true'></i> </div>", "<div><i class='fa fa-angle-right' aria-hidden='true'></i></div>"],
        autoplay: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        dots: true,
        pagination: false,
        autoplayHoverPause: true,
        margin: 50,
        responsive: {0: {items: 1}}
    });
    $('.slide_contentchild').owlCarousel({
        loop: true,
        navText: ["<div><i class='fa fa-angle-left' aria-hidden='true'></i> </div>", "<div><i class='fa fa-angle-right' aria-hidden='true'></i></div>"],
        autoplay: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        dots: false,
        pagination: false,
        autoplayHoverPause: true,
        margin: 50,
        responsive: {0: {items: 1}}
    });
    $('.slide_photo').owlCarousel({
        loop: true,
        navText: ["<div><i class='fa fa-angle-left' aria-hidden='true'></i> </div>", "<div><i class='fa fa-angle-right' aria-hidden='true'></i></div>"],
        autoplay: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        dots: false,
        pagination: false,
        autoplayHoverPause: true,
        margin: 0,
        responsive: {0: {items: 1}, 991: {items: 2}}
    });
    $('.slide_photo1').owlCarousel({
        loop: true,
        navText: ["<div><i class='fa fa-angle-left' aria-hidden='true'></i> </div>", "<div><i class='fa fa-angle-right' aria-hidden='true'></i></div>"],
        autoplay: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        dots: false,
        pagination: false,
        autoplayHoverPause: true,
        margin: 0,
        responsive: {0: {items: 1}, 991: {items: 4}}
    });
    $('.slide_activity').owlCarousel({
        loop: true,
        navText: ["<div><i class='fa fa-angle-left' aria-hidden='true'></i> </div>", "<div><i class='fa fa-angle-right' aria-hidden='true'></i></div>"],
        autoplay: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        dots: false,
        pagination: false,
        autoplayHoverPause: true,
        margin: 0,
        responsive: {0: {items: 1}, 991: {items: 2}, 1201: {items: 3}}
    });
});


$(document).ready(function () {
    $('a[href*=#scrolldown]').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top - 200;
                $('html,body').animate({scrollTop: targetOffset}, 1000);
                return false;
            }
        }
    });
    $('a[href*=#book]').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top - 100;
                $('html,body').animate({scrollTop: targetOffset}, 1000);
                return false;
            }
        }
    });

});

$(document).ready(function () {
    $('#gallery').lightGallery({});
    $('#gallery_map').lightGallery({});
});

$(document).ready(function () {
    $(".dropdown").hover(function () {
        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
        $(this).toggleClass('open');
    }, function () {
        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
        $(this).toggleClass('open');
    });
});



$(document).ready(function(){
    $(".collapse.in").each(function(){
        $(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
    });
    $(".collapse").on('show.bs.collapse', function(){
        $(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
    }).on('hide.bs.collapse', function(){
        $(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
    });
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

let toolID = 0, tooltip = function(ev){
    const colours = ["white", "black", "red", "orange", "green", "blue", "violet"];
    const positions = ["top", "left", "right", "bottom"];
    const animations = ["blank", "fade", "ease-in", "ease-out"];

    let _in = this.getAttribute("data-event-in") || "mouseenter";
    let _out = this.getAttribute("data-event-out") || "mouseleave";
    let action = (_in == _out)? !this.hasAttribute("data-tooltip-id"): (ev.type == _in);

    // Show Tooltip
    if(action){
        let config = {
            color: "white",
            position: "top",
            animation: "blank",
            classNames: ""
        }, tip, pos;

        if(!this.hasAttribute("data-tooltip-id")){
            if(this.hasAttribute("data-tooltip-config")){
                this.getAttribute("data-tooltip-config").split(",").forEach((item) => {
                    if(colours.indexOf(item) >= 0){
                        config.color = item;
                    } else if(positions.indexOf(item) >= 0){
                        config.position = item;
                    } else if(animations.indexOf(item) >= 0){
                        config.animation = item;
                    } else {
                        config.classNames += ` ${item}`;
                    }
                });
            }
            tip = document.createElement("DIV");
            tip.id = `tooltip-${++toolID}`;
            tip.innerHTML = this.getAttribute("data-tooltip");
            tip.className = `tooltip tooltip-${config.color} tooltip-${config.position} `
                + `tooltip-${config.animation} ${config.classNames}`;
            document.body.appendChild(tip);

            pos = ((element) => {
                let position = {
                    top:    element.offsetTop    || 0,
                    left:   element.offsetLeft   || 0,
                    width:  element.offsetWidth  || 0,
                    height: element.offsetHeight || 0
                };
                while(element = element.offsetParent){
                    position.top  += element.offsetTop;
                    position.left += element.offsetLeft;
                }
                return position;
            })(this);
            switch(config.position){
                case "left":
                    tip.style.top = (pos.top + (pos.height/2) - (tip.offsetHeight/2)) + "px";
                    tip.style.left = (pos.left - tip.offsetWidth - 10) + "px";
                    break;
                case "right":
                    tip.style.top = (pos.top + (pos.height/2) - (tip.offsetHeight/2)) + "px";
                    tip.style.left = (pos.left + pos.width + 10) + "px";
                    break;
                case "bottom":
                    tip.style.top = (pos.top + pos.height + 10) + "px";
                    tip.style.left = (pos.left + (pos.width / 2) - (tip.offsetWidth / 2)) + "px";
                    break;
                default:
                    tip.style.top = (pos.top - tip.offsetHeight - 10) + "px";
                    tip.style.left = (pos.left + (pos.width / 2) - (tip.offsetWidth / 2)) + "px";
                    break;
            }
            this.setAttribute("data-tooltip-id", `tooltip-${toolID}`);
        }
        ((id) => {
            setTimeout(() => { document.querySelector(`#${id}`).classList.add("show"); }, 25);
        })(this.getAttribute("data-tooltip-id"));
        return;
    }

    // Hide Tootlip
    let tip = document.querySelector(`#${this.getAttribute("data-tooltip-id")}`);
    tip.classList.remove("show");
    this.removeAttribute("data-tooltip-id");
    ((e) => { setTimeout(function(){ e.parentElement.removeChild(e); }, 200); })(tip);
    return;
};

// Init
document.addEventListener("DOMContentLoaded", () => {
    [].forEach.call(document.querySelectorAll("[data-tooltip]"), function(item){
        item.addEventListener(item.getAttribute("data-event-in") || "mouseenter", tooltip);
        item.addEventListener(item.getAttribute("data-event-out") || "mouseleave", tooltip);
    });
});


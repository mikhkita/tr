$(document).ready(function(){	
    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }
    }
    $(window).resize(resize);
    resize();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur().parents('form').submit(function() {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });
            });
        }
    }
    $.fn.placeholder();

    // Header ------------------------------------------------------ Header
    $(".b-lk-top__butt").click(function(){
        $(".b-lk-top__bubble").toggleClass("show");

        return false;
    });
    $("html").click(function(){
        if( $(".b-lk-top__bubble").hasClass("show") ){
            $(".b-lk-top__bubble").removeClass("show");
        }
    });
    // Header ------------------------------------------------------ Header

    // Custom Scrollbar -------------------------------------------- Custom Scrollbar
    $(".custom-scrollbar").wrapInner("<div class='scrollbar-wrap'></div>");
    $(".custom-scrollbar").each(function(){
        var padding = $(this).css("padding");

        $(this).find(".scrollbar-wrap").css("padding", padding);
        $(this).css("padding", 0);
    });
    $(".custom-scrollbar").mCustomScrollbar({
        theme : "minimal-dark"
    });
    // Custom Scrollbar -------------------------------------------- Custom Scrollbar

    // Custom Select  ---------------------------------------------- Custom Select
    $(".custom-select").select2({
        placeholder: "",
        allowClear: true
    });
    // Custom Select  ---------------------------------------------- Custom Select

    // Progress Bars  ---------------------------------------------- Progress Bars
    function animateProgressBars(){
        var i = 0;
        $(".b-line-progressbar:not(.animated)").each(function(){
            var percent = $(this).attr("data-percent")*1,
                $this = $(this);

            if( $(this).parents(".b-progressbar-cont.without-percent").length ){
                $(this).html('<span class="b-line-progressbar__bar"></span>');
            }else{
                $(this).html('<span class="b-line-progressbar__bar"></span><span class="b-line-progressbar__percent">' + percent + '%</span>');
                $(this).find(".b-line-progressbar__percent").delay(300).fadeIn(300);

                if( percent > 53 ){
                    $(this).addClass("white");
                }
            }

            i++;
            setTimeout(function(){
                $this.find(".b-line-progressbar__bar").css("width", percent +"%");
            }, 50*i);

            $(this).addClass("animated");
        });

        var i = 0;
        $(".b-circle:not(.animated)").each(function(){
            var total = 300,
                pie = $(this).find(".b-circle__pie")[0],
                percent = $(this).attr("data-percent")*1,
                $this = $(this);

            i++;
            setTimeout(function(){
                var fixedNumber = ((percent * total) / 100) / 1.328,
                    result = fixedNumber + ' ' + total;
              
                pie.style.strokeDasharray = result;

                $this.find(".b-circle__number").addClass("show");
            }, 50*i);

            $(this).addClass("animated");
        });
    }

    animateProgressBars();
    // Progress Bars  ---------------------------------------------- Progress Bars

    // Accordion  -------------------------------------------------- Accordion
    $(".b-accordion__title").each(function(){
        if( isSpoilerOpened($(this).attr("data-id")) ){
            $(this).addClass("open");
        }
    });

    $(".b-accordion__title.open + .b-accordion__block").animate({
        "height" : "show"
    }, 0);

    $(".b-accordion__title").click(function(){
        $(this).next(".b-accordion__block").animate({
            "height" : (($(this).hasClass("open"))?"hide":"show")
        }, 300);

        $(this).toggleClass("open");

        setSpoilerState($(this).attr("data-id"), $(this).hasClass("open"));
    });

    function isSpoilerOpened(index){
        console.log(index+ " " +getCookie("spoiler-" + index));
        return getCookie("spoiler-" + index) == "opened";
    }

    function setSpoilerState(index, open){
        if( open ){
            setCookie("spoiler-" + index, "opened", { expires : 94608000, path : "/" });
        }else{
            deleteCookie("spoiler-" + index);
        }
    }
    // Accordion  -------------------------------------------------- Accordion

    // Cookie Functions  ------------------------------------------- Cookie Functions
    function getCookie(name) {
        var matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    function setCookie(name, value, options) {
        options = options || {
            path: "/"
        };

        var expires = options.expires;

        if (typeof expires == "number" && expires) {
            var d = new Date();
            d.setTime(d.getTime() + expires * 1000);
            expires = options.expires = d;
        }
        if (expires && expires.toUTCString) {
            options.expires = expires.toUTCString();
        }

        value = encodeURIComponent(value);

        var updatedCookie = name + "=" + value;

        for (var propName in options) {
            updatedCookie += "; " + propName;
            var propValue = options[propName];
            if (propValue !== true) {
                updatedCookie += "=" + propValue;
            }
        }

        document.cookie = updatedCookie;
    }

    function deleteCookie(name) {
        setCookie(name, "", {
            expires: -1,
            path : "/"
        });
    }
    // Cookie Functions  ------------------------------------------- Cookie Functions
});
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
    function bindCustomScrollbar(){
        $(".custom-scrollbar:not(.binded)").wrapInner("<div class='scrollbar-wrap'></div>");
        $(".custom-scrollbar:not(.binded)").each(function(){
            var padding = $(this).css("padding");

            if( !$(this).attr("data-padding") || $(this).attr("data-padding") == "" ){
                $(this).attr("data-padding", $(this).css("padding"));
            }
            $(this).find(".scrollbar-wrap").css("padding", $(this).attr("data-padding"));
            $(this).css("padding", 0);
        });
        $(".custom-scrollbar:not(.binded)").mCustomScrollbar({
            theme : "minimal-dark"
        });
        $(".custom-scrollbar:not(.binded)").addClass("binded");
    }
    // Custom Scrollbar -------------------------------------------- Custom Scrollbar

    // Custom Select  ---------------------------------------------- Custom Select
    function bindCustomSelect(){
        $(".custom-select:not(.binded)").each(function(){
            $(this).select2({
                placeholder: "",
                allowClear: true
                // dropdownParent: $(this).parent()
            });
        });

        $(".custom-select:not(.binded)").addClass("binded");
    }
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
            }, 100*i);

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

    // Ajax forms  ------------------------------------------------- Ajax forms
    function bindForm() {
        var rePhone = /^\+\d \(\d{3}\) \d{3}-\d{2}-\d{2}$/,
            tePhone = '+7 (999) 999-99-99';

        $.validator.addMethod('customPhone', function (value) {
            return rePhone.test(value);
        });

        $(".ajax:not(.binded)").parents("form").each(function(){
            $(this).validate({
                rules: {
                    email: 'email',
                    phone: 'customPhone'
                }
            });
            if( $(this).find("input[name=phone]").length ){
                $(this).find("input[name=phone]").mask(tePhone,{placeholder:" "});
            }
        });

        $(".ajax:not(.binded)").parents("form").submit(function(){
            if( $(this).find("input.error,select.error,textarea.error").length == 0 ){
                var $this = $(this),
                    $cont = $($this.attr("data-block"));

                $this.find(".ajax").attr("onclick", "return false;");

                if( $this.attr("data-beforeAjax") && customHandlers[$this.attr("data-beforeAjax")] ){
                    customHandlers[$this.attr("data-beforeAjax")]($this);
                }

                $.ajax({
                    type: $(this).attr("method"),
                    url: $(this).attr("action"),
                    data:  $this.serialize(),
                    success: function(msg){
                        if(isValidJSON(msg)){
                            jsonHandler(msg);
                        }else if( msg != "none" ){
                            setResult($cont, msg);
                        }

                        if( $this.attr("data-afterAjax") && customHandlers[$this.attr("data-afterAjax")] ){
                            customHandlers[$this.attr("data-afterAjax")]($this);
                        }

                        $.fancybox.close();
                    },
                    error: function(){
                        $.fancybox.close();
                        $(".b-error-link").click();
                    },
                    complete: function(){
                        $this.find(".ajax").removeAttr("onclick");
                        $this.find("input[type=text],textarea").val("");
                    }
                });
            }else{
                $(this).find("input.error,select.error,textarea.error").eq(0).focus();
            }
            return false;
        });

        $(".ajax-popup:not(.binded)").fancybox({
            type: "ajax",
            btnTpl: {
                smallBtn: '<button data-fancybox-close="" class="fancybox-close icon-close" title="Close"></button>'
            },
            ajax : {
                complete: function(el, type) {
                    if( type == "error" )
                        $(".fancybox-inner").html("<div class='b-popup' style='width: 600px;'><h2>Ошибка</h2>"+el.responseText+"</div>");
                }
            },
            afterLoad: function(){
                bindForm();
            },
            afterShow: function(){
                $(".b-popup").find("input[type='text'],input[type='number'],textarea").eq(0).focus();
            }
        });

        $(".ajax:not(.binded), .ajax-popup:not(.binded)").addClass("binded");

        bindCustomScrollbar();
        animateProgressBars();
        bindCustomSelect();
        bindAjaxSearch();
    }

    function setResult($cont, html){
        if( $cont.children(".mCustomScrollBox").children(".mCSB_container").children(".scrollbar-wrap").length ){
            $cont = $cont.children(".mCustomScrollBox").children(".mCSB_container").children(".scrollbar-wrap");
        }
        if( $cont.hasClass("b-popup") ){
            var $close = $cont.find(".fancybox-close").clone();
            $cont.replaceWith(html);
            $(".b-popup").each(function(){
                if( !$(this).find(".fancybox-close").length ){
                    $(this).prepend($close);
                }
            });
        }else{
            $cont.html(html);
        }

        if( $(".b-personal-col").length ){
            $(".b-personal-col").mCustomScrollbar("scrollTo", "top", {
                scrollEasing: "easeOut"
            });
        }

        bindForm();
    }

    $("body").on("click", ".ajax", function(){
        $(this).parents("form").submit();
        return false;
    });

    function isValidJSON(src) {
        var filtered = src;
        filtered = filtered.replace(/\\["\\\/bfnrtu]/g, '@');
        filtered = filtered.replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']');
        filtered = filtered.replace(/(?:^|:|,)(?:\s*\[)+/g, '');

        return (/^[\],:{}\s]*$/.test(filtered));
    }

    function jsonHandler(msg){
        var json = JSON.parse(msg);
        if( json.result == "success" ){
            if( json.actions.length ){
                for( var action of json.actions ){
                    switch (action.action) {
                        case "delete":
                            $(action.selector).remove();
                        break;

                        case "change":
                            for( var selector in action.items ){
                                $(selector).html(action.items[selector]);
                            }
                        break;

                        case "ajaxSearch":
                            ajaxSearch($(action.selector));
                        break;
                    }
                }
            }
        }
    }
    // Ajax forms  ------------------------------------------------- Ajax forms

    // Other  ------------------------------------------------------ Other
    $("body").on("click", "#b-change-password", function(){
        $(".b-change-password-input-group").fadeIn(300);
        $("#old_password").focus();

        return false;
    });
    // Other  ------------------------------------------------------ Other

    // Ajax search  ------------------------------------------------ Ajax search
    function bindAjaxSearch(){
        $(".b-query-input:not(.binded)").each(function(){
            var prev = $(this).val();

            $(this).attr("data-count", 0);

            $(this).keyup(function(e){
                var code = e.keyCode,
                    value = $(this).val();

                if( (value == prev || code == 13 || value.length < 3) && value != "" ){
                    return true;
                }

                ajaxSearch($(this));

                prev = value;
            });    
        });

        $(".b-query-input:not(.binded)").addClass("binded");
    }

    function ajaxSearch($input){
        var url = $input.attr("data-href"),
            $block = $($input.attr("data-block")),
            params = $input.attr("data-params"),
            name = $input.attr("name"),
            value = $input.val();

        if( params.indexOf("=") != -1 ){
            params += "&";
        }else{
            params = "";
        }

        $input.attr("data-count", getCount($input) + 1);

        $.ajax({
            type: "GET",
            url: url,
            data: params + name + "=" + value,
            success: function(msg){
                $input.attr("data-count", getCount($input) - 1);

                if( getCount($input) == 0 ){
                    setResult($block, msg);
                }
            },
            error: function(){

            },
            complete: function(){

            }
        });
    }

    function getCount($input){
        return $input.attr("data-count")*1;
    }
    // Ajax search  ------------------------------------------------ Ajax search

    bindForm();
});
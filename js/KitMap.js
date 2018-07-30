// 
//	Kit Map v1.0
//
// 	Developed by Mike Kitaev
//
//	Website: http://kitaev.pro/
//	E-mail: mike@kitaev.pro
//

(function($) {
	$.fn.KitMap = function(options) {
		var _ = this,
			easing = {
				linear: function (t) { return t },
				InQuad: function (t) { return t*t },
				OutQuad: function (t) { return t*(2-t) },
				InOutQuad: function (t) { return t<.5 ? 2*t*t : -1+(4-2*t)*t },
				InCubic: function (t) { return t*t*t },
				OutCubic: function (t) { return (--t)*t*t+1 },
				InOutCubic: function (t) { return t<.5 ? 4*t*t*t : (t-1)*(2*t-2)*(2*t-2)+1 },
				InQuart: function (t) { return t*t*t*t },
				OutQuart: function (t) { return 1-(--t)*t*t*t },
				InOutQuart: function (t) { return t<.5 ? 8*t*t*t*t : 1-8*(--t)*t*t*t },
				InQuint: function (t) { return t*t*t*t*t },
				OutQuint: function (t) { return 1+(--t)*t*t*t*t },
				InOutQuint: function (t) { return t<.5 ? 16*t*t*t*t*t : 1+16*(--t)*t*t*t*t }
			};

		options = $.extend({
			afterInit : function(){

			},
			resize : function(){

			}
		}, options);

       	_.extend({ 
       		canvas : null,
       		dragStart : false,
       		margin : 50,
       		startX : 0,
       		startY : 0,
       		zoom : 1,
       		startScrollTop : 0,
			startScrollLeft : 0,
			tolerance : 20,
			wasDrag : false,
			isSmallMap : true,
			isTouch : ('ontouchstart' in document.documentElement),
       		o : options
       	});

		return this.each(function(){
			_.extend({
				_init : function (){
					_.initHandlers();

					_.afterInit();
				},

				initMap : function(html){
					$(".b-fixed-map").html(html);

					_.canvas = _.find(".b-map-canvas");

					bindForm();

					_.initProgressBars();

					_.resizeHandler();
				},

				initHandlers : function(){
					$(window).resize(function(){ _.resizeHandler(); });

					_.bind( _.isTouch ? "touchstart" : "mousedown", function(y){
						e = _.isTouch ? y.originalEvent.touches[0] : y;
						_.dragStart = true;		

						_.startY = e.pageY;
						_.startX = e.pageX;

						_.startScrollTop = _.scrollTop();
						_.startScrollLeft = _.scrollLeft();
					});	

					$(document).bind( _.isTouch ? "touchmove" : "mousemove", function(y){
						if( !_.dragStart ) return true;

						var currentScrollTop = _.startScrollTop + _.startY - e.pageY,
							currentScrollLeft = _.startScrollLeft + _.startX - e.pageX;

						e = _.isTouch ? y.originalEvent.touches[0] : y;

						if( !_.wasDrag ){
							if( Math.abs(_.startX - e.pageX) + Math.abs(_.startY - e.pageY) > _.tolerance ){
								_.wasDrag = true;
								_.addClass("dragged");
							}else{
								return true;
							}
						}

						if( currentScrollTop < 0 ){
							_.startY = e.pageY;
							_.startScrollTop = 0;
						}

						if( currentScrollLeft < 0 ){
							_.startX = e.pageX;
							_.startScrollLeft = 0;
						}

						_.scrollTop(currentScrollTop);
						_.scrollLeft(currentScrollLeft);

						return false;
					});	

					$(window).bind( _.isTouch ? "touchend" : "mouseup", function(y){
						if( !_.dragStart ) return true;

						_.dragStart = false;
						_.removeClass("dragged");

						setTimeout(function(){
							_.wasDrag = false;
						}, 20);
						
						// if (_.wasDrag) return false;
					});	

					$(document).bind("mouseleave", function(){
						_.dragStart = false;
						_.wasDrag = false;
						_.removeClass("dragged");
					});

					$("body").on("click", ".b-map-skill-group__link", function(){
						if( _.wasDrag ){ 
							return false;
						}

						_.changeZoom(1, $(this).parent(".b-map-skill-group") );
					});

					$(".b-map-zoom-in").bind("click", function(){
						_.changeZoom(1);
						return false;
					});

					$(".b-card").bind("click", function(){
						_.canvas = null;
						$(".b-fixed-map").html("");

						$.ajax({
		                    type: "GET",
		                    url: $(this).attr("href"),
		                    data: $(".b-left-col form").eq(0).serialize(),
		                    success: function(msg){
		                        _.initMap(msg);

		                        _.changeZoom(1);
		                    },
		                    error: function(){
		                        
		                    },
		                    complete: function(){
		                        
		                    }
		                });
						return false;
					});

					$(".b-map-zoom-out").bind("click", function(){
						_.changeZoom(-1);
						return false;
					});

					$("body").on("click", ".b-map .b-avatar", function(){
				        $(this).prev(".b-bubble").find(".ajax-popup").click();
				    });

				    $("body").on("mouseover", ".b-map .b-avatar", function(){
				        var offset = $(this).offset().top - $(".b-map-canvas").offset().top;
				        if( offset < 300 ){
				            $(this).parents(".b-avatar-cont").addClass("bot");
				        }
				    });
				},

				destroyHandlers : function(){
					_.unbind( _.isTouch ? "touchstart" : "mousedown");	

					$(document).unbind( _.isTouch ? "touchmove" : "mousemove");	

					$(window).unbind( _.isTouch ? "touchend" : "mouseup");

					$(document).unbind("mouseleave");

					$(".b-map-skill-group__link, .b-map-zoom-in, .b-card, .b-map-zoom-out").unbind("click");
				},

				afterInit : function(){
					_.o.afterInit(_);
				},

				changeZoom : function(side, $el){
					if( _.zoom + side > 2 ) 
						return true;

					if( _.zoom + side > 0 && _.hasClass("hide") ){
						$(".b-right-tab").addClass("hide");
						$(".b-fixed-map").removeClass("hide");
						$(".b-map-buttons").show();
					}else if( _.zoom + side == 0 ){
						$(".b-right-tab").addClass("hide");
						$(".b-right-map").removeClass("hide");
						$(".b-map-buttons").hide();
					}else{
						_.scrollTop( _.scrollTop()/_.zoom*(_.zoom + side) );
						_.scrollLeft( _.scrollLeft()/_.zoom*(_.zoom + side) );
						_.zoom += side;
						_.calcWidth();

						if( typeof $el != "undefined" ){
							var top = $el.offset().top - _.canvas.offset().top - _.margin,
								left = $el.offset().left - _.canvas.offset().left - _.margin;
							_.scrollTop( top );
							_.scrollLeft( left );
						}
					}
				},

				calcWidth : function(){
					var width = ($(".b-header .b-block").width() - $(".b-left-col").width() - $(".b-left-col").css("padding-left").replace(/\D+/g,"")*1 - $(".b-left-col").css("padding-right").replace(/\D+/g,"")*1 - _.margin)*_.zoom,
						cols = Math.ceil(Math.sqrt(_.find(".b-map").length)),
						canvasWidth = width*cols+(cols+1)*_.margin;

					_.canvas.css("width", canvasWidth);
					_.find(".b-map").css("width", width);
					_.removeClass(function(index, className){
					    return (className.match (/(^|\s)zoom-\S+/g) || []).join(' ');
					}).addClass("zoom-"+_.zoom);
				},

				initProgressBars : function(){
					_.canvas.find(".b-line-progressbar:not(.animated)").each(function(){
			            var percent = $(this).attr("data-percent")*1,
			                $this = $(this);

	                    $(this).html('<span class="b-line-progressbar__bar" style="width: '+percent+'%"></span><span class="b-line-progressbar__percent">' + percent + '%</span>');
	                    $(this).find(".b-line-progressbar__percent").fadeIn(0);

		                if( percent > 53 ){
		                    $(this).addClass("white");
		                }

			            $(this).addClass("animated");
			        });
				},

				resizeHandler : function(){
					if( _.canvas == null ){
						return true;
					}

					_.o.resize(_);

					_.calcWidth();

					_.dragStart = false;
				}
			});

			_._init();
       	});
	};
})(jQuery);

$(document).ready(function(){
	if( $(".b-fixed-map").length ){
        $(".b-fixed-map").KitMap();
    }
});
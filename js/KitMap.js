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
       		margin : 20,
       		startX : 0,
       		startY : 0,
       		zoom : 5,
       		startScrollTop : 0,
			startScrollLeft : 0,
			isTouch : ('ontouchstart' in document.documentElement),
       		o : options
       	});

		return this.each(function(){
			_.extend({
				_init : function (){
					_.canvas = _.find(".b-map-canvas");

					_.resizeHandler();

					_.initHandlers();

					_.afterInit();
				},

				initHandlers : function(){
					_.on( _.isTouch ? "touchstart" : "mousedown", function(y){
						e = _.isTouch ? y.originalEvent.touches[0] : y;
						_.dragStart = true;		
						_.addClass("dragged");

						_.startX = e.pageX;
						_.startY = e.pageY;

						_.startScrollTop = _.scrollTop();
						_.startScrollLeft = _.scrollLeft();
					});	

					$(document).on( _.isTouch ? "touchmove" : "mousemove", function(y){
						if( !_.dragStart ) return true;

						e = _.isTouch ? y.originalEvent.touches[0] : y;

						_.scrollTop(_.startScrollTop + _.startY - e.pageY);
						_.scrollLeft(_.startScrollLeft + _.startX - e.pageX);

						return false;
					});	

					$(document).on( _.isTouch ? "touchend" : "mouseup", function(y){
						if( !_.dragStart ) return true;

						_.dragStart = false;
						_.removeClass("dragged");
						
						// if (_.wasDrag) return false;
					});	

					// $("body").on("click", "a", function(){
					// 	if( _.wasDrag ){ return false;}
					// });
				},

				afterInit : function(){
					_.o.afterInit(_);
				},

				calcWidth : function(){
					var width = ($(".b-header .b-block").width() - $(".b-left-col").width() - _.margin)*_.zoom,
						cols = Math.ceil(Math.sqrt(_.find(".b-map-item").length)),
						canvasWidth = width*cols+(cols+1)*_.margin;

					_.canvas.css("width", canvasWidth);
					_.find(".b-map").css("width", width);

					console.log(cols);
				},

				resizeHandler : function(){
					_.o.resize(_);

					_.calcWidth();

					_.dragStart = false;
				}
			});

			_._init();
       	});
	};
})(jQuery);
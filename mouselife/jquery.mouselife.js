 /*
 * jQuery
 * @copyright : GigolNet
 * @author : Ilia GUIGOLACHVILI
 * @web : http://gigol.net
 * @plugin : MouseLife
 * @version : 1.0.0
 * Last modified : 12/12/2015
 */
(function($){
	$.fn.mouselife = function(set, param)
	{
		set = $.extend({
			a: '#mouselife_a',
			mx: '#mouselife_mx',
			my: '#mouselife_my',
			lx: '#mouselife_lx',
			ly: '#mouselife_ly',
			rx: '#mouselife_rx',
			ry: '#mouselife_ry',
			cx: '#mouselife_cx',
			cy: '#mouselife_cy',
			wu: '#mouselife_wu',
			wd: '#mouselife_wd',
			w: '#mouselife_w',
			t: '#mouselife_t'
		}, set);

		param = $.extend({
			left: true,
			right: true,
			middle: true,
			wheel: false,
			move: true,
			time: false
		}, param);

		var obj = { mouse: this };

		//Mouse Move
		obj.mouse.bind("mousemove", function(e)
		{
			var ePageX = e.pageX;
			var ePageY = e.pageY;
			$(set.mx).val(ePageX);
			$(set.my).val(ePageY);
			$(set.a).val("Move");
		});

		//Mose Down
		obj.mouse.bind("mousedown", function(e)
		{
			var action;
			var ePageX = e.pageX;
			var ePageY = e.pageY;
			switch (e.which)
			{
				case 1:
					action = 'Left';
					$(set.lx).val(ePageX);
					$(set.ly).val(ePageY);
				break;
				case 2:
					action = 'Center';
					$(set.cx).val(ePageX);
					$(set.cy).val(ePageY);
				break;
				case 3:
					action = 'Right';
					$(set.rx).val(ePageX);
					$(set.ry).val(ePageY);
				break;
				default:
					action = '0';
					$(set.rx).val(0);
					$(set.ry).val(0);
			}
			$(set.a).val(action);
		});
		
		//Mouse Wheel
		var mousewheel = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel";
		if (document.attachEvent)
		{
			document.attachEvent("on"+mousewheel, mouseLifeWheel);
		}
		else if (document.addEventListener)
		{
			document.addEventListener(mousewheel, mouseLifeWheel, false);
		}
		function mouseLifeWheel(e)
		{
			var action;
			var eWheelDelta = e.detail || e.wheelDelta;
			if (eWheelDelta/120 > 0)
			{
				action = 'Down';
				$(set.wd).val(eWheelDelta);
			}
			else
			{
				action = 'Up';
				$(set.wu).val(eWheelDelta);
			}
			$(set.w).val(eWheelDelta);
			$(set.a).val(action);
		}

		return this;		
	}; 
})(jQuery);
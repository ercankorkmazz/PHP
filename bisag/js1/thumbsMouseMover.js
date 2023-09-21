jQuery.fn.extend({
	thumbsMouseMover:function(opt){
		var target=$(this)
			wi=target.width(),
			ul=$('>ul',this),
			ulW=0,
			dfl={easing:'',durr:600}
		opt=$.extend(dfl,opt)
		$('>li',ul).each(function(){
			ulW+=$(this).outerWidth()
		})
		ul.width(ulW)
		$(window).bind('resize',function(){
			wi=target.width()
			ul.animate({left:0},opt.durr,opt.easing)
		})
		$(this).live('mousemove',function(e){
			if(wi<ulW){
				var m=e.pageX-this.offsetLeft,
					dX=-((ulW-wi)-wi)*m/wi
				if(m==dX)
					ul.stop()
				else
					if(m>dX)
						ul.stop().animate({left:dX-m},opt.durr,opt.easing)
					else
						ul.stop().animate({left:m-dX},opt.durr,opt.easing)
			}
		})
		return this
	}
})
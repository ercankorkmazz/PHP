// JavaScript Document
/*
 * jQuery Tab Plugin (pTab)
 * Author - Tayfun ERBÝLEN - Mert Osman BAÞOL
 * Web - erbilen.net
 * Mail - tayfunerbilen@gmail.com
 * Version - 1.0
*/

(function($){

	jQuery.fn.efektUygula = function(methodName, speed) {
		return this[methodName]( (methodName == 'show' ? 0 : speed) );
	}

	jQuery.fn.pTab = function(ayarlar){
	
		var ayar = jQuery.extend({
			pEvent : 'click',
			pTab : 'ul',
			pTabElem : 'li',
			pClass : 'aktif',
			pContent : '.icerik',
			pDuration : 500,
			pEffect : 'show',
			pAutoHeight: false,
			pUi : false,
			pUiEffect : 'fade',
			pDebug : false,
			pSlide : false,
			pSlideWidth: 0,
			pEasing: 'linear',
			pSlidePrev: false,
			pSlideNext: false,
			pSlideLoop: false,
			pSlideLoopDuration: 500,
			pMouseWheel: false,
			pElemFunc: false,
			pEventFunc: false,
			pKeyboardEvent: false,
			pActiveTab: 0
		}, ayarlar);
		
		return this.each(function(){
		
			if ( ayar.pDebug ){
			
				if ( ayar.pUi ) {
					if ( !jQuery.ui ) {
						alert("Tab uygulamasý için UI Kütüphanesini sayfanýza dahil etmeniz gerekiyor!");
					}
				}
				
				var events = ['click','mouseenter','dblclick'];
				if ( jQuery.inArray(ayar.pEvent, events) == -1 ){
					alert( ayar.pEvent + " adýnda bir event tanýmý yapamazsýnýz!\n[" + events.join(', ') + "]");
				}
				
				var effects = ['show','fadeIn','slideDown'];
				if ( jQuery.inArray(ayar.pEffect, effects) == -1 ){
					alert( ayar.pEffect + " adýnda bir efekt tanýmý yapamazsýnýz!\n[" + effects.join(', ') + "]");
				}
				
				var uiEffects = ['fade','bounce','highlight','pulsate','shake','slide'];
				if ( jQuery.inArray(ayar.pUiEffect, uiEffects) == -1 ){
					alert( ayar.pUiEffect + " adýnda bir ui efekt tanýmý yapamazsýnýz!\n[" + uiEffects.join(', ') + "]");
				}
				
			}
			
			if ( ayar.pElemFunc ){
				ayar.pElemFunc();
			}
		
			var elem = jQuery(this),
				indis = ayar.pActiveTab;
			
			jQuery(ayar.pTab + " " + ayar.pTabElem + ":eq("+ ayar.pActiveTab +")", elem).addClass(ayar.pClass);

			if ( ayar.pMouseWheel || ayar.pSlideLoop || ayar.pSlide || ayar.pSlideNext || ayar.pSlidePrev ) {
				var elemLength = jQuery(ayar.pContent, elem).length;
					if ( ayar.pSlide == true ){
						jQuery(ayar.pContent, elem).css("float","left");
					}
				if ( ayar.pSlideNext == false && ayar.pSlidePrev == false ){
					ayar.pSlideNext = true;
					ayar.pSlidePrev = true;
				}
			}
			
			var pLoadFile = jQuery(ayar.pTab + " " + ayar.pTabElem + ":eq("+ ayar.pActiveTab +")", elem).data("ploadfile");
			if ( pLoadFile ){
				jQuery(ayar.pContent + ":eq("+ ayar.pActiveTab +")", elem).load(pLoadFile, function(){
					// console.log("File Loaded: " + pLoadFile);
					var height = jQuery(ayar.pContent + ":first", elem).outerHeight();
					jQuery('div[rel=pSlideContent]', elem).stop().animate({
						height: height + 'px'
					}, {
						duration: ayar.pDuration
					});
				});
			}
			
			var pIframe = jQuery(ayar.pTab + " " + ayar.pTabElem + ":first", elem).data("piframe");
			if ( pIframe ){
				jQuery(ayar.pContent + ":eq("+ ayar.pActiveTab +")", elem)
					.html('<iframe src="' + pIframe.url + '" frameborder="0" width="' + pIframe.width + '" height="' + pIframe.height + '" style="display: none"></iframe>')
					.append('<div class="loader">Tab Ýçeriði Yükleniyor..</div>')
					.find("iframe").load(function(){
					
						$(this).siblings(".loader").hide();
						$(this).show();
						
						var height = jQuery(ayar.pContent + ":first", elem).outerHeight();
						jQuery('div[rel=pSlideContent]', elem).stop().animate({
							height: height + 'px'
						}, {
							duration: ayar.pDuration
						});
						
					});
			}

			if ( ayar.pSlide == false ){
				jQuery(ayar.pContent, elem).hide();
				jQuery(ayar.pContent + ":eq("+ ayar.pActiveTab +")", elem).show();
			}
			else {
				jQuery(ayar.pContent, elem).wrapAll('<div rel="pSlide"></div>');
				jQuery('div[rel=pSlide]', elem).wrapAll('<div rel="pSlideContent"></div>');
				
				// height
				if ( ayar.pAutoHeight ){
					var height = jQuery(ayar.pContent + ":first", elem).outerHeight();
				}
				
				jQuery('div[rel=pSlideContent]', elem).css({"width" : ayar.pSlideWidth, "overflow" : "hidden", "height": height});
				jQuery('div[rel=pSlide]', elem).width( elemLength * ayar.pSlideWidth );
				jQuery('div[rel=pSlide]', elem).css('margin-left', '-' + ayar.pActiveTab * ayar.pSlideWidth + 'px');
				
			}

			jQuery(ayar.pTab + " " + ayar.pTabElem, elem).bind(ayar.pEvent, function(){

				if ( !jQuery(this).is('.'+ayar.pClass) ){
				
					if ( ayar.pEventFunc ){
						ayar.pEventFunc( jQuery(this) );
					}

					indis = jQuery(this).index();

					if ( ayar.pDebug ){
						if ( !jQuery(ayar.pContent + ":eq("+indis+")", elem).length ) {
							alert( jQuery(this).text() + " nesnesine ait " + ayar.pContent + " nesnesi bulunamadý!");
							return false;
						}
					}
					
					var pLoadFile = $(this).data("ploadfile");					
					if ( pLoadFile ){
						jQuery(ayar.pContent + ":eq("+indis+")", elem).load(pLoadFile, function(){
							// console.log("File Loaded: " + pLoadFile);
							var height = jQuery(ayar.pContent + ":eq("+indis+")", elem).outerHeight();
							jQuery('div[rel=pSlideContent]', elem).stop().animate({
								height: height + 'px'
							}, {
								duration: ayar.pDuration
							});
						});
					}
					
					var pIframe = $(this).data("piframe");
					if ( pIframe ){
						jQuery(ayar.pContent + ":eq("+indis+")", elem)
							.html('<iframe src="' + pIframe.url + '" frameborder="0" width="' + pIframe.width + '" height="' + pIframe.height + '" style="display: none"></iframe>')
							.append('<div class="loader">Tab Ýçeriði Yükleniyor..</div>')
							.find("iframe").load(function(){
							
								$(this).siblings(".loader").hide();
								$(this).show();
								
								var height = jQuery(ayar.pContent + ":eq("+indis+")", elem).outerHeight();
								jQuery('div[rel=pSlideContent]', elem).stop().animate({
									height: height + 'px'
								}, {
									duration: ayar.pDuration
								});
								
							});
					}
					
					jQuery(this).parent().find(ayar.pTabElem).removeClass(ayar.pClass);

					jQuery(this).addClass(ayar.pClass);

					if ( ayar.pSlide == false ){

						ayar.pEffect == 'slideDown' ? jQuery(ayar.pContent, elem).finish().slideUp(ayar.pDuration) : jQuery(ayar.pContent, elem).hide();

						if ( ayar.pUi && jQuery.ui ){
							jQuery(ayar.pContent + ":eq("+indis+")", elem).finish().effect(ayar.pUiEffect);
						} else {
							jQuery(ayar.pContent + ":eq("+indis+")", elem).finish().efektUygula(ayar.pEffect, ayar.pDuration);
						}
					
					}
					else {

						jQuery('div[rel=pSlide]', elem).stop().animate({
							marginLeft: '-' + (indis * ayar.pSlideWidth) + 'px'
						}, {
							duration: ayar.pDuration,
							easing: ayar.pEasing
						});
						
						// height
						if ( ayar.pAutoHeight ){
							var height = jQuery(ayar.pContent + ":eq("+indis+")", elem).outerHeight();
							jQuery('div[rel=pSlideContent]', elem).stop().animate({
								height: height + 'px'
							}, {
								duration: ayar.pDuration
							});
						}
						
					}
					
				}
				return false;
			});

			if ( ayar.pSlidePrev ){
				
				var pSlidePrevFunc = function(){
				
					indis > 0 ? indis-- : indis = elemLength - 1;
				
					if ( ayar.pSlide == false ){
					
						ayar.pEffect == 'slideDown' ? jQuery(ayar.pContent, elem).finish().slideUp(ayar.pDuration) : jQuery(ayar.pContent, elem).hide();
						
						if ( ayar.pUi && jQuery.ui ){
							jQuery(ayar.pContent + ":eq("+indis+")", elem).finish().effect(ayar.pUiEffect);
						} else {
							jQuery(ayar.pContent + ":eq("+indis+")", elem).finish().efektUygula(ayar.pEffect, ayar.pDuration);
						}
						
					} else {

						jQuery('div[rel=pSlide]', elem).stop().animate({
							marginLeft: '-' + (indis * ayar.pSlideWidth) + 'px'
						}, {
							duration: ayar.pDuration,
							easing: ayar.pEasing
						});

					}
					
					// height
					if ( ayar.pAutoHeight ){
						var height = jQuery(ayar.pContent + ":eq("+indis+")", elem).outerHeight();
						jQuery('div[rel=pSlideContent]', elem).stop().animate({
							height: height + 'px'
						}, {
							duration: ayar.pDuration
						});
					}
					jQuery(ayar.pTab + " " + ayar.pTabElem, elem).parent().find(ayar.pTabElem).removeClass(ayar.pClass);
					jQuery(ayar.pTab + " " + ayar.pTabElem + ":eq("+indis+")", elem).addClass(ayar.pClass);
					
					if ( ayar.pEventFunc ){
						ayar.pEventFunc( jQuery(ayar.pTab + " " + ayar.pTabElem + ":eq("+indis+")", elem) );
					}
					
				}
				
				jQuery(ayar.pSlidePrev, elem).click(function(){

					pSlidePrevFunc();
					return false;
					
				});
				
			}

			if ( ayar.pSlideNext ){
				
				var pSlideNextFunc = function(){
				
					indis < elemLength - 1 ? indis++ : indis = 0;
					
					if ( ayar.pSlide == false ){
					
						ayar.pEffect == 'slideDown' ? jQuery(ayar.pContent, elem).finish().slideUp(ayar.pDuration) :  $(ayar.pContent, elem).hide();

						if ( ayar.pUi && jQuery.ui ){
							jQuery(ayar.pContent + ":eq("+indis+")", elem).finish().effect(ayar.pUiEffect);
						} else {
							jQuery(ayar.pContent + ":eq("+indis+")", elem).finish().efektUygula(ayar.pEffect, ayar.pDuration);
						}
						
					} else {

						jQuery('div[rel=pSlide]', elem).stop().animate({
							marginLeft: '-' + (indis * ayar.pSlideWidth) + 'px'
						}, {
							duration: ayar.pDuration,
							easing: ayar.pEasing
						});

					}
					
					// height
					if ( ayar.pAutoHeight ){
						var height = jQuery(ayar.pContent + ":eq("+indis+")", elem).outerHeight();
						jQuery('div[rel=pSlideContent]', elem).stop().animate({
							height: height + 'px'
						}, {
							duration: ayar.pDuration
						});
					}
					jQuery(ayar.pTab + " " + ayar.pTabElem, elem).parent().find(ayar.pTabElem).removeClass(ayar.pClass);
					jQuery(ayar.pTab + " " + ayar.pTabElem + ":eq("+indis+")", elem).addClass(ayar.pClass);
					
					if ( ayar.pEventFunc ){
						ayar.pEventFunc( jQuery(ayar.pTab + " " + ayar.pTabElem + ":eq("+indis+")", elem) );
					}
					
				}
				
				jQuery(ayar.pSlideNext, elem).click(function(){

					pSlideNextFunc();
					return false;
					
				});
				
			}

			if ( ayar.pSlideLoop ){
			
				var pTabSlider = function(){
					if ( indis < elemLength - 1 ){
						pSlideNextFunc(); 
					}
					else {
						indis = -1;
						pSlideNextFunc();
					}
				}
				var interval = setInterval(function(){
					pTabSlider();
				}, ayar.pSlideLoopDuration);
				
				jQuery(elem).hover(function(){
					clearInterval(interval);
					interval = null;
				}, function(){
					interval = setInterval(function(){
						pTabSlider();
					}, ayar.pSlideLoopDuration);
				});
				
			}

			if ( ayar.pMouseWheel ){
				jQuery(elem).mousewheel(function(event, delta, deltaX, deltaY){
					delta > 0 ? pSlidePrevFunc() : pSlideNextFunc();
					return false;
				});
			}
			
			$(elem).hover(function(){
				if ( ayar.pKeyboardEvent ){
					$("body").attr("onKeyDown","$.doKey(event)");
					$.doKey = function(e){
						evt = e || window.event;
						if ( evt.keyCode == 37 ){
							pSlidePrevFunc();
						} else if ( evt.keyCode == 39 ){
							pSlideNextFunc();
						}
					}
				} else {
					$("body").removeAttr("onKeyDown");
				}
			}, function(){
				$("body").removeAttr("onKeyDown");
			});
			
		});
	
	}

})(jQuery);
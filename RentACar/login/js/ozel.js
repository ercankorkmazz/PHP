jQuery(function(){
		$('#enddate').attr("readonly", "readonly");
		$('#startdate').attr("readonly", "readonly");
		
		Date.format = 'dd.mm.yyyy';
		$('.date-pick').datePicker();
		$('#startdate').bind(
		'dpClosed',
		function(e, selectedDates)
		{
			var d = selectedDates[0];
			if (d) {
				d = new Date(d);
				$('#enddate').dpSetStartDate(d.addDays(1).asString());
			}
		}
	);
	$('#enddate').bind(
		'dpClosed',
		function(e, selectedDates)
		{
			var d = selectedDates[0];
			if (d) {
				d = new Date(d);
				$('#startdate').dpSetEndDate(d.addDays(-1).asString());
			}
		}
	);      
});

function MesafeVer(){
	var nerefr = document.getElementById('Nereden').options[document.getElementById('Nereden').options.selectedIndex].value;
	var nereto = document.getElementById('Nereye').options[document.getElementById('Nereye').options.selectedIndex].value;
	if(nerefr!=""&&nereto!="")
    {
        $.post("/MesafeVer.php", "Nereden="+encodeURIComponent(nerefr)+"&Nereye="+encodeURIComponent(nereto), function(data){
            $("#hesaplanan").html(data);
        });
    }
}
$(function(){
    
    var $containerid = $('#containerid');
         
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $containerid.isotope( options );
        }
        
        return false;
      });

});
$(function(){
	$('form').jqTransform({imgPath:'tema/'});
});
jQuery(document).ready(function(){
	jQuery("#formID").validationEngine();
    
    $(window).scroll(function(){
        var curpos = $(window).scrollTop();
        if(curpos>=115)
        {
            $("#dynamicmenu").css("display", "");
        } else {
            $("#dynamicmenu").css("display", "none");
        }
    });
    
    jQuery('.vdivimg').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated flipInX',
        offset: 150
    });
    
    jQuery('#tanitimin').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated zoomIn',
        offset: 150
    });
    
    jQuery('.haberdiv').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeIn',
        offset: 150
    });
    
    jQuery('.arac').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated bounceIn',
        offset: 150
    });
    
    jQuery('#homerez').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated flipInY',
        offset: 150
    });
});

function parasec(selector, index, obj)
{
    var sel = $("#"+selector);
    if(sel)
    {
        $(".paraa").attr("id", "");
        $(obj).attr("id", "act");
        $("#"+selector).val(index);
    }
}

var eubirim = 1;
var dlbirim = 1;

function kurcevir(q)
{
    var tl = $("#k1").val();
    var eu = $("#k2").val();
    var dl = $("#k3").val();
    
    console.log(tl);
    
    if(q==1)
    {
        var neweu = tl/eubirim;
        var newdl = tl/dlbirim;
        
        $("#k2").val(neweu.toFixed(2));
        $("#k3").val(newdl.toFixed(2));
    } else if(q==2) {
        var newtl = eu*eubirim;
        var newdl = eu*eubirim/dlbirim;
        
        $("#k1").val(newtl.toFixed(2));
        $("#k3").val(newdl.toFixed(2));
    } else if(q==3) {
        var newtl = dl*dlbirim;
        var neweu = dl*dlbirim/eubirim;
        
        $("#k1").val(newtl.toFixed(2));
        $("#k2").val(neweu.toFixed(2));
    }
}

function setsubs(ob, target)
{
    var curval = $(ob).val();
    if(curval!="")
    {
        $.post("/_external.php", {f:"yergetir",id:curval}, function(data){
            if(data=="fail")
            {
                alert("Mevkiiler getirilirken bir hata oluþtu, lütfen daha sonra tekrar deneyin!");
            } else {
                $("#"+target).html(data);
                fix_select('select#'+target);
            }
        });
    } else {
        $("#"+target).html("<option value=''>Lütfen önce þehir seçin...</option>");
        fix_select('select#'+target);
    }
}

function fix_select(selector) {
  selectedVal = $(selector).children(':selected').val();
  $(selector).children('option').removeAttr('selected');
  $(selector).children('option[value="'+selectedVal+'"]').attr('selected','selected');

  $(selector).removeClass('jqTransformHidden');
  //$(selector).css('display','block');
  $(selector).prev('ul').remove();
  $(selector).prev('div.selectWrapper').remove();

  var selectElm = $(selector).closest('.jqTransformSelectWrapper').html();
  selectElm = selectElm.replace(/<div>(.*)<\/div>/g, "");

  $(selector).closest('.jqTransformSelectWrapper').after(selectElm);
  $(selector).closest('.jqTransformSelectWrapper').remove();

  $(selector).closest('form').removeClass('jqtransformdone');
  $(selector).closest('form').jqTransform();
}

function fiyatformchk()
{
    var val1 = $("#alisyeri").val();
    var val2 = $("#varisyeri").val();
    
    if(val1==""||val2=="")
    {
        alert("Lütfen alýþ ve dönüþ þehirlerini seçin!");
        return false;
    }
}
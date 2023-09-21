<?php
	session_start();
	ob_start();
	
	if((isset($_GET["dil"])) and ($_GET["dil"]=="tr" or $_GET["dil"]=="en"))
	{
		$_SESSION["siteDili"]=$_GET["dil"];
		header("location:index.php");
	}
	if(!isset($_SESSION["siteDili"]))
		include("dil/tr.php");
	else
		include("dil/".$_SESSION["siteDili"].".php");
		
?>
<!DOCTYPE HTML>
<html>
<head>
<title>.: Bilgisayar Sistemleri Araştırma ve Geliştirme Merkezi :. Kırıkkale Üniversitesi</title>
<META http-equiv=content-type content=text/html;charset=iso-8859-9>
<META http-equiv=content-type content=text/html;charset=windows-1254>
<META http-equiv=content-type content=text/html;charset=x-mac-turkish>
<link href="css1/style.css" rel="stylesheet" type="text/css" />
<link href="css1/layout.css" rel="stylesheet" type="text/css" />
<script src="js1/jquery-1.4.3.min.js" type="text/javascript"></script>
<script src="js1/cufon-yui.js" type="text/javascript"></script>
<script src="js1/cufon-replace.js" type="text/javascript"></script>
<script type="text/javascript" src="js1/Capture_it_400.font.js"></script>
<script type="text/javascript" src="js1/thumbsMouseMover.js"></script>
<script type="text/javascript" src="js1/bgSlider.js"></script>
</head>
<body onLoad="clearInput('form1')">
<aside>
	<!-- Logo - Birim Adi -->
	<table style="margin:-15px 0 0 236px;width:1130px;float:left;" border="0">
    	<tr>
        	<td><img src="img/logo.png" style="float:left;margin-top:30px;"/></td>
            <td>
            	<h3 style="margin-left:230px;color:#00aef0; font-size:36px;float:left;">Kirikkale <?php echo $dil["Baslik"]; ?></h3>
                <h3 style="color:#FFF;margin-left:25px;font-size:30px;float:left;margin-bottom:35px;"><?php echo $dil["merkezAdi"]; ?></h3>
            </td>
        </tr>
    </table>
    <!-- Dil Seçeneği -->
    <div class="diller">
        <h3 style="float:right;margin:20px;margin-left:0; color:#FFF;"> - <a href="index.php?dil=en"><?php echo $dil["lang2"]; ?></a> </h3>
        <h3 style="float:right;margin:20px;margin-right:0; color:#FFF;"><a href="index.php?dil=tr"><?php echo $dil["lang1"]; ?></a> -</h3>
    </div>
    <div class="wrapper">
        <nav>
          <ul>
            <li class="itm1"><a href="#anasayfa"><?php echo $dil["menuItem1"]; ?></a></li>
            <li class="itm2"><a href="#kadro"><?php echo $dil["menuItem2"]; ?></a></li>
            <li class="itm3"><a href="#projeler"><?php echo $dil["menuItem3"]; ?></a></li>
            <li class="itm4"><a href="#yayinlar" style="margin-left:-15px;"><?php echo $dil["menuItem4"]; ?></a></li>
            <li class="itm5"><a href="#iletisim"><?php echo $dil["menuItem5"]; ?></a></li>
          </ul>
        </nav>
      <ul id="content">
      	<?php
			@include("inc/anasayfa.php");
			@include("inc/kadro.php");
			@include("inc/projeler.php");
			@include("inc/yayinlar.php");
			@include("inc/iletisim.php");
		?>  
      </ul>
    </div>
</aside>
<script type="text/javascript"> Cufon.now();
$(window).load(function(){
	$('#content').show()
	$('#content>li').hide()
	$('#content>#anasayfa').show()
	$('#thumbs').css({top:$('.gal_wrap').height()
	})

	var gal=$('#thumbs').thumbsMouseMover({easing:'easeOutExpo'})
	
	$('body>.wrapper').append($('<div></div>').addClass('gal_wrap').css({position:'absolute',overflow:'hidden',top:gal.attr('offsetTop'),bottom:0,right:0,left:0}).append(gal.css({top:$('.gal_wrap').height()}).remove()))
	
	$(['img/bg1.jpg','img/bg2.jpg','img/bg3.jpg','img/bg4.jpg','img/bg5.jpg','img/bg6.jpg','img/bg7.jpg','img/bg8.jpg','img/bg9.jpg','img/bg10.jpg','img/bg11.jpg','img/bg12.jpg']).bgSlider({bgstretch:true,padding:305,pags:'#thumbs a',current:2,altCSS:{left:'400px',width:'auto',height:'100%'}})
		
	$('.gallery').live('click',function(){
		var th=$(this).toggleClass('exp')		
		if(th.hasClass('exp'))
			$('#thumbs').animate({top:0}),$.scrollTo('.gallery',{duration:600,axis:'y'})
		else
			$('#thumbs').animate({top:$('.gal_wrap').height()}),$.scrollTo('h1',{duration:600,axis:'y'})
		return false
	})
	$('nav li a,.privacy a').live('click',function(){
		
	document.getElementById("anasayfa").style.visibility = "visible";
	document.getElementById("iletisim").style.visibility = "visible";
	document.getElementById("projeler").style.visibility = "visible";
	document.getElementById("kadro").style.visibility = "visible";
	document.getElementById("yayinlar").style.visibility = "visible";
	
		$(this).parent().addClass('active').siblings().removeClass('active')
		$('#content>li').hide()
		$(this.href.slice(this.href.indexOf('#'))).fadeIn()
		Cufon.refresh()
		$.scrollTo('h1',{duration: 300, axis:"y"})
		if($('aside').css('left')=='0px')
			$('aside').stop().animate({left:'-30px'}),
			$('#bgSlider img').stop().animate({left:'305px'})
		return false
	})
	$('.close').live('click',function(){
		$('#content>li').fadeOut()
		$('nav li').removeClass('active')
		Cufon.refresh()
		$('aside').stop().animate({left:'0'}),
		$('#bgSlider img').stop().animate({left:'400px'})
		return false
	})
})
</script>
<!--coded by pleazkin-->

<!--osc3.template-help.com -->

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7078796-1");
pageTracker._trackPageview();
} catch(err) {}
</script>
</body>
</html>
<?php ob_end_flush(); ?>
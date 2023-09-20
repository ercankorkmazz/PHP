<?php 
	ob_start(); 
	session_start();
	setcookie("bilgi","");
	setcookie("girisBilgi","");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Y&ouml;netim Paneli</title>
<link type="text/css" rel="stylesheet" media="all" href="css/barstyle.css" />
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<div class="sablon">
	<?php
        if(isset($_GET["oturumAc"]) and !isset($_SESSION["$_SERVER[SERVER_NAME]oturum"]))
            include("inc/oturumAc.php");
        if(isset($_GET["oturumKapat"]))
            include("inc/oturumKapat.php");
		
        if(!isset($_SESSION["$_SERVER[SERVER_NAME]oturum"]))
        {
			if(!isset($_GET["sifremiUnuttum"]))
				include("inc/girisFormu.php");
			else
				include("inc/mail/form.php");
        }
        else
        {
            include("inc/menu.php"); 
    ?>
    <?php
    	if(isset($_COOKIE['bilgi']) and !empty($_COOKIE['bilgi']))
		{
			echo "<div class='icerik' style='padding:10px;color:#fff;'><strong>Bilgi:</strong> $_COOKIE[bilgi]</div>";	
		}
	?>
    	
        <div class="icerik">
        <?php
			if(count($_GET)==0)
				echo "<center><h2 style='color:#fff;'>Yönetim Paneline Hoşgeldiniz</h2></center>";
				
			
			
            if(isset($_GET["duyurular"]))
                include("inc/anasayfa/duyurular/listele.php");
			if(isset($_GET["duyuru"]))
                include("inc/anasayfa/duyurular/duzenle.php");
			if(isset($_GET["anasayfaKarsilama"]))
                include("inc/anasayfa/karsilama.php");
            if(isset($_GET["slider"]))
                include("inc/anasayfa/slider/listele.php");
				
            if(isset($_GET["scratchKarsilama"]))
                include("inc/scratch/karsilama.php");
				
            if(isset($_GET["aliceKarsilama"]))
                include("inc/alice/karsilama.php");
				
            if(isset($_GET["smallBasicKarsilama"]))
                include("inc/smallBasic/karsilama.php");
				
            if(isset($_GET["appInventorKarsilama"]))
                include("inc/app/karsilama.php");
				
			if(isset($_GET["koduKarsilama"]))
                include("inc/kodu/karsilama.php");
				
			if(isset($_GET["SketchUpKarsilama"]))
                include("inc/SketchUp/karsilama.php");
				
			if(isset($_GET["hakkimizda"]))
                include("inc/hakkimizda/karsilama.php");
				
			if(isset($_GET["uyelikHakkinda"]))
                include("inc/uyelikHakkinda/karsilama.php");
				
			if(isset($_GET["uyeler"]))
                include("inc/uyeler/listele.php");
			
			if(isset($_GET["ayarlar"]))
                include("inc/profil/listele.php");
				
			// admin Dersler - Dersekleme Listeleme
				
            if(isset($_GET["scratchDersler"]))
                include("inc/scratch/dersler.php");
			if(isset($_GET["scratchUyeDersler"]))
                include("inc/scratch/uye/dersler.php");
				
			if(isset($_GET["smallDersler"]))
                include("inc/smallBasic/dersler.php");
			if(isset($_GET["smallBasicUyeDersler"]))
                include("inc/smallBasic/uye/dersler.php");
				
			if(isset($_GET["aliceDersler"]))
                include("inc/alice/dersler.php");
			if(isset($_GET["aliceUyeDersler"]))
                include("inc/alice/uye/dersler.php");
				
			if(isset($_GET["appDersler"]))
                include("inc/app/dersler.php");
			if(isset($_GET["appUyeDersler"]))
                include("inc/app/uye/dersler.php");
					
			if(isset($_GET["koduDersler"]))
                include("inc/kodu/dersler.php");
			if(isset($_GET["koduUyeDersler"]))
                include("inc/kodu/uye/dersler.php");
					
			if(isset($_GET["SketchUpDersler"]))
                include("inc/SketchUp/dersler.php");
			if(isset($_GET["SketchUpUyeDersler"]))
                include("inc/SketchUp/uye/dersler.php");
				
			// admin Dersler güncelleme
			if(isset($_GET["scratchDuzenle"]))
                include("inc/scratch/duzenle.php");
			if(isset($_GET["scratchUyeDuzenle"]))
                include("inc/scratch/uye/duzenle.php");
				
			if(isset($_GET["smallBasicDuzenle"]))
                include("inc/smallBasic/duzenle.php");
			if(isset($_GET["smallBasicUyeDuzenle"]))
                include("inc/smallBasic/uye/duzenle.php");
				
			if(isset($_GET["aliceDuzenle"]))
                include("inc/alice/duzenle.php");
			if(isset($_GET["aliceUyeDuzenle"]))
                include("inc/alice/uye/duzenle.php");
				
			if(isset($_GET["appDuzenle"]))
                include("inc/app/duzenle.php");
			if(isset($_GET["appUyeDuzenle"]))
                include("inc/app/uye/duzenle.php");
					
			if(isset($_GET["koduDuzenle"]))
                include("inc/kodu/duzenle.php");
			if(isset($_GET["koduUyeDuzenle"]))
                include("inc/kodu/uye/duzenle.php");
				
			if(isset($_GET["SketchUpDuzenle"]))
                include("inc/SketchUp/duzenle.php");
			if(isset($_GET["SketchUpUyeDuzenle"]))
                include("inc/SketchUp/uye/duzenle.php");
				
			// yorumlar
			if(isset($_GET["scratchYorumlar"]) or isset($_GET["arduinoYorumlar"]) or isset($_GET["appYorumlar"]) or isset($_GET["aliceYorumlar"]) or isset($_GET["koduYorumlar"]) or isset($_GET["SketchUpYorumlar"]))
                include("inc/yorum/yorumlar.php");
        ?>
        </div>
    <?php } ?>
</div>
</body>
</html>
<?php
	ob_end_flush();
?>
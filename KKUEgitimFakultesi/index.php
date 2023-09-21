<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="css/css.css" rel="stylesheet" type="text/css" />
    <?php @include("inc/head.php"); ?>
</head>
<body>
<?php 
	@include("inc/tasarim.php");
	
	//-------------------------------------------------------- Ýçerik Alaný ------------------------------------------------
		if(count($_GET) == 0)
			@include("inc/anasayfa.php"); //Anasayfa
			
		if(isset($_GET["ogretimUyeleri"]))
			@include("inc/kisiler/ogretimUyeleri.php");
		if(isset($_GET["uyeUrl"]))
			@include("inc/kisiler/uyeGoster.php"); // Üye bilgilerini gösterir
			
		if(isset($_GET["arastirmaGorevlileri"]))
			@include("inc/kisiler/arastirmaGorevlileri.php");
		
		if(isset($_GET["duyurular"]))
			@include("inc/duyurular.php"); 
			
		if(isset($_GET["PDF"]))
			@include("inc/pdfGoruntule.php");
		
		if(isset($_GET["albumler"]))
			@include("inc/albumler.php"); 
		if(isset($_GET["album"]))
			@include("inc/album.php"); 
			
		if(isset($_GET["arama"]))
			@include("inc/arama.php");
			
		if(isset($_GET["sayfa"]) or isset($_GET["sayfaa"]))
			@include("inc/goruntule.php"); // Sayfa Görüntüler
			
		if(isset($_GET["iletisim"]))
			@include("inc/iletisim.php"); 
	//-------------------------------------------------------- Ýçerik Sonu Alaný -------------------------------------------
	@include("inc/alt.php");
?>
</body>
</html>
<?php ob_end_flush(); ?>
<?php
error_reporting(NULL);
session_start();
ob_start();
setcookie("bildirim","");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php @include("inc/head.php"); ?>
<link rel="stylesheet" type="text/css" href="css/yonetimCSS.css" />
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
<?php
	if(count($_GET) == 0 and !isset($_SESSION["$_SERVER[SERVER_NAME]"]))
		@include("inc/girisFormu.php"); // Kullanýcý Giriþi Formu
	
	if(isset($_GET["giris"]))
		@include("inc/oturumac.php"); // Oturum açar
		
	if(isset($_GET["oturumKapat"]))
		@include("inc/oturumkapat.php"); // Oturumu kapatýr
				
	@include('inc/baglan.php'); 
	$sor=mysql_query("select * from kullanici where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"]);
	$oturum=mysql_fetch_array($sor);

	@include("inc/oturumKontrol.php");
	
	if($oturum["oturum"]=="on")
	{ 
		if(isset($_SESSION["$_SERVER[SERVER_NAME]"])){ // ------------- Yönetim paneli içeriði burada -----------------------
			@include("inc/tasarim.php"); // Logo ve Ana Menü
	
			if(isset($_GET["tasarim"]))
				@include("inc/tasarim/siteTasarim.php"); // Site Tasarýmý (Tasarým Menüsü)
			
			if(isset($_GET["yardim"]))
				@include("inc/yardim/giris.php"); // Site Tasarýmý (Tasarým Menüsü)
				
			if(isset($_GET["slider"]))
				@include("inc/anasayfa/slider.php"); // Slider
				
			if(isset($_GET["karsilamaAlani"]))
				@include("inc/anasayfa/karsilamaAlani.php"); // Anasayfa Karþýlama Alaný
			
			if(isset($_GET["duyurular"]))
				@include("inc/duyuru/duyurular.php"); // Duyurular
			if(isset($_GET["duyuru"]))
				@include("inc/duyuru/duyuruGuncelle.php"); // Duyuru günceller
				
			if(isset($_GET["ogretimUyeleri"]))
				@include("inc/kisiler/ogretimUyeleri.php"); // Öðretim Üyeleri
			if(isset($_GET["ogretimUyesi"]))
				@include("inc/kisiler/ogrUyeDuzenle.php"); // Öðretim Üyesini Günceller
				
			if(isset($_GET["arastirmaGorevlileri"]))
				@include("inc/kisiler/arastirmaGorevlileri.php"); // Araþtýrma Görevlileri
			if(isset($_GET["arastirmaGorevlisi"]))
				@include("inc/kisiler/arasGorevDuzenle.php"); // Araþtýrma Görevlisi Günceller
				
			if(isset($_GET["faydaliLinkler"]))
				@include("inc/fayLinkler/linkler.php"); // Faydalý Linkler
				
			if(isset($_GET["dosyaYukle"]))
				@include("inc/yukle/dosyaYukle.php"); // Dosya yükler
			if(isset($_GET["dosya"]))
				@include("inc/yukle/dosyaDuzenle.php"); // Dosya günceller
				
			if(isset($_GET["yuklePDF"]))
				@include("inc/yukle/pdfYukle.php"); // PDF yükler
			if(isset($_GET["PDF"]))
				@include("inc/yukle/pdfDuzenle.php"); // PDF günceller
								
			if(isset($_GET["galeri"]))
				@include("inc/galeri/albumler.php"); // Galeriye Albüm ekler
			if(isset($_GET["album"]))
				@include("inc/galeri/album.php"); // Galeriye Albüm ekler
			if(isset($_GET["fotograf"]))
				@include("inc/galeri/fotograf.php"); // Fotoðraf Görüntüler
				
			if(isset($_GET["kullanici"]))
				@include("inc/kullanici/kullanici.php"); // Kullanici bilgileri günceller
			
			if(isset($_GET["iletisim"]))
				@include("inc/iletisim/iletisim.php"); // Ýletiþim Bilgileri
			
			//----------------------------------------------- Sayfalar -------------------------------
			if(isset($_GET["sayfalar"]))
				@include("inc/sayfalar/listele.php");
			if(isset($_GET["yeniSayfa"]))
				@include("inc/sayfalar/yeniKayit.php");
			if(isset($_GET["sayfa"]))
				@include("inc/sayfalar/duzenle.php");
				
			//----------------------------------------------- Menüler -------------------------------
				if(isset($_GET['menuler']))
					@include("inc/menuler/listele.php");
				if(isset($_GET['yeniMenu']))
					@include("inc/menuler/yeniMenu.php");
				if(isset($_GET['menu']))
					@include("inc/menuler/menuDuzenle.php");
				if(isset($_GET['altmenuler']))
					@include("inc/menuler/altmenuListele.php");
				if(isset($_GET['yeniAltmenu']))
					@include("inc/menuler/yeniKayit.php");
				if(isset($_GET['altmenu']))
					@include("inc/menuler/duzenle.php");
			
			@include("inc/script.php"); // Javascript kodlarý
		}// ------------------------- Yönetim paneli içeriði sonu burada -----------------------
	}
	else
	{
		if(count($_GET) != 0 and !isset($_SESSION["$_SERVER[SERVER_NAME]"]))
			@include("inc/girisFormu.php"); // Kullanýcý Giriþi Formu
	}
?>
</body>
</html>
<?php ob_end_flush(); ?>
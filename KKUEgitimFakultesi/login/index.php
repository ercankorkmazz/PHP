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
		@include("inc/girisFormu.php"); // Kullan�c� Giri�i Formu
	
	if(isset($_GET["giris"]))
		@include("inc/oturumac.php"); // Oturum a�ar
		
	if(isset($_GET["oturumKapat"]))
		@include("inc/oturumkapat.php"); // Oturumu kapat�r
				
	@include('inc/baglan.php'); 
	$sor=mysql_query("select * from kullanici where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"]);
	$oturum=mysql_fetch_array($sor);

	@include("inc/oturumKontrol.php");
	
	if($oturum["oturum"]=="on")
	{ 
		if(isset($_SESSION["$_SERVER[SERVER_NAME]"])){ // ------------- Y�netim paneli i�eri�i burada -----------------------
			@include("inc/tasarim.php"); // Logo ve Ana Men�
	
			if(isset($_GET["tasarim"]))
				@include("inc/tasarim/siteTasarim.php"); // Site Tasar�m� (Tasar�m Men�s�)
			
			if(isset($_GET["yardim"]))
				@include("inc/yardim/giris.php"); // Site Tasar�m� (Tasar�m Men�s�)
				
			if(isset($_GET["slider"]))
				@include("inc/anasayfa/slider.php"); // Slider
				
			if(isset($_GET["karsilamaAlani"]))
				@include("inc/anasayfa/karsilamaAlani.php"); // Anasayfa Kar��lama Alan�
			
			if(isset($_GET["duyurular"]))
				@include("inc/duyuru/duyurular.php"); // Duyurular
			if(isset($_GET["duyuru"]))
				@include("inc/duyuru/duyuruGuncelle.php"); // Duyuru g�nceller
				
			if(isset($_GET["ogretimUyeleri"]))
				@include("inc/kisiler/ogretimUyeleri.php"); // ��retim �yeleri
			if(isset($_GET["ogretimUyesi"]))
				@include("inc/kisiler/ogrUyeDuzenle.php"); // ��retim �yesini G�nceller
				
			if(isset($_GET["arastirmaGorevlileri"]))
				@include("inc/kisiler/arastirmaGorevlileri.php"); // Ara�t�rma G�revlileri
			if(isset($_GET["arastirmaGorevlisi"]))
				@include("inc/kisiler/arasGorevDuzenle.php"); // Ara�t�rma G�revlisi G�nceller
				
			if(isset($_GET["faydaliLinkler"]))
				@include("inc/fayLinkler/linkler.php"); // Faydal� Linkler
				
			if(isset($_GET["dosyaYukle"]))
				@include("inc/yukle/dosyaYukle.php"); // Dosya y�kler
			if(isset($_GET["dosya"]))
				@include("inc/yukle/dosyaDuzenle.php"); // Dosya g�nceller
				
			if(isset($_GET["yuklePDF"]))
				@include("inc/yukle/pdfYukle.php"); // PDF y�kler
			if(isset($_GET["PDF"]))
				@include("inc/yukle/pdfDuzenle.php"); // PDF g�nceller
								
			if(isset($_GET["galeri"]))
				@include("inc/galeri/albumler.php"); // Galeriye Alb�m ekler
			if(isset($_GET["album"]))
				@include("inc/galeri/album.php"); // Galeriye Alb�m ekler
			if(isset($_GET["fotograf"]))
				@include("inc/galeri/fotograf.php"); // Foto�raf G�r�nt�ler
				
			if(isset($_GET["kullanici"]))
				@include("inc/kullanici/kullanici.php"); // Kullanici bilgileri g�nceller
			
			if(isset($_GET["iletisim"]))
				@include("inc/iletisim/iletisim.php"); // �leti�im Bilgileri
			
			//----------------------------------------------- Sayfalar -------------------------------
			if(isset($_GET["sayfalar"]))
				@include("inc/sayfalar/listele.php");
			if(isset($_GET["yeniSayfa"]))
				@include("inc/sayfalar/yeniKayit.php");
			if(isset($_GET["sayfa"]))
				@include("inc/sayfalar/duzenle.php");
				
			//----------------------------------------------- Men�ler -------------------------------
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
			
			@include("inc/script.php"); // Javascript kodlar�
		}// ------------------------- Y�netim paneli i�eri�i sonu burada -----------------------
	}
	else
	{
		if(count($_GET) != 0 and !isset($_SESSION["$_SERVER[SERVER_NAME]"]))
			@include("inc/girisFormu.php"); // Kullan�c� Giri�i Formu
	}
?>
</body>
</html>
<?php ob_end_flush(); ?>
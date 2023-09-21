<?php
error_reporting(NULL);
session_start();
ob_start();
setcookie("bildirim","");
setcookie("bilgi","");
setcookie("mezunBilgi",'');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php @include("inc/head.php"); ?>
    <link href="css/css.css" rel="stylesheet" type="text/css" />
    <link href="css/yonetimCSS.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php	
	if(isset($_GET["giris"]))
		@include("inc/oturumac.php"); // Oturum açar
		
	if(isset($_GET["oturumKapat"]))
		@include("inc/oturumkapat.php"); // Oturumu kapatýr
	
	if($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]==0)
		$tablo="kullanici";
	else
		$tablo="ogretmen";
		
	@include('inc/baglan.php'); 
	$sor=mysql_query("select * from $tablo where id=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"]);
	$oturum=mysql_fetch_array($sor);

	@include("inc/oturumKontrol.php");
	
	@include("inc/tasarim.php");
	
	if((isset($_GET["girisYap"])) and !isset($_SESSION["$_SERVER[SERVER_NAME]mezunportali"]))
		@include("inc/girisFormu.php"); // Kullanýcý Giriþi Formu
		
	if((isset($_GET["sifremiUnuttum"])) and !isset($_SESSION["$_SERVER[SERVER_NAME]mezunportali"]))
		@include("inc/mail/form.php"); // Kullanýcý Giriþi Formu
	//-------------------------------------------------------- Ýçerik Alaný ------------------------------------------------
		//---------------------------------------------------------------------
		if($oturum["oturum"]=="on")
		{ 
			if(isset($_SESSION["$_SERVER[SERVER_NAME]mezunportali"]))
			{
				if($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]==0)
				{ 
					if($_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]=="admin")
					{
						if(isset($_GET["etkinliklerYonet"]))
							@include("inc/etkinlik/etkinlikler.php"); // etkinlikler
						if(isset($_GET["etkinlikYonet"]))
							@include("inc/etkinlik/etkinlikGuncelle.php"); // etkinlik günceller	
							
						if(isset($_GET["duyurularYonet"]))
							@include("inc/duyuru/duyurular.php"); // Duyurular
						if(isset($_GET["duyuruYonet"]))
							@include("inc/duyuru/duyuruGuncelle.php"); // Duyuru günceller	
							
						if(isset($_GET["mezunEkle"]))
							@include("inc/mezun/mezunEkle.php"); // Mezun Ekle
						if(isset($_GET["mezunSorgula"]))
							@include("inc/mezun/mezunSorgula.php"); // Mezun sorgular
						if(isset($_GET["mezun"]))
							@include("inc/mezun/mezunGoruntule.php"); // Mezun Goruntule	
							
						if(isset($_GET["linklerYonet"]))
							@include("inc/link/linkler.php"); // Faydalý Linkler
							
						if(isset($_GET["sliderYonet"]))
							@include("inc/slider/slider.php"); // Slider
							
						if(isset($_GET["galeriYonet"]))
							@include("inc/galeri/albumler.php"); // Galeriye Albüm ekler
						if(isset($_GET["albumYonet"]))
							@include("inc/galeri/album.php"); // Galeriye Albüm ekler
						if(isset($_GET["fotografYonet"]))
							@include("inc/galeri/fotograf.php"); // Fotoðraf Görüntüler
							
						if(isset($_GET["dosyaYukle"]))
							@include("inc/yukle/dosyaYukle.php"); // Dosya yükler
						if(isset($_GET["dosya"]))
							@include("inc/yukle/dosyaDuzenle.php"); // Dosya günceller
						
						if(isset($_GET["haberlerYonet"]))
							@include("inc/haber/yonet/haberler.php"); // güncel haberler
						if(isset($_GET["haberYonet"]))
							@include("inc/haber/yonet/haberGuncelle.php"); // güncel haberler güncelle
						if(isset($_GET["onay"]))
							@include("inc/haber/yonet/onay.php"); // güncel haberler onayla
							
						if(isset($_GET["basarilarYonet"]))
							@include("inc/basari/basarilar.php"); // baþarýlar
						if(isset($_GET["basariYonet"]))
							@include("inc/basari/Guncelle.php"); // baþarý güncelle
						if(isset($_GET["onayBasari"]))
							@include("inc/basari/onay.php"); // güncel haberler onayla
												
						if(isset($_GET["iletisimYonet"]))
							@include("inc/iletisim/iletisim.php"); // Ýletiþim Bilgileri
							
						if(isset($_GET["logo"]))
							@include("inc/logo/listele.php"); // Ýletiþim Bilgileri
							
						if(isset($_GET["ogretmenler"]))
							@include("inc/ogretmen/listele.php"); // Öðretmenler
						
						if(isset($_GET["istatistikler"]))
							@include("inc/istatistik.php"); // Ýstatistikler
							
						if(isset($_GET["anketYonet"]))
							@include("inc/anket/sonuclar.php"); // Anket Sonuçlarý
						
						if(isset($_GET["bolumler"]))
							@include("inc/bolumler/bolumler.php"); // Bölümöler
						if(isset($_GET["bolum"]))
							@include("inc/bolumler/bolumGuncelle.php"); // Bölüm Güncelle
					}
					else
					{
						if(isset($_GET["kisiselBilgiler"]))
							@include("inc/mezun/guncelle/kisisel.php"); // kisisel Bilgileri
						
						if(isset($_GET["iletisimBilgileri"]))
							@include("inc/mezun/guncelle/iletisim.php"); // Ýletiþim Bilgileri
							
						if(isset($_GET["guncelDurum"]))
							@include("inc/mezun/guncelle/guncel.php"); // guncel Bilgileri
						
						if(isset($_GET["egitimBilgileri"]))
							@include("inc/mezun/guncelle/egitim.php"); // eðitim Bilgileri
							
						if(isset($_GET["haberler"]))
							@include("inc/haber/haberler.php"); // güncel haberler
						if(isset($_GET["haber"]))
							@include("inc/haber/haberGuncelle.php"); // güncel haberler güncelle
							
						if(isset($_GET["arkadasBul"]))
							@include("inc/mezun/arkadasBul.php"); // Arkadaþýný Bul
						if(isset($_GET["mezunGoster"]))
							@include("inc/mezun/arkadasGoster.php"); // Bilgileri Goruntule
					}
				}
				else
				{	
					if(isset($_GET["etkinliklerOGR"]))
						@include("inc/etkinlikOGR/etkinlikler.php"); // etkinlikler
					if(isset($_GET["etkinlikOGR"]))
						@include("inc/etkinlikOGR/etkinlikGuncelle.php"); // etkinlik günceller	
						
					if(isset($_GET["duyurularOGR"]))
						@include("inc/duyuruOGR/duyurular.php"); // Duyurular
					if(isset($_GET["duyuruOGR"]))
						@include("inc/duyuruOGR/duyuruGuncelle.php"); // Duyuru günceller	
				
					if(isset($_GET["mezunSorgula"]))
						@include("inc/mezun/mezunSorgula.php"); // Arkadaþýný Bul
					if(isset($_GET["mezun"]))
						@include("inc/mezun/mezunGoruntule.php"); // Bilgileri Goruntule	
				}
				if(isset($_GET["kullanici"]))
					@include("inc/kullanici/kullanici.php"); // Kullanici bilgileri günceller
				
			}
			if(isset($_GET["kullanici"]))
				@include("inc/kullanici/listele.php");
		}
		//---------------------------------------------------------------------
		if(count($_GET) == 0)
			@include("inc/anasayfa.php"); //Anasayfa
		
		if(isset($_GET["duyurular"]))
			@include("inc/duyurular.php");
			
		if(isset($_GET["etkinlikler"]))
			@include("inc/goruntule.php");
			
		if(isset($_GET["mezunhaberleri"]))
			@include("inc/goruntule.php");
		if(isset($_GET["mezunhaber"]))
			@include("inc/goruntule.php");
			
		if(isset($_GET["mezunbasarilari"]))
			@include("inc/goruntule.php");
		if(isset($_GET["mezunbasari"]))
			@include("inc/goruntule.php");
		
		if(isset($_GET["albumler"]))
			@include("inc/albumler.php"); 
		if(isset($_GET["album"]))
			@include("inc/album.php");
			
		if(isset($_GET["etkinlik"]))
			@include("inc/goruntule.php");
				
		if(isset($_GET["uyeOl"]))
			@include("inc/mezun/uyeFormu.php");
			
		if(isset($_GET["anket"]))
			@include("inc/anket/form.php"); 
		
		if(isset($_GET["iletisim"]))
			@include("inc/iletisim.php"); 
	//-------------------------------------------------------- Ýçerik Sonu Alaný -------------------------------------------
	@include("inc/alt.php");
	@include("inc/ckfingerConfig.php"); 
?>
</body>
</html>
<?php ob_end_flush(); ?>
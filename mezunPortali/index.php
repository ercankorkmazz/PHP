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
		@include("inc/oturumac.php"); // Oturum a�ar
		
	if(isset($_GET["oturumKapat"]))
		@include("inc/oturumkapat.php"); // Oturumu kapat�r
	
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
		@include("inc/girisFormu.php"); // Kullan�c� Giri�i Formu
		
	if((isset($_GET["sifremiUnuttum"])) and !isset($_SESSION["$_SERVER[SERVER_NAME]mezunportali"]))
		@include("inc/mail/form.php"); // Kullan�c� Giri�i Formu
	//-------------------------------------------------------- ��erik Alan� ------------------------------------------------
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
							@include("inc/etkinlik/etkinlikGuncelle.php"); // etkinlik g�nceller	
							
						if(isset($_GET["duyurularYonet"]))
							@include("inc/duyuru/duyurular.php"); // Duyurular
						if(isset($_GET["duyuruYonet"]))
							@include("inc/duyuru/duyuruGuncelle.php"); // Duyuru g�nceller	
							
						if(isset($_GET["mezunEkle"]))
							@include("inc/mezun/mezunEkle.php"); // Mezun Ekle
						if(isset($_GET["mezunSorgula"]))
							@include("inc/mezun/mezunSorgula.php"); // Mezun sorgular
						if(isset($_GET["mezun"]))
							@include("inc/mezun/mezunGoruntule.php"); // Mezun Goruntule	
							
						if(isset($_GET["linklerYonet"]))
							@include("inc/link/linkler.php"); // Faydal� Linkler
							
						if(isset($_GET["sliderYonet"]))
							@include("inc/slider/slider.php"); // Slider
							
						if(isset($_GET["galeriYonet"]))
							@include("inc/galeri/albumler.php"); // Galeriye Alb�m ekler
						if(isset($_GET["albumYonet"]))
							@include("inc/galeri/album.php"); // Galeriye Alb�m ekler
						if(isset($_GET["fotografYonet"]))
							@include("inc/galeri/fotograf.php"); // Foto�raf G�r�nt�ler
							
						if(isset($_GET["dosyaYukle"]))
							@include("inc/yukle/dosyaYukle.php"); // Dosya y�kler
						if(isset($_GET["dosya"]))
							@include("inc/yukle/dosyaDuzenle.php"); // Dosya g�nceller
						
						if(isset($_GET["haberlerYonet"]))
							@include("inc/haber/yonet/haberler.php"); // g�ncel haberler
						if(isset($_GET["haberYonet"]))
							@include("inc/haber/yonet/haberGuncelle.php"); // g�ncel haberler g�ncelle
						if(isset($_GET["onay"]))
							@include("inc/haber/yonet/onay.php"); // g�ncel haberler onayla
							
						if(isset($_GET["basarilarYonet"]))
							@include("inc/basari/basarilar.php"); // ba�ar�lar
						if(isset($_GET["basariYonet"]))
							@include("inc/basari/Guncelle.php"); // ba�ar� g�ncelle
						if(isset($_GET["onayBasari"]))
							@include("inc/basari/onay.php"); // g�ncel haberler onayla
												
						if(isset($_GET["iletisimYonet"]))
							@include("inc/iletisim/iletisim.php"); // �leti�im Bilgileri
							
						if(isset($_GET["logo"]))
							@include("inc/logo/listele.php"); // �leti�im Bilgileri
							
						if(isset($_GET["ogretmenler"]))
							@include("inc/ogretmen/listele.php"); // ��retmenler
						
						if(isset($_GET["istatistikler"]))
							@include("inc/istatistik.php"); // �statistikler
							
						if(isset($_GET["anketYonet"]))
							@include("inc/anket/sonuclar.php"); // Anket Sonu�lar�
						
						if(isset($_GET["bolumler"]))
							@include("inc/bolumler/bolumler.php"); // B�l�m�ler
						if(isset($_GET["bolum"]))
							@include("inc/bolumler/bolumGuncelle.php"); // B�l�m G�ncelle
					}
					else
					{
						if(isset($_GET["kisiselBilgiler"]))
							@include("inc/mezun/guncelle/kisisel.php"); // kisisel Bilgileri
						
						if(isset($_GET["iletisimBilgileri"]))
							@include("inc/mezun/guncelle/iletisim.php"); // �leti�im Bilgileri
							
						if(isset($_GET["guncelDurum"]))
							@include("inc/mezun/guncelle/guncel.php"); // guncel Bilgileri
						
						if(isset($_GET["egitimBilgileri"]))
							@include("inc/mezun/guncelle/egitim.php"); // e�itim Bilgileri
							
						if(isset($_GET["haberler"]))
							@include("inc/haber/haberler.php"); // g�ncel haberler
						if(isset($_GET["haber"]))
							@include("inc/haber/haberGuncelle.php"); // g�ncel haberler g�ncelle
							
						if(isset($_GET["arkadasBul"]))
							@include("inc/mezun/arkadasBul.php"); // Arkada��n� Bul
						if(isset($_GET["mezunGoster"]))
							@include("inc/mezun/arkadasGoster.php"); // Bilgileri Goruntule
					}
				}
				else
				{	
					if(isset($_GET["etkinliklerOGR"]))
						@include("inc/etkinlikOGR/etkinlikler.php"); // etkinlikler
					if(isset($_GET["etkinlikOGR"]))
						@include("inc/etkinlikOGR/etkinlikGuncelle.php"); // etkinlik g�nceller	
						
					if(isset($_GET["duyurularOGR"]))
						@include("inc/duyuruOGR/duyurular.php"); // Duyurular
					if(isset($_GET["duyuruOGR"]))
						@include("inc/duyuruOGR/duyuruGuncelle.php"); // Duyuru g�nceller	
				
					if(isset($_GET["mezunSorgula"]))
						@include("inc/mezun/mezunSorgula.php"); // Arkada��n� Bul
					if(isset($_GET["mezun"]))
						@include("inc/mezun/mezunGoruntule.php"); // Bilgileri Goruntule	
				}
				if(isset($_GET["kullanici"]))
					@include("inc/kullanici/kullanici.php"); // Kullanici bilgileri g�nceller
				
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
	//-------------------------------------------------------- ��erik Sonu Alan� -------------------------------------------
	@include("inc/alt.php");
	@include("inc/ckfingerConfig.php"); 
?>
</body>
</html>
<?php ob_end_flush(); ?>
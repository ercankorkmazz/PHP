<?php
error_reporting(NULL);
session_start();
ob_start();
setcookie("bildirim","");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../css/yonetimCSS.css" />
<?php @include("inc/head.php"); ?>
</head>
<body <?php if(!isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademik"])) echo "style='background-color:#EEE;'"; ?> >
<?php
	if(count($_GET) == 0 and !isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademik"]))
		@include("inc/girisFormu.php"); // Kullan�c� Giri�i Formu
	
	if(isset($_GET["giris"]))
		@include("inc/oturumac.php"); // Oturum a�ar
		
	if(isset($_GET["oturumKapat"]))
		@include("inc/oturumkapat.php"); // Oturumu kapat�r
	
	@include('../inc/baglan.php'); 
	$sor=mysql_query("select * from ogretmenler where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
	$oturum=mysql_fetch_array($sor);

	@include("inc/oturumKontrol.php");
		
	//---------------------------------------
	if($oturum["oturum"]=="on")
	{ 						
			if(isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademik"])){ // -------- Y�netim paneli i�eri�i --------
				
				@include("inc/tasarim.php"); // Logo ve Ana Men�
if((isset($_GET['EDFormu'])) and (!isset($_GET['kapat'])) and (!$_POST))
{
?>
<div class="arkaPlan" style="padding-top:0;padding-bottom:0;">
	<?php @include("inc/EDFormu/izinGunleri.php"); ?>
</div>
<?php } ?>
<div class="arkaPlan">
<?php
				if(count($_GET) == 0)
					@include("inc/giris.php");
					
				//----------------------------------- Mail Adresi G�nceller ---------------------
				if(isset($_GET['mailGuncelle']))
					@include("inc/mailGuncelle.php");
					
				//----------------------------------- Ders Program� ---------------------
				if(isset($_GET['EDFormu']))
					@include("inc/EDFormu/listele.php");
					
				//----------------------------------- Ders Program� ---------------------
				if(isset($_GET['program']))
					@include("inc/program/listele.php");
					
				//----------------------------------- Di�er Birimler ---------------------
				if(isset($_GET['diger']))
					@include("inc/diger/listele.php");
				if(isset($_GET['bosalt']))
					@include("inc/diger/bosalt.php");
					
				if(isset($_GET['dersler']))
					@include("inc/ders/listele.php");
				if(isset($_GET['yeniDers']))
					@include("inc/ders/yeni.php");
				if(isset($_GET['ders']))
					@include("inc/ders/duzenle.php");
					
				if(isset($_GET['birimler']))
					@include("inc/birim/listele.php");
				if(isset($_GET['yeniBirim']))
					@include("inc/birim/yeni.php");
				if(isset($_GET['birim']))
					@include("inc/birim/duzenle.php");
									
				if(isset($_GET['kayitEkle']))
					@include("inc/diger/cokluIstek.php");
					
				//----------------------------------- Kullan�c� Bilgileri ---------------------
				if(isset($_GET['kullanici']))
					@include("inc/kullanici/listele.php");
					
			}// ------------------------- Y�netim paneli i�eri�i sonu burada -----------------------	
		?>
    </div><!-- ��erik Sa� son -->
    <div class="clear"></div><!-- clear divi -->
</div><!-- ��erik Son -->
<?php 
	}
	else{
		if(count($_GET) != 0 and !isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademik"]) and !isset($_GET['sifremiUnuttum']))
			@include("inc/girisFormu.php"); // Kullan�c� Giri�i Formu
	}
	if(isset($_GET['sifremiUnuttum']) and !isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademik"]))
	{
		@include("inc/mail/form.php");
	}
?>
</body>
</html>
<?php ob_end_flush(); ?>
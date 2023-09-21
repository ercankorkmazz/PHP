<?php
error_reporting(NULL);
session_start();
ob_start();
setcookie("bildirim","");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php @include("inc/head.php"); ?>
<link rel="stylesheet" type="text/css" href="css/yonetimCSS.css" />
</head>
<body <?php if(!isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetim"])) echo "style='background-color:#EEE;'"; ?> >
<?php
	if(count($_GET) == 0 and !isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetim"]))
		@include("inc/girisFormu.php"); // Kullanýcý Giriþi Formu
	
	if(isset($_GET["giris"]))
		@include("inc/oturumac.php"); // Oturum açar
		
	if(isset($_GET["oturumKapat"]))
		@include("inc/oturumkapat.php"); // Oturumu kapatýr
	
	@include('inc/baglan.php'); 
	$sor=mysql_query("select * from kullanici where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkID"]);
	$oturum=mysql_fetch_array($sor);

	@include("inc/oturumKontrol.php");
		
	//---------------------------------------
	if($oturum["oturum"]=="on")
	{ 			
			if(isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetim"])){ // ------------- Yönetim paneli içeriði --------------
				
				@include("inc/tasarim.php"); // Logo ve Ana Menü
?>
<div class="arkaPlan">
<?php
				if(count($_GET) == 0)
					@include("inc/giris.php");
					
				//----------------------------------- Bölüm / Anabilim Dallarý ---------------------
				if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin")
				{
					if(isset($_GET['bolumler']))
						@include("inc/bolum/listele.php");
					if(isset($_GET['yeniBolum']))
						@include("inc/bolum/yeni.php");
					if(isset($_GET['bolum']))
						@include("inc/bolum/duzenle.php");
					if(isset($_GET['ekDersAyarlari']))
						@include("inc/bolum/ekDers.php");
				}
					
				//----------------------------------- Ders Programlarý ---------------------
				if(isset($_GET['programlar']))
					@include("inc/program/listele.php");
				if((isset($_GET['guncelSil'])) and (isset($_GET['sinif'])))
					@include("inc/program/guncelSil.php");
					
				//----------------------------------- Kullanýcý Bilgileri ---------------------
				if(isset($_GET['kullanici']))
					@include("inc/kullanici/listele.php");
				
				//----------------------------------- Ders Ýþlemleri ---------------------
				if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin")
				{
					if(isset($_GET['dersler']))
						@include("inc/ders/listele.php");
					if(isset($_GET['yeniDers']))
						@include("inc/ders/yeni.php");
					if(isset($_GET['ders']))
						@include("inc/ders/duzenle.php");
				}
				//----------------------------------- Öðretmen Ýþlemleri ---------------------
				if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin")
				{
					if(isset($_GET['ogretmenler']))
						@include("inc/ogretmen/listele.php");
					if(isset($_GET['yeniOgretmen']))
						@include("inc/ogretmen/yeni.php");
					if(isset($_GET['ogretmen']))
						@include("inc/ogretmen/duzenle.php");
				}
					
				//----------------------------------- Derslikler ---------------------
				if(isset($_GET['derslikler']))
					@include("inc/derslik/listele.php");
					
				if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin")
				{
					if(isset($_GET['yeniDerslik']))
						@include("inc/derslik/yeni.php");
					if(isset($_GET['derslikDuzenle']))
						@include("inc/derslik/duzenle.php");
				}
				if(isset($_GET['derslik']))
					@include("inc/derslik/derslik.php");
				if(isset($_GET['S']) and isset($_GET['G']) and isset($_GET['D']) and isset($_GET['ID']))
					@include("inc/derslik/hucreDuzenle.php");
				if(isset($_GET['S']) and isset($_GET['G']) and isset($_GET['K']) and isset($_GET['H']) and isset($_GET['DI']) and isset($_GET['DS']) and isset($_GET['istekGuncelle']))
					@include("inc/derslik/istekDuzenle.php"); // istek düzenle
				
				if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin")
				{	
					if(isset($_GET['istekGonder']) and (count($_GET) > 1))
						@include("inc/derslik/cokluIstek.php"); // Çoklu Ýstek Ekler
					elseif(isset($_GET['istekGonder']))
					{	
						if(count($_POST["istek"]) > 0)
							@include("inc/derslik/cokluIstek.php"); // Çoklu Ýstek Ekler
						elseif(!empty($_COOKIE["istekler"]))
							@include("inc/derslik/cokluIstek.php"); // Çoklu Ýstek Ekler
						else
							header ("Location:index.php?derslik=$_POST[derslik]");
					}
					
				}
					
				//----------------------------------- Mesajlar ---------------------
				if(isset($_GET['mesajlar']))
					@include("inc/mesaj/listele.php");
				if(isset($_GET['mesaj']))
					@include("inc/mesaj/goster.php");
				
				//----------------------------------- Mail Adresi Günceller ---------------------
				if(isset($_GET['mailGuncelle']))
					@include("inc/mailGuncelle.php");
			}// ------------------------- Yönetim paneli içeriði sonu burada -----------------------	
		?>
    </div><!-- Ýçerik Sað son -->
    <div class="clear"></div><!-- clear divi -->
</div><!-- Ýçerik Son -->
<?php 
	}
	else{
		if(count($_GET) != 0 and !isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetim"]) and !isset($_GET['sifremiUnuttum']))
			@include("inc/girisFormu.php"); // Kullanýcý Giriþi Formu
	}
	if(isset($_GET['sifremiUnuttum']) and !isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetim"]))
	{
		@include("inc/mail/form.php");
	}
?>
</body>
</html>
<?php ob_end_flush(); ?>
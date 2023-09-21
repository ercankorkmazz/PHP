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
		@include("inc/girisFormu.php"); // Kullan�c� Giri�i Formu
	
	if(isset($_GET["giris"]))
		@include("inc/oturumac.php"); // Oturum a�ar
		
	if(isset($_GET["oturumKapat"]))
		@include("inc/oturumkapat.php"); // Oturumu kapat�r
	
	@include('inc/baglan.php'); 
	$sor=mysql_query("select * from kullanici where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkID"]);
	$oturum=mysql_fetch_array($sor);

	@include("inc/oturumKontrol.php");
		
	//---------------------------------------
	if($oturum["oturum"]=="on")
	{ 			
			if(isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetim"])){ // ------------- Y�netim paneli i�eri�i --------------
				
				@include("inc/tasarim.php"); // Logo ve Ana Men�
?>
<div class="arkaPlan">
<?php
				if(count($_GET) == 0)
					@include("inc/giris.php");
					
				//----------------------------------- B�l�m / Anabilim Dallar� ---------------------
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
					
				//----------------------------------- Ders Programlar� ---------------------
				if(isset($_GET['programlar']))
					@include("inc/program/listele.php");
				if((isset($_GET['guncelSil'])) and (isset($_GET['sinif'])))
					@include("inc/program/guncelSil.php");
					
				//----------------------------------- Kullan�c� Bilgileri ---------------------
				if(isset($_GET['kullanici']))
					@include("inc/kullanici/listele.php");
				
				//----------------------------------- Ders ��lemleri ---------------------
				if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin")
				{
					if(isset($_GET['dersler']))
						@include("inc/ders/listele.php");
					if(isset($_GET['yeniDers']))
						@include("inc/ders/yeni.php");
					if(isset($_GET['ders']))
						@include("inc/ders/duzenle.php");
				}
				//----------------------------------- ��retmen ��lemleri ---------------------
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
					@include("inc/derslik/istekDuzenle.php"); // istek d�zenle
				
				if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin")
				{	
					if(isset($_GET['istekGonder']) and (count($_GET) > 1))
						@include("inc/derslik/cokluIstek.php"); // �oklu �stek Ekler
					elseif(isset($_GET['istekGonder']))
					{	
						if(count($_POST["istek"]) > 0)
							@include("inc/derslik/cokluIstek.php"); // �oklu �stek Ekler
						elseif(!empty($_COOKIE["istekler"]))
							@include("inc/derslik/cokluIstek.php"); // �oklu �stek Ekler
						else
							header ("Location:index.php?derslik=$_POST[derslik]");
					}
					
				}
					
				//----------------------------------- Mesajlar ---------------------
				if(isset($_GET['mesajlar']))
					@include("inc/mesaj/listele.php");
				if(isset($_GET['mesaj']))
					@include("inc/mesaj/goster.php");
				
				//----------------------------------- Mail Adresi G�nceller ---------------------
				if(isset($_GET['mailGuncelle']))
					@include("inc/mailGuncelle.php");
			}// ------------------------- Y�netim paneli i�eri�i sonu burada -----------------------	
		?>
    </div><!-- ��erik Sa� son -->
    <div class="clear"></div><!-- clear divi -->
</div><!-- ��erik Son -->
<?php 
	}
	else{
		if(count($_GET) != 0 and !isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetim"]) and !isset($_GET['sifremiUnuttum']))
			@include("inc/girisFormu.php"); // Kullan�c� Giri�i Formu
	}
	if(isset($_GET['sifremiUnuttum']) and !isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetim"]))
	{
		@include("inc/mail/form.php");
	}
?>
</body>
</html>
<?php ob_end_flush(); ?>
<?php
error_reporting(NULL);
session_start();
ob_start();
setcookie("bildirim","");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Cümle Ekle</title>
<link rel="stylesheet" type="text/css" href="css/yonetimCSS.css" />
</head>

<body>
<?php
	if(count($_GET) == 0 and !isset($_SESSION["$_SERVER[SERVER_NAME]"]))
		@include("inc/girisFormu.php"); // Kullanıcı Girişi Formu
		
	if(isset($_GET["giris"]))
		@include("inc/oturumac.php"); // Oturum açar
		
	if(isset($_GET["oturumKapat"]))
		@include("inc/oturumkapat.php"); // Oturumu kapatır
	
	@include('inc/baglan.php'); 
	$sor=mysql_query("select * from kullanici where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"]);
	$oturum=mysql_fetch_array($sor);

	@include("inc/oturumKontrol.php");
		
	//---------------------------------------
	if($oturum["oturum"]=="on")
	{ 
		if(isset($_SESSION["$_SERVER[SERVER_NAME]"])){
			include("inc/banner.php");
			
			@include("inc/bildirim.php");
			if(count($_GET) == 0)
				@include("inc/cumle/listele.php");
			if(isset($_GET["yeni"]))
				@include("inc/cumle/yeni.php");
			if(isset($_GET["sil"]))
				@include("inc/cumle/sil.php");
		}
	}
?>
</body>
</html>
<?php ob_end_flush(); ?>
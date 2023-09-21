<?php
	@include('inc/baglan.php');
	$sql="update kullanici set oturum = '' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
	if (@mysql_query($sql,$baglan))
		unset($_SESSION["$_SERVER[SERVER_NAME]"]);
		
	unset($_SESSION["$_SERVER[SERVER_NAME]kadi"]);
	unset($_SESSION["$_SERVER[SERVER_NAME]kID"]);
	setcookie("bildirim","");
	
	$url="../img/etkinlikler/".$_COOKIE["etkinlikFoto"];
	unlink("$url");
	setcookie("etkinlikFoto","");
	
	$url="../img/kisiler/".$_COOKIE["ogretimUyesiFoto"];
	unlink("$url");
	setcookie("ogretimUyesiFoto","");
	
	$url="../img/kisiler/".$_COOKIE["arastirmaGorevlisiFoto"];
	unlink("$url");
	setcookie("arastirmaGorevlisiFoto","");
	
	$url="../dosyalar/".$_COOKIE["yukluDosya"];
	unlink("$url");
	setcookie("yukluDosya","");
	
	$url="../img/ortam/".$_COOKIE["yukluOrtam"];
	unlink("$url");
	setcookie("yukluOrtam","");
	
	$url="../".$_COOKIE["yukluPDF"];
	unlink("$url");
	setcookie("yukluPDF","");
	setcookie("yukluID","");
	
	setcookie("bilgi","");
	
	session_destroy() ;
	header ("Location:index.php"); 
?>
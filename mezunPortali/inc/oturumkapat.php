<?php
	if($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]==0)
		$tablo="kullanici";
	else
		$tablo="ogretmen";

	@include('inc/baglan.php');
	$sql="update $tablo set oturum = '' where id=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
	if (@mysql_query($sql,$baglan))
		unset($_SESSION["$_SERVER[SERVER_NAME]mezunportali"]);
		
	unset($_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]);
	unset($_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"]);
	unset($_SESSION["$_SERVER[SERVER_NAME]mezunportalikullanici"]);
	unset($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]);
	setcookie("bildirim","");
	
	$url="img/slider/".$_COOKIE["etkinlikFoto"];
	unlink("$url");
	setcookie("etkinlikFoto","");
	
	$url="img/basari/".$_COOKIE["basariFoto"];
	unlink("$url");
	setcookie("basariFoto","");
	
	$url="dosyalar/".$_COOKIE["yukluDosya"];
	unlink("$url");
	setcookie("yukluDosya","");
	
	setcookie("bilgi","");
	
	session_destroy() ;
	header ("Location:index.php"); 
?>
<?php
	@include('inc/baglan.php');
	$sql="update kullanici set oturum = '' where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkID"];
	if (@mysql_query($sql,$baglan))
		unset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetim"]);
		
	unset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]);
	unset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkID"]);
	unset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]);
	setcookie("bildirim","");
	setcookie("bilgi","");
	
	session_destroy() ;
	header ("Location:index.php"); 
?>
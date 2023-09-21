<?php
	@include('../inc/baglan.php');
	$sql="update ogretmenler set oturum = '' where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"];
	if (@mysql_query($sql,$baglan))
		unset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademik"]);
		
	unset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkadi"]);
	unset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
	unset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikbolumID"]);
	setcookie("bildirim","");
	setcookie("bilgi","");
	
	session_destroy() ;
	header ("Location:index.php"); 
?>
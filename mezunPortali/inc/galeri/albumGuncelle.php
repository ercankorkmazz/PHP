<?php
	if($_POST["albumAdi"]!="")
	{
		@include('inc/baglan.php');
		$sql="update albumler set albumAdi = '$_POST[albumAdi]' where id=".$_GET["albumYonet"];	
			
		if (@mysql_query($sql,$baglan)){
			setcookie("bildirim","Alb�m ad� g�ncellendi!");
		}
		else{
			setcookie("bildirim","Kay�t Ba�ar�s�z!");
		}
	}
	else
		setcookie("bildirim","Alb�m ad�n� yaz�n�z!");
	
	header("Location:index.php?albumYonet=$_GET[albumYonet]");
?>
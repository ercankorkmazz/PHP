<?php
	if($_POST["albumAdi"]!="")
	{
		@include('inc/baglan.php');
		$sql="update albumler set albumAdi = '$_POST[albumAdi]' where id=".$_GET["albumYonet"];	
			
		if (@mysql_query($sql,$baglan)){
			setcookie("bildirim","Albüm adý güncellendi!");
		}
		else{
			setcookie("bildirim","Kayýt Baþarýsýz!");
		}
	}
	else
		setcookie("bildirim","Albüm adýný yazýnýz!");
	
	header("Location:index.php?albumYonet=$_GET[albumYonet]");
?>
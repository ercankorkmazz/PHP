<?php
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select URL from araclar where id=".$_GET["aracsil"]);
	$alanlar=mysql_fetch_array($sorgu);
	$url="../img/arac/".$alanlar["URL"];
	unlink("$url");
	
	$sql="delete from araclar where id=".$_GET["aracsil"];
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Ara� Silindi");
	else
		setcookie("bildirim","��lem ba�ar�s�z. L�tfen daha sonra tekrar deneyiniz.");
			
	header ("Location:index.php?aracfilosu");
?>
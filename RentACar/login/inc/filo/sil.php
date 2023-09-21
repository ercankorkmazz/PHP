<?php
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select URL from araclar where id=".$_GET["aracsil"]);
	$alanlar=mysql_fetch_array($sorgu);
	$url="../img/arac/".$alanlar["URL"];
	unlink("$url");
	
	$sql="delete from araclar where id=".$_GET["aracsil"];
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Araç Silindi");
	else
		setcookie("bildirim","Ýþlem baþarýsýz. Lütfen daha sonra tekrar deneyiniz.");
			
	header ("Location:index.php?aracfilosu");
?>
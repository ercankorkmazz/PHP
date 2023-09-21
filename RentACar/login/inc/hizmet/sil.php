<?php
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from sayfalar where id=".$_GET["hizmetsil"]);
	$alanlar=mysql_fetch_array($sorgu);
	$url="../img/home/hizmetler/".$alanlar["URL"];
	unlink("$url");
	
	$sql="delete from sayfalar where id=".$_GET["hizmetsil"];
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Silindi");
	else
		setcookie("bildirim","Ýþlem baþarýsýz. Lütfen daha sonra tekrar deneyiniz.");
			
	header ("Location:index.php?hizmetler");
?>
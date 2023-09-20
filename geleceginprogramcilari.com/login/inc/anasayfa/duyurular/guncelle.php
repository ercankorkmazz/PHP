<?php
if(!empty($_POST["duyuruBilgi"]))
{
	@include('inc/baglan.php');
	$metin=$_POST["duyuruBilgi"];
	$sql="update duyurular set duyuru = '$metin', url = '$_POST[url]' where id=".$_GET["duyuru"];
	
	if (@mysql_query($sql,$baglan))
		setcookie("bilgi","Duyuru Güncellendi!");
	else
		setcookie("bilgi","Kayýt Baþarýsýz!");
}
			
	header ("Location:index.php?duyuru=".$_GET["duyuru"]);
?>
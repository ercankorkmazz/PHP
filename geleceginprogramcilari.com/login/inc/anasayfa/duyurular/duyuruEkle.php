<?php
if(!empty($_POST["duyuruBilgi"]))
{
	@include('inc/baglan.php');
	$metin=$_POST["duyuruBilgi"];
	$sql="insert into duyurular (duyuru,url) values ('$metin','$_POST[url]')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bilgi","Duyuru Kaydedildi!");
	else
		setcookie("bilgi","Kay�t Ba�ar�s�z!");
}
			
	header ("Location:index.php?duyurular");
?>
<?php
if(!empty($_POST["duyuruBilgi"]))
{
	@include('inc/baglan.php');
	$metin=strip_tags($_POST["duyuruBilgi"]);
	$sql="insert into duyurular (duyuru,url) values ('$metin','$_POST[url]')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Duyuru Kaydedildi!");
	else
		setcookie("bildirim","Kayit Basarisiz!");
}
else
	setcookie("bildirim","Duyuru Yazýnýz!");
	header ("Location:index.php?duyurularYonet");
?>
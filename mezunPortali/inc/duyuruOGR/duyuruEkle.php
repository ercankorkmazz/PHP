<?php
if(!empty($_POST["duyuruBilgi"]))
{
	@include('inc/baglan.php');
	$metin=strip_tags($_POST["duyuruBilgi"]);
	$id=$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
	$sql="insert into duyurular (duyuru,url,ogr) values ('$metin','$_POST[url]','$id')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Duyuru Kaydedildi!");
	else
		setcookie("bildirim","Kayit Basarisiz!");
}
else
	setcookie("bildirim","Duyuru Yazýnýz!");
	header ("Location:index.php?duyurularOGR");
?>
<?php
if(!empty($_POST["etkinlikBaslik"]))
{
	@include('inc/baglan.php');
	$tarih=$_POST["Sa"].".".$_POST["Dk"].".".$_POST["Gun"].".".$_POST["Ay"].".".$_POST["Yil"];
	$sql="insert into etkinlikler (baslik,tarih,icerik) values ('$_POST[etkinlikBaslik]','$tarih','$_POST[icerik]')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Etkinlik Kaydedildi!");
	else
		setcookie("bildirim","Kayýt Baþarýsýz!");
}
else
	setcookie("bildirim","Etkinlik Baþlýðýný Yazýnýz!");
	header ("Location:index.php?etkinliklerYonet");
?>
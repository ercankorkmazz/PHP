<?php
if(!empty($_POST["etkinlikBaslik"]))
{
	@include('inc/baglan.php');
	$tarih=$_POST["Sa"].".".$_POST["Dk"].".".$_POST["Gun"].".".$_POST["Ay"].".".$_POST["Yil"];
	$id=$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
	$sql="insert into etkinlikler (baslik,tarih,icerik,ogr) values ('$_POST[etkinlikBaslik]','$tarih','$_POST[icerik]','$id')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Etkinlik Kaydedildi!");
	else
		setcookie("bildirim","Kay�t Ba�ar�s�z!");
}
else
	setcookie("bildirim","Etkinlik Ba�l���n� Yaz�n�z!");
	header ("Location:index.php?etkinliklerOGR");
?>
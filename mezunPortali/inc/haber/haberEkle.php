<?php
if(!empty($_POST["baslik"]))
{
	@include('inc/baglan.php');
	$kID=$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
	$sql="insert into haberler (kID,baslik,icerik) values ('$kID','$_POST[baslik]','$_POST[icerik]')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Haber Kaydedildi!");
	else
		setcookie("bildirim","Kayýt Baþarýsýz!");
}
else
	setcookie("bildirim","Baþlýk Yazýnýz!");
	header ("Location:index.php?haberler");
?>
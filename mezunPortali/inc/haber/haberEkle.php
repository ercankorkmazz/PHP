<?php
if(!empty($_POST["baslik"]))
{
	@include('inc/baglan.php');
	$kID=$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
	$sql="insert into haberler (kID,baslik,icerik) values ('$kID','$_POST[baslik]','$_POST[icerik]')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Haber Kaydedildi!");
	else
		setcookie("bildirim","Kay�t Ba�ar�s�z!");
}
else
	setcookie("bildirim","Ba�l�k Yaz�n�z!");
	header ("Location:index.php?haberler");
?>
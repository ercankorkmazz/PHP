<?php
if((!empty($_POST["fayLinkBaslik"])) and (!empty($_POST["fayLinkAdres"])))
{
	@include('inc/baglan.php');
	$sql="insert into baglantilar (baslik,link) values ('$_POST[fayLinkBaslik]','$_POST[fayLinkAdres]')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Baðlantý Kaydedildi!");
	else
		setcookie("bildirim","Kayýt Baþarýsýz!");
}

header ("Location:index.php?linklerYonet");
?>
<?php
if((!empty($_POST["fayLinkBaslik"])) and (!empty($_POST["fayLinkAdres"])))
{
	@include('inc/baglan.php');
	$sql="insert into baglantilar (baslik,link) values ('$_POST[fayLinkBaslik]','$_POST[fayLinkAdres]')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Ba�lant� Kaydedildi!");
	else
		setcookie("bildirim","Kay�t Ba�ar�s�z!");
}

header ("Location:index.php?linklerYonet");
?>
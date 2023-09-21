<?php
if((!empty($_POST["tcNo"])))
{
	@include('inc/baglan.php');
	$sql="insert into mezun (tcNo,okulNo) values ('$_POST[tcNo]','$_POST[okulNo]')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Mezun Kaydedildi!");
	else
		setcookie("bildirim","Mezun Eklenemedi. Sistemde kayýtlý mezunlar tekrar eklenemez.");
}

header ("Location:index.php?mezunEkle");
?>
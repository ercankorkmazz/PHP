<?php
if(!empty($_POST["bolumAdi"]))
{
	@include('inc/baglan.php');
	$sql="insert into bolumler (bolumAdi) values ('$_POST[bolumAdi]')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","B�l�m / Anabilim Dal� Kaydedildi!");
	else
		setcookie("bildirim","Kay�t Ba�ar�s�z!");
}
else
	setcookie("bildirim","B�l�m / Anabilim Dal� Yaz�n�z!");
	header ("Location:index.php?bolumler");
?>
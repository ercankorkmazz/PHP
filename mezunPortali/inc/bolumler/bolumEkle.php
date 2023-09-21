<?php
if(!empty($_POST["bolumAdi"]))
{
	@include('inc/baglan.php');
	$sql="insert into bolumler (bolumAdi) values ('$_POST[bolumAdi]')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Bölüm / Anabilim Dalý Kaydedildi!");
	else
		setcookie("bildirim","Kayýt Baþarýsýz!");
}
else
	setcookie("bildirim","Bölüm / Anabilim Dalý Yazýnýz!");
	header ("Location:index.php?bolumler");
?>
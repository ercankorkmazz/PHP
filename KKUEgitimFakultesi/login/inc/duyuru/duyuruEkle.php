<?php
	@include('inc/baglan.php');
	$metin=strip_tags($_POST["duyuruBilgi"]);
	$sql="insert into duyurular (duyuru,url) values ('$metin','$_POST[url]')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Duyuru Kaydedildi!");
	else
		setcookie("bildirim","Kayit Basarisiz!");
			
	header ("Location:index.php?duyurular");
?>
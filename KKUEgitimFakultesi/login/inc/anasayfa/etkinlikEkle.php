<?php
	if(!empty($_COOKIE["etkinlikFoto"]))
	{
			@include('inc/baglan.php');
			$sql="insert into slider (URL) values ('$_COOKIE[etkinlikFoto]')";
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Resim Kaydedildi!");
				setcookie("etkinlikFoto","");
			}
			else
				setcookie("bildirim","Kayit Basarisiz!");
	}
	else
		setcookie("bildirim","Resim yükleyiniz!");
				
		header ("Location:index.php?slider");
?>
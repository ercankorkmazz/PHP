<?php
	if(!empty($_COOKIE["etkinlikFoto"]))
	{
			@include('inc/baglan.php');
			$sql="insert into slider (resim) values ('$_COOKIE[etkinlikFoto]')";
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bilgi","Resim Kaydedildi!");
				setcookie("etkinlikFoto","");
			}
			else
				setcookie("bilgi","Kayýt Baþarýsýz!");
	}
	else
		setcookie("bilgi","Resim yükleyiniz!");
				
		header ("Location:index.php?slider");
?>
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
				setcookie("bilgi","Kay�t Ba�ar�s�z!");
	}
	else
		setcookie("bilgi","Resim y�kleyiniz!");
				
		header ("Location:index.php?slider");
?>
<?php
		if(!empty($_POST["dosyaTanimi"]))
		{
			@include('inc/baglan.php');
			$sql="update dosyalar set dosyaTanim = '$_POST[dosyaTanimi]' where id=".$_GET["dosya"];
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Dosya g�ncellendi!");
				header ("Location:index.php?dosyaYukle");
			}
			else
			{
				setcookie("bildirim","Kay�t Ba�ar�s�z!");
				header ("Location:index.php?dosyaYukle");
			}
		}
		else
		{
			setcookie("bildirim","Dosyan�n tan�m�n� yaz�n�z!");
			header ("Location:index.php?dosya=$_GET[dosya]");
		}
?>
<?php
		if(!empty($_POST["dosyaTanimi"]))
		{
			@include('inc/baglan.php');
			$sql="update dosyalar set dosyaTanim = '$_POST[dosyaTanimi]' where id=".$_GET["dosya"];
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Dosya güncellendi!");
				header ("Location:index.php?dosyaYukle");
			}
			else
			{
				setcookie("bildirim","Kayit Basarisiz!");
				header ("Location:index.php?dosyaYukle");
			}
		}
		else
		{
			setcookie("bildirim","Dosyanin tanimini yaziniz!");
			header ("Location:index.php?dosya=$_GET[dosya]");
		}
?>
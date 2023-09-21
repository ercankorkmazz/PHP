<?php
		if(!empty($_POST["adSoyad"]))
		{
				$sql="update ogretmenler set kullanici = '$_POST[adSoyad]', gorev = '$_POST[gorev]', dersYuku = '$_POST[dersYuku]' where id=".$_GET["ogretmen"];
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Öðretmen bilgileri güncellendi.");
					header ("Location:index.php?ogretmenler");
				}
				else
				{
					setcookie("bildirim","Kayýt Baþarýsýz");
					header ("Location:index.php?ogretmen=".$_GET["ogretmen"]);
				}
		}
		else
		{
			setcookie("bildirim","Öðretmen adý ve soyadýný yazýnýz.");
			header ("Location:index.php?ogretmen=".$_GET["ogretmen"]);
		}
			
		
?>
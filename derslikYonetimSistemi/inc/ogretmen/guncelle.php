<?php
		if(!empty($_POST["adSoyad"]))
		{
				$sql="update ogretmenler set kullanici = '$_POST[adSoyad]', gorev = '$_POST[gorev]', dersYuku = '$_POST[dersYuku]' where id=".$_GET["ogretmen"];
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","��retmen bilgileri g�ncellendi.");
					header ("Location:index.php?ogretmenler");
				}
				else
				{
					setcookie("bildirim","Kay�t Ba�ar�s�z");
					header ("Location:index.php?ogretmen=".$_GET["ogretmen"]);
				}
		}
		else
		{
			setcookie("bildirim","��retmen ad� ve soyad�n� yaz�n�z.");
			header ("Location:index.php?ogretmen=".$_GET["ogretmen"]);
		}
			
		
?>
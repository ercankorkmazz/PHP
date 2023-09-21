<?php
		if(!empty($_POST["ders"]))
		{
				$bolum=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
				$sql="insert into dersler (bolumID,kodu,ders,ogretmen,oTuru) values ('$bolum','$_POST[kodu]','$_POST[ders]','$_POST[ogretmen]','$_POST[oTuru]')";
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Kayýt Baþarýlý");
					header ("Location:index.php?dersler");
				}
				else
				{
					setcookie("bildirim","Kayýt Baþarýsýz");
					header ("Location:index.php?yeniDers");
				}
		}
		else
		{
			setcookie("bildirim","Ders adýný yazýnýz.");
			header ("Location:index.php?yeniDers");
		}
			
		
?>
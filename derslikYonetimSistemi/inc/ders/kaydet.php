<?php
		if(!empty($_POST["ders"]))
		{
				$bolum=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
				$sql="insert into dersler (bolumID,kodu,ders,ogretmen,oTuru) values ('$bolum','$_POST[kodu]','$_POST[ders]','$_POST[ogretmen]','$_POST[oTuru]')";
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Kay�t Ba�ar�l�");
					header ("Location:index.php?dersler");
				}
				else
				{
					setcookie("bildirim","Kay�t Ba�ar�s�z");
					header ("Location:index.php?yeniDers");
				}
		}
		else
		{
			setcookie("bildirim","Ders ad�n� yaz�n�z.");
			header ("Location:index.php?yeniDers");
		}
			
		
?>
<?php
			if(!empty($_POST["birim"]))
			{
				$id=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"];
				$sql="insert into birimler (ogretmenID,birim) values ('$id','$_POST[birim]')";
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Kay�t Ba�ar�l�");
					header ("Location:index.php?birimler");
				}
				else
				{
					setcookie("bildirim","Kay�t Ba�ar�s�z");
					header ("Location:index.php?yeniBirim");
				}
			}
			else
			{
				setcookie("bildirim","Birim ad�n� yaz�n�z.");
				header ("Location:index.php?yeniBirim");
			}
		
?>
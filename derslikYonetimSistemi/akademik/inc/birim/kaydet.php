<?php
			if(!empty($_POST["birim"]))
			{
				$id=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"];
				$sql="insert into birimler (ogretmenID,birim) values ('$id','$_POST[birim]')";
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Kayýt Baþarýlý");
					header ("Location:index.php?birimler");
				}
				else
				{
					setcookie("bildirim","Kayýt Baþarýsýz");
					header ("Location:index.php?yeniBirim");
				}
			}
			else
			{
				setcookie("bildirim","Birim adýný yazýnýz.");
				header ("Location:index.php?yeniBirim");
			}
		
?>
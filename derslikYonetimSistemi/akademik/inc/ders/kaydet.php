<?php
	if(!empty($_POST["kodu"]))
	{
		if(!empty($_POST["ders"]))
		{
			if(!empty($_POST["birim"]))
			{
				$id=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"];
				$sql="insert into digerdersler (ogretmenID,kodu,ders,birim,oTuru) values ('$id','$_POST[kodu]','$_POST[ders]','$_POST[birim]','$_POST[oTuru]')";
				
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
				setcookie("bildirim","Verildiði birimi seçiniz.");
				header ("Location:index.php?yeniDers");
			}
		}
		else
		{
			setcookie("bildirim","Dersin adýný yazýnýz.");
			header ("Location:index.php?yeniDers");
		}
	}
	else
	{
		setcookie("bildirim","Ders kodunu yazýnýz.");
		header ("Location:index.php?yeniDers");
	}	
		
?>
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
				setcookie("bildirim","Verildi�i birimi se�iniz.");
				header ("Location:index.php?yeniDers");
			}
		}
		else
		{
			setcookie("bildirim","Dersin ad�n� yaz�n�z.");
			header ("Location:index.php?yeniDers");
		}
	}
	else
	{
		setcookie("bildirim","Ders kodunu yaz�n�z.");
		header ("Location:index.php?yeniDers");
	}	
		
?>
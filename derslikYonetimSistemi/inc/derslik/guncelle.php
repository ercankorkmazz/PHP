<?php
		if(!empty($_POST["derslikAdi"]))
		{
				$sql="update derslikler set turu = '$_POST[turu]',derslikAdi = '$_POST[derslikAdi]',kisi = '$_POST[kisi]',yeri = '$_POST[yeri]',ozellik = '$_POST[ozellik]' where id=".$_GET["derslikDuzenle"];
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Derslik g�ncellendi.");
					header ("Location:index.php?derslikler");
				}
				else
				{
					setcookie("bildirim","Kay�t Ba�ar�s�z");
					header ("Location:index.php?derslikDuzenle=".$_GET["derslikDuzenle"]);
				}
		}
		else
		{
			setcookie("bildirim","Derslik ad�n� yaz�n�z.");
			header ("Location:index.php?derslikDuzenle=".$_GET["derslikDuzenle"]);
		}
			
		
?>
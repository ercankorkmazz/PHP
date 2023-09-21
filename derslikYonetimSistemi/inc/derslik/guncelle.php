<?php
		if(!empty($_POST["derslikAdi"]))
		{
				$sql="update derslikler set turu = '$_POST[turu]',derslikAdi = '$_POST[derslikAdi]',kisi = '$_POST[kisi]',yeri = '$_POST[yeri]',ozellik = '$_POST[ozellik]' where id=".$_GET["derslikDuzenle"];
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Derslik güncellendi.");
					header ("Location:index.php?derslikler");
				}
				else
				{
					setcookie("bildirim","Kayýt Baþarýsýz");
					header ("Location:index.php?derslikDuzenle=".$_GET["derslikDuzenle"]);
				}
		}
		else
		{
			setcookie("bildirim","Derslik adýný yazýnýz.");
			header ("Location:index.php?derslikDuzenle=".$_GET["derslikDuzenle"]);
		}
			
		
?>
<?php
		if(!empty($_POST["derslikAdi"]))
		{
			$sql="insert into derslikler (turu,derslikAdi,kisi,yeri,ozellik) values ('$_POST[turu]','$_POST[derslikAdi]','$_POST[kisi]','$_POST[yeri]','$_POST[ozellik]')";
				
				if (@mysql_query($sql,$baglan))
				{
					@include('inc/baglan.php'); 
					$sql = mysql_query("select * from derslikler order by id desc limit 0,1");
					$alanlar=mysql_fetch_array($sql);
					
					for($k=1;$k<=14;$k++)
					{
						$sql="insert into derslikprogrami (derslikID,saat) values ('$alanlar[id]','$k')";
						@mysql_query($sql,$baglan);
					}
					
					setcookie("bildirim","Kayýt Baþarýlý");
					header ("Location:index.php?derslikler");
				}
				else
				{
					setcookie("bildirim","Kayýt Baþarýsýz");
					header ("Location:index.php?yeniDerslik");
				}
		}
		else
		{
			setcookie("bildirim","Derslik adýný yazýnýz.");
			header ("Location:index.php?yeniDerslik");
		}
			
		
?>
<?php
		if(!empty($_POST["ders"]))
		{
			//--------------- Ders Bilgilerini Çeker.
			$sql = mysql_query("select * from digerdersler where id=$_GET[ders]");
			$ders = mysql_fetch_array($sql);
			
			if($ders["oTuru"]==$_POST["oTuru"])
			{
				$sql="update digerdersler set kodu = '$_POST[kodu]',ders = '$_POST[ders]',birim = '$_POST[birim]' where id=".$_GET["ders"];
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Ders güncellendi.");
					header ("Location:index.php?dersler");
				}
				else
				{
					setcookie("bildirim","Kayýt Baþarýsýz");
					header ("Location:index.php?ders=".$_GET["ders"]);
				}
			}
			else
			{
				for($k=1;$k<=5;$k++)
				{
					$sorgu=mysql_query("select * from digerbirimler");
					while($alan=mysql_fetch_array($sorgu))
					{
						$dizi=explode("+",$alan["g$k"]);
						if($ders["id"]==$dizi[0])
						{
							$hucre=$dizi[0]."+".$_POST["oTuru"]."+".$dizi[2];
							$sql="update digerbirimler set g$k = '$hucre' where id=".$alan["id"];
							@mysql_query($sql,$baglan);
						}
					}
				}
				$sql="update digerdersler set kodu = '$_POST[kodu]',ders = '$_POST[ders]',birim = '$_POST[birim]',oTuru = '$_POST[oTuru]' where id=".$_GET["ders"];
					
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Ders güncellendi.");
					header ("Location:index.php?dersler");
				}
				else
				{
					setcookie("bildirim","Kayýt Baþarýsýz");
					header ("Location:index.php?ders=".$_GET["ders"]);
				}
			}
		}
		else
		{
			setcookie("bildirim","Ders adýný yazýnýz.");
			header ("Location:index.php?ders=".$_GET["ders"]);
		}
			
		
?>
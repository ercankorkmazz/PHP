<?php
		if(!empty($_POST["ders"]))
		{		
				//--------------- Ders Bilgilerini Çeker.
				$sql = mysql_query("select * from dersler where id=$_GET[ders]");
				$ders = mysql_fetch_array($sql);
				
				if($ders["oTuru"]==$_POST["oTuru"])
				{
					$sql="update dersler set kodu = '$_POST[kodu]',ders = '$_POST[ders]',ogretmen = '$_POST[ogretmen]' where id=".$_GET["ders"];
					
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
						$sorgu=mysql_query("select * from dersprogramlari");
						while($alan=mysql_fetch_array($sorgu))
						{
							$dizi=explode(".",$alan["g$k"]);
							if($ders["id"]==$dizi[1])
							{
								$hucre=$dizi[0].".".$dizi[1].".".$dizi[2].".".$_POST["oTuru"].".".$dizi[4];
								$sql="update dersprogramlari set g$k = '$hucre' where id=".$alan["id"];
								@mysql_query($sql,$baglan);
							}
						}
					}
					$sql="update dersler set kodu = '$_POST[kodu]',ders = '$_POST[ders]',ogretmen = '$_POST[ogretmen]',oTuru = '$_POST[oTuru]' where id=".$_GET["ders"];
					
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
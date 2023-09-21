<?php
		if(!empty($_POST["ad"]))
		{
				$sql="update bolumler set bolumadi = '$_POST[ad]' where id=".$_GET["bolum"];
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Bölüm adý güncellendi.");
					header ("Location:index.php?bolumler");
				}
				else
				{
					setcookie("bildirim","Kayýt Baþarýsýz");
					header ("Location:index.php?bolum=".$_GET["bolum"]);
				}
		}
		else
		{
			setcookie("bildirim","Bölüm adýný yazýnýz.");
			header ("Location:index.php?bolum=".$_GET["bolum"]);
		}
			
		
?>
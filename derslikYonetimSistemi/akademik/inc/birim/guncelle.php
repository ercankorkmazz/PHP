<?php
		if(!empty($_POST["birim"]))
		{
				$sql="update birimler set birim = '$_POST[birim]' where id=".$_GET["birim"];
					
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Birim güncellendi.");
					header ("Location:index.php?birimler");
				}
				else
				{
					setcookie("bildirim","Kayýt Baþarýsýz");
					header ("Location:index.php?birim=".$_GET["birim"]);
				}
		}
		else
		{
			setcookie("bildirim","Birim adýný yazýnýz.");
			header ("Location:index.php?birim=".$_GET["birim"]);
		}
			
		
?>
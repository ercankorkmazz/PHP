<?php
		if(!empty($_POST["birim"]))
		{
				$sql="update birimler set birim = '$_POST[birim]' where id=".$_GET["birim"];
					
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Birim g�ncellendi.");
					header ("Location:index.php?birimler");
				}
				else
				{
					setcookie("bildirim","Kay�t Ba�ar�s�z");
					header ("Location:index.php?birim=".$_GET["birim"]);
				}
		}
		else
		{
			setcookie("bildirim","Birim ad�n� yaz�n�z.");
			header ("Location:index.php?birim=".$_GET["birim"]);
		}
			
		
?>
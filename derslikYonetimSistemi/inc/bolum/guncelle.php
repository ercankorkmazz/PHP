<?php
		if(!empty($_POST["ad"]))
		{
				$sql="update bolumler set bolumadi = '$_POST[ad]' where id=".$_GET["bolum"];
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","B�l�m ad� g�ncellendi.");
					header ("Location:index.php?bolumler");
				}
				else
				{
					setcookie("bildirim","Kay�t Ba�ar�s�z");
					header ("Location:index.php?bolum=".$_GET["bolum"]);
				}
		}
		else
		{
			setcookie("bildirim","B�l�m ad�n� yaz�n�z.");
			header ("Location:index.php?bolum=".$_GET["bolum"]);
		}
			
		
?>
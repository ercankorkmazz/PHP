<?php
			@include('inc/baglan.php');
			
			$sql="update mezun set ilkogretim = '$_POST[ilkogretim]',ortaogretim = '$_POST[ortaogretim]',ylisans = '$_POST[yukseklisans]' where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];	
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Bilgiler G�ncellendi!");
				header ("Location:index.php?egitimBilgileri");
			}
			else
			{
				setcookie("bildirim","Kay�t Ba�ar�s�z!");
				header ("Location:index.php?egitimBilgileri");
			}
?>
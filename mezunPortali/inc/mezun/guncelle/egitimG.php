<?php
			@include('inc/baglan.php');
			
			$sql="update mezun set ilkogretim = '$_POST[ilkogretim]',ortaogretim = '$_POST[ortaogretim]',ylisans = '$_POST[yukseklisans]' where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];	
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Bilgiler Güncellendi!");
				header ("Location:index.php?egitimBilgileri");
			}
			else
			{
				setcookie("bildirim","Kayýt Baþarýsýz!");
				header ("Location:index.php?egitimBilgileri");
			}
?>
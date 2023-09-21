<?php
			@include('inc/baglan.php');
			
			$sql="update mezun set 
			calismaDurumu = '$_POST[calismaDurumu]',
			isYeriAdi = '$_POST[isYeriAdi]',
			departman = '$_POST[departman]',
			pozisyon = '$_POST[pozisyon]',
			diger = '$_POST[diger]'
			 where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];	
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Bilgiler Güncellendi!");
				header ("Location:index.php?guncelDurum");
			}
			else
			{
				setcookie("bildirim","Kayýt Baþarýsýz!");
				header ("Location:index.php?guncelDurum");
			}
?>
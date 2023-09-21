<?php
if((!empty($_POST["cepTel"])) and (!empty($_POST["ePostaK"])) and (!empty($_POST["adres"])))
		{
			@include('inc/baglan.php');
			
			$sql="update mezun set 
			adres = '$_POST[adres]',
			cepTel = '$_POST[cepTel]',
			isTel = '$_POST[isTel]',
			evTel = '$_POST[evTel]',
			fax = '$_POST[fax]',
			ePostaK = '$_POST[ePostaK]',
			ePostaI = '$_POST[ePostaI]'
			 where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];	
			
			if (@mysql_query($sql,$baglan))
			{				
				@include('inc/baglan.php');
				$sql="update kullanici set mail = '$_POST[ePostaK]' where id=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];	
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Bilgiler Güncellendi!");
					header ("Location:index.php?iletisimBilgileri");
				}
				else
				{
					setcookie("bildirim","Kayýt Baþarýsýz!");
					header ("Location:index.php?iletisimBilgileri");
				}
			}
			else
			{
				setcookie("bildirim","Kayýt Baþarýsýz!");
				header ("Location:index.php?iletisimBilgileri");
			}
		}
		else
		{
				setcookie("bildirim"," (*) ile belirtilen alanlarý doldurunuz!");
				header ("Location:index.php?iletisimBilgileri");
		}
?>
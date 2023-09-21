<?php
if((!empty($_POST["tcNo"])) and (!empty($_POST["okulNo"])) and (!empty($_POST["adSoyad"])) and (!empty($_POST["mezuniyetYili"])))
		{
			@include('inc/baglan.php');
			
			$sql="update mezun set 
			tcNo = '$_POST[tcNo]',
			okulNo = '$_POST[okulNo]',
			bolumNo = '$_POST[bolumNo]',
			adSoyad = '$_POST[adSoyad]',
			babaAdi = '$_POST[babaAdi]',
			anaAdi = '$_POST[anaAdi]',
			dogumTarihi = '$_POST[dogumTarihi]',
			dogumYeri = '$_POST[dogumYeri]',
			medeniHali = '$_POST[medeniHali]',
			kanGrubu = '$_POST[kanGrubu]',
			mezuniyetYili = '$_POST[mezuniyetYili]'
			 where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];	
			
			if (@mysql_query($sql,$baglan))
			{
				@include('inc/baglan.php');
				$sql="update kullanici set kullanici = '$_POST[adSoyad]' where id=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];	
				
				if (@mysql_query($sql,$baglan))
				{
					$_SESSION["$_SERVER[SERVER_NAME]mezunportalikullanici"]=$_POST["adSoyad"];
					setcookie("bildirim","Bilgiler Güncellendi!");
					header ("Location:index.php?kisiselBilgiler");
				}
				else
				{
					setcookie("bildirim","Kayýt Baþarýsýz!");
					header ("Location:index.php?kisiselBilgiler");
				}
			}
			else
			{
				setcookie("bildirim","Kayýt Baþarýsýz!");
				header ("Location:index.php?kisiselBilgiler");
			}
		}
		else
		{
				setcookie("bildirim"," (*) ile belirtilen alanlarý doldurunuz!");
				header ("Location:index.php?kisiselBilgiler");
		}
?>
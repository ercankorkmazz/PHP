<?php
		if(!empty($_POST["adSoyad"]))
		{
			if(!empty($_POST["gorev"]))
			{
				@include('inc/baglan.php');
				$sql="update arastirmagorevlileri set adSoyad = '$_POST[adSoyad]', unvan = '$_POST[gorev]', ePosta = '$_POST[ePosta]', tel = '$_POST[tel]', link = '$_POST[url]' where id=".$_GET["arastirmaGorevlisi"];
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Bilgiler güncellendi!");
					header ("Location:index.php?arastirmaGorevlileri");
				}
				else
				{
					setcookie("bildirim","Kayit Basarisiz!");
					header ("Location:index.php?arastirmaGorevlisi=$_GET[arastirmaGorevlisi]");
				}
			}
			else
			{
				setcookie("bildirim","&#8220;Ünvan&#8221; bilgisini yaziniz!");
				header ("Location:index.php?arastirmaGorevlisi=$_GET[arastirmaGorevlisi]");
			}
		}
		else
		{
			setcookie("bildirim","&#8220;Ad Soyad&#8221; bilgisini yaziniz!");
			header ("Location:index.php?arastirmaGorevlisi=$_GET[arastirmaGorevlisi]");
		}
?>
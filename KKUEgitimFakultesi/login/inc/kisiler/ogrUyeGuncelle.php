<?php
		if(!empty($_POST["adSoyad"]))
		{
			if(!empty($_POST["gorev"]))
			{
				@include('inc/baglan.php');
				$sql="update ogretimuyeleri set adSoyad = '$_POST[adSoyad]', gorev = '$_POST[gorev]', ePosta = '$_POST[ePosta]', tel = '$_POST[tel]', link = '$_POST[url]' where id=".$_GET["ogretimUyesi"];
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Bilgiler güncellendi!");
					header ("Location:index.php?ogretimUyeleri");
				}
				else
				{
					setcookie("bildirim","Kayit Basarisiz!");
					header ("Location:index.php?ogretimUyesi=$_GET[ogretimUyesi]");
				}
			}
			else
			{
				setcookie("bildirim","&#8220;Ünvan&#8221; bilgisini yaziniz!");
				header ("Location:index.php?ogretimUyesi=$_GET[ogretimUyesi]");
			}
		}
		else
		{
			setcookie("bildirim","&#8220;Ad Soyad&#8221; bilgisini yaziniz!");
			header ("Location:index.php?ogretimUyesi=$_GET[ogretimUyesi]");
		}
?>
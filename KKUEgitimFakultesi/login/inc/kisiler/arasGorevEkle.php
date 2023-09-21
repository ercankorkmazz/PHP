<?php
	if(!empty($_POST["adSoyad"]))
	{
		if(!empty($_POST["gorev"]))
		{
			@include('inc/baglan.php');
			$sql="insert into arastirmagorevlileri (adSoyad,unvan,ePosta,tel,url,link) values ('$_POST[adSoyad]','$_POST[gorev]','$_POST[ePosta]','$_POST[tel]','$_COOKIE[arastirmaGorevlisiFoto]','$_POST[url]')";
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Arastirma Görevlisi Kaydedildi!");
				setcookie("arastirmaGorevlisiFoto","");
			}
			else
				setcookie("bildirim","Kayit Basarisiz!");
		}
		else
			setcookie("bildirim","&#8220;Ünvan&#8221; bilgisini yaziniz!");
	}
	else
		setcookie("bildirim","&#8220;Ad Soyad&#8221; bilgisini yaziniz!");
				
		header ("Location:index.php?arastirmaGorevlileri");
?>
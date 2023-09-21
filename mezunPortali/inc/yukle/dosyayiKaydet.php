<?php
	if(!empty($_COOKIE["yukluDosya"]))
	{
		if(!empty($_POST["dosyaTanimi"]))
		{
			@include('inc/baglan.php');
			$sql="insert into dosyalar (dosyaURL,dosyaTanim) values ('$_POST[dosyaURL]','$_POST[dosyaTanimi]')";
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Dosya kaydedildi! <br/><br/>Dosyayý herhangi bir baðlantýda kullanmak icin (Dosyaya ait URL) yi kullanýnýz.");
				setcookie("yukluDosya","");
			}
			else
				setcookie("bildirim","Kayýt Baþarýsýz!");
		}
		else
			setcookie("bildirim","Dosyanýn tanýmýný yazýnýz!");
	}
	else
		setcookie("bildirim","Dosya yükleyiniz!");
				
		header ("Location:index.php?dosyaYukle");
?>
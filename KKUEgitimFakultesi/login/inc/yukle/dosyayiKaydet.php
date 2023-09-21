<?php
	if(!empty($_COOKIE["yukluDosya"]))
	{
		if(!empty($_POST["dosyaTanimi"]))
		{
			@include('inc/baglan.php');
			$sql="insert into dosyalar (dosyaURL,dosyaTanim) values ('$_POST[dosyaURL]','$_POST[dosyaTanimi]')";
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Dosya kaydedildi! <br/><br/>Dosyayi herhangi bir baglantida kullanmak icin (Dosyaya ait URL) yi kullaniniz.");
				setcookie("yukluDosya","");
			}
			else
				setcookie("bildirim","Kayit Basarisiz!");
		}
		else
			setcookie("bildirim","Dosyanin tanimini yaziniz!");
	}
	else
		setcookie("bildirim","Dosya yükleyiniz!");
				
		header ("Location:index.php?dosyaYukle");
?>
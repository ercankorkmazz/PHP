<?php
	if(!empty($_COOKIE["yukluDosya"]))
	{
		if(!empty($_POST["dosyaTanimi"]))
		{
			@include('inc/baglan.php');
			$sql="insert into dosyalar (dosyaURL,dosyaTanim) values ('$_POST[dosyaURL]','$_POST[dosyaTanimi]')";
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Dosya kaydedildi! <br/><br/>Dosyay� herhangi bir ba�lant�da kullanmak icin (Dosyaya ait URL) yi kullan�n�z.");
				setcookie("yukluDosya","");
			}
			else
				setcookie("bildirim","Kay�t Ba�ar�s�z!");
		}
		else
			setcookie("bildirim","Dosyan�n tan�m�n� yaz�n�z!");
	}
	else
		setcookie("bildirim","Dosya y�kleyiniz!");
				
		header ("Location:index.php?dosyaYukle");
?>
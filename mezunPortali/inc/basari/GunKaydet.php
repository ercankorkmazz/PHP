<?php
	if(!empty($_POST["mezun"]))
	{
		if(!empty($_POST["baslik"]))
		{
			@include('inc/baglan.php');
			
			if($_POST["onay"]=="on")
				$onay=1;
			else
				$onay=0;
		
			$sql="update basarilar set mezun = '$_POST[mezun]',baslik = '$_POST[baslik]',icerik = '$_POST[icerik]',onay = '$onay' where id=".$_GET["basariYonet"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Ba�ar� Bilgileri g�ncellendi!");
			else
				setcookie("bildirim","Kay�t Ba�ar�s�z!");
				
			header ("Location:index.php?basarilarYonet");
		}
		else
		{
			setcookie("bildirim","Ba�ari hakk�nda k�sa bilgi yaz�n�z!");
			header ("Location:index.php?basariYonet=".$_GET["basariYonet"]);
		}
	}
	else
	{
		setcookie("bildirim","Mezunun Ad�n� Soyad�n� yaz�n�z!");
		header ("Location:index.php?basariYonet=".$_GET["basariYonet"]);
	}
?>
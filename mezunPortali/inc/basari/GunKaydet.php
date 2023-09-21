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
				setcookie("bildirim","Baþarý Bilgileri güncellendi!");
			else
				setcookie("bildirim","Kayýt Baþarýsýz!");
				
			header ("Location:index.php?basarilarYonet");
		}
		else
		{
			setcookie("bildirim","Baþari hakkýnda kýsa bilgi yazýnýz!");
			header ("Location:index.php?basariYonet=".$_GET["basariYonet"]);
		}
	}
	else
	{
		setcookie("bildirim","Mezunun Adýný Soyadýný yazýnýz!");
		header ("Location:index.php?basariYonet=".$_GET["basariYonet"]);
	}
?>
<?php
	if($_SESSION["$_SERVER[SERVER_NAME]kadi"]=="admin")
	{
		if((!empty($_POST["yeniKullanici"])) && (!empty($_POST["yeniSifre"])))
		{
			@include('inc/baglan.php');
			$sql="insert into kullanici (kadi,sifre) values ('$_POST[yeniKullanici]','$_POST[yeniSifre]')";
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Kullanici Eklendi!");
			else
				setcookie("bildirim","Kayit Basarisiz!");
		}
		else
			setcookie("bildirim","Kullanici Adi ya da Sifre bos birakilamaz!");
	}
	else
		setcookie("bildirim","Bu islemi yapmaya yetkiniz yok!");
		
	header ("Location:index.php?kullanici");
?>
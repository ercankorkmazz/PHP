<?php
		if(!empty($_POST["eposta"]))
		{
			@include('inc/baglan.php');
			$sql="update kullanicilar set eposta = '$_POST[eposta]' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
				
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bilgi","E-Posta adresi güncellendi!");
			}
			else
			{
				setcookie("bilgi","Kayýt Baþarýsýz!");
			}
		}
		else
			setcookie("bilgi","E-Posta adresi boþ býrakýlamaz!");
			
	header ("Location:index.php?ayarlar");
?>
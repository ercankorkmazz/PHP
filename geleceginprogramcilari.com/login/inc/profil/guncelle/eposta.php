<?php
		if(!empty($_POST["eposta"]))
		{
			@include('inc/baglan.php');
			$sql="update kullanicilar set eposta = '$_POST[eposta]' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
				
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bilgi","E-Posta adresi g�ncellendi!");
			}
			else
			{
				setcookie("bilgi","Kay�t Ba�ar�s�z!");
			}
		}
		else
			setcookie("bilgi","E-Posta adresi bo� b�rak�lamaz!");
			
	header ("Location:index.php?ayarlar");
?>
<?php
		if(!empty($_POST["eposta"]) && !empty($_POST["gmailSifresi"]))
		{
			@include('inc/baglan.php');
			$sql="update kullanici set eposta = '$_POST[eposta]', gmailSifresi = '$_POST[gmailSifresi]' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
				
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","GMail bilgileriniz g�ncellendi!");
			}
			else
			{
				setcookie("bildirim","Kay�t Ba�ar�s�z!");
			}
		}
		else
			setcookie("bildirim","GMail bilgileri bo� b�rak�lamaz!");
			
	header ("Location:index.php?ayarlar");
?>
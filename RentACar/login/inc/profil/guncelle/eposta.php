<?php
		if(!empty($_POST["eposta"]) && !empty($_POST["gmailSifresi"]))
		{
			@include('inc/baglan.php');
			$sql="update kullanici set eposta = '$_POST[eposta]', gmailSifresi = '$_POST[gmailSifresi]' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
				
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","GMail bilgileriniz güncellendi!");
			}
			else
			{
				setcookie("bildirim","Kayýt Baþarýsýz!");
			}
		}
		else
			setcookie("bildirim","GMail bilgileri boþ býrakýlamaz!");
			
	header ("Location:index.php?ayarlar");
?>
<?php
		if(!empty($_POST["eposta"]))
		{
			@include('login/inc/baglan.php');
			$sql="update uyelik set email = '$_POST[eposta]' where id=".$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"];
				
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bilgi","E-Posta adresi güncellendi!");
				setcookie("renk","#3C0");
			}
			else
			{
				setcookie("bilgi","Kayýt Baþarýsýz!");
			}
		}
		else
			setcookie("bilgi","E-Posta adresi boþ býrakýlamaz!");
			
	header ("Location:index.php?profil");
?>
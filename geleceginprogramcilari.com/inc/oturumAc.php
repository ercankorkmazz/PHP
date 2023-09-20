<?php
	include("login/inc/baglan.php");
	$sql=@mysql_query("select * from uyelik");
	$kontrol=0;
	while($alanlar=mysql_fetch_array($sql))
	{
		if($_POST["kadi"]==$alanlar["kadi"] && $_POST["sifre"]==$alanlar["sifre"]) 
		{
			$_SESSION["$_SERVER[SERVER_NAME]uyeOturum"]=$alanlar["adSoyad"];
			$_SESSION["$_SERVER[SERVER_NAME]uyeOturumKadi"]=$alanlar["kadi"];
			$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"]=$alanlar["id"];
			
			setcookie("bilgi","");
			$kontrol=1;
		}
	}
	if($kontrol==0)
	{
		setcookie("bilgi","Kullanıcı adı ya da şifre hatalı! <a href='index.php?sifreYenile' style='float:right;color:#fff;'>&#8220;Şifrenizi mi unuttunuz?&#8221;</a>");
	}
	
	header("Location:index.php");
?>
<?php
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from kullanicilar where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"]);
		$alanlar=mysql_fetch_array($sorgu);
	
		if($alanlar["sifre"]==$_POST["mSifre"])
		{
			if(!empty($_POST["ySifre"]))
			{
				if($_POST["ySifre"]==$_POST["tSifre"])
				{
					@include('inc/baglan.php');
					$sql="update kullanicilar set sifre = '$_POST[ySifre]' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
					
					if (@mysql_query($sql,$baglan))
					{
						setcookie("bilgi","�ifre g�ncellendi.");
					}
					else
						setcookie("bilgi","Kay�t Ba�ar�s�z!");
				}
				else
					setcookie("bilgi","Yeni �ifre ile tekrar� uyu�muyor!");
			}
			else
				setcookie("bilgi","[ Yeni �ifre ] bo� b�rak�lamaz!");
		}
		else
			setcookie("bilgi","[ Mevcut �ifre ] hatal�!");
			
		header ("Location:index.php?ayarlar");
?>
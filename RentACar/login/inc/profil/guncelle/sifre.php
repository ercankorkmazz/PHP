<?php
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from kullanici where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"]);
		$alanlar=mysql_fetch_array($sorgu);
	
		if($alanlar["sifre"]==$_POST["mSifre"])
		{
			if(!empty($_POST["ySifre"]))
			{
				if($_POST["ySifre"]==$_POST["tSifre"])
				{
					@include('inc/baglan.php');
					$sql="update kullanici set sifre = '$_POST[ySifre]' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
					
					if (@mysql_query($sql,$baglan))
					{
						setcookie("bildirim","�ifre g�ncellendi.");
					}
					else
						setcookie("bildirim","Kay�t Ba�ar�s�z!");
				}
				else
					setcookie("bildirim","Yeni �ifre ile tekrar� uyu�muyor!");
			}
			else
				setcookie("bildirim","[ Yeni �ifre ] bo� b�rak�lamaz!");
		}
		else
			setcookie("bildirim","[ Mevcut �ifre ] hatal�!");
			
		header ("Location:index.php?ayarlar");
?>
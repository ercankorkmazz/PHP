<?php
		@include('login/inc/baglan.php'); 
		$sorgu=mysql_query("select * from uyelik where id=".$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"]);
		$alanlar=mysql_fetch_array($sorgu);
	
		if($alanlar["sifre"]==$_POST["mSifre"])
		{
			if(!empty($_POST["ySifre"]))
			{
				if($_POST["ySifre"]==$_POST["tSifre"])
				{
					@include('inc/baglan.php');
					$sql="update uyelik set sifre = '$_POST[ySifre]' where id=".$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"];
					
					if (@mysql_query($sql,$baglan))
					{
						setcookie("bilgi","�ifre g�ncellendi.");
						setcookie("renk","#3C0");
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
			
		header ("Location:index.php?profil");
?>
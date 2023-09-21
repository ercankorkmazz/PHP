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
						setcookie("bildirim","Sifre güncellendi!");
						header ("Location:index.php?kullanici");
					}
					else
					{
						setcookie("bildirim","Kayit Basarisiz!");
						header ("Location:index.php?kullanici");
					}
				}
				else
				{
					setcookie("bildirim","Yeni sifre ile tekrari uyusmuyor!");
					header ("Location:index.php?kullanici");
				}
			}
			else
			{
				setcookie("bildirim","Yeni Sifre Bos Birakilamaz!");
				header ("Location:index.php?kullanici");
			}
		}
		else
		{
			setcookie("bildirim","Mevcut Sifre Hatali!");
			header ("Location:index.php?kullanici");
		}
?>
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
						setcookie("bilgi","Þifre güncellendi.");
					}
					else
						setcookie("bilgi","Kayýt Baþarýsýz!");
				}
				else
					setcookie("bilgi","Yeni þifre ile tekrarý uyuþmuyor!");
			}
			else
				setcookie("bilgi","[ Yeni Þifre ] boþ býrakýlamaz!");
		}
		else
			setcookie("bilgi","[ Mevcut Þifre ] hatalý!");
			
		header ("Location:index.php?ayarlar");
?>
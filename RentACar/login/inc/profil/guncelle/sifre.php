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
						setcookie("bildirim","Þifre güncellendi.");
					}
					else
						setcookie("bildirim","Kayýt Baþarýsýz!");
				}
				else
					setcookie("bildirim","Yeni þifre ile tekrarý uyuþmuyor!");
			}
			else
				setcookie("bildirim","[ Yeni Þifre ] boþ býrakýlamaz!");
		}
		else
			setcookie("bildirim","[ Mevcut Þifre ] hatalý!");
			
		header ("Location:index.php?ayarlar");
?>
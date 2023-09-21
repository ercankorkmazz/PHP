<?php
		if($_POST["konu"]!="Konu")
		{
			$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
			
			if(empty($bolumID))
				$bolumID=1;
				
			$sql="insert into mesajkutusu (kimden,kime,konu) values ('$bolumID','$_POST[kime]','$_POST[konu]')";
			if (@mysql_query($sql,$baglan))
			{
				@include('inc/baglan.php'); 
				$sql=mysql_query("select * from mesajkutusu order by id desc limit 0,1");
				$alan=mysql_fetch_array($sql);	
				header ("Location:index.php?mesaj=$alan[id]&#mesaj");
			}
			else
			{
				setcookie("bildirim","Kayýt Baþarýsýz");
				header ("Location:index.php?mesajlar");
			}
		}
		else
		{
			setcookie("bildirim","Konu yazýnýz.");
			header ("Location:index.php?mesajlar");
		}
?>
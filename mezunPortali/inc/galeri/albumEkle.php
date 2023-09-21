<?php
		if($_POST["albumAdi"]!="")
		{
			@include('inc/baglan.php'); 
			$sql = mysql_query("select * from albumler order by id desc limit 0,1");
			$alanlar=mysql_fetch_array($sql);
			if($alanlar["id"]>=1)
				$id=$alanlar["id"]+1;
			else
				$id=1;
				
			$sql="insert into albumler (id,albumAdi) values ('$id','$_POST[albumAdi]')";
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Albüm kaydedildi!");
			}
			else
				setcookie("bildirim","Kayýt Baþarýsýz!");
		}
		else
			setcookie("bildirim","Albüm adýný yazýnýz!");
			
		header ("Location:index.php?galeriYonet");
?>
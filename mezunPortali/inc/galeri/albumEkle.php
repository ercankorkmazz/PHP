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
				setcookie("bildirim","Alb�m kaydedildi!");
			}
			else
				setcookie("bildirim","Kay�t Ba�ar�s�z!");
		}
		else
			setcookie("bildirim","Alb�m ad�n� yaz�n�z!");
			
		header ("Location:index.php?galeriYonet");
?>
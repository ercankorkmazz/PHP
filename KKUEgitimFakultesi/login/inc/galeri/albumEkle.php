<?php
		if($_POST["albumAdi"]!="Alb�m ad�n� yaz�n�z.")
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
				setcookie("bildirim","Kayit Basarisiz!");
		}
		else
			setcookie("bildirim","Alb�m adini yaziniz!");
			
		header ("Location:index.php?galeri");
?>
<?php
			@include('inc/baglan.php');
			$sql="update duyurular set duyuru = '$_POST[duyuru]',url = '$_POST[url]' where id=".$_GET["duyuruOGR"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Duyuru g�ncellendi!");
			else
				setcookie("bildirim","Kay�t Ba�ar�s�z!");
				
			header ("Location:index.php?duyurularOGR");
?>
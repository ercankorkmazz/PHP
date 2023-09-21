<?php
			@include('inc/baglan.php');
			$sql="update duyurular set duyuru = '$_POST[duyuru]',url = '$_POST[url]' where id=".$_GET["duyuruOGR"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Duyuru güncellendi!");
			else
				setcookie("bildirim","Kayýt Baþarýsýz!");
				
			header ("Location:index.php?duyurularOGR");
?>
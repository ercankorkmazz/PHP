<?php
			@include('inc/baglan.php');
			$sql="update duyurular set duyuru = '$_POST[duyuru]',url = '$_POST[url]' where id=".$_GET["duyuruYonet"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Duyuru güncellendi!");
			else
				setcookie("bildirim","Kayit Basarisiz!");
				
			header ("Location:index.php?duyurularYonet");
?>
<?php
			@include('inc/baglan.php');
			
			$sql="update iletisim set iletisimBilgi = '$_POST[iletisimBilgi]', url = '$_POST[url]' where id='1'";	
			
			if (@mysql_query($sql,$baglan)){
				setcookie("bildirim","Iletisim Bilgileri gŁncellendi!");
			}
			else{
				setcookie("bildirim","Kayit Basarisiz!");
			}
			
			header ("Location:index.php?iletisim");
?>
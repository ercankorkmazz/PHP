<?php
			@include('inc/baglan.php');
			
			$sql="update iletisim set iletisimBilgi = '$_POST[iletisimBilgi]', url = '$_POST[url]' where id='1'";	
			
			if (@mysql_query($sql,$baglan)){
				setcookie("bildirim","Ýletiþim Bilgileri güncellendi!");
			}
			else{
				setcookie("bildirim","Kayit Basarisiz!");
			}
			
			header ("Location:index.php?iletisimYonet");
?>
<?php
			@include('inc/baglan.php');
			$sql="update tasarim set bolum = '$_POST[bolum]' where id='1'";	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Bölüm adi güncellendi!");
			else
				setcookie("bildirim","Kayit Basarisiz!");
				
			header ("Location:index.php?tasarim");
?>
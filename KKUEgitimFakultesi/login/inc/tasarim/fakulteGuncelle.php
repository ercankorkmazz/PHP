<?php
			@include('inc/baglan.php');
			$sql="update tasarim set fakulte = '$_POST[fakulte]' where id='1'";	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Fak�lte adi g�ncellendi!");
			else
				setcookie("bildirim","Kayit Basarisiz!");
				
			header ("Location:index.php?tasarim");
?>
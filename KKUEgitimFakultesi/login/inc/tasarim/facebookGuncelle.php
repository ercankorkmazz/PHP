<?php
			@include('inc/baglan.php');
			$sql="update tasarim set facebook = '$_POST[facebookURL]' where id='1'";	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Facebook adresi gŁncellendi!");
			else
				setcookie("bildirim","Kayit Basarisiz!");
				
			header ("Location:index.php?tasarim");
?>
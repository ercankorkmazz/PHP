<?php
			@include('inc/baglan.php');
			$sql="update tasarim set alt = '$_POST[altBilgi]' where id='1'";	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Alt bilgi güncellendi!");
			else
				setcookie("bildirim","Kayit Basarisiz!");
				
			header ("Location:index.php?tasarim");
?>
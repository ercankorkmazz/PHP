<?php
			@include('inc/baglan.php');
			$sql="update tasarim set twitter = '$_POST[twitterURL]' where id='1'";	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Twitter adresi gŁncellendi!");
			else
				setcookie("bildirim","Kayit Basarisiz!");
				
			header ("Location:index.php?tasarim");
?>
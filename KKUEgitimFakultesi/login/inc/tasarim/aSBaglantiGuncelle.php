<?php
			@include('inc/baglan.php');
			$sql="update tasarim set aSBaslik = '$_POST[aSBaslik]', aSLink = '$_POST[aSLink]' where id='1'";	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Anasayfa baglanti bilgileri güncellendi!");
			else
				setcookie("bildirim","Kayit Basarisiz!");
				
			header ("Location:index.php?tasarim");
?>
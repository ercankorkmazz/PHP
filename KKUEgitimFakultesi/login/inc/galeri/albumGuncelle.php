<?php
			@include('inc/baglan.php');
			$sql="update albumler set albumAdi = '$_POST[albumAdi]' where id=".$_GET["album"];	
			
			if (@mysql_query($sql,$baglan)){
				setcookie("bildirim","Albüm adi güncellendi!");
			}
			else{
				setcookie("bildirim","Kayit Basarisiz!");
			}
			
			header ("Location:index.php?album=$_GET[album]");
?>
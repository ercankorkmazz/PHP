<?php
			@include('inc/baglan.php');
			$icerik=nl2br($_POST["icerik"]);
			$sql="update karsilamaalani set baslik = '$_POST[baslik]', icerik = '$icerik' where id='1'";	
			
			if (@mysql_query($sql,$baglan)){
				setcookie("bildirim","Karsilama alani güncellendi!");
			}
			else{
				setcookie("bildirim","Kayit Basarisiz!");
			}
			
			header ("Location:index.php?karsilamaAlani");
?>
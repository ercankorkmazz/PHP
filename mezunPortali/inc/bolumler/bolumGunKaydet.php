<?php
			@include('inc/baglan.php');
			$sql="update bolumler set bolumAdi = '$_POST[bolumAdi]' where id=".$_GET["bolum"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Bölüm / Anabilim Dalý Güncellendi!");
			else
				setcookie("bildirim","Kayýt Baþarýsýz!");
				
			header ("Location:index.php?bolumler");
?>
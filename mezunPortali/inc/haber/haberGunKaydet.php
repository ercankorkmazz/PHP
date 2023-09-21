<?php
			@include('inc/baglan.php');
			$sql="update haberler set baslik = '$_POST[baslik]',icerik = '$_POST[icerik]' where id=".$_GET["haber"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Haber güncellendi!");
			else
				setcookie("bildirim","Kayýt Baþarýsýz!");
				
			header ("Location:index.php?haberler");
?>
<?php
			@include('inc/baglan.php');
			$sql="update haberler set baslik = '$_POST[baslik]',icerik = '$_POST[icerik]' where id=".$_GET["haber"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Haber g�ncellendi!");
			else
				setcookie("bildirim","Kay�t Ba�ar�s�z!");
				
			header ("Location:index.php?haberler");
?>
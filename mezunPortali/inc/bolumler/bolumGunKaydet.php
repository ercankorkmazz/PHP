<?php
			@include('inc/baglan.php');
			$sql="update bolumler set bolumAdi = '$_POST[bolumAdi]' where id=".$_GET["bolum"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","B�l�m / Anabilim Dal� G�ncellendi!");
			else
				setcookie("bildirim","Kay�t Ba�ar�s�z!");
				
			header ("Location:index.php?bolumler");
?>
<?php
			@include('inc/baglan.php');
			$tarih=$_POST["Sa"].".".$_POST["Dk"].".".$_POST["Gun"].".".$_POST["Ay"].".".$_POST["Yil"];
			$sql="update etkinlikler set baslik = '$_POST[etkinlikBaslik]',tarih = '$tarih',icerik = '$_POST[icerik]' where id=".$_GET["etkinlikYonet"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Etkinlik g�ncellendi!");
			else
				setcookie("bildirim","Kay�t Ba�ar�s�z!");
				
			header ("Location:index.php?etkinliklerYonet");
?>
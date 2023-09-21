<?php
			@include('inc/baglan.php');
			$tarih=$_POST["Sa"].".".$_POST["Dk"].".".$_POST["Gun"].".".$_POST["Ay"].".".$_POST["Yil"];
			$sql="update etkinlikler set baslik = '$_POST[etkinlikBaslik]',tarih = '$tarih',icerik = '$_POST[icerik]' where id=".$_GET["etkinlikOGR"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Etkinlik güncellendi!");
			else
				setcookie("bildirim","Kayýt Baþarýsýz!");
				
			header ("Location:index.php?etkinliklerOGR");
?>
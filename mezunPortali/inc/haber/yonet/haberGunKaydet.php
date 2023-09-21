<?php
			@include('inc/baglan.php');
			
			if($_POST["onay"]=="on")
				$onay=1;
			else
				$onay=0;
		
			$sql="update haberler set baslik = '$_POST[baslik]',icerik = '$_POST[icerik]',onay = '$onay' where id=".$_GET["haberYonet"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Haber güncellendi!");
			else
				setcookie("bildirim","Kayýt Baþarýsýz!");
				
			header ("Location:index.php?haberlerYonet");
?>
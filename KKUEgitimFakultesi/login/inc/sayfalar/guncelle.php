<?php
		if(!empty($_POST["baslik"]))
		{
			@include('inc/baglan.php');
			
			if($_POST['onay']=="on")
				$onay=1;
			else
				$onay=0;
				
			$sql="update sayfalar set onay = '$onay',url = '$_POST[url]',baslik = '$_POST[baslik]',icerik = '$_POST[icerik]' where id=".$_GET["sayfa"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Sayfa Guncellendi");
			else
				setcookie("bildirim","Islem Basarisiz");
			
			header ("Location:index.php?sayfalar");
		}
		else
		{
			setcookie("bildirim","Sayfa Adini Yaziniz");
			header ("Location:index.php?sayfa=$_GET[sayfa]");
		}
?>
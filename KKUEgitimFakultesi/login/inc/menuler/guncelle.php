<?php
		if(!empty($_POST["baslik"]))
		{
			@include('inc/baglan.php');
			
			if($_POST['onay']=="on")
				$onay=1;
			else
				$onay=0;
				
			$sql="update altmenuler set onay = '$onay',url = '$_POST[url]',baslik = '$_POST[baslik]',icerik = '$_POST[icerik]' where id=".$_GET["altmenu"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Alt Menu Guncellendi");
			else
				setcookie("bildirim","Islem Basarisiz");
			
			header ("Location:index.php?altmenuler=$_GET[menuID]");
		}
		else
		{
			setcookie("bildirim","Sayfa Adini Yaziniz");
			header ("Location:index.php?sayfa=$_GET[sayfa]");
		}
?>
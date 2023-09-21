<?php
		if(!empty($_POST["baslik"]))
		{
			@include('inc/baglan.php');
			
			if($_POST['onay']=="on")
				$onay=1;
			else
				$onay=0;
						
			$sql="insert into altmenuler (menu,onay,url,baslik,icerik) values ('$_GET[yeniAltmenu]','$onay','$_POST[url]','$_POST[baslik]','$_POST[icerik]')";
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Kayit Basarili");
				header ("Location:index.php?altmenuler=$_GET[yeniAltmenu]");
			}
			else
			{
				setcookie("bildirim","Kayit Basarisiz");
				header ("Location:index.php?yeniAltmenu=$_GET[yeniAltmenu]");
			}
		}
		else
		{
			setcookie("bildirim","Alt Menu Adini Yaziniz");
			header ("Location:index.php?yeniAltmenu=$_GET[yeniAltmenu]");
		}
			
		
?>
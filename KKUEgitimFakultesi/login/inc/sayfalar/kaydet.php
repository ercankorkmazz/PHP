<?php
		if(!empty($_POST["baslik"]))
		{
			@include('inc/baglan.php');
			
			if($_POST['onay']=="on")
				$onay=1;
			else
				$onay=0;
						
			$sql="insert into sayfalar (onay,url,baslik,icerik) values ('$onay','$_POST[url]','$_POST[baslik]','$_POST[icerik]')";
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Kayit Basarili");
				header ("Location:index.php?sayfalar");
			}
			else
			{
				setcookie("bildirim","Kayit Basarisiz");
				header ("Location:index.php?yeniSayfa");
			}
		}
		else
		{
			setcookie("bildirim","Sayfa Adini Yaziniz");
			header ("Location:index.php?yeniSayfa");
		}
			
		
?>
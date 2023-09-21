<?php
		if(!empty($_POST["baslik"]))
		{
			@include('inc/baglan.php');
						
			$sql="insert into menuler (menu) values ('$_POST[baslik]')";
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Kayit Basarili");
				header ("Location:index.php?menuler");
			}
			else
			{
				setcookie("bildirim","Kayit Basarisiz");
				header ("Location:index.php?yeniMenu");
			}
		}
		else
		{
			setcookie("bildirim","Menu Adini Yaziniz");
			header ("Location:index.php?yeniMenu");
		}
			
		
?>
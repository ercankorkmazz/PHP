<?php
		if(!empty($_POST["baslik"]))
		{
			@include('inc/baglan.php');
				
			$sql="update menuler set menu = '$_POST[baslik]' where id=".$_GET["menu"];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Menu Guncellendi");
			else
				setcookie("bildirim","Islem Basarisiz");
			
			header ("Location:index.php?menuler");
		}
		else
		{
			setcookie("bildirim","Menu Adini Yaziniz");
			header ("Location:index.php?menu=$_GET[menu]");
		}
?>
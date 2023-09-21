<?php
		$url="img/basari/".$_COOKIE["basariFoto"];
		if(unlink("$url"))
		{
			setcookie("basariFoto","");
			setcookie("bildirim","Resim Silindi!");
		}
		else
		{
			setcookie("basariFoto","");
			setcookie("bildirim","Resim Silinemedi!");
		}
		
		header ("Location:index.php?basarilarYonet");
?>
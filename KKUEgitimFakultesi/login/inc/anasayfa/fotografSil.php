<?php
		$url="../img/slider/".$_COOKIE["etkinlikFoto"];
		if(unlink("$url"))
		{
			setcookie("bildirim","Resim Silindi!");
			setcookie("etkinlikFoto","");
		}
		else
		{
			setcookie("bildirim","Resim Silinemedi!");
			setcookie("etkinlikFoto","");
		}
		header ("Location:index.php?slider");
?>
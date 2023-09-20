<?php
		$url="../img/slider/".$_COOKIE["etkinlikFoto"];
		if(unlink("$url"))
		{
			setcookie("bilgi","Resim Silindi!");
			setcookie("etkinlikFoto","");
		}
		else
		{
			setcookie("bilgi","Resim Silinemedi!");
			setcookie("etkinlikFoto","");
		}
		header ("Location:index.php?slider");
?>
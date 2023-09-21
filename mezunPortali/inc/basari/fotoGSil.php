<?php
		@include('inc/baglan.php');
		$sorgu=mysql_query("select * from basarilar where id=".$_GET["basariYonet"]);
		$alanlar=mysql_fetch_array($sorgu);
		
		$url="img/basari/".$alanlar['url'];
		if(unlink("$url"))
		{
			$sql="update basarilar set url = '' where id=".$alanlar['id'];	
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Resim Silindi!");
			else
				setcookie("bildirim","Ýþlem Baþarýsýz!");
		}
		else
		{
			setcookie("bildirim","Resim Silinemedi!");
		}
		header ("Location:index.php?basariYonet=".$_GET["basariYonet"]);
?>
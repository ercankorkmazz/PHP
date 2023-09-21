<?php
	if(isset($_GET["arastirmaGorevlisi"]) and isset($_POST["fotoSil"]))
	{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from arastirmagorevlileri where id=".$_GET["arastirmaGorevlisi"]);
		$alanlar=mysql_fetch_array($sorgu);	
		
		$url="../img/kisiler/".$alanlar["url"];
		if(unlink("$url"))
		{
			@include('inc/baglan.php');
			$sql="update arastirmagorevlileri set url = '' where id=".$_GET["arastirmaGorevlisi"];
				
			if (@mysql_query($sql,$baglan))	
				setcookie("bildirim","Fotograf Silindi!");
			else
				setcookie("bildirim","Fotograf Silinemedi!");
		}
		else
		{
			setcookie("bildirim","Fotograf Silinemedi!");
		}
		header ("Location:index.php?arastirmaGorevlisi=$alanlar[id]");
	}
	else
	{
		$url="../img/kisiler/".$_COOKIE["arastirmaGorevlisiFoto"];
		if(unlink("$url"))
		{
			setcookie("bildirim","Fotograf Silindi!");
			setcookie("arastirmaGorevlisiFoto","");
		}
		else
		{
			setcookie("bildirim","Fotograf Silinemedi!");
			setcookie("arastirmaGorevlisiFoto","");
		}
		header ("Location:index.php?arastirmaGorevlileri");
	}
?>
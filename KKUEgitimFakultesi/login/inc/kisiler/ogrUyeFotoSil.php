<?php
	if(isset($_GET["ogretimUyesi"]) and isset($_POST["fotoSil"]))
	{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from ogretimuyeleri where id=".$_GET["ogretimUyesi"]);
		$alanlar=mysql_fetch_array($sorgu);	
		
		$url="../img/kisiler/".$alanlar["url"];
		if(unlink("$url"))
		{
			@include('inc/baglan.php');
			$sql="update ogretimuyeleri set url = '' where id=".$_GET["ogretimUyesi"];
				
			if (@mysql_query($sql,$baglan))	
				setcookie("bildirim","Fotograf Silindi!");
			else
				setcookie("bildirim","Fotograf Silinemedi!");
		}
		else
		{
			setcookie("bildirim","Fotograf Silinemedi!");
		}
		header ("Location:index.php?ogretimUyesi=$alanlar[id]");
	}
	else
	{
		$url="../img/kisiler/".$_COOKIE["ogretimUyesiFoto"];
		if(unlink("$url"))
		{
			setcookie("bildirim","Fotograf Silindi!");
			setcookie("ogretimUyesiFoto","");
		}
		else
		{
			setcookie("bildirim","Fotograf Silinemedi!");
			setcookie("ogretimUyesiFoto","");
		}
		header ("Location:index.php?ogretimUyeleri");
	}
?>
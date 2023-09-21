<?php
	if(isset($_GET["dosyaYukle"]) and isset($_POST["dosyaSil"]))
	{
		$url="dosyalar/".$_COOKIE["yukluDosya"];
		if(unlink("$url"))
		{
			setcookie("bildirim","Dosya Silindi!");
			setcookie("yukluDosya","");
		}
		else
		{
			setcookie("bildirim","Dosya Silinemedi!");
		}
		header ("Location:index.php?dosyaYukle");
	}
	if(isset($_GET["dosya"]) and isset($_POST["dosyaSil"]))
	{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from dosyalar where id=".$_GET["dosya"]);
		$alanlar=mysql_fetch_array($sorgu);	
		
		if(unlink("$alanlar[dosyaURL]"))
		{
			@include('inc/baglan.php');
			$sql="update dosyalar set dosyaURL = '' where id=".$_GET["dosya"];
				
			if (@mysql_query($sql,$baglan))	
				setcookie("bildirim","Dosya Silindi!");
			else
				setcookie("bildirim","Dosya Silinemedi!");
		}
		else
		{
			setcookie("bildirim","Dosya Silinemedi!");
		}
		header ("Location:index.php?dosya=$alanlar[id]");
	}
?>
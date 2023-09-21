<?php
	if(isset($_GET["yuklePDF"]) and isset($_POST["dosyaSil"]))
	{
		$url="../".$_COOKIE["yukluPDF"];
		if(unlink("$url"))
		{
			setcookie("bildirim","Dosya Silindi!");
			setcookie("yukluPDF","");
			setcookie("yukluID","");
		}
		else
		{
			setcookie("bildirim","Dosya Silinemedi!");
		}
		header ("Location:index.php?yuklePDF");
	}
	if(isset($_GET["PDF"]) and isset($_POST["dosyaSil"]))
	{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from pdfler where id=".$_GET["PDF"]);
		$alanlar=mysql_fetch_array($sorgu);	
		
		if(unlink("../$alanlar[url]"))
		{
			@include('inc/baglan.php');
			$sql="update pdfler set url = '',pdfURL = '' where id=".$_GET["PDF"];
				
			if (@mysql_query($sql,$baglan))	
				setcookie("bildirim","PDF Dosyasi Silindi!");
			else
				setcookie("bildirim","PDF Dosyasi Silinemedi!");
		}
		else
		{
			setcookie("bildirim","PDF Dosyasi Silinemedi!");
		}
		header ("Location:index.php?PDF=$alanlar[id]");
	}
?>
<?php
	@include('login/inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler){
		$idler.="id=$degerler or ";
		
		@include('login/inc/baglan.php'); 
		$sql="delete from yorumlar where dersAdi='SketchUp' and dersid=".$degerler;
		@mysql_query($sql,$baglan);
		   
		$sorgu=mysql_query("select * from sketchup where id=".$degerler);
		$alanlar=mysql_fetch_array($sorgu);
		$url="dosyalar/sketchup/".$alanlar["dosya"];
		unlink("$url");
		$url="dosyalar/sketchup/".$alanlar["PDF"];
		unlink("$url");
	}
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from sketchup where ".$idler;
	
	if (@mysql_query($sql,$baglan))
	{
		setcookie("bilgi","Seçili Kayýtlar Silindi!");
		setcookie("renk","#3C0");
	}
	else
		setcookie("bilgi","Ýþlem Baþarýsýz!");	
	header ("Location:index.php?SketchUp&SketchUpDersler");
?>
<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler){
		$idler.="id=$degerler or ";
		
		@include('inc/baglan.php'); 
		$sql="delete from yorumlar where dersAdi='kodu' and dersid=".$degerler;
		@mysql_query($sql,$baglan);
		
		$sorgu=mysql_query("select * from kodu where id=".$degerler);
		$alanlar=mysql_fetch_array($sorgu);
		$url="../dosyalar/kodu/".$alanlar["dosya"];
		unlink("$url");
		$url="../dosyalar/kodu/".$alanlar["PDF"];
		unlink("$url");
	}
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from kodu where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bilgi","Seçili Kayýtlar Silindi!");
	else
		setcookie("bilgi","Ýþlem Baþarýsýz!");
			
	header ("Location:index.php?koduDersler");
?>
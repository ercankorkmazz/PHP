<?php
	@include('login/inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler){
		$idler.="id=$degerler or ";
		
		@include('login/inc/baglan.php'); 
		$sql="delete from yorumlar where dersAdi='app' and dersid=".$degerler;
		@mysql_query($sql,$baglan);
		   
		$sorgu=mysql_query("select * from app where id=".$degerler);
		$alanlar=mysql_fetch_array($sorgu);
		$url="dosyalar/app/".$alanlar["dosya"];
		unlink("$url");
		$url="dosyalar/app/".$alanlar["PDF"];
		unlink("$url");
	}
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from app where ".$idler;
	
	if (@mysql_query($sql,$baglan))
	{
		setcookie("bilgi","Seçili Kayýtlar Silindi!");
		setcookie("renk","#3C0");
	}
	else
		setcookie("bilgi","Ýþlem Baþarýsýz!");	
	header ("Location:index.php?app&appDersler");
?>
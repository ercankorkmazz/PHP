<?php
	@include('login/inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler){
		$idler.="id=$degerler or ";
		
		@include('login/inc/baglan.php');
		$sql="delete from yorumlar where dersAdi='alice' and dersid=".$degerler;
		@mysql_query($sql,$baglan);
		   
		$sorgu=mysql_query("select * from alice where id=".$degerler);
		$alanlar=mysql_fetch_array($sorgu);
		$url="dosyalar/alice/".$alanlar["dosya"];
		unlink("$url");
		$url="dosyalar/alice/".$alanlar["PDF"];
		unlink("$url");
	}
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from alice where ".$idler;
	
	if (@mysql_query($sql,$baglan))
	{
		setcookie("bilgi","Se�ili Kay�tlar Silindi!");
		setcookie("renk","#3C0");
	}
	else
		setcookie("bilgi","��lem Ba�ar�s�z!");	
	header ("Location:index.php?alice&aliceDersler");
?>
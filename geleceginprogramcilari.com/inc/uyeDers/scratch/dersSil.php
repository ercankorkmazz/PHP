<?php
	@include('login/inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler){
		$idler.="id=$degerler or ";
		
		@include('login/inc/baglan.php');
		$sql="delete from yorumlar where dersAdi='scratch' and dersid=".$degerler;
		@mysql_query($sql,$baglan);
		 
		$sorgu=mysql_query("select * from scratch where id=".$degerler);
		$alanlar=mysql_fetch_array($sorgu);
		$url="dosyalar/scratch/".$alanlar["dosya"];
		unlink("$url");
		$url="dosyalar/scratch/".$alanlar["PDF"];
		unlink("$url");
	}
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from scratch where ".$idler;
	
	if (@mysql_query($sql,$baglan))
	{
		setcookie("bilgi","Se�ili Kay�tlar Silindi!");
		setcookie("renk","#3C0");
	}
	else
		setcookie("bilgi","��lem Ba�ar�s�z!");	
	header ("Location:index.php?scratch&scratchDersler");
?>
<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler){
		$idler.="id=$degerler or ";
		
		@include('inc/baglan.php'); 
		$sql="delete from yorumlar where dersAdi='arduino' and dersid=".$degerler;
		@mysql_query($sql,$baglan);
		
		$sorgu=mysql_query("select * from smallbasic where id=".$degerler);
		$alanlar=mysql_fetch_array($sorgu);
		$url="../dosyalar/smallBasic/".$alanlar["dosya"];
		unlink("$url");
		$url="../dosyalar/smallBasic/".$alanlar["PDF"];
		unlink("$url");
	}
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from smallbasic where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bilgi","Se�ili Kay�tlar Silindi!");
	else
		setcookie("bilgi","��lem Ba�ar�s�z!");
			
	header ("Location:index.php?smallBasicUyeDersler");
?>
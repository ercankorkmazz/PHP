<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
	{
		$idler.="id=$degerler or ";
		
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from slider where id=".$degerler);
		$alanlar=mysql_fetch_array($sorgu);
		$url="../img/slider/".$alanlar["resim"];
		unlink("$url");
	}
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from slider where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bilgi","Seçili Resimler Silindi!");
	else
		setcookie("bilgi","Ýþlem Baþarýsýz!");
			
	header ("Location:index.php?slider");
?>
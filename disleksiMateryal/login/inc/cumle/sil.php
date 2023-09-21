<?php
	@include('inc/baglan.php');
	
	$id=$_POST["id"];
				
	foreach($id as $degerler)
	{
		$idler.="id=$degerler or ";
	}
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from cumleler where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Seçili kayýtlar silindi");
	else
		setcookie("bildirim","Ýþlem Baþarýsýz");
			
	header ("Location:index.php");
?>
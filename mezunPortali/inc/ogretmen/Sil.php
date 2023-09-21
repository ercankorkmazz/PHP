<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
		$idler.="id=$degerler or ";
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from ogretmen where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Seçili Öðretim Üyeleri Silindi!");
	else
		setcookie("bildirim","Iþlem Baþarýsýz!");
		
	header ("Location:index.php?ogretmenler");
?>
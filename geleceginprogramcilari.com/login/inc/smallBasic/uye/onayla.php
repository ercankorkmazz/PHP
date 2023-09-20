<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler){
		$idler.="id=$degerler or ";
	}
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="update smallbasic set onay='1' where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bilgi","Seçili Kayýtlar Onaylandý!");
	else
		setcookie("bilgi","Ýþlem Baþarýsýz!");
		
	header ("Location:index.php?smallBasicUyeDersler");
?>
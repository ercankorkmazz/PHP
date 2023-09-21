<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
		$idler.="id=$degerler or ";
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from bolumler where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Seçili Kayýtlar Silindi!");
	else
		setcookie("bildirim","Ýþlem Baþarýsýz! Lütfen daha sonra tekrar deneyiniz.");
			
	header ("Location:index.php?bolumler");
?>
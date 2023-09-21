<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
		$idler.="id=$degerler or ";
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from etkinlikler where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Secili Etkinlikler Silindi!");
	else
		setcookie("bildirim","Iþlem Baþarýsýz!");
			
	header ("Location:index.php?etkinliklerYonet");
?>
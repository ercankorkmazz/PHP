<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
		$idler.="id=$degerler or ";
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from baglantilar where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Se�ili Ba�lant�lar Silindi!");
	else
		setcookie("bildirim","I�lem Ba�ar�s�z!");
		
	header ("Location:index.php?linklerYonet");
?>
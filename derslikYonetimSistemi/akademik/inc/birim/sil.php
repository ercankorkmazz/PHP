<?php
	@include('../inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
	{	
		$idler.="id=$degerler or ";
	}
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from birimler where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Se�ili birimler silindi.");
	else
		setcookie("bildirim","��lem Ba�ar�s�z");
			
	header ("Location:index.php?birimler");
?>
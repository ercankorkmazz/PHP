<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
	{
		$idler.="id=$degerler or ";
		
		$sorgu=mysql_query("select * from mezun where id=".$degerler);
		$alanlar=mysql_fetch_array($sorgu);
		
		$sql="delete from kullanici where id=".$alanlar["kID"];
		@mysql_query($sql,$baglan);
	}
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from mezun where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Se�ili Mezunlar Silindi!");
	else
		setcookie("bildirim","I�lem Ba�ar�s�z!");
		
	header ("Location:index.php?mezunSorgula");
?>
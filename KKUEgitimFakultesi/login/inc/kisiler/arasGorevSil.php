<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
	{
		$idler.="id=$degerler or ";
		
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from arastirmagorevlileri where id=".$degerler);
		$alanlar=mysql_fetch_array($sorgu);
		$url="../img/kisiler/".$alanlar["url"];
		unlink("$url");
	}
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from arastirmagorevlileri where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Secili Arastirma G�revlileri Silindi!");
	else
		setcookie("bildirim","Islem Basarisiz!");
			
	header ("Location:index.php?arastirmaGorevlileri");
?>
<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
		$idler.="id=$degerler or ";
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from duyurular where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Secili Kayitlar Silindi!");
	else
		setcookie("bildirim","Islem Basarisiz!");
			
	header ("Location:index.php?duyurular");
?>
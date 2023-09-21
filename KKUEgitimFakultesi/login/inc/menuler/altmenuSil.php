<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
	{
		$idler.="id=$degerler or ";
	}
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from altmenuler where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Seçili Alt Menuler Silindi");
	else
		setcookie("bildirim","Islem Basarisiz");
			
	header ("Location:index.php?altmenuler=$_GET[altmenuler]");
?>
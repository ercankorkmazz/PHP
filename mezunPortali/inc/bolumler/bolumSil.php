<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
		$idler.="id=$degerler or ";
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from bolumler where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Se�ili Kay�tlar Silindi!");
	else
		setcookie("bildirim","��lem Ba�ar�s�z! L�tfen daha sonra tekrar deneyiniz.");
			
	header ("Location:index.php?bolumler");
?>
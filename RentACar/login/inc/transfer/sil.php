<?php
	@include('inc/baglan.php');
	$sql="delete from transfer where id=".$_GET["transfersil"];
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Transfer Silindi");
	else
		setcookie("bildirim","��lem ba�ar�s�z. L�tfen daha sonra tekrar deneyiniz.");
			
	header ("Location:index.php?transferler");
?>
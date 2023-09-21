<?php
	@include('inc/baglan.php');
	$sql="delete from transfer where id=".$_GET["transfersil"];
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Transfer Silindi");
	else
		setcookie("bildirim","Ýþlem baþarýsýz. Lütfen daha sonra tekrar deneyiniz.");
			
	header ("Location:index.php?transferler");
?>
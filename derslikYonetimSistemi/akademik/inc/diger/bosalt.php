<?php
	@include('../inc/baglan.php');
	$sql="update digerbirimler set g$_GET[G] = '' where id=".$_GET["bosalt"];
	
	if(@mysql_query($sql,$baglan))
		setcookie("bildirim","Bo�alt�ld�");
	else
		setcookie("bildirim","��lem Ba�ar�s�z");
	
	header ("Location:index.php?diger");	
?>
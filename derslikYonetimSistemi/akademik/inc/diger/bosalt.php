<?php
	@include('../inc/baglan.php');
	$sql="update digerbirimler set g$_GET[G] = '' where id=".$_GET["bosalt"];
	
	if(@mysql_query($sql,$baglan))
		setcookie("bildirim","Boþaltýldý");
	else
		setcookie("bildirim","Ýþlem Baþarýsýz");
	
	header ("Location:index.php?diger");	
?>
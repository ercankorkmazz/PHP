<?php
	@include('inc/baglan.php');
	$sql="insert into faydalilinkler (baslik,link) values ('$_POST[fayLinkBaslik]','$_POST[fayLinkAdres]')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Link Kaydedildi!");
	else
		setcookie("bildirim","Kayit Basarisiz!");
			
	header ("Location:index.php?faydaliLinkler");
?>
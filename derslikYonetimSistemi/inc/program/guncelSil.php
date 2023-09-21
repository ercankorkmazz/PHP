<?php
	$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
	
	$sorgu=mysql_query("select * from guncellemeler where bolumID='$bolumID' and sinif='$_GET[sinif]'");
	while($alanlar=mysql_fetch_array($sorgu))
	{
		$sql="delete from guncellemeler where id=".$alanlar["id"];	
		@mysql_query($sql,$baglan);
		setcookie("bildirim","Sýnýfa ait bildirimler silindi.");
	}
	header ("Location:index.php?programlar");
?>
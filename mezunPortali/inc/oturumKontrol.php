<?php
	if($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]==0)
		$tablo="kullanici";
	else
		$tablo="ogretmen";

	if($oturum["oturum"]=="" and isset($_SESSION["$_SERVER[SERVER_NAME]mezunportali"]))
	{
		@include('inc/baglan.php');
		$sql="update $tablo set oturum = 'on' where id=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
		@mysql_query($sql,$baglan);
		
		header('refresh: 0; url=');
	}
?>
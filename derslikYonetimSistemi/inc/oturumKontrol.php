<?php
	if($oturum["oturum"]=="" and isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetim"]))
	{
		@include('inc/baglan.php');
		$sql="update kullanici set oturum = 'on' where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkID"];
		@mysql_query($sql,$baglan);
		
		header('refresh: 0; url=');
	}
?>
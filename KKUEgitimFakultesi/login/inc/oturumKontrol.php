<?php
	if($oturum["oturum"]=="" and isset($_SESSION["$_SERVER[SERVER_NAME]"]))
	{
		@include('inc/baglan.php');
		$sql="update kullanici set oturum = 'on' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
		@mysql_query($sql,$baglan);
		
		header('refresh: 0; url=');
	}
?>
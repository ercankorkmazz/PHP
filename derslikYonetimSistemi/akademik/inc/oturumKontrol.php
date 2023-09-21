<?php
	if($oturum["oturum"]=="" and isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademik"]))
	{
		@include('../inc/baglan.php');
		$sql="update ogretmenler set oturum = 'on' where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"];
		@mysql_query($sql,$baglan);
		
		header('refresh: 0; url=');
	}
?>
<?php
if(isset($_POST["kadi"]))
{
	@include('inc/baglan.php');
	$sec=@mysql_query("select * from kullanici",$baglan);
	while($alanlar=@mysql_fetch_array($sec))
	{
		if(strtoupper($alanlar["kadi"])==strtoupper($_POST["kadi"]) && $alanlar["sifre"]==$_POST["sifre"])
		{
			$_SESSION["$_SERVER[SERVER_NAME]oturum"]="on";
			$_SESSION["$_SERVER[SERVER_NAME]kadi"]=$alanlar["kadi"];
			$_SESSION["$_SERVER[SERVER_NAME]kID"]=$alanlar["id"];
			setcookie("bildirim",'');
			header ("Location:index.php");
		}
	}
	if(!isset($_SESSION["$_SERVER[SERVER_NAME]oturum"]))
	{
		$bilgi="Kullanici adi ya da sifre hatali!";
		setcookie("bildirim",$bilgi);
		header ("Location:index.php"); 
	}
}
?>
<?php
if(isset($_POST["Kadi"]))
{
	@include('inc/baglan.php');
	$sec=@mysql_query("select * from uyeler",$baglan);
	while($alanlar=@mysql_fetch_array($sec))
	{
		if($alanlar["Kadi"]==$_POST["Kadi"] && $alanlar["Sifre"]==$_POST["Sifre"])
		{
			$_SESSION["$_SERVER[SERVER_NAME]"]="on";
			$_SESSION["$_SERVER[SERVER_NAME]kID"]=$alanlar["id"];
			$_SESSION["$_SERVER[SERVER_NAME]kartNO"]=$alanlar["KartNO"];
			
			setcookie("bilgi",'');
			header ("Location:uye.php");
		}
		else
			header ("Location:index.php");
	}
	if(!isset($_SESSION["$_SERVER[SERVER_NAME]"]))
	{
		$bilgi="Kullanici adi ya da sifre hatali!";
		setcookie("bilgi",$bilgi);
		header ("Location:index.php"); 
	}
}
?>
<?php
$kadi=$_POST['kadi'];
$sifre=$_POST['sifre'];

include("inc/baglan.php");
$sql=@mysql_query("select * from kullanicilar");
while($alanlar=mysql_fetch_array($sql))
{
	if (($kadi==$alanlar["kadi"]) and ($sifre==$alanlar["sifre"])) 
	{
		$_SESSION["$_SERVER[SERVER_NAME]oturum"]="on";
		
		$_SESSION["$_SERVER[SERVER_NAME]kadi"]=$alanlar["kadi"];
		$_SESSION["$_SERVER[SERVER_NAME]kID"]=$alanlar["id"];
		
		setcookie("girisBilgi","");
	}
	else
	{
		setcookie("girisBilgi","Kullanýcý adý ya da þifre hatalý!");
	}
}
header ("Location:index.php");
?>
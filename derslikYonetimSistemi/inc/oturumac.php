<?php
if(isset($_POST["kadi"]))
{
	@include('inc/baglan.php');
	$sec=@mysql_query("select * from kullanici",$baglan);
	while($alanlar=@mysql_fetch_array($sec))
	{
		if($alanlar["kadi"]==$_POST["kadi"] && $alanlar["sifre"]==$_POST["sifre"])
		{
			@include('inc/baglan.php');
		    $sql="update kullanici set oturum = 'on' where id=".$alanlar["id"];
			if (@mysql_query($sql,$baglan))
				$_SESSION["$_SERVER[SERVER_NAME]derslikYonetim"]="on";
			
			$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=$alanlar["kadi"];
			$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkID"]=$alanlar["id"];
			$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]=$alanlar["bolumID"];
			setcookie("bilgi",'');
			setcookie("mailBilgi",'');
			header ("Location:index.php");
		}
	}
	if(!isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetim"]))
	{
		$bilgi="Kullan�c� ad� ya da �ifre hatal�!";
		setcookie("bilgi",$bilgi);
		header ("Location:index.php"); 
	}
}
?>
<?php
if(isset($_POST["kadi"]))
{
	@include('inc/baglan.php');
	$sec=@mysql_query("select * from kullanici",$baglan);
	while($alanlar=@mysql_fetch_array($sec))
	{
		if(strtoupper($alanlar["kadi"])==strtoupper($_POST["kadi"]) && $alanlar["sifre"]==$_POST["sifre"])
		{
			@include('inc/baglan.php');
		    $sql="update kullanici set oturum = 'on' where id=".$alanlar["id"];
			if (@mysql_query($sql,$baglan))
				$_SESSION["$_SERVER[SERVER_NAME]"]="on";
				
			$_SESSION["$_SERVER[SERVER_NAME]kadi"]=$alanlar["kadi"];
			$_SESSION["$_SERVER[SERVER_NAME]kID"]=$alanlar["id"];
			setcookie("bilgi",'');
			header ("Location:index.php?tasarim");
		}
	}
	if(!isset($_SESSION["$_SERVER[SERVER_NAME]"]))
	{
		$bilgi="Kullanici adi ya da sifre hatali!";
		setcookie("bilgi",$bilgi);
		header ("Location:index.php"); 
	}
}
?>
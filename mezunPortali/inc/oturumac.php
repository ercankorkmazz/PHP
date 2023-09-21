<?php
if(isset($_POST["kadi"]))
{
	if($_POST["tur"]==0)
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
					$_SESSION["$_SERVER[SERVER_NAME]mezunportali"]="on";
					
				$_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]=$alanlar["kadi"];
				$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"]=$alanlar["id"];
				$_SESSION["$_SERVER[SERVER_NAME]mezunportalikullanici"]=$alanlar["kullanici"];
				$_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]=0;
				setcookie("bilgi",'');
				if(!isset($_GET["anket"]))
					header ("Location:index.php");
				else
					header ("Location:index.php?anket");
			}
		}
	}
	else
	{
		@include('inc/baglan.php');
		$sec=@mysql_query("select * from ogretmen",$baglan);
		while($alanlar=@mysql_fetch_array($sec))
		{
			if(strtoupper($alanlar["kadi"])==strtoupper($_POST["kadi"]) && $alanlar["sifre"]==$_POST["sifre"])
			{
				@include('inc/baglan.php');
				$sql="update ogretmen set oturum = 'on' where id=".$alanlar["id"];
				if (@mysql_query($sql,$baglan))
					$_SESSION["$_SERVER[SERVER_NAME]mezunportali"]="on";
					
				$_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]=$alanlar["kadi"];
				$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"]=$alanlar["id"];
				$_SESSION["$_SERVER[SERVER_NAME]mezunportalikullanici"]=$alanlar["kullanici"];
				$_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]=1;
				setcookie("bilgi",'');
				header ("Location:index.php");
			}
		}
	}
	if(!isset($_SESSION["$_SERVER[SERVER_NAME]mezunportali"]))
	{
		$bilgi="Kullanýcý adý ya da þifre hatalý!";
		setcookie("bilgi",$bilgi);
		if(!isset($_GET["anket"]))
			header ("Location:index.php?girisYap"); 
		else
			header ("Location:index.php?anket"); 
	}
}
?>
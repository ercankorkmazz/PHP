<?php
if(isset($_POST["kadi"]))
{
	@include('../inc/baglan.php');
	$sec=@mysql_query("select * from ogretmenler",$baglan);
	while($alanlar=@mysql_fetch_array($sec))
	{
		if($alanlar["kadi"]==$_POST["kadi"] && $alanlar["sifre"]==$_POST["sifre"])
		{
			@include('../inc/baglan.php');
		    $sql="update ogretmenler set oturum = 'on' where id=".$alanlar["id"];
			if (@mysql_query($sql,$baglan))
				$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademik"]="on";
			
			$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkadi"]=$alanlar["kadi"];
			$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]=$alanlar["id"];
			$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikbolumID"]=$alanlar["bolumID"];
			setcookie("bilgi",'');
			setcookie("mailBilgi",'');
			header ("Location:index.php");
		}
	}
	if(!isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademik"]))
	{
		$bilgi="Kullanýcý adý ya da þifre hatalý!";
		setcookie("bilgi",$bilgi);
		header ("Location:index.php");
	}
}
?>
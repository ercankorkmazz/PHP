<?php
if(!empty($_POST["mail"]))
{
	@include('inc/baglan.php'); 
	$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
	if($bolumID=="")
		$bolum="id=1";
	else
		$bolum="bolumID=$bolumID";
	
	$sql="update kullanici set mail = '$_POST[mail]' where ".$bolum;
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Mail Adresi G�ncellendi");
	else
		setcookie("bildirim","Kay�t Ba�ar�s�z");
}
else
	setcookie("bildirim","Mail Adresi Yaz�n�z");
	
	header ("Location:index.php");
?>
<?php
if(!empty($_POST["mail"]))
{
	@include('../inc/baglan.php'); 
	$id=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"];
	
	$sql="update ogretmenler set mail = '$_POST[mail]' where id=".$id;
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Mail Adresi G�ncellendi");
	else
		setcookie("bildirim","Kay�t Ba�ar�s�z");
}
else
	setcookie("bildirim","Mail Adresi Yaz�n�z");
	
	header ("Location:index.php");
?>
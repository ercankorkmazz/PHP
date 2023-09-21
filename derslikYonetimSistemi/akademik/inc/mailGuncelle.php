<?php
if(!empty($_POST["mail"]))
{
	@include('../inc/baglan.php'); 
	$id=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"];
	
	$sql="update ogretmenler set mail = '$_POST[mail]' where id=".$id;
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Mail Adresi Güncellendi");
	else
		setcookie("bildirim","Kayýt Baþarýsýz");
}
else
	setcookie("bildirim","Mail Adresi Yazýnýz");
	
	header ("Location:index.php");
?>
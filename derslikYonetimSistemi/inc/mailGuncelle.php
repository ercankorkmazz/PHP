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
		setcookie("bildirim","Mail Adresi Güncellendi");
	else
		setcookie("bildirim","Kayýt Baþarýsýz");
}
else
	setcookie("bildirim","Mail Adresi Yazýnýz");
	
	header ("Location:index.php");
?>
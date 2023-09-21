<?php
if(!empty($_POST["baslik"]))
{
	if($_POST["onay"]=="on")
		$onay=1;
	else
		$onay=0;
		
	@include('inc/baglan.php');
	$kID=$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
	$sql="insert into haberler (kID,baslik,icerik,onay) values ('$kID','$_POST[baslik]','$_POST[icerik]','$onay')";
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Haber Kaydedildi!");
	else
		setcookie("bildirim","Kayýt Baþarýsýz!");
}
else
	setcookie("bildirim","Baþlýk Yazýnýz!");
	header ("Location:index.php?haberlerYonet");
?>
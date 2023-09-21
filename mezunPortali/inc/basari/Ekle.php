<?php
if(!empty($_POST["mezun"]))
{
	if(!empty($_POST["baslik"]))
	{
		if($_POST["onay"]=="on")
			$onay=1;
		else
			$onay=0;
			
		@include('inc/baglan.php');
		$kID=$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
		$sql="insert into basarilar (mezun,url,baslik,icerik,onay) values ('$_POST[mezun]','$_COOKIE[basariFoto]','$_POST[baslik]','$_POST[icerik]','$onay')";
		
		if (@mysql_query($sql,$baglan))
		{
			setcookie("basariFoto","");
			setcookie("bildirim","Baþarý Bilgileri Kaydedildi!");
		}
		else
		{
			setcookie("basariFoto","");
			setcookie("bildirim","Kayýt Baþarýsýz!");
		}
	}
	else
		setcookie("bildirim","Baþari hakkýnda kýsa bilgi yazýnýz!");
}
else
	setcookie("bildirim","Mezunun Adýný Soyadýný yazýnýz!");
	header ("Location:index.php?basarilarYonet");
?>
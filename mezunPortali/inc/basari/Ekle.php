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
			setcookie("bildirim","Ba�ar� Bilgileri Kaydedildi!");
		}
		else
		{
			setcookie("basariFoto","");
			setcookie("bildirim","Kay�t Ba�ar�s�z!");
		}
	}
	else
		setcookie("bildirim","Ba�ari hakk�nda k�sa bilgi yaz�n�z!");
}
else
	setcookie("bildirim","Mezunun Ad�n� Soyad�n� yaz�n�z!");
	header ("Location:index.php?basarilarYonet");
?>
<?php
$derslik=$_COOKIE["derslik"];
if($_POST["sinif"]!="S�n�f Se�iniz")
{				
	if ($_POST["ders"]!="Ders Se�iniz")
	{
		$dizi1=explode("-",$_COOKIE["istekler"]);
		foreach($dizi1 as $deger)
		{	
			$dizi2=explode(".",$deger);
			$S=$dizi2[0];
			$G=$dizi2[1];
			$ID=$dizi2[2];
			
			
			@include('inc/baglan.php');
			$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
			$sql = mysql_query("select * from dersprogramlari where bolumID=$bolumID and sinif=$_POST[sinif] and saat=$S");
			$alanlar=mysql_fetch_array($sql);
						
			if($alanlar["g$G"]=="")
			{
				@include('inc/baglan.php'); 
				//--------------- Ders Bilgilerini �eker.
						
				$sql = mysql_query("select * from dersler where id=$_POST[ders]");
				$ders=mysql_fetch_array($sql);
				
				// ------------- �stek kayd�n� olu�turur.
				$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
				$sql="insert into derslikhucreleri (derslikID,satirID,G,S,bolumID,sinif,dersID,dTuru,oTuru,onay) values ('$derslik','$ID','$G','$S','$bolumID','$_POST[sinif]','$_POST[ders]','$_POST[dTuru]','$ders[oTuru]','Onay Bekliyor')";
				@mysql_query($sql,$baglan);
								
				// ------------- H�creye ait istek say�s�n� hesaplar
				@include('inc/baglan.php');
				$sql = mysql_query("SELECT * FROM derslikhucreleri where satirID=$ID and G=$G");
				$sayi=mysql_num_rows($sql);
								
				// ------------- H�crenini istek say�s�n� g�nceller
				@include('inc/baglan.php'); 
				$sql="update derslikprogrami set g$G = '$sayi kay�t onay bekliyor' where id=".$ID;
				@mysql_query($sql,$baglan);
								
				// ------------- Ders Program�n� G�nceller
				@include('inc/baglan.php');
				$dizi = "$derslik.$_POST[ders].0.$ders[oTuru].$_POST[dTuru]";
				
				$sql="update dersprogramlari set g$G = '$dizi' where bolumID=$bolumID and sinif=$_POST[sinif] and saat=$S";	
				if(@mysql_query($sql,$baglan))
				{
					setcookie("istekler","");
					setcookie("bildirim","Kay�t Ba�ar�l�");
				}
				else
					setcookie("bildirim","��lem Ba�ar�s�z");
			}
			else
				setcookie("bildirim","�stek eklenemedi. Se�ti�iniz s�n�f�n bu saatte dersi mevcuttur.");
				
		}
		header ("Location:index.php?derslik=".$derslik);
	}
	else
	{
		setcookie("bildirim","Ders Se�iniz");
		header ("Location:index.php?istekGonder&bildirim");
	}
}
else
{
	setcookie("bildirim","S�n�f se�iniz.");
	header ("Location:index.php?istekGonder&bildirim");
}
?>
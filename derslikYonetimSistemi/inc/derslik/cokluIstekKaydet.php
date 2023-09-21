<?php
$derslik=$_COOKIE["derslik"];
if($_POST["sinif"]!="Sýnýf Seçiniz")
{				
	if ($_POST["ders"]!="Ders Seçiniz")
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
				//--------------- Ders Bilgilerini Çeker.
						
				$sql = mysql_query("select * from dersler where id=$_POST[ders]");
				$ders=mysql_fetch_array($sql);
				
				// ------------- Ýstek kaydýný oluþturur.
				$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
				$sql="insert into derslikhucreleri (derslikID,satirID,G,S,bolumID,sinif,dersID,dTuru,oTuru,onay) values ('$derslik','$ID','$G','$S','$bolumID','$_POST[sinif]','$_POST[ders]','$_POST[dTuru]','$ders[oTuru]','Onay Bekliyor')";
				@mysql_query($sql,$baglan);
								
				// ------------- Hücreye ait istek sayýsýný hesaplar
				@include('inc/baglan.php');
				$sql = mysql_query("SELECT * FROM derslikhucreleri where satirID=$ID and G=$G");
				$sayi=mysql_num_rows($sql);
								
				// ------------- Hücrenini istek sayýsýný günceller
				@include('inc/baglan.php'); 
				$sql="update derslikprogrami set g$G = '$sayi kayýt onay bekliyor' where id=".$ID;
				@mysql_query($sql,$baglan);
								
				// ------------- Ders Programýný Günceller
				@include('inc/baglan.php');
				$dizi = "$derslik.$_POST[ders].0.$ders[oTuru].$_POST[dTuru]";
				
				$sql="update dersprogramlari set g$G = '$dizi' where bolumID=$bolumID and sinif=$_POST[sinif] and saat=$S";	
				if(@mysql_query($sql,$baglan))
				{
					setcookie("istekler","");
					setcookie("bildirim","Kayýt Baþarýlý");
				}
				else
					setcookie("bildirim","Ýþlem Baþarýsýz");
			}
			else
				setcookie("bildirim","Ýstek eklenemedi. Seçtiðiniz sýnýfýn bu saatte dersi mevcuttur.");
				
		}
		header ("Location:index.php?derslik=".$derslik);
	}
	else
	{
		setcookie("bildirim","Ders Seçiniz");
		header ("Location:index.php?istekGonder&bildirim");
	}
}
else
{
	setcookie("bildirim","Sýnýf seçiniz.");
	header ("Location:index.php?istekGonder&bildirim");
}
?>
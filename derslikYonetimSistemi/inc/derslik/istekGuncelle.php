<?php		
		if($_POST["ders"]!="Ders Seçiniz")
		{
			@include('inc/baglan.php');
			$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
			
			//--------------- Ders Bilgilerini Çeker.
						
			$sql = mysql_query("select * from dersler where id=$_POST[ders]");
			$ders=mysql_fetch_array($sql);
			
			$sql = mysql_query("select * from dersprogramlari where bolumID=$bolumID and sinif=$_GET[K] and saat=$_GET[S]");
			$alanlar=mysql_fetch_array($sql);
			
			$dizi=explode(".",$alanlar["g$_GET[G]"]);
			$hucre = $dizi[0].".".$_POST["ders"].".".$dizi[2].".".$ders["oTuru"].".".$_POST["dTuru"];	
			
			// ------------- Ders Programýný Günceller
			@include('inc/baglan.php');
			$sql="update dersprogramlari set g$_GET[G] = '$hucre' where bolumID=$bolumID and sinif=$_GET[K] and saat=$_GET[S]";	
			@mysql_query($sql,$baglan);
			
			// ------------- Ýstek Günceller
			@include('inc/baglan.php');
			$sql="update derslikhucreleri set dersID = '$_POST[ders]' , dTuru = '$_POST[dTuru]' , oTuru = '$ders[oTuru]' where id=".$_GET["H"];	
			
			if(@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Bilgiler Güncellendi");
				header ("Location:index.php?S=$_GET[S]&G=$_GET[G]&D=$_GET[DI]&ID=$_GET[DS]");
			}
			else
			{
				setcookie("bildirim","Ýþlem Baþarýsýz");
				header ("Location:index.php?istekGuncelle&S=$_GET[S]&G=$_GET[G]&K=$_GET[K]&H=$_GET[H]&DID=$_GET[DID]&DI=$_GET[DI]&DS=$_GET[DS]");
			}
		}
		else
		{
			setcookie("bildirim","Ders Seçiniz");		
			header ("Location:index.php?istekGuncelle&S=$_GET[S]&G=$_GET[G]&K=$_GET[K]&H=$_GET[H]&DID=$_GET[DID]&DI=$_GET[DI]&DS=$_GET[DS]");
		}
?>
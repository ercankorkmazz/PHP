<?php		
		if($_POST["sinif"]!="Sýnýf Seçiniz")
		{				
				if ($_POST["ders"]!="Ders Seçiniz")
				{
					@include('inc/baglan.php');
					$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
					$sql = mysql_query("select * from dersprogramlari where bolumID=$bolumID and sinif=$_POST[sinif] and saat=$_GET[S]");
					$alanlar=mysql_fetch_array($sql);
					
					if($alanlar["g$_GET[G]"]=="")
					{
						@include('inc/baglan.php'); 
						//--------------- Ders Bilgilerini Çeker.
						
						$sql = mysql_query("select * from dersler where id=$_POST[ders]");
						$ders=mysql_fetch_array($sql);
						
						// ------------- Ýstek kaydýný oluþturur.
						$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
						$sql="insert into derslikhucreleri (derslikID,satirID,G,S,bolumID,sinif,dersID,dTuru,oTuru,onay) values ('$_GET[D]','$_GET[ID]','$_GET[G]','$_GET[S]','$bolumID','$_POST[sinif]','$_POST[ders]','$_POST[dTuru]','$ders[oTuru]','Onay Bekliyor')";
						@mysql_query($sql,$baglan);
						
						// ------------- Hücreye ait istek sayýsýný hesaplar
						@include('inc/baglan.php');
						$sql = mysql_query("SELECT * FROM derslikhucreleri where satirID=$_GET[ID] and G=$_GET[G]");
						$sayi=mysql_num_rows($sql);
						
						// ------------- Hücrenini istek sayýsýný günceller
						@include('inc/baglan.php'); 
						$sql="update derslikprogrami set g$_GET[G] = '$sayi kayýt onay bekliyor' where id=".$_GET["ID"];
						@mysql_query($sql,$baglan);
						
						// ------------- Ders Programýný Günceller
						@include('inc/baglan.php');
						$dizi = "$_GET[D].$_POST[ders].0.$ders[oTuru].$_POST[dTuru]";
						
						$sql="update dersprogramlari set g$_GET[G] = '$dizi' where bolumID=$bolumID and sinif=$_POST[sinif] and saat=$_GET[S]";	
						if(@mysql_query($sql,$baglan))
							setcookie("bildirim","Kayýt Baþarýlý");
						else
							setcookie("bildirim","Ýþlem Baþarýsýz");
					}
					else
						setcookie("bildirim","Ýstek eklenemedi. Seçtiðiniz sýnýfýn bu saatte dersi mevcuttur.");
				}
				else
					setcookie("bildirim","Ders Seçiniz");
		}
		else
			setcookie("bildirim","Sýnýf seçiniz.");
		header ("Location:index.php?S=$_GET[S]&G=$_GET[G]&D=$_GET[D]&ID=$_GET[ID]");
			
		
?>
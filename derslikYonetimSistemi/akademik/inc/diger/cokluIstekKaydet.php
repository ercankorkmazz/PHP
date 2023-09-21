<?php
	if ($_POST["ders"]!="Ders Seçiniz")
	{
		$dizi1=explode("-",$_COOKIE["istekler"]);
		foreach($dizi1 as $deger)
		{	
			$dizi2=explode(".",$deger);
			$S=$dizi2[0];
			$G=$dizi2[1];
			$ID=$dizi2[2];
			$say=0;
			
			@include('inc/baglan.php');
			$id=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"];
			$sql = mysql_query("select * from digerbirimler where ogretmenID=$id and saat=$S");
			$alanlar=mysql_fetch_array($sql);
						
			if($alanlar["g$G"]=="")
			{
				@include('inc/baglan.php'); 
				//--------------- Ders Bilgilerini Çeker.
						
				$sql = mysql_query("select * from digerdersler where id=$_POST[ders]");
				$ders=mysql_fetch_array($sql);
				
				// ------------- Ders Programýný Günceller
				@include('inc/baglan.php');
				$dizi = "$_POST[ders]+$ders[oTuru]+$_POST[dTuru]";
				
				$sql="update digerbirimler set g$G = '$dizi' where ogretmenID=$id and saat=$S";	
				if(@mysql_query($sql,$baglan))
				{
					setcookie("istekler","");
					if($say==0)
						setcookie("bildirim","Kayýt Baþarýlý");
					else
						setcookie("bildirim","Kayýt Baþarýlý. ($say kayýt mevcut. Kayýtlarý silip tekrar deneyiniz)");
				}
				else
				{
					setcookie("bildirim","Ýþlem baþarýsýz.");
				}
			}
			else
			{
				setcookie("bildirim","Ýþlem baþarýsýz. Seçimde kayýt mevcut.");
			}
				
		}
		header ("Location:index.php?diger");
	}
	else
	{
		setcookie("bildirim","Ders Seçiniz");
		header ("Location:index.php?kayitEkle&bildirim");
	}
?>
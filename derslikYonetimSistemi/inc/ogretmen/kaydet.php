<?php
	if(!empty($_POST["kullanici"]))
	{
		if(!empty($_POST["kadi"]))
		{
			// kullan�c� ad� kontrol�
			@include('inc/baglan.php');
			$kontrol=0;	
			$sql = mysql_query("select * from ogretmenler");
			while($alanlar=mysql_fetch_array($sql))
			{
				if($_POST["kadi"]==$alanlar["kadi"])
					$kontrol=1;	
			}
			if($kontrol==0)
			{
				$karakter = "QWERTYUIPASDFGHJKLZXCVBNM123456789";
				$karakterSayisi=strlen($karakter);
				$sifre=null;
				for($i=1;$i<=5;$i++)
				{
					$sayi=rand(0,$karakterSayisi-1);
					$sifre .= $karakter[$sayi];	
				}
				$bolum=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
				$sql="insert into ogretmenler (bolumID,kullanici,gorev,dersYuku,kadi,sifre) values ('$bolum','$_POST[kullanici]','$_POST[gorev]','$_POST[dersYuku]','$_POST[kadi]','$sifre')";
				@mysql_query($sql,$baglan);
				
				@include('inc/baglan.php'); 
				$sql = mysql_query("select * from ogretmenler order by id desc limit 0,1");
				$alanlar=mysql_fetch_array($sql);
				
				for($k=1;$k<=14;$k++)
				{
					$sql="insert into digerbirimler (ogretmenID,saat) values ('$alanlar[id]','$k')";
					@mysql_query($sql,$baglan);
				}
				
				setcookie("bildirim","Kay�t Ba�ar�l�");
				header ("Location:index.php?ogretmenler");
			
			}
			else
			{
				setcookie("bildirim","[ $_POST[kadi] ] kullan�c�s� sistemde kay�tl�. Farkl� bir kullan�c� ad� deneyiniz.");
				header ("Location:index.php?yeniOgretmen");
			}
		}
		else
		{
			setcookie("bildirim","Kullan�c� ad�n� yaz�n�z.");
			header ("Location:index.php?yeniOgretmen");
		}
	}
	else
	{
		setcookie("bildirim","��retmen ad� ve soyad�n� yaz�n�z.");
		header ("Location:index.php?yeniOgretmen");
	}
			
		
?>
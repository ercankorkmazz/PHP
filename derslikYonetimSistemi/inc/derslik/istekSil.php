<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
	$bildir=0;
	
	if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin")
	{	
			if($_GET["G"]==1)
				$gun="Pazartesi";
			elseif($_GET["G"]==2)
				$gun="Salý";
			elseif($_GET["G"]==3)
				$gun="Çarþamba";
			elseif($_GET["G"]==4)
				$gun="Perþembe";
			elseif($_GET["G"]==5)
				$gun="Cuma";
			
			if($_GET["S"]==1)
				$saat="08:30";
			elseif($_GET["S"]==2)
				$saat="09:30";
			elseif($_GET["S"]==3)
				$saat="10:30";
			elseif($_GET["S"]==4)
				$saat="11:30";
			elseif($_GET["S"]==5)
				$saat="13:00";
			elseif($_GET["S"]==6)
				$saat="14:00";
			elseif($_GET["S"]==7)
				$saat="15:00";
			elseif($_GET["S"]==8)
				$saat="16:00";
			elseif($_GET["S"]==9)
				$saat="17:00";
			elseif($_GET["S"]==10)
				$saat="18:00";
			elseif($_GET["S"]==11)
				$saat="19:00";
			elseif($_GET["S"]==12)
				$saat="20:00";
			elseif($_GET["S"]==13)
				$saat="21:00";
			elseif($_GET["S"]==14)
				$saat="22:00";		
				
		foreach($id as $degerler)
		{		
			$sorgu=mysql_query("select * from derslikhucreleri");
			while($alanlar=mysql_fetch_array($sorgu))
			{
				if($degerler==$alanlar["id"])
				{	
					$sql = mysql_query("select * from dersprogramlari where bolumID=$alanlar[bolumID] and sinif=$alanlar[sinif] and saat=$_GET[S]");
					$alan=mysql_fetch_array($sql);
					$dizi=explode(".",$alan["g$_GET[G]"]);
					
					$derslik=mysql_fetch_array(@mysql_query("select * from derslikler where id=".$dizi[0]));
					$dersBilgisi = "<strong>".$derslik["derslikAdi"]."</strong><br>";
								
					$derslik=mysql_fetch_array(@mysql_query("select * from dersler where id=".$dizi[1]));
					if($derslik["id"]==$dizi[1])
					{
						$ogretmenler=mysql_query("select * from ogretmenler where id=".$derslik["ogretmen"]);
						$ogretmenn=mysql_fetch_array($ogretmenler);
						
						if($derslik["ogretmen"]!=0)
							$ogretmen=$ogretmenn["kullanici"];
						else
							$ogretmen="Öðretmen Belirlenmedi";
							
						$dersBilgisi .= $derslik["ders"]." <br>(".$ogretmen.")";
					}
					else
						$dersBilgisi .= "Ders Bulunamadý";
					
					$sorgu="insert into guncellemeler (bolumID,sinif,icerik) values ('$alanlar[bolumID]','$alanlar[sinif]','$dersBilgisi<br><strong>($gun $saat)</strong><br>Ýstek Silindi')";
					@mysql_query($sorgu,$baglan);
					
					$sql="update dersprogramlari set g$_GET[G] = '' where bolumID=$alanlar[bolumID] and sinif=$alanlar[sinif] and saat=$_GET[S]";	
					@mysql_query($sql,$baglan);
				}
			}
					
			$idler.="id=$degerler or ";
		}
	}
	else
	{
		foreach($id as $degerler)
		{		
			$sorgu=mysql_query("select * from derslikhucreleri");
			while($alanlar=mysql_fetch_array($sorgu))
			{
				if($degerler==$alanlar["id"])
				{		
					if($alanlar["bolumID"]==$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"])
					{	
						$sql="update dersprogramlari set g$_GET[G] = '' where bolumID=$alanlar[bolumID] and sinif=$alanlar[sinif] and saat=$_GET[S]";	
						@mysql_query($sql,$baglan);
						$idler.="id=$degerler or ";
					}
					else
						$bildir=1;
				}
			}
		}
	}
		
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from derslikhucreleri where ".$idler;
	@mysql_query($sql,$baglan);
	
	$sayi=0;
	$sql = mysql_query("SELECT * FROM derslikhucreleri where satirID=$_GET[ID] and G=$_GET[G]");
	$sayi=mysql_num_rows($sql);
	
	if($sayi!=0)
	{
		if($sayi==1)
		{
			$onaySor=mysql_query("SELECT * FROM derslikhucreleri where satirID=$_GET[ID] and G=$_GET[G]");
			$onayKontrol=mysql_fetch_array($onaySor);
			if($onayKontrol["onay"]=="Onaylandý")
				$sql="update derslikprogrami set g$_GET[G] = 'Onaylandý' where id=".$_GET["ID"];
			else
				$sql="update derslikprogrami set g$_GET[G] = '$sayi kayýt onay bekliyor' where id=".$_GET["ID"];
		}
		elseif($sayi>1)
		{
			$sql="update derslikprogrami set g$_GET[G] = '$sayi kayýt onay bekliyor' where id=".$_GET["ID"];
		}		
		if (@mysql_query($sql,$baglan))
		{
			if($bildir==0)
				setcookie("bildirim","Seçili istekler silindi.");
			else
				setcookie("bildirim","Sadece kendi bölümünüze ait istekleri silebilirsiniz.");
		}
		else
			setcookie("bildirim","Ýþlem Baþarýsýz");
			
		header ("Location:index.php?S=".$_GET["S"]."&G=".$_GET["G"]."&D=$_GET[D]&ID=$_GET[ID]");
	}
	else
	{
		$sql="update derslikprogrami set g$_GET[G] = 'Boþ' where id=".$_GET["ID"];
		if (@mysql_query($sql,$baglan))
		{
			if($bildir==0)
				setcookie("bildirim","Seçili istekler silindi.");
			else
				setcookie("bildirim","Sadece kendi bölümünüze ait istekleri silebilirsiniz.");
		}
		else
			setcookie("bildirim","Ýþlem Baþarýsýz");
		
		header ("Location:index.php?derslik=$_GET[D]");
	}
?>
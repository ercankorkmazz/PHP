<?php
	@include('inc/baglan.php');
	
	$sql = mysql_query("SELECT * FROM derslikhucreleri where satirID=$_GET[ID] and G=$_GET[G]");
	while($alanlar=mysql_fetch_array($sql))
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
				
			$sorgu = mysql_query("select * from dersprogramlari where bolumID=$alanlar[bolumID] and sinif=$alanlar[sinif] and saat=$_GET[S]");
			$alan=mysql_fetch_array($sorgu);
			
			$dizi=explode(".",$alan["g$_GET[G]"]);
			$onayHucre=$dizi[0].".".$dizi[1]."."."1".".".$dizi[3].".".$dizi[4];
			
			$derslik=mysql_fetch_array(@mysql_query("select * from derslikler where id=".$dizi[0]));
			$dersBilgisi = "<strong>".$derslik["derslikAdi"]."</strong> <br>";
								
			$derslik=mysql_fetch_array(@mysql_query("select * from dersler where id=".$dizi[1]));
			$ogretmen=mysql_fetch_array(@mysql_query("select * from ogretmenler where id=".$derslik["ogretmen"]));
			if($derslik["ogretmen"]!=0)
				$ogr=$ogretmen["kullanici"];
			else
				$ogr="Öðretmen Belirlenmedi";
				
			$dersBilgisi .= $derslik["ders"]." <br>(".$ogr.")";
				
		if($alanlar["id"]!=$_GET["O"])
		{
							
			$sorgu="insert into guncellemeler (bolumID,sinif,icerik) values ('$alanlar[bolumID]','$alanlar[sinif]','$dersBilgisi<br><strong>($gun $saat)</strong><br>Ýstek Silindi')";
			@mysql_query($sorgu,$baglan);
			
			$sorgu="update dersprogramlari set g$_GET[G] = '' where bolumID=$alanlar[bolumID] and sinif=$alanlar[sinif] and saat=$_GET[S]";	
			@mysql_query($sorgu,$baglan);
			
			$sorgu="delete from derslikhucreleri where id=".$alanlar["id"];
			@mysql_query($sorgu,$baglan);
		}
		else
		{
			$sorgu=mysql_query("select * from dersprogramlari where bolumID=$alanlar[bolumID] and sinif=$alanlar[sinif] and saat=$_GET[S]");
			$alan=mysql_fetch_array($sorgu);
			$dizi=explode(".",$alan["g$_GET[G]"]);
			if($dizi[2]==1)
			{
				$sorgu="update derslikprogrami set g$_GET[G] = 'Onaylandý' where id=".$_GET["ID"];
				@mysql_query($sorgu,$baglan);
				setcookie("bildirim","Ders onaylandý.");
			}
			else
			{				
				$sorgu="update dersprogramlari set g$_GET[G] = '$onayHucre' where bolumID=$alanlar[bolumID] and sinif=$alanlar[sinif] and saat=$_GET[S]";	
				@mysql_query($sorgu,$baglan);
				
				$sorgu="update derslikprogrami set g$_GET[G] = 'Onaylandý' where id=".$_GET["ID"];
				@mysql_query($sorgu,$baglan);
				
				$sorgu="update derslikhucreleri set onay = 'Onaylandý' where id=".$alanlar["id"];
				if(@mysql_query($sorgu,$baglan))
					setcookie("bildirim","Ders onaylandý.");
					
				$sorgu="insert into guncellemeler (bolumID,sinif,icerik) values ('$alanlar[bolumID]','$alanlar[sinif]','<strong>($gun $saat)</strong> - Onaylandý')";
				@mysql_query($sorgu,$baglan);
			}
		}
	}			
	header ("Location:index.php?derslik=$_GET[D]");
?>
<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
	{		
		$sorgu=mysql_query("select * from derslikprogrami");
		while($alanlar=mysql_fetch_array($sorgu))
		{
			if($degerler==$alanlar["derslikID"])
			{
				$sql="delete from derslikprogrami where id=".$alanlar["id"];
				@mysql_query($sql,$baglan);
			}
		}
		$sorgu=mysql_query("select * from derslikhucreleri");
		while($alanlar=mysql_fetch_array($sorgu))
		{
			if($degerler==$alanlar["derslikID"])
			{
				$sql="delete from derslikhucreleri where id=".$alanlar["id"];
				@mysql_query($sql,$baglan);
			}
		}
		//------------- Ders Programlar�ndaki kay�tlar� Siler		
		$sorgu=mysql_query("select * from dersprogramlari");
		while($alanlar=mysql_fetch_array($sorgu))
		{
			for($i=1;$i<=5;$i++)
			{
				$dizi=explode(".",$alanlar["g$i"]);
				
				if($dizi[0]==$degerler)
				{
					$sql="update dersprogramlari set g$i = '' where id=".$alanlar["id"];
					@mysql_query($sql,$baglan);
				}
			}
		}
		//-------------- Bildirim Olu�turur
		$alanlar=mysql_fetch_array(mysql_query("select * from derslikler where id=".$degerler));
		$derslikAdi=$alanlar["derslikAdi"];
		
		$sorgu=@mysql_query("select * from bolumler");
		while($alan=@mysql_fetch_array($sorgu))
		{
			for($i=1;$i<=$alan["sure"];$i++)
			{
				$sql="insert into guncellemeler (bolumID,sinif,icerik) values ('$alan[id]','$i','<strong>$derslikAdi Silindi</strong><br>Dersli�e ait t�m istekler silinmi�tir.')";
				@mysql_query($sql,$baglan);	
			}
		}
		
		$idler.="id=$degerler or ";
	}
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from derslikler where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Se�ili derslikler silindi");
	else
		setcookie("bildirim","��lem Ba�ar�s�z");
			
	header ("Location:index.php?derslikler");
?>
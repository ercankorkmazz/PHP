<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
	{	
		//-------------- Bildirim Olu�turur
		$alanlar=mysql_fetch_array(mysql_query("select * from ogretmenler where id=".$degerler));
		$ogretmenAdi=$alanlar["kullanici"];
		
		$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
		
		$sorgu=@mysql_query("select * from bolumler where id=".$bolumID);
		while($alan=@mysql_fetch_array($sorgu))
		{
			for($i=1;$i<=$alan["sure"];$i++)
			{
				$sql="insert into guncellemeler (bolumID,sinif,icerik) values ('$bolumID','$i','<strong>[ $ogretmenAdi ] ��retmen Silindi</strong><br>��retmenin kay�tl� oldu�u dersleri g�ncelleyiniz.')";
				@mysql_query($sql,$baglan);	
			}
		}
		
		$sql=mysql_query("select * from birimler");
		while($birimler=mysql_fetch_array($sql))
		{
			if($birimler["ogretmenID"]==$degerler)
			{
				$sil="delete from birimler where id=".$birimler["id"];
				@mysql_query($sil,$baglan);
			}
		}
		
		$sql=mysql_query("select * from digerbirimler");
		while($digerbirimler=mysql_fetch_array($sql))
		{
			if($digerbirimler["ogretmenID"]==$degerler)
			{
				$sil="delete from digerbirimler where id=".$digerbirimler["id"];
				@mysql_query($sil,$baglan);
			}
		}
		
		$sql=mysql_query("select * from digerdersler");
		while($digerdersler=mysql_fetch_array($sql))
		{
			if($digerdersler["ogretmenID"]==$degerler)
			{
				$sil="delete from digerdersler where id=".$digerdersler["id"];
				@mysql_query($sil,$baglan);
			}
		}
				
		$idler.="id=$degerler or ";
	}
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from ogretmenler where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Se�ili ��retmenler silindi.");
	else
		setcookie("bildirim","��lem Ba�ar�s�z");
			
	header ("Location:index.php?ogretmenler");
?>
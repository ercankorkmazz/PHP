<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
	{	
		//-------------- Bildirim Olu�turur
		$alanlar=mysql_fetch_array(mysql_query("select * from dersler where id=".$degerler));
		$dersAdi=$alanlar["ders"];
		
		$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
		
		$sorgu=@mysql_query("select * from bolumler where id=".$bolumID);
		while($alan=@mysql_fetch_array($sorgu))
		{
			for($i=1;$i<=$alan["sure"];$i++)
			{
				$sql="insert into guncellemeler (bolumID,sinif,icerik) values ('$bolumID','$i','<strong>[ $dersAdi ] Dersi Silindi</strong><br>Dersin kay�tl� oldu�u derslik isteklerini g�ncelleyiniz.')";
				@mysql_query($sql,$baglan);	
			}
		}
		
		$idler.="id=$degerler or ";
	}
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from dersler where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Se�ili dersler silindi.");
	else
		setcookie("bildirim","��lem Ba�ar�s�z");
			
	header ("Location:index.php?dersler");
?>
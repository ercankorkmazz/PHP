<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
	{	
		$sorgu=mysql_query("select * from derslikhucreleri where bolumID=".$degerler);
		while($alanlar=mysql_fetch_array($sorgu))
		{
			$satirID=$alanlar["satirID"];
			$G=$alanlar["G"];
			
			$sql="delete from derslikhucreleri where id=".$alanlar["id"];
			@mysql_query($sql,$baglan);
			
			$sayi=0;
			$sql = mysql_query("SELECT * FROM derslikhucreleri where satirID=$satirID and G=$G");
			$sayi=mysql_num_rows($sql);
			
			if($sayi!=0)
			{
				if($sayi==1)
				{
					$onaySor=mysql_query("SELECT * FROM derslikhucreleri where satirID=$satirID and G=$G");
					$onayKontrol=mysql_fetch_array($onaySor);
					if($onayKontrol["onay"]=="Onaylandý")
						$sql="update derslikprogrami set g$G = 'Onaylandý' where id=".$satirID;
					else
						$sql="update derslikprogrami set g$G = '$sayi kayýt onay bekliyor' where id=".$satirID;
				}		
				@mysql_query($sql,$baglan);
			}
			else
			{
				$sql="update derslikprogrami set g$G = 'Boþ' where id=".$satirID;
				@mysql_query($sql,$baglan);
			}
		}
	
		$sorgu=mysql_query("select * from mesajkutusu where kimden=".$degerler." or kime=".$degerler);
		while($alanlar=mysql_fetch_array($sorgu))
		{
			$sql=mysql_query("select * from mesajlar where mesajID=".$alanlar["id"]);
			while($alan=mysql_fetch_array($sql))
			{
				$sor="delete from mesajlar where id=".$alan["id"];
				@mysql_query($sor,$baglan);
			}
			$sql="delete from mesajkutusu where id=".$alanlar["id"];
			@mysql_query($sql,$baglan);
		}
		$sorgu=mysql_query("select * from guncellemeler");
		while($alanlar=mysql_fetch_array($sorgu))
		{
			if($degerler==$alanlar["bolumID"])
			{
				$sql="delete from guncellemeler where id=".$alanlar["id"];
				@mysql_query($sql,$baglan);
			}
		}	
		$sorgu=mysql_query("select * from dersprogramlari");
		while($alanlar=mysql_fetch_array($sorgu))
		{
			if($degerler==$alanlar["bolumID"])
			{
				$sql="delete from dersprogramlari where id=".$alanlar["id"];
				@mysql_query($sql,$baglan);
			}
		}
		$sorgu=mysql_query("select * from dersler");
		while($alanlar=mysql_fetch_array($sorgu))
		{
			if($degerler==$alanlar["bolumID"])
			{
				$sql="delete from dersler where id=".$alanlar["id"];
				@mysql_query($sql,$baglan);
			}
		}
		$sorgu=mysql_query("select * from ogretmenler");
		while($alanlar=mysql_fetch_array($sorgu))
		{
			if($degerler==$alanlar["bolumID"])
			{
				$sql=mysql_query("select * from birimler");
				while($birimler=mysql_fetch_array($sql))
				{
					if($birimler["ogretmenID"]==$alanlar["id"])
					{
						$sil="delete from birimler where id=".$birimler["id"];
						@mysql_query($sil,$baglan);
					}
				}
				
				$sql=mysql_query("select * from digerbirimler");
				while($digerbirimler=mysql_fetch_array($sql))
				{
					if($digerbirimler["ogretmenID"]==$alanlar["id"])
					{
						$sil="delete from digerbirimler where id=".$digerbirimler["id"];
						@mysql_query($sil,$baglan);
					}
				}
				
				$sql=mysql_query("select * from digerdersler");
				while($digerdersler=mysql_fetch_array($sql))
				{
					if($digerdersler["ogretmenID"]==$alanlar["id"])
					{
						$sil="delete from digerdersler where id=".$digerdersler["id"];
						@mysql_query($sil,$baglan);
					}
				}
				
				$sql="delete from ogretmenler where id=".$alanlar["id"];
				@mysql_query($sql,$baglan);
			}
		}
		$sql="delete from kullanici where bolumID=".$degerler;
		@mysql_query($sql,$baglan);
		
		$idler.="id=$degerler or ";
	}
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from bolumler where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Seçili Bölümler Silindi");
	else
		setcookie("bildirim","Ýþlem Baþarýsýz");
			
	header ("Location:index.php?bolumler");
?>
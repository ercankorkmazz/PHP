<?php
// kullan�c� ad� kontrol�
@include('../inc/baglan.php');
$kontrol=0;	
$id=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"];
$sql = mysql_query("select * from ogretmenler");
while($alanlar=mysql_fetch_array($sql))
{
	if($alanlar["id"]!=$id)
	{
		if($_POST["kullanici"]==$alanlar["kadi"])
			$kontrol=1;
	}
}
if(empty($_POST["mSifre"]) and empty($_POST["ySifre"]) and empty($_POST["tSifre"]))
{
	if(empty($_POST["isim"]) or empty($_POST["gorev"]) or empty($_POST["dersYuku"]) or empty($_POST["kullanici"]) or empty($_POST["mail"]))
	{
		setcookie("bildirim"," * ile belirtilen alanlar bo� b�rak�lamaz");
		header ("Location:index.php?kullanici");
	}
	else
	{
			@include('../inc/baglan.php');
			
			if($kontrol==0)
			{
				$sql="update ogretmenler set kullanici = '$_POST[isim]',gorev = '$_POST[gorev]',dersYuku = '$_POST[dersYuku]',kadi = '$_POST[kullanici]',mail = '$_POST[mail]' where id=".$id;
				
				$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkadi"]=$_POST["kullanici"];
				
				if (@mysql_query($sql,$baglan))
					setcookie("bildirim","Bilgiler G�ncellendi");
				else
					setcookie("bildirim","Kay�t Ba�ar�s�z");
			}
			else
				setcookie("bildirim","[ $_POST[kullanici] ] kullan�c�s� sistemde kay�tl�. Farkl� bir kullan�c� ad� deneyiniz.");
							
			header ("Location:index.php?kullanici");
	}
}
else if(empty($_POST["isim"]) or empty($_POST["gorev"]) or empty($_POST["dersYuku"]) or empty($_POST["kullanici"]) or empty($_POST["mSifre"]) or empty($_POST["ySifre"]) or empty($_POST["tSifre"]) or empty($_POST["mail"]))
{
	setcookie("bildirim"," * ile belirtilen alanlar bo� b�rak�lamaz");
	header ("Location:index.php?kullanici");
}
else
{
		@include('../inc/baglan.php'); 
		$sorgu=mysql_query("select * from ogretmenler where id=".$id);
		$alanlar=mysql_fetch_array($sorgu);
		
		if($_POST["mSifre"]==$alanlar["sifre"])
		{
			if($_POST["ySifre"]==$_POST["tSifre"])
			{
				@include('../inc/baglan.php');
				
				if($kontrol==0)
				{
					$sql="update ogretmenler set kullanici = '$_POST[isim]',gorev = '$_POST[gorev]',dersYuku = '$_POST[dersYuku]',kadi = '$_POST[kullanici]',sifre = '$_POST[ySifre]',mail = '$_POST[mail]',onay = '1' where id=".$id;
					
					$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkadi"]=$_POST["kullanici"];
					
					if (@mysql_query($sql,$baglan))
						setcookie("bildirim","Bilgiler G�ncellendi");
					else
						setcookie("bildirim","Kay�t Ba�ar�s�z");
				}
				else
					setcookie("bildirim","[ $_POST[kullanici] ] kullan�c�s� sistemde kay�tl�. Farkl� bir kullan�c� ad� deneyiniz.");
			}
			else
				setcookie("bildirim","&#8220;Yeni �ifre&#8221; ile &#8220;�ifre Tekrar�&#8221; uyu�muyor");
		}
		else
			setcookie("bildirim","Giri� yapt���n�z &#8220;Mevcut �ifre&#8221; yanl��");
		
		header ("Location:index.php?kullanici");
}	
?>
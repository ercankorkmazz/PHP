<?php
if((!empty($_POST["kadi"])) and (!empty($_POST["kullanici"])))
{
	// kullan�c� ad� kontrol�
	@include('inc/baglan.php');
	$kontrol=0;
	$sql = mysql_query("select * from ogretmen");
	while($alanlar=mysql_fetch_array($sql))
	{
		if($_POST["kadi"]==$alanlar["kadi"])
			$kontrol=1;
	}
	if($_POST["kadi"]!="admin")
	{
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
						
			$sql="insert into ogretmen (kadi,sifre,kullanici) values ('$_POST[kadi]','$sifre','$_POST[kullanici]')";
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","��retim �yesi Kaydedildi!");
			else
				setcookie("bildirim","Kay�t Ba�ar�s�z!");
		}
		else
		{
				setcookie("bildirim","[ $_POST[kadi] ] kullan�c�s� sistemde kay�tl�. Farkl� bir kullan�c� ad� deneyiniz.");
		}
	}
	else
	{
		setcookie("bildirim","Kullan�c� ad� [ admin ] olamaz.");
	}
}
else
	setcookie("bildirim","&#8220;Ad� Soyad�&#8221; ve &#8220;Kullan�c� Ad�&#8221; n� yaz�n�z!");

header ("Location:index.php?ogretmenler");
?>
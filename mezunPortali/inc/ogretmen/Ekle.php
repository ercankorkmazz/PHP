<?php
if((!empty($_POST["kadi"])) and (!empty($_POST["kullanici"])))
{
	// kullanýcý adý kontrolü
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
				setcookie("bildirim","Öðretim Üyesi Kaydedildi!");
			else
				setcookie("bildirim","Kayýt Baþarýsýz!");
		}
		else
		{
				setcookie("bildirim","[ $_POST[kadi] ] kullanýcýsý sistemde kayýtlý. Farklý bir kullanýcý adý deneyiniz.");
		}
	}
	else
	{
		setcookie("bildirim","Kullanýcý adý [ admin ] olamaz.");
	}
}
else
	setcookie("bildirim","&#8220;Adý Soyadý&#8221; ve &#8220;Kullanýcý Adý&#8221; ný yazýnýz!");

header ("Location:index.php?ogretmenler");
?>
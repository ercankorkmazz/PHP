<?php
// kullanýcý adý kontrolü
@include('inc/baglan.php');
$kontrol=0;

$sql = mysql_query("select * from uyeler");
while($alanlar=mysql_fetch_array($sql))
{
	@include('inc/baglan.php');
	$sec=@mysql_query("select Kadi from uyeler where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"],$baglan);
	$kadiSorgula=@mysql_fetch_array($sec);
	
	if($kadiSorgula["Kadi"]!=$_POST["Kadi"])
	{
		if($_POST["Kadi"]==$alanlar["Kadi"])
			$kontrol=1;
	}
}

if(empty($_POST["mSifre"]) and empty($_POST["ySifre"]) and empty($_POST["tSifre"]))
{
	if(empty($_POST["Kadi"]) or empty($_POST["Ad"]) or empty($_POST["Soyad"]) or empty($_POST["Adres"]) or empty($_POST["VeliAdi"]) or empty($_POST["VeliTel"]) or empty($_POST["VeliEPosta"]) or empty($_POST["GunlukKalori"]))
	{
		setcookie("bildirim"," * ile belirtilen alanlar boþ býrakýlamaz");
		header ("Location:uye.php?#page3");
	}
	else
	{
		@include('inc/baglan.php');
			
		if($kontrol==0)
		{
			$sql="update uyeler set Kadi = '$_POST[Kadi]',Ad = '$_POST[Ad]',Soyad = '$_POST[Soyad]',Adres = '$_POST[Adres]',VeliAdi = '$_POST[VeliAdi]',VeliTel = '$_POST[VeliTel]',VeliEPosta = '$_POST[VeliEPosta]',GunlukKalori = '$_POST[GunlukKalori]' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
			
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Üyelik Bilgileri Güncellendi");
			else
				setcookie("bildirim","Kayýt Baþarýsýz");
		}
		else
			setcookie("bildirim","[ $_POST[Kadi] ] kullanýcýsý sistemde kayýtlý. <br>Farklý bir kullanýcý adý deneyiniz.");
	}
	header ("Location:uye.php?#page3");
}
else if(empty($_POST["Kadi"]) or empty($_POST["Ad"]) or empty($_POST["Soyad"]) or empty($_POST["Adres"]) or empty($_POST["VeliAdi"]) or empty($_POST["VeliTel"]) or empty($_POST["VeliEPosta"]) or empty($_POST["GunlukKalori"]) or empty($_POST["mSifre"]) or empty($_POST["ySifre"]) or empty($_POST["tSifre"]))
{
	setcookie("bildirim"," * ile belirtilen alanlar boþ býrakýlamaz");
	header ("Location:uye.php?#page3");
}
else
{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from uyeler where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"]);
		$alanlar=mysql_fetch_array($sorgu);
		
		if($_POST["mSifre"]==$alanlar["Sifre"])
		{
			if($_POST["ySifre"]==$_POST["tSifre"])
			{
				@include('inc/baglan.php');
				if($kontrol==0)
				{
					$sql="update uyeler set Kadi = '$_POST[Kadi]',Sifre = '$_POST[ySifre]',Ad = '$_POST[Ad]',Soyad = '$_POST[Soyad]',Adres = '$_POST[Adres]',VeliAdi = '$_POST[VeliAdi]',VeliTel = '$_POST[VeliTel]',VeliEPosta = '$_POST[VeliEPosta]',GunlukKalori = '$_POST[GunlukKalori]', Kontrol='1' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
					
					if (@mysql_query($sql,$baglan))
						setcookie("bildirim","Üyelik Bilgileri Güncellendi");
					else
						setcookie("bildirim","Kayýt Baþarýsýz");
				}
				else
					setcookie("bildirim","[ $_POST[Kadi] ] kullanýcýsý sistemde kayýtlý. Farklý bir kullanýcý adý deneyiniz.");
			}
			else
				setcookie("bildirim","&#8220;Yeni Þifre&#8221; ile &#8220;Þifre Tekrarý&#8221; uyuþmuyor");
		}
		else
			setcookie("bildirim","Giriþ yaptýðýnýz &#8220;Mevcut Þifre&#8221; yanlýþ");
		
		header ("Location:uye.php?#page3");
}	
?>
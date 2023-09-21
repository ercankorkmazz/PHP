<?php
if($_POST["tur"]==0)
	$tablo="kullanici";
else
	$tablo="ogretmen";

if(!empty($_POST["mail"]))
{
	@include('inc/baglan.php'); 
	$kontrol=0;
	$mesaj="";
	$baglanti="<a href='http://egitim.kku.edu.tr/mezun/index.php?girisYap'>Mezun Portalý - Giriþ Yap</a>";
	$header = "Content-Type: text/html; Charset=iso-8859-9\r\n";
	$sorgu=mysql_query("select * from $tablo");
	
	while($alanlar=mysql_fetch_array($sorgu))
	{
		if($alanlar["mail"]==$_POST["mail"])
		{
			$kontrol=1;
			$mesaj .= "Sayýn <strong>$alanlar[kullanici]</strong> mezun portalý kullanýcý bilgileriniz aþaðýdaki gibidir.<br><p><strong>Kullanýcý Adý:</strong> $alanlar[kadi]<br><strong>Þifre:</strong> $alanlar[sifre]</p><hr>";
		}
	}
	
	if($kontrol==0)
		setcookie("mailBilgi","Mail adresi bulunamadý.");
	else
	{
		mail("$_POST[mail]","K.Ü. Eðitim Fakültesi Mezun Portalý - Þifremi Unuttum","<h3>Kýrýkkale Üniversitesi  Mezun Portalý</h3>$mesaj$baglanti",$header);
		setcookie("mailBilgi","&#8220;Kullanýcý Adý&#8221; ve &#8220;Þifre&#8221; ilgili mail adresine gönderildi.");
	}
}
else
	setcookie("mailBilgi","Mail adresi yazýnýz.");
	
	header ("Location:index.php?sifremiUnuttum");	
?>
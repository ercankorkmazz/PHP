<?php
if(!empty($_POST["mail"]))
{
	@include('../inc/baglan.php'); 
	$kontrol=0;
	$mesaj="";
	$header = "Content-Type: text/html; Charset=iso-8859-9\r\n";
	$sorgu=mysql_query("select * from ogretmenler");
	while($alanlar=mysql_fetch_array($sorgu))
	{
		if($alanlar["mail"]==$_POST["mail"])
		{
			$kontrol=1;
			$mesaj .= "Sayýn <strong>$alanlar[kullanici]</strong><br><br><p><strong>Kullanýcý Adý:</strong> $alanlar[kadi]<br><strong>Þifre:</strong> $alanlar[sifre]</p><hr>";
		}
	}
	
	if($kontrol==0)
		setcookie("mailBilgi","Mail adresi bulunamadý.");
	else
	{
		mail("$_POST[mail]","Kýrýkkale Üniversitesi Derslik Yönetim Sistemi - Þifremi Unuttum","<h3 align='center'>Kýrýkkale Üniversitesi Derslik Yönetim Sistemi</h3>$mesaj",$header);
		setcookie("mailBilgi","&#8220;Kullanýcý Adý&#8221; ve &#8220;Þifre&#8221; ilgili mail adresine gönderildi.");
	}
}
else
	setcookie("mailBilgi","Mail adresi yazýnýz.");
	
	header ("Location:index.php?sifremiUnuttum");	
?>
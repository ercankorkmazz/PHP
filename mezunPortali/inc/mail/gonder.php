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
	$baglanti="<a href='http://egitim.kku.edu.tr/mezun/index.php?girisYap'>Mezun Portal� - Giri� Yap</a>";
	$header = "Content-Type: text/html; Charset=iso-8859-9\r\n";
	$sorgu=mysql_query("select * from $tablo");
	
	while($alanlar=mysql_fetch_array($sorgu))
	{
		if($alanlar["mail"]==$_POST["mail"])
		{
			$kontrol=1;
			$mesaj .= "Say�n <strong>$alanlar[kullanici]</strong> mezun portal� kullan�c� bilgileriniz a�a��daki gibidir.<br><p><strong>Kullan�c� Ad�:</strong> $alanlar[kadi]<br><strong>�ifre:</strong> $alanlar[sifre]</p><hr>";
		}
	}
	
	if($kontrol==0)
		setcookie("mailBilgi","Mail adresi bulunamad�.");
	else
	{
		mail("$_POST[mail]","K.�. E�itim Fak�ltesi Mezun Portal� - �ifremi Unuttum","<h3>K�r�kkale �niversitesi  Mezun Portal�</h3>$mesaj$baglanti",$header);
		setcookie("mailBilgi","&#8220;Kullan�c� Ad�&#8221; ve &#8220;�ifre&#8221; ilgili mail adresine g�nderildi.");
	}
}
else
	setcookie("mailBilgi","Mail adresi yaz�n�z.");
	
	header ("Location:index.php?sifremiUnuttum");	
?>
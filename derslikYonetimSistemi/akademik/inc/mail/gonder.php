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
			$mesaj .= "Say�n <strong>$alanlar[kullanici]</strong><br><br><p><strong>Kullan�c� Ad�:</strong> $alanlar[kadi]<br><strong>�ifre:</strong> $alanlar[sifre]</p><hr>";
		}
	}
	
	if($kontrol==0)
		setcookie("mailBilgi","Mail adresi bulunamad�.");
	else
	{
		mail("$_POST[mail]","K�r�kkale �niversitesi Derslik Y�netim Sistemi - �ifremi Unuttum","<h3 align='center'>K�r�kkale �niversitesi Derslik Y�netim Sistemi</h3>$mesaj",$header);
		setcookie("mailBilgi","&#8220;Kullan�c� Ad�&#8221; ve &#8220;�ifre&#8221; ilgili mail adresine g�nderildi.");
	}
}
else
	setcookie("mailBilgi","Mail adresi yaz�n�z.");
	
	header ("Location:index.php?sifremiUnuttum");	
?>
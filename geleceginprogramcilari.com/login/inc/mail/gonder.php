<?php
if(!empty($_POST["eposta"]) and !empty($_POST["kadi"]))
{
	$kontrol=0;
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from kullanicilar where kadi='$_POST[kadi]' and eposta='$_POST[eposta]'");
	$alanlar=mysql_fetch_array($sorgu);
	$kontrol=@mysql_num_rows($sorgu);
	
	if($kontrol==1)
	{
		require("class.phpmailer.php");
	
		$mail = new PHPMailer();
		
		$mail->IsSMTP();                                   // send via SMTP
		$mail->Host     = "mail.geleceginprogramcilari.com"; // SMTP servers
		$mail->SMTPAuth = true;     // turn on SMTP authentication
		$mail->Username = "bilgi@geleceginprogramcilari.com";  // SMTP username
		$mail->Password = "120805030Bote"; // SMTP password
		
		$mail->From     = "Ercan@geleceginprogramcilari.com"; // smtp kullan�c� ad�n�z ile ayn� olmal�
		$mail->Fromname = "Ercan";
		$mail->IsHTML(true);
		$mail->AddAddress("$_POST[eposta]"); // Maili gonderecegimiz kisi yani alici
		$mail->Subject  = "Gelece�in Programc�lar� - �ifremi Unuttum";
		$mail->Body     = "geleceginprogramcilari.com y�netici bilgileri a�a��daki gibidir.<br/><p><strong>Kullan�c� Ad�:</strong> $alanlar[kadi]<br><strong>�ifre:</strong> $alanlar[sifre]</p>";
		$mail->Send();		
		
		setcookie("girisBilgi","&#8220;Kullan�c� Ad�&#8221; ve &#8220;�ifre&#8221; ilgili mail adresine g�nderildi.");
	}
	if($kontrol==0)
		setcookie("girisBilgi","&#8220;$_POST[kadi]&#8221; ve &#8220;$_POST[eposta]&#8221;  bulunamad�.");
}
else
	setcookie("girisBilgi","&#8220;Kullan�c� Ad�&#8221; ve &#8220;E-Posta&#8221; bo� b�rak�lamaz.");
	
	header ("Location:index.php?sifremiUnuttum");	
?>
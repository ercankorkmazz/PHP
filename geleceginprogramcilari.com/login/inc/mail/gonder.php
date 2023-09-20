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
		
		$mail->From     = "Ercan@geleceginprogramcilari.com"; // smtp kullanýcý adýnýz ile ayný olmalý
		$mail->Fromname = "Ercan";
		$mail->IsHTML(true);
		$mail->AddAddress("$_POST[eposta]"); // Maili gonderecegimiz kisi yani alici
		$mail->Subject  = "Geleceðin Programcýlarý - Þifremi Unuttum";
		$mail->Body     = "geleceginprogramcilari.com yönetici bilgileri aþaðýdaki gibidir.<br/><p><strong>Kullanýcý Adý:</strong> $alanlar[kadi]<br><strong>Þifre:</strong> $alanlar[sifre]</p>";
		$mail->Send();		
		
		setcookie("girisBilgi","&#8220;Kullanýcý Adý&#8221; ve &#8220;Þifre&#8221; ilgili mail adresine gönderildi.");
	}
	if($kontrol==0)
		setcookie("girisBilgi","&#8220;$_POST[kadi]&#8221; ve &#8220;$_POST[eposta]&#8221;  bulunamadý.");
}
else
	setcookie("girisBilgi","&#8220;Kullanýcý Adý&#8221; ve &#8220;E-Posta&#8221; boþ býrakýlamaz.");
	
	header ("Location:index.php?sifremiUnuttum");	
?>
<?php
if(!empty($_POST["mail"]) and !empty($_POST["kadi"]))
{
	$kontrol=0;

	@include('login/inc/baglan.php'); 
	$sorgu=mysql_query("select * from uyelik where kadi='$_POST[kadi]' and email='$_POST[mail]'");
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
		$mail->AddAddress("$_POST[mail]"); // Maili gonderecegimiz kisi yani alici
		$mail->Subject  = "Geleceðin Programcýlarý - Þifremi Unuttum";
		$mail->Body     = "Sayýn <strong>$alanlar[adSoyad]</strong> geleceginprogramcilari.com kullanýcý bilgileriniz aþaðýdaki gibidir.<br/><p><strong>Kullanýcý Adý:</strong> $alanlar[kadi]<br><strong>Þifre:</strong> $alanlar[sifre]</p><hr/>";
		$mail->Send();
		
		setcookie("bilgi","[ Kullanýcý Adý ] ve [ Þifre ] ilgili mail adresine gönderildi.");
		setcookie("renk","#3C0");
	}
	if($kontrol==0)
		setcookie("bilgi","[ Kullanýcý Adý : $_POST[kadi] ] ve [ E-Posta : $_POST[mail] ]  bulunamadý.");
}
else
	setcookie("bilgi","[ Kullanýcý Adý ] ve [ E-Posta ] alanlarý boþ býrakýlamaz.");
	
	header ("Location:index.php?sifreYenile");	
?>
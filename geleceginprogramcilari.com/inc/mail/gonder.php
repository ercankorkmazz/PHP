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
		
		$mail->From     = "Ercan@geleceginprogramcilari.com"; // smtp kullan�c� ad�n�z ile ayn� olmal�
		$mail->Fromname = "Ercan";
		$mail->IsHTML(true);
		$mail->AddAddress("$_POST[mail]"); // Maili gonderecegimiz kisi yani alici
		$mail->Subject  = "Gelece�in Programc�lar� - �ifremi Unuttum";
		$mail->Body     = "Say�n <strong>$alanlar[adSoyad]</strong> geleceginprogramcilari.com kullan�c� bilgileriniz a�a��daki gibidir.<br/><p><strong>Kullan�c� Ad�:</strong> $alanlar[kadi]<br><strong>�ifre:</strong> $alanlar[sifre]</p><hr/>";
		$mail->Send();
		
		setcookie("bilgi","[ Kullan�c� Ad� ] ve [ �ifre ] ilgili mail adresine g�nderildi.");
		setcookie("renk","#3C0");
	}
	if($kontrol==0)
		setcookie("bilgi","[ Kullan�c� Ad� : $_POST[kadi] ] ve [ E-Posta : $_POST[mail] ]  bulunamad�.");
}
else
	setcookie("bilgi","[ Kullan�c� Ad� ] ve [ E-Posta ] alanlar� bo� b�rak�lamaz.");
	
	header ("Location:index.php?sifreYenile");	
?>
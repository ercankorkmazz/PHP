<?php
	function mailGonder($to,$subject,$text,$dil)
	{
		@include('login/inc/baglan.php');		
		$sorgu=@mysql_query("select * from kullanici where id=1");
		$kullanici=@mysql_fetch_array($sorgu);
		
		$language="iso-8859-9";
		if($dil=="TR")
			$language="iso-8859-9";
		else if($dil=="AR")
			$language="UTF-8";
		include 'class.phpmailer.php';
		$mail=new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth=true;
		$mail->Host="ssl://smtp.gmail.com:465";
		$mail->Username="$kullanici[eposta]";
		$mail->Password="$kullanici[gmailSifresi]";
		$mail->From="$kullanici[eposta]";
		$mail->FromName="Mahmut UCGUL";
		$mail->CharSet="$language";
		$mail->AddAddress($to);
		$mail->Subject=$subject;
		$mail->IsHTML(true);
		$mail->Body=$text;
		if($mail->Send()) return true;
		else echo $mail->ErrorInfo;
	}
	//@mailGonder("ercan.korkmaz@hotmail.com.tr","Konu","وفيما يلي من عنوان فشل","AR");
?>
<?php
		if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
			$sayfaDili="AR";
		else
			$sayfaDili="TR";
			
		@include('login/inc/baglan.php');		
		$sorgu=@mysql_query("select * from kullanici where id=1");
		$kullanici=@mysql_fetch_array($sorgu);
			
		@include("mail/mail.php");
		$mesaj = "
			<table width='100%' border='0'>
				<tr>
					<td style='width:130px;background:#0CF;border-radius:2px;padding:5px;'><strong>Adi Soyadi:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='4'>".$_POST["adisoyadi"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Telefon:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='2'>".$_POST["telefon"]."</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>E-Posta:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["eposta"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Konu:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='4'>".$_POST["konu"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;' colspan='5'><strong>Mesaj:</strong> </td>
				</tr>
				<tr>
					<td style='border-bottom:1px solid #0CF;' colspan='5'>".$_POST["mesaj"]."</td>
				</tr>
			</table>
		";
		
		if(@mailGonder($kullanici["eposta"],"Ýletiþim Formu : ".$_POST["adisoyadi"],"$mesaj","$sayfaDili"))
			header ("Location:index.php?mesajIletildi=1");
		else
			header ("Location:index.php?mesajIletildi=0");
?>
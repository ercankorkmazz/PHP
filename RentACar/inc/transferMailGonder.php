<?php
		if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
		{
			$sayfaDili="AR";
			@include('login/inc/baglanAR.php');		
			$sorgu=@mysql_query("select * from transfer where id=".$_GET["transferOnay"]);
			$alanlar=@mysql_fetch_array($sorgu);
			$alisYeri = $alanlar["AYEN"];
			$vasirYeri = $alanlar["DYEN"];
		}
		else
		{
			$sayfaDili="TR";
			@include('login/inc/baglan.php');		
			$sorgu=@mysql_query("select * from transfer where id=".$_GET["transferOnay"]);
			$alanlar=@mysql_fetch_array($sorgu);
			$alisYeri = $alanlar["AYTR"];
			$vasirYeri = $alanlar["DYTR"];
		}
			
		if($_POST["kisiSayisi"]>=1 && $_POST["kisiSayisi"]<=4)
		{
			if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
				$fiyat = $alanlar["K1_4"]." TL"; 
			else if($_COOKIE["paraBirimi"]==2)
				$fiyat = dovizGetir($alanlar["K1_4"], 1, 2)." &#8364;"; 
			else if($_COOKIE["paraBirimi"]==3)
				$fiyat = dovizGetir($alanlar["K1_4"], 1, 3)." $";	
		}
		else if($_POST["kisiSayisi"]>=5 && $_POST["kisiSayisi"]<=8)
		{
			if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
				$fiyat = $alanlar["K5_8"]." TL"; 
			else if($_COOKIE["paraBirimi"]==2)
				$fiyat = dovizGetir($alanlar["K5_8"], 1, 2)." &#8364;"; 
			else if($_COOKIE["paraBirimi"]==3)
				$fiyat = dovizGetir($alanlar["K5_8"], 1, 3)." $";
		}
		else if($_POST["kisiSayisi"]>=9 && $_POST["kisiSayisi"]<=15)
		{
			if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
				$fiyat = $alanlar["K9_15"]." TL"; 
			else if($_COOKIE["paraBirimi"]==2)
				$fiyat = dovizGetir($alanlar["K9_15"], 1, 2)." &#8364;"; 
			else if($_COOKIE["paraBirimi"]==3)
				$fiyat = dovizGetir($alanlar["K9_15"], 1, 3)." $";	
		}
		else if($_POST["kisiSayisi"]>=16)
		{
			if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
				$fiyat = $alanlar["K16_30"]." TL"; 
			else if($_COOKIE["paraBirimi"]==2)
				$fiyat = dovizGetir($alanlar["K16_30"], 1, 2)." &#8364;"; 
			else if($_COOKIE["paraBirimi"]==3)
				$fiyat = dovizGetir($alanlar["K16_30"], 1, 3)." $";
		}
		@include('login/inc/baglan.php');		
		$sorgu=@mysql_query("select * from kullanici where id=1");
		$kullanici=@mysql_fetch_array($sorgu);
			
		@include("mail/mail.php");
		$mesaj = "
			<table width='100%' border='0'>
				<tr>
					<td style='width:130px;background:#0CF;border-radius:2px;padding:5px;'><strong>Adi Soyadi:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["adisoyadi"]."</td>
					<td style='width:15px;'>&nbsp;</td>
					<td style='width:150px;background:#0CF;border-radius:2px;padding:5px;'><strong>Telefon:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["telefon"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>E-Posta:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["eposta"]."</td>
					<td style='width:15px;'>&nbsp;</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Ulke:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["ulke"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Havayolu Sirketi:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["ucusfirmasi"]."</td>
					<td style='width:15px;'>&nbsp;</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Kalkis Havalimani:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["kalkis"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Ucus No:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["ucusno"]."</td>
					<td style='width:15px;'>&nbsp;</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Kisi Sayisi:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["kisiSayisi"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Alis Yeri:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$alisYeri."</td>
					<td style='width:15px;'>&nbsp;</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Varis Yeri:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$vasirYeri."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Fiyat:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$fiyat."</td>
					<td style='width:15px;'>&nbsp;</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Mesafe:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$alanlar["mesafe"]." KM</td>
				</tr>
			</table>
		";
		
		if(@mailGonder($kullanici["eposta"],"Transfer Rezervasyonu : ".$_POST["adisoyadi"],"$mesaj","$sayfaDili"))
			header ("Location:index.php?rezervasyonTamamlandi=1");
		else
			header ("Location:index.php?rezervasyonTamamlandi=0");
?>
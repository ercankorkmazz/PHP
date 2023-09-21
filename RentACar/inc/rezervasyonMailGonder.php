<?php
	if(!empty($_POST["adisoyadi"]) && !empty($_POST["email"]) && !empty($_POST["havayoluSirketi"]) && !empty($_POST["ucusno"]) && !empty($_POST["telefon"]))
	{
		if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
			$sayfaDili="AR";
		else
			$sayfaDili="TR";
			
		$ekstralar = $_POST["extra"];
		$ekstralarDeger = $_POST["price"];
		$ekstralarValue = $_POST["extraValue"];
		$ekstaToplam = 0;
		$eksta = "";
		for($i=1;$i<=6;$i++)
		{
			if($ekstralar[$i]=="1")
			{
				$eksta .= "$ekstralarValue[$i] (<span style='color:#F00;'><strong>$ekstralarDeger[$i] x $_POST[gunSayisi]</strong>) </span><strong>".$ekstralarDeger[$i]*$_POST["gunSayisi"]."$_POST[paraBirimi]<br></strong>";
				$ekstaToplam += $ekstralarDeger[$i]*$_POST["gunSayisi"];
			}
		}
		$toplamTutar = ($_POST["gunlukTutar"]*$_POST["gunSayisi"]) + $ekstaToplam;
		
		@include('login/inc/baglan.php');		
		$sorgu=@mysql_query("select * from kullanici where id=1");
		$kullanici=@mysql_fetch_array($sorgu);
		
		$sorgu=@mysql_query("select * from araclar where id=".$_GET["rezervasyon"]);
		$alanlar=@mysql_fetch_array($sorgu);
		
		if($alanlar["vites"]=="1")
			$vites = "Manual";
		else if($alanlar["vites"]=="2")
			$vites = "Otomatik";
		else if($alanlar["vites"]=="3")
			$vites = "Tiptronik";
			
		if($alanlar["yakit"]=="1")
			$yakit = "Benzin";
		else if($alanlar["yakit"]=="2")
			$yakit = "Dizel";
		else if($alanlar["yakit"]=="3")
			$yakit = "LPG";
			
		if($_POST["odeme"]=="0")
			$odeme = "Nakit";
		else if($_POST["odeme"]=="1")
			$odeme = "Kredi Karti";
		else if($_POST["odeme"]=="2")
			$odeme = "Havale / EFT";
		
		
		@include("mail/mail.php");
		$mesaj = "
			<table width='100%' border='0'>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px; tex-align:center;' colspan='5'>
						<strong><strong>Araç Bilgileri</strong></strong> 
					</td>
				</tr>
				<tr>
					<td style='width:130px;background:#0CF;border-radius:2px;padding:5px;'><strong>Marka/Model:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='4'>".$alanlar["baslik"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Vites:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='2'>".$vites."</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Yakit:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$yakit."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Kisi Kapasitesi:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='2'>".$alanlar["koltuk"]."</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Valiz:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$alanlar["canta"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px; tex-align:center;' colspan='5'>
						<strong><strong>Ulasim Bilgileri</strong></strong> 
					</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Alis Yeri:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='2'>".$_POST["alisYeri"]."</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Varis Yeri:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["donusYeri"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Alis Tarihi:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='2'>".$_POST["alisTarihi"]."</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Donus Tarihi:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["donusTarihi"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Alis Zamani:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='2'>".$_POST["alisZamani"]."</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Donus Zamani:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["donusZamani"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px; tex-align:center;' colspan='5'>
						<strong><strong>Kisisel Bilgiler</strong></strong> 
					</td>
				</tr>
				<tr>
					<td style='width:130px;background:#0CF;border-radius:2px;padding:5px;'><strong>Adi Soyadi:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='2'>".$_POST["adisoyadi"]."</td>
					<td style='width:150px;background:#0CF;border-radius:2px;padding:5px;'><strong>Telefon:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["telefon"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>E-Posta:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='2'>".$_POST["email"]."</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Ulke:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["ulke"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Havayolu Sirketi:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='2'>".$_POST["havayoluSirketi"]."</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Kalkis Havalimani:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$_POST["kalkisHavalimani"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Ucus No:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='2'>".$_POST["ucusno"]."</td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Odeme Turu:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$odeme."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Ozel Istekler:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='4'>".$_POST["ozelistek"]."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px; tex-align:center;' colspan='5'>
						<strong><strong>Odeme Bilgileri</strong></strong> 
					</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Gunluk Fiyati:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='2'><strong>".$_POST["gunlukTutar"]."</strong></td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Gün Sayisi:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'><strong>".$_POST["gunSayisi"]."</strong></td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Toplam Ekstra:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='2'><strong>".$ekstaToplam." $_POST[paraBirimi]</strong></td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Ekstralar:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'>".$eksta."</td>
				</tr>
				<tr>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Kiralama Bedeli:</strong> </td>
					<td style='border-bottom:1px solid #0CF;' colspan='2'><strong>".$_POST["gunlukTutar"]*$_POST["gunSayisi"]." $_POST[paraBirimi]</strong></td>
					<td style='background:#0CF;border-radius:2px;padding:5px;'><strong>Toplam Tutar:</strong> </td>
					<td style='border-bottom:1px solid #0CF;'><strong>".$toplamTutar." $_POST[paraBirimi]</strong></td>
				</tr>
			</table>
		";
		
		if(@mailGonder($kullanici["eposta"],"Araç Rezervasyonu : ".$_POST["adisoyadi"],"$mesaj","$sayfaDili"))
			header ("Location:index.php?rezervasyonTamamlandi=1");
		else
			header ("Location:index.php?rezervasyonTamamlandi=0");
	}
	else
	{
		setcookie("bildirim",$dil["formBosAlanlar"]);
		header ("Location:index.php?rezervasyon=".$_GET["rezervasyon"]);
	}
?>
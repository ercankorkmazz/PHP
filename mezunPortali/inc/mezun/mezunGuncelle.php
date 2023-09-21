<?php
if((!empty($_POST["tcNo"])) and (!empty($_POST["okulNo"])) and (!empty($_POST["adSoyad"])) and (!empty($_POST["cepTel"])) and (!empty($_POST["ePostaK"])) and (!empty($_POST["adres"])) and (!empty($_POST["kadi"])) and (!empty($_POST["mezuniyetYili"])) and ($_POST["bolumNo"]!=0))
		{
			@include('inc/baglan.php');
			
			$sql="update mezun set 
			tcNo = '$_POST[tcNo]',
			okulNo = '$_POST[okulNo]',
			bolumNo = '$_POST[bolumNo]',
			adSoyad = '$_POST[adSoyad]',
			babaAdi = '$_POST[babaAdi]',
			anaAdi = '$_POST[anaAdi]',
			dogumTarihi = '$_POST[dogumTarihi]',
			dogumYeri = '$_POST[dogumYeri]',
			medeniHali = '$_POST[medeniHali]',
			kanGrubu = '$_POST[kanGrubu]',
			adres = '$_POST[adres]',
			cepTel = '$_POST[cepTel]',
			isTel = '$_POST[isTel]',
			evTel = '$_POST[evTel]',
			fax = '$_POST[fax]',
			ePostaK = '$_POST[ePostaK]',
			ePostaI = '$_POST[ePostaI]',
			calismaDurumu = '$_POST[calismaDurumu]',
			isYeriAdi = '$_POST[isYeriAdi]',
			departman = '$_POST[departman]',
			pozisyon = '$_POST[pozisyon]',
			diger = '$_POST[diger]',
			ilkogretim = '$_POST[ilkogretim]',
			ortaogretim = '$_POST[ortaogretim]',
			ylisans = '$_POST[yukseklisans]',
			mezuniyetYili = '$_POST[mezuniyetYili]'
			 where id=".$_COOKIE["kkuMezunkID"];	
			
			if (@mysql_query($sql,$baglan))
			{
				if($_POST["kadi"]!="admin")
				{
					// kullanýcý adý kontrolü
					@include('inc/baglan.php');
					$kontrol=0;	
					$sql = mysql_query("select * from kullanici");
					while($alanlar=mysql_fetch_array($sql))
					{
						if($_POST["kadi"]==$alanlar["kadi"])
							$kontrol=1;	
					}
					if($kontrol==0)
					{
						$karakter = "QWERTYUIPASDFGHJKLZXCVBNM123456789";
						$karakterSayisi=strlen($karakter);
						$sifre=null;
						for($i=1;$i<=5;$i++)
						{
							$sayi=rand(0,$karakterSayisi-1);
							$sifre .= $karakter[$sayi];	
						}
						
						$sql="insert into kullanici (kadi,sifre,kullanici,mail) values ('$_POST[kadi]','$sifre','$_POST[adSoyad]','$_POST[ePostaK]')";
						
						if (@mysql_query($sql,$baglan))
						{							
							@include('inc/baglan.php');
							$sec=@mysql_query("select * from kullanici order by id desc limit 0,1",$baglan);
							$alanlar=@mysql_fetch_array($sec);
							
							$header = "Content-Type: text/html; Charset=iso-8859-9\r\n";
							$mesaj = "Sayýn <strong>$alanlar[kullanici]</strong> mezun portalý kullanýcý bilgileriniz aþaðýdaki gibidir.<br><br><p><strong>Kullanýcý Adý:</strong> $alanlar[kadi]<br><strong>Þifre:</strong> $alanlar[sifre]</p>";
							$baglanti="<a href='http://egitim.kku.edu.tr/mezun/index.php?girisYap'>Mezun Portalý - Giriþ Yap</a>";
							
							mail("$_POST[ePostaK]","K.Ü. Eðitim Fakültesi Mezun Portalý - Kullanýcý Bilgileriniz","<h3 align='center'>Kýrýkkale Üniversitesi Mezun Portalý</h3>$mesaj$baglanti",$header);
							
							$sql="update mezun set kID = '$alanlar[id]' where id=".$_COOKIE["kkuMezunkID"];	
			 				if (@mysql_query($sql,$baglan))
							{
								setcookie("bildirim","Kaydýnýz yapýldý! Sisteme giriþ bilgileriniz kiþisel mail adresinize gönderilmiþtir.");
								header ("Location:index.php");
							}
							setcookie("kkuMezunkID","");
						}
						else
						{
							setcookie("bildirim","Kayýt Baþarýsýz");
							setcookie("kkuMezunkID","");
							header ("Location:index.php?uyeOl");
						}
					}
					else
					{
						setcookie("bildirim","[ $_POST[kadi] ] kullanýcýsý sistemde kayýtlý. Farklý bir kullanýcý adý deneyiniz.");
						header ("Location:index.php?uyeOl");
					}
				}
				else
				{
					setcookie("bildirim","Kullanýcý adý [ admin ] olamaz.");
					header ("Location:index.php?uyeOl");
				}
			}
			else
			{
				setcookie("bildirim","Kayýt Baþarýsýz!");
				setcookie("kkuMezunkID","");
				header ("Location:index.php?uyeOl");
			}
		}
		else
		{
				setcookie("bildirim"," (*) ile belirtilen alanlarý doldurunuz!");
				header ("Location:index.php?uyeOl");
		}
?>
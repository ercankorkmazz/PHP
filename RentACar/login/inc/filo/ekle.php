<?php
	if(isset($_POST["baslik"]))
	{
		if(!empty($_POST["baslik"]) && !empty($_POST["F1_3"]) && !empty($_POST["F4_7"]) && !empty($_POST["F8_15"]) && !empty($_POST["F16_21"]) && !empty($_POST["F22_28"]) && !empty($_POST["F29_99"]) && !empty($_FILES["dosya"]["name"]))
		{
				$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
				$format=end($dosyaAdi);
				$resim=date('d_m_Y_His').".".$format;
				$resimYolu="../img/arac/".$resim;
				
				if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
				{			
					@copy($_FILES['dosya']['tmp_name'],$resimYolu);
					
					@include('inc/baglan.php'); 
					$sql="insert into araclar (baslik,koltuk,canta,yakit,vites,F1_3,F4_7,F8_15,F16_21,F22_28,F29_99,URL) values ('$_POST[baslik]','$_POST[koltuk]','$_POST[canta]','$_POST[yakit]','$_POST[vites]','$_POST[F1_3]','$_POST[F4_7]','$_POST[F8_15]','$_POST[F16_21]','$_POST[F22_28]','$_POST[F29_99]','$resim')";
					
					if (@mysql_query($sql,$baglan))
					{
						setcookie("bildirim","Araç Kaydý Baþarýlý");
						header("location: index.php?aracfilosu");	
					}
					else
					{
						unlink($resimYolu);
						setcookie("bildirim","Kayýt baþarýsýz. Lütfen daha sonra tekrar deneyiniz.");
						header("location: index.php?aracfilosu");
					}
				}
				else
				{
					setcookie("bildirim","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
					header("location: index.php?yeniarac");
				}
		}
		else
		{
			setcookie("bildirim","* ile belirtilen alanlar boþ býrakýlamaz!");
			header("location: index.php?yeniarac");
		}
	}
?>
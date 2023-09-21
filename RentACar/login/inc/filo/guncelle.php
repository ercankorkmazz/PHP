<?php
	if(isset($_POST["baslik"]))
	{
		if(!empty($_POST["baslik"]) && !empty($_POST["F1_3"]) && !empty($_POST["F4_7"]) && !empty($_POST["F8_15"]) && !empty($_POST["F16_21"]) && !empty($_POST["F22_28"]) && !empty($_POST["F29_99"]))
		{
			if($_FILES['dosya']["name"]!="")
			{
				@include('inc/baglan.php'); 
				$sql=@mysql_query("select URL from araclar where id=".$_GET["aracduzenle"]);
				$URLgetir=@mysql_fetch_array($sql);
				$url="../img/arac/".$URLgetir["URL"];
				unlink("$url");
				
				$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
				$format=end($dosyaAdi);
				$resim=date('d_m_Y_His').".".$format;
				$resimYolu="../img/arac/".$resim;
					
				if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
					{			
						if(@copy($_FILES['dosya']['tmp_name'],$resimYolu))
						{
							@include('inc/baglan.php'); 
							
							$sql="update araclar set baslik = '$_POST[baslik]', koltuk = '$_POST[koltuk]', canta = '$_POST[canta]', yakit = '$_POST[yakit]', vites = '$_POST[vites]', F1_3 = '$_POST[F1_3]', F4_7 = '$_POST[F4_7]', F8_15 = '$_POST[F8_15]', F16_21 = '$_POST[F16_21]', F22_28 = '$_POST[F22_28]', F29_99 = '$_POST[F29_99]', URL = '$resim' where id=".$_GET["aracduzenle"];
							if (@mysql_query($sql,$baglan))
								setcookie("bildirim","Güncelleme Yapýldý");
							else
								setcookie("bildirim","Güncelleme yapýlamadý. Lütfen daha sonra tekrar deneyiniz.");
						}
						else
							setcookie("bildirim","Araç resmi yüklenirken bir sorun oluþtur. Lütfen daha sonra tekrar deneyiniz.");
					}
					else
						setcookie("bildirim","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
			}
			else
			{
				$kontrol=0;
				@include('inc/baglan.php'); 
				$sql="update araclar set baslik = '$_POST[baslik]', koltuk = '$_POST[koltuk]', canta = '$_POST[canta]', yakit = '$_POST[yakit]', vites = '$_POST[vites]', F1_3 = '$_POST[F1_3]', F4_7 = '$_POST[F4_7]', F8_15 = '$_POST[F8_15]', F16_21 = '$_POST[F16_21]', F22_28 = '$_POST[F22_28]', F29_99 = '$_POST[F29_99]' where id=".$_GET["aracduzenle"];
				if (@mysql_query($sql,$baglan))
					setcookie("bildirim","Güncelleme Yapýldý");
				else
					setcookie("bildirim","Güncelleme yapýlamadý. Lütfen daha sonra tekrar deneyiniz.");
			}
		}
		else
			setcookie("bildirim","* ile belirtilen alanlar boþ býrakýlamaz!");
			
		header("location: index.php?aracduzenle=".$_GET["aracduzenle"]);
	}
?>
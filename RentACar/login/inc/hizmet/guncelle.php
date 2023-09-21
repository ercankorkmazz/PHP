<?php
	//$icerikTR=mb_convert_encoding($_POST["IcerikTR"], "UTF-8", "ISO-8859-9");     UTF-8 to ISO-8859-9
	if(isset($_POST["IcerikTR"]))
	{
		if(!empty($_POST["BaslikEN"]) && !empty($_POST["BaslikTR"]) && !empty($_POST["BaslikAR"]))
		{
			if($_FILES['dosya']["name"]!="")
			{
				@include('inc/baglan.php'); 
				$sql=@mysql_query("select URL from sayfalar where id=".$_GET["hizmetduzenle"]);
				$URLgetir=@mysql_fetch_array($sql);
				$url="../img/home/hizmetler/".$URLgetir["URL"];
				unlink("$url");
				
				$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
				$format=end($dosyaAdi);
				$resim=date('d_m_Y_His').".".$format;
				$resimYolu="../img/home/hizmetler/".$resim;
					
				if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
					{			
						if(@copy($_FILES['dosya']['tmp_name'],$resimYolu))
						{
							$kontrol=0;
							@include('inc/baglanAR.php'); 
							$sql="update sayfalar set BaslikAR = '$_POST[BaslikAR]',IcerikAR = '$_POST[IcerikAR]' where id=".$_GET["hizmetduzenle"];
							if (@mysql_query($sql,$baglanAR))
								$kontrol=1;
							else
								setcookie("bildirim","Güncelleme yapýlamadý. Lütfen daha sonra tekrar deneyiniz.");
								
							if($kontrol==1)
							{
								$sql="update sayfalar set BaslikTR = '$_POST[BaslikTR]', BaslikEN = '$_POST[BaslikEN]', IcerikTR = '$_POST[IcerikTR]', IcerikEN = '$_POST[IcerikEN]', URL = '$resim' where id=".$_GET["hizmetduzenle"];
								if (@mysql_query($sql,$baglanAR))
									setcookie("bildirim","Güncelleme Yapýldý");
								else
									setcookie("bildirim","Güncelleme yapýlamadý. Lütfen daha sonra tekrar deneyiniz.");
							}
						}
						else
							setcookie("bildirim","Küçük resim yüklenirken bir sorun oluþtur. Lütfen daha sonra tekrar deneyiniz.");
					}
					else
						setcookie("bildirim","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
			}
			else
			{
				$kontrol=0;
				@include('inc/baglanAR.php'); 
				$sql="update sayfalar set BaslikAR = '$_POST[BaslikAR]',IcerikAR = '$_POST[IcerikAR]' where id=".$_GET["hizmetduzenle"];
				if (@mysql_query($sql,$baglanAR))
					$kontrol=1;
				else
					setcookie("bildirim","Güncelleme yapýlamadý. Lütfen daha sonra tekrar deneyiniz.");
								
				if($kontrol==1)
				{
					$sql="update sayfalar set BaslikTR = '$_POST[BaslikTR]', BaslikEN = '$_POST[BaslikEN]', IcerikTR = '$_POST[IcerikTR]', IcerikEN = '$_POST[IcerikEN]' where id=".$_GET["hizmetduzenle"];
					if (@mysql_query($sql,$baglanAR))
						setcookie("bildirim","Güncelleme Yapýldý");
					else
						setcookie("bildirim","Güncelleme yapýlamadý. Lütfen daha sonra tekrar deneyiniz.");
				}
			}
		}
		else
			setcookie("bildirim","Baþlýk alanlarý boþ býrakýlamaz!");
			
		header("location: index.php?hizmetduzenle=".$_GET["hizmetduzenle"]);
	}
?>
<?php
	//$icerikTR=mb_convert_encoding($_POST["IcerikTR"], "UTF-8", "ISO-8859-9");     UTF-8 to ISO-8859-9
	if(isset($_POST["IcerikTR"]))
	{
		if(!empty($_POST["BaslikEN"]) && !empty($_POST["BaslikTR"]) && !empty($_POST["BaslikAR"]))
		{
			if(!empty($_FILES["dosya"]["name"]))
			{
				$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
				$format=end($dosyaAdi);
				$resim=date('d_m_Y_His').".".$format;
				$resimYolu="../img/home/hizmetler/".$resim;
				
				if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
				{			
					@copy($_FILES['dosya']['tmp_name'],$resimYolu);
					
					@include('inc/baglanAR.php'); 
					$sql="insert into sayfalar (BaslikTR,BaslikEN,BaslikAR,IcerikTR,IcerikEN,IcerikAR,URL) values ('$_POST[BaslikTR]','$_POST[BaslikEN]','$_POST[BaslikAR]','$_POST[IcerikTR]','$_POST[IcerikEN]','$_POST[IcerikAR]','$resim')";
					if (@mysql_query($sql,$baglanAR))
					{
						setcookie("bildirim","Hizmet Eklendi");
						header("location: index.php?hizmetler");	
					}
					else
					{
						setcookie("bildirim","Kayýt baþarýsýz. Lütfen daha sonra tekrar deneyiniz.");
						header("location: index.php?hizmetler");
					}
				}
				else
				{
					setcookie("bildirim","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
					header("location: index.php?yenihizmet");
				}
			}
			else
			{
				setcookie("bildirim","Küçük Resim Seçiniz");
				header("location: index.php?yenihizmet");
			}
		}
		else
		{
			setcookie("bildirim","Baþlýk alanlarý boþ býrakýlamaz!");
			header("location: index.php?yenihizmet");
		}
	}
?>
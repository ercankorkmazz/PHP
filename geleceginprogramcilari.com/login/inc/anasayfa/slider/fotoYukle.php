<?php
		if(empty($_COOKIE["etkinlikFoto"]))
		{
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			foreach($dosyaAdi as $format) {
				if ($format == end($dosyaAdi))
				{
					$resim=date('d_m_Y_His').".".$format;	
					$resimYolu="../img/slider/".$resim;
				}
			}
			if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
			{		
				if(@copy($_FILES['dosya']['tmp_name'],$resimYolu))
				{
					setcookie("etkinlikFoto",$resim);
					setcookie("bilgi","Resim Yüklendi!");
				}
				else
					setcookie("bilgi","Resim Yüklenemedi!");
			}
			else
				setcookie("bilgi","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
		}
		else
			setcookie("bilgi","Önce yüklediðiniz resmi siliniz!");
		
		header ("Location:index.php?slider");
?>
<?php
		if(empty($_COOKIE["etkinlikFoto"]))
		{
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			foreach($dosyaAdi as $format) {
				if ($format == end($dosyaAdi))
					$resimYolu="../img/slider/".date('d_m_Y_His').".".$format;
			}
			if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
			{		
				$resim=date('d_m_Y_His').".".$format;		
				if(@copy($_FILES['dosya']['tmp_name'],$resimYolu))
				{
					setcookie("etkinlikFoto",$resim);
					setcookie("bildirim","Resim Yüklendi!");
				}
				else
					setcookie("bildirim","Resim Yüklenemedi!");
			}
			else
				setcookie("bildirim","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
		}
		else
			setcookie("bildirim","Once yüklediginiz resmi siliniz!");
		
		header ("Location:index.php?slider");
?>
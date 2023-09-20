<?php
		$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
		foreach($dosyaAdi as $format) {
		if ($format == end($dosyaAdi))
			$resim=date('d_m_Y_His').".".$format;
			$resimYolu="../img/baglanti/".$resim;
		}
		if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
		{					
			if(@copy($_FILES['dosya']['tmp_name'],$resimYolu))
			{
				@include('inc/baglan.php');
				$sql="insert into baglantilar (resim,bilgi,url) values ('$resim','$_POST[bilgi]','$_POST[url]')";
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bilgi","Kayýt Baþarýlý!");
				}
				else
					setcookie("bilgi","Kayýt Baþarýsýz!");
			}
			else
				setcookie("bilgi","Resim Yüklenemedi!");
		}
		else
			setcookie("bilgi","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
				
		header ("Location:index.php?baglantilar");
?>
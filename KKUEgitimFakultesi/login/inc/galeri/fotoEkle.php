<?php
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			foreach($dosyaAdi as $format) {
				if ($format == end($dosyaAdi))
					$resimYolu="../Galeri/img/images/".date('d_m_Y_His').".".$format;
			}
			if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
			{		
				$resim=date('d_m_Y_His').".".$format;
				if(@copy($_FILES['dosya']['tmp_name'],$resimYolu))
				{
					@include('inc/baglan.php');
					
					$sql="insert into fotograflar (albumID,url) values ('$_GET[album]','$resim')";
					
					if (@mysql_query($sql,$baglan))	
						setcookie("bildirim","Fotograf Kaydedildi!");
					else
						setcookie("bildirim","Fotograf Yüklenemedi!");
				}
				else
					setcookie("bildirim","Fotograf Yüklenemedi!");
			}
			else
				setcookie("bildirim","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
			
			header ("Location:index.php?album=$_GET[album]");
?>
<?php
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			
			$format=end($dosyaAdi);
			$resim=date('d_m_Y_His').".".$format;
			$resimYolu="Galeri/img/images/".$resim;
			
			if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
			{	
				if(@copy($_FILES['dosya']['tmp_name'],$resimYolu))
				{
					@include('inc/baglan.php');
					
					$sql="insert into fotograflar (albumID,url) values ('$_GET[albumYonet]','$resim')";
					
					if (@mysql_query($sql,$baglan))	
						setcookie("bildirim","Fotoðraf Kaydedildi!");
					else
						setcookie("bildirim","Fotoðraf Yüklenemedi!");
				}
				else
					setcookie("bildirim","Fotoðraf Yüklenemedi!");
			}
			else
				setcookie("bildirim","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
			
			header ("Location:index.php?albumYonet=$_GET[albumYonet]");
?>
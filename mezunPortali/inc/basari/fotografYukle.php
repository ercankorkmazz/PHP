<?php
		if(empty($_COOKIE["basariFoto"]))
		{
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			$format=end($dosyaAdi);
			$resim=date('d_m_Y_His').".".$format;
			$resimYolu="img/basari/".$resim;
			
			if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
			{			
				if(@copy($_FILES['dosya']['tmp_name'],$resimYolu))
				{
					setcookie("basariFoto",$resim);
					setcookie("bildirim","Resim Y�klendi!");
				}
				else
					setcookie("bildirim","Resim Y�klenemedi!");
			}
			else
				setcookie("bildirim","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
		}
		else
			setcookie("bildirim","�nce y�kl� resmi siliniz!");
		
		header ("Location:index.php?basarilarYonet");
?>
<?php
		@include('inc/baglan.php');
		$sorgu=mysql_query("select * from basarilar where id=".$_GET["basariYonet"]);
		$alanlar=mysql_fetch_array($sorgu);

		if(empty($alanlar['url']))
		{
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			$format=end($dosyaAdi);
			$resim=date('d_m_Y_His').".".$format;
			$resimYolu="img/basari/".$resim;
			
			if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
			{			
				if(@copy($_FILES['dosya']['tmp_name'],$resimYolu))
				{
					$sql="update basarilar set url = '$resim' where id=".$alanlar['id'];	
			
					if (@mysql_query($sql,$baglan))
						setcookie("bildirim","Resim Güncellendi!");
					else
						setcookie("bildirim","Ýþlem Baþarýsýz!");
				}
				else
					setcookie("bildirim","Resim Yüklenemedi!");
			}
			else
				setcookie("bildirim","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
		}
		else
			setcookie("bildirim","Önce yüklü resmi siliniz!");
		
		header ("Location:index.php?basariYonet=".$_GET["basariYonet"]);
?>
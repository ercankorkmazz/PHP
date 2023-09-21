<?php
	if(isset($_GET["ogretimUyesi"]) and isset($_FILES['dosya']))
	{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from ogretimuyeleri where id=".$_GET["ogretimUyesi"]);
		$alanlar=mysql_fetch_array($sorgu);	
		
		if(empty($alanlar["url"]))
		{
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			foreach($dosyaAdi as $format) {
				if ($format == end($dosyaAdi))
					$resimYolu="../img/kisiler/".date('d_m_Y_His').".".$format;
			}
			if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
			{		
				$resim=date('d_m_Y_His').".".$format;
				if(@copy($_FILES['dosya']['tmp_name'],$resimYolu))
				{
					@include('inc/baglan.php');
					$sql="update ogretimuyeleri set url = '$resim' where id=".$_GET["ogretimUyesi"];
					
					if (@mysql_query($sql,$baglan))	
						setcookie("bildirim","Fotograf Güncellendi!");
					else
						setcookie("bildirim","Fotograf Yüklenemedi!");
				}
				else
					setcookie("bildirim","Fotograf Yüklenemedi!");
			}
			else
				setcookie("bildirim","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
		}
		else
			setcookie("bildirim","Once yüklü olan fotografi siliniz!");
			
		header ("Location:index.php?ogretimUyesi=$alanlar[id]");
	}
	if(isset($_GET["ogretimUyeleri"]) and isset($_FILES['dosya']))
	{
		if(empty($_COOKIE["ogretimUyesiFoto"]))
		{
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			foreach($dosyaAdi as $format) {
				if ($format == end($dosyaAdi))
					$resimYolu="../img/kisiler/".date('d_m_Y_His').".".$format;
			}
			if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
			{		
				$resim=date('d_m_Y_His').".".$format;		
				if(@copy($_FILES['dosya']['tmp_name'],$resimYolu))
				{
					setcookie("ogretimUyesiFoto",$resim);
					setcookie("bildirim","Fotograf Yüklendi!");
				}
				else
					setcookie("bildirim","Fotograf Yüklenemedi!");
			}
			else
				setcookie("bildirim","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
		}
		else
			setcookie("bildirim","Once yüklediginiz fotografi siliniz!");
		
		header ("Location:index.php?ogretimUyeleri");
	}
?>
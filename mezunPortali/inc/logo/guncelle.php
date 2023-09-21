<?php
	@include('inc/baglan.php'); 
	
	$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
	$format=end($dosyaAdi);
	$resim=date('d_m_Y_His').".".$format;
	$resimYolu="img/logo/".$resim;
			
	if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
	{	
		$sorgu=mysql_query("select * from iletisim");
		$logo=mysql_fetch_array($sorgu);
		
		$url="img/logo/".$logo["logoURL"];
		if(unlink("$url"))
		{
			$sql="update iletisim set logoURL = '' where id=1";	
			@mysql_query($sql,$baglan);
		}
		
		if(@copy($_FILES['dosya']['tmp_name'],$resimYolu))
		{
			$sql="update iletisim set logoURL = '$resim' where id=1";	
		
			if (@mysql_query($sql,$baglan))
				setcookie("bildirim","Logo Güncellendi!");
			else
				setcookie("bildirim","Kayit Basarisiz!");
		}
		else
			setcookie("bildirim","Resim Yüklenemedi!");
	}
	else
		setcookie("bildirim","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
	
	header ("Location:index.php?logo");
?>
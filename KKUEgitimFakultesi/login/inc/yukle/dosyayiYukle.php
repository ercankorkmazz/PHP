<?php
	if(isset($_GET["dosya"]) and isset($_FILES['dosya']))
	{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from dosyalar where id=".$_GET["dosya"]);
		$alanlar=mysql_fetch_array($sorgu);	
		
		if(empty($alanlar["dosyaURL"]))
		{
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			foreach($dosyaAdi as $format) {
				if ($format == end($dosyaAdi))
					$dosyaYolu="../dosyalar/".date('d_m_Y_His').".".$format;
			}	
				$dosya=date('d_m_Y_His').".".$format;
				if(@copy($_FILES['dosya']['tmp_name'],$dosyaYolu))
				{
					@include('inc/baglan.php');
					$sql="update dosyalar set dosyaURL = 'dosyalar/$dosya' where id=".$_GET["dosya"];
					
					if (@mysql_query($sql,$baglan))	
						setcookie("bildirim","Dosya Güncellendi!");
					else
						setcookie("bildirim","Dosya Güncellenemedi!");
				}
				else
					setcookie("bildirim","Dosya Yüklenemedi!");
		}
		else
			setcookie("bildirim","Once yüklü olan dosyayi siliniz!");
			
		header ("Location:index.php?dosya=$alanlar[id]");
	}
	if(isset($_GET["dosyaYukle"]) and isset($_FILES['dosya']))
	{
		if(empty($_COOKIE["yukluDosya"]))
		{
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			foreach($dosyaAdi as $format) {
				if ($format == end($dosyaAdi))
					$dosyaYolu="../dosyalar/".date('d_m_Y_His').".".$format;
			}	
				$dosya=date('d_m_Y_His').".".$format;		
				if(@copy($_FILES['dosya']['tmp_name'],$dosyaYolu))
				{
					setcookie("yukluDosya",$dosya);
					setcookie("bildirim","Dosya Yüklendi!");
				}
				else
					setcookie("bildirim","Dosya Yüklenemedi!");
		}
		else
			setcookie("bildirim","Once yüklediginiz dosyayı siliniz!");
		
		header ("Location:index.php?dosyaYukle");
	}
?>
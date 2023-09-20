<?php
	if(!empty($_POST["baslik"]))
	{
		$videoKontrol=0;
		$gelenKod = $_POST["video"];
		$kod = substr($gelenKod,1,6);
		if($kod != "iframe")
		{
			$kod = substr($gelenKod,0,17);
			if($kod == "https://youtu.be/")
			{
				$kod = substr($gelenKod,17);
				$videoKontrol=1;
			}
			else
			{
				$kod = substr($gelenKod,0,32);
				if($kod == "https://www.youtube.com/watch?v=")
				{
					$kod = substr($gelenKod,32);
					if(substr($gelenKod,-17) == "&feature=youtu.be")
					{
						$kod = substr($kod,0,-17);
					}
					$videoKontrol=1;
				}
			}
		}
		else
		{
			$kod = $gelenKod;
			$videoKontrol=2;
		}
		
		if(empty($gelenKod))
		{
			$kod = "";
			$videoKontrol=2;	
		}
		
		if(($videoKontrol==1) or ($videoKontrol==2))
		{
			if($videoKontrol==1)
			{
				$kod = "<iframe width=560 height=315 src=https://www.youtube.com/embed/".$kod." frameborder=0 allowfullscreen></iframe>";
			}
			
			if($_POST["onay"]=="on")
				$onay=1;
			else
				$onay=0;
				
			$dosya="";
			$PDF="";
			$kontrol=0;
			@include('inc/baglan.php'); 
			$sorgu=mysql_query("select * from scratch where id=".$_GET['scratchUyeDuzenle']);
			$alanlar=mysql_fetch_array($sorgu);
				
			if((@$_FILES["dosya"]["size"]!=0) and (@$_FILES["PDF"]["size"]!=0))
			{
				$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
				foreach($dosyaAdi as $format) {
				if ($format == end($dosyaAdi))
					$dosya=date('d_m_Y_His').".".$format;	
					$dosyaYolu="../dosyalar/scratch/".$dosya;
				}
				
				$pdfAdi=explode(".",$_FILES["PDF"]["name"]);
				foreach($pdfAdi as $pdfFormat) {
				if ($pdfFormat == end($pdfAdi))
					$PDF=date('d_m_Y_His').".".$pdfFormat;	
					$pdfYolu="../dosyalar/scratch/".$PDF;
				}
				
				if((strtolower($format)==strtolower("sb") or strtolower($format)==strtolower("sb2") or strtolower($format)==strtolower("rar")) and (strtolower($pdfFormat)==strtolower("pdf")))	
				{	
					if(!empty($alanlar["dosya"]))
					{
						$url="../dosyalar/scratch/".$alanlar["dosya"];
						unlink("$url");
					}
					if(!empty($alanlar["PDF"]))
					{
						$url="../dosyalar/scratch/".$alanlar["PDF"];
						unlink("$url");
					}
					
					if((@copy($_FILES['dosya']['tmp_name'],$dosyaYolu)) and (@copy($_FILES['PDF']['tmp_name'],$pdfYolu)))
					{
						$sql="update scratch set baslik='$_POST[baslik]',PDF='$PDF',dosya='$dosya',video='$kod',icerik='$_POST[icerik]',onay='$onay' where id=".$_GET['scratchUyeDuzenle'];
						$kontrol=1;
					}
					else
						setcookie("bilgi","Dosya Yüklenemedi!");
				}
				else
					setcookie("bilgi","Desteklenen Formatlar [ Konu Anlatým Dosyasý: pdf / Proje Dosyasý: sb - sb2 - rar ]");
			}
			else if((@$_FILES["dosya"]["size"]!=0) and (@$_FILES["PDF"]["size"]==0))
			{
				$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
				foreach($dosyaAdi as $format) {
				if ($format == end($dosyaAdi))
					$dosya=date('d_m_Y_His').".".$format;	
					$dosyaYolu="../dosyalar/scratch/".$dosya;
				}
				
				if(strtolower($format)==strtolower("sb") or strtolower($format)==strtolower("sb2") or strtolower($format)==strtolower("rar"))	
				{	
					if(!empty($alanlar["dosya"]))
					{
						$url="../dosyalar/scratch/".$alanlar["dosya"];
						unlink("$url");
					}
					
					if(@copy($_FILES['dosya']['tmp_name'],$dosyaYolu))
					{
						$sql="update scratch set baslik='$_POST[baslik]',dosya='$dosya',video='$kod',icerik='$_POST[icerik]',onay='$onay' where id=".$_GET['scratchUyeDuzenle'];
						$kontrol=1;
					}
					else
						setcookie("bilgi","Dosya Yüklenemedi!");
				}
				else
					setcookie("bilgi","Desteklenen Formatlar [ Konu Anlatým Dosyasý: pdf / Proje Dosyasý: sb - sb2 - rar ]");
			}
			else if((@$_FILES["dosya"]["size"]==0) and (@$_FILES["PDF"]["size"]!=0))
			{
				$pdfAdi=explode(".",$_FILES["PDF"]["name"]);
				foreach($pdfAdi as $pdfFormat) {
				if ($pdfFormat == end($pdfAdi))
					$PDF=date('d_m_Y_His').".".$pdfFormat;	
					$pdfYolu="../dosyalar/scratch/".$PDF;
				}
				
				if(strtolower($pdfFormat)==strtolower("pdf"))	
				{
					if(!empty($alanlar["PDF"]))
					{
						$url="../dosyalar/scratch/".$alanlar["PDF"];
						unlink("$url");
					}
					
					if(@copy($_FILES['PDF']['tmp_name'],$pdfYolu))
					{
						$sql="update scratch set baslik='$_POST[baslik]',PDF='$PDF',video='$kod',icerik='$_POST[icerik]',onay='$onay' where id=".$_GET['scratchUyeDuzenle'];
						$kontrol=1;
					}
					else
						setcookie("bilgi","Dosya Yüklenemedi!");
				}
				else
					setcookie("bilgi","Desteklenen Formatlar [ Konu Anlatým Dosyasý: pdf / Proje Dosyasý: sb - sb2 - rar ]");
			}
			else
			{
				$sql="update scratch set baslik='$_POST[baslik]',video='$kod',icerik='$_POST[icerik]',onay='$onay' where id=".$_GET['scratchUyeDuzenle'];
				$kontrol=1;
			}
			
			// Veritabanýna kayýt
			if($kontrol==1)
			{
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bilgi","Güncelleme yapýldý.");
				}
				else
					setcookie("bilgi","Güncelleme Baþarýsýz!");
			}
		}
		else
			setcookie("bilgi","&#8220; Video Yerleþtirme Kodu &#8221; veya &#8220; Youtube Video Linki &#8221; geçersiz.");
	}
	else
		setcookie("bilgi","Baþlýk alaný boþ býrakýlamaz");
		
	header("Location:index.php?scratchUyeDuzenle=".$_GET['scratchUyeDuzenle']);
?>
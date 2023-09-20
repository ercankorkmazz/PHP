<?php
	if(!empty($_POST["baslik"]))
	{
		function trCevir($text){
			$text = trim($text);
			$search = array("'","&","^","$","<",">","{","}","[","]",'"');
			$replace = array(" ","ve"," "," ","küçüktür","büyüktür"," "," "," "," "," ");
			$new_text = str_replace($search,$replace,$text);
			return $new_text;
		}
		
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
			
			$dosya="";
			$PDF="";
			$kontrol=0;
			@include('login/inc/baglan.php'); 
			$sorgu=mysql_query("select * from sketchup where id=".$_GET['SketchUpDuzenle']);
			$alanlar=mysql_fetch_array($sorgu);
				
			if((@$_FILES["dosya"]["size"]!=0) and (@$_FILES["PDF"]["size"]!=0))
			{
				$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
				foreach($dosyaAdi as $format) {
				if ($format == end($dosyaAdi))
					$dosya=date('d_m_Y_His').".".$format;	
					$dosyaYolu="dosyalar/sketchup/".$dosya;
				}
				
				$pdfAdi=explode(".",$_FILES["PDF"]["name"]);
				foreach($pdfAdi as $pdfFormat) {
				if ($pdfFormat == end($pdfAdi))
					$PDF=date('d_m_Y_His').".".$pdfFormat;	
					$pdfYolu="dosyalar/sketchup/".$PDF;
				}
				
				if((strtolower($format)==strtolower("skp")) and (strtolower($pdfFormat)==strtolower("pdf")))
				{			
					if(!empty($alanlar["dosya"]))
					{
						$url="dosyalar/sketchup/".$alanlar["dosya"];
						unlink("$url");
					}
					if(!empty($alanlar["PDF"]))
					{
						$url="dosyalar/sketchup/".$alanlar["PDF"];
						unlink("$url");
					}
						
					if((@copy($_FILES['dosya']['tmp_name'],$dosyaYolu)) and (@copy($_FILES['PDF']['tmp_name'],$pdfYolu)))
					{
						@include('login/inc/baglan.php');
						$sql="update sketchup set baslik='".trCevir($_POST["baslik"])."',PDF='$PDF',dosya='$dosya',video='$kod',icerik='$_POST[icerik]',onay='0' where id=".$_GET['SketchUpDuzenle'];
						$kontrol=1;
					}
					else
						setcookie("bilgi","Dosya Yüklenemedi!");
				}
				else
					setcookie("bilgi","Desteklenen Formatlar &#8220; Konu Anlatým Dosyasý: pdf / Proje Dosyasý: spk &#8221;");
			}
			else if((@$_FILES["dosya"]["size"]!=0) and (@$_FILES["PDF"]["size"]==0))
			{
				$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
				foreach($dosyaAdi as $format) {
				if ($format == end($dosyaAdi))
					$dosya=date('d_m_Y_His').".".$format;	
					$dosyaYolu="dosyalar/sketchup/".$dosya;
				}
				
				if(strtolower($format)==strtolower("skp"))
				{			
					if(!empty($alanlar["dosya"]))
					{
						$url="dosyalar/sketchup/".$alanlar["dosya"];
						unlink("$url");
					}
						
					if(@copy($_FILES['dosya']['tmp_name'],$dosyaYolu))
					{
						@include('login/inc/baglan.php');
						$sql="update sketchup set baslik='".trCevir($_POST["baslik"])."',dosya='$dosya',video='$kod',icerik='$_POST[icerik]',onay='0' where id=".$_GET['SketchUpDuzenle'];
						$kontrol=1;
					}
					else
						setcookie("bilgi","Dosya Yüklenemedi!");
				}
				else
					setcookie("bilgi","Desteklenen Formatlar &#8220; Konu Anlatým Dosyasý: pdf / Proje Dosyasý: spk &#8221;");
			}
			else if((@$_FILES["dosya"]["size"]==0) and (@$_FILES["PDF"]["size"]!=0))
			{
				$pdfAdi=explode(".",$_FILES["PDF"]["name"]);
				foreach($pdfAdi as $pdfFormat) {
				if ($pdfFormat == end($pdfAdi))
					$PDF=date('d_m_Y_His').".".$pdfFormat;	
					$pdfYolu="dosyalar/sketchup/".$PDF;
				}
				
				if(strtolower($pdfFormat)==strtolower("pdf"))
				{
					if(!empty($alanlar["PDF"]))
					{
						$url="dosyalar/sketchup/".$alanlar["PDF"];
						unlink("$url");
					}
						
					if(@copy($_FILES['PDF']['tmp_name'],$pdfYolu))
					{
						@include('login/inc/baglan.php');
						$sql="update sketchup set baslik='".trCevir($_POST["baslik"])."',PDF='$PDF',video='$kod',icerik='$_POST[icerik]',onay='0' where id=".$_GET['SketchUpDuzenle'];
						$kontrol=1;
					}
					else
						setcookie("bilgi","Dosya Yüklenemedi!");
				}
				else
					setcookie("bilgi","Desteklenen Formatlar &#8220; Konu Anlatým Dosyasý: pdf / Proje Dosyasý: spk &#8221;");
			}
			else
			{
				@include('login/inc/baglan.php');
				$sql="update sketchup set baslik='".trCevir($_POST["baslik"])."',video='$kod',icerik='$_POST[icerik]',onay='$onay' where id=".$_GET['SketchUpDuzenle'];
				$kontrol=1;
			}
			
			// Veritabanýna kayýt
			if($kontrol==1)
			{
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bilgi","Güncelleme kaydedildi. Yapýlan güncellemeler yönetici onayýndan sonra yayýnlanmaktadýr.");
					setcookie("renk","#3C0");
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
		
	header("Location:index.php?SketchUp&SketchUp&SketchUpDuzenle=".$_GET['SketchUpDuzenle']);
?>
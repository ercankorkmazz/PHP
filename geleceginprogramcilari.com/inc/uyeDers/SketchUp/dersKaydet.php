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
					if((@copy($_FILES['dosya']['tmp_name'],$dosyaYolu)) and (@copy($_FILES['PDF']['tmp_name'],$pdfYolu)))
					{
						$uyeId=$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"];
						$sql="insert into sketchup (baslik,PDF,dosya,video,icerik,yazarID,onay) values ('".trCevir($_POST["baslik"])."','$PDF','$dosya','$kod','$_POST[icerik]','$uyeId','0')";
						$kontrol=1;
					}
					else
						setcookie("bilgi","Dosya Yüklenemedi!");
				}
				else
					setcookie("bilgi","Desteklenen Formatlar &#8220; Konu Anlatým Dosyasý: pdf / Proje Dosyasý: skp &#8221;");
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
					if(@copy($_FILES['dosya']['tmp_name'],$dosyaYolu))
					{
						$uyeId=$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"];
						$sql="insert into sketchup (baslik,PDF,dosya,video,icerik,yazarID,onay) values ('".trCevir($_POST["baslik"])."','$PDF','$dosya','$kod','$_POST[icerik]','$uyeId','0')";
						$kontrol=1;
					}
					else
						setcookie("bilgi","Dosya Yüklenemedi!");
				}
				else
					setcookie("bilgi","Desteklenen Formatlar &#8220; Konu Anlatým Dosyasý: pdf / Proje Dosyasý: skp &#8221;");
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
					if(@copy($_FILES['PDF']['tmp_name'],$pdfYolu))
					{
						$uyeId=$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"];
						$sql="insert into sketchup (baslik,PDF,dosya,video,icerik,yazarID,onay) values ('".trCevir($_POST["baslik"])."','$PDF','$dosya','$kod','$_POST[icerik]','$uyeId','0')";
						$kontrol=1;
					}
					else
						setcookie("bilgi","Dosya Yüklenemedi!");
				}
				else
					setcookie("bilgi","Desteklenen Formatlar &#8220; Konu Anlatým Dosyasý: pdf / Proje Dosyasý: skp &#8221;");
			}
			else
			{
				$uyeId=$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"];
				$sql="insert into sketchup (baslik,PDF,dosya,video,icerik,yazarID,onay) values ('".trCevir($_POST["baslik"])."','$PDF','$dosya','$kod','$_POST[icerik]','$uyeId','0')";
				$kontrol=1;
			}
			
			// Veritabanýna kayýt
			if($kontrol==1)
			{
				@include('inc/baglan.php');
				if(@mysql_query($sql,$baglan))
				{
					setcookie("bilgi","Ders kaydýnýz yapýldý. Yapýlan ders kayýtlarý yönetici onayýndan sonra yayýnlanmaktadýr.");
					setcookie("renk","#3C0");
				}
				else
					setcookie("bilgi","Kayýt Baþarýsýz!");
			}
		}
		else
			setcookie("bilgi","&#8220; Video Yerleþtirme Kodu &#8221; veya &#8220; Youtube Video Linki &#8221; geçersiz.");
	}
	else
		setcookie("bilgi","Baþlýk alaný boþ býrakýlamaz");
		
	header("Location:index.php?SketchUp&SketchUpDersler");
?>
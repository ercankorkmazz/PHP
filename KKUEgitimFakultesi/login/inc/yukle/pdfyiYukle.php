<?php
	if(isset($_GET["PDF"]) and isset($_FILES['dosya']))
	{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from pdfler where id=".$_GET["PDF"]);
		$alanlar=mysql_fetch_array($sorgu);	
		
		if(empty($alanlar["url"]))
		{
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			foreach($dosyaAdi as $format) {
				if ($format == end($dosyaAdi))
					$dosyaYolu="../dosyalar/pdf/".date('d_m_Y_His').".".$format;
			}
			if(strtolower($format)==strtolower("pdf"))
			{	
				$dosya="dosyalar/pdf/".date('d_m_Y_His').".".$format;	
				if(@copy($_FILES['dosya']['tmp_name'],$dosyaYolu))
				{
					@include('inc/baglan.php'); 
					$sql="update pdfler set url = '$dosya', pdfURL = 'index.php?PDF=$_GET[PDF]' where id=".$_GET["PDF"];
					
					if (@mysql_query($sql,$baglan))	
						setcookie("bildirim","PDF Dosyasi G�ncellendi!");
					else
						setcookie("bildirim","PDF Dosyasi G�ncellenemedi!");
				}
				else
					setcookie("bildirim","PDF Dosyasi Y�klenemedi!");
			}
			else
					setcookie("bildirim","Yalnizca PDF dosyasi y�kleye bilirsiniz!");
		}
		else
			setcookie("bildirim","Once y�kl� olan dosyayi siliniz!");
			
		header ("Location:index.php?PDF=$alanlar[id]");
	}
	if(isset($_GET["yuklePDF"]) and isset($_FILES['dosya']))
	{
		if(empty($_COOKIE["yukluPDF"]))
		{
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			foreach($dosyaAdi as $format) {
				if ($format == end($dosyaAdi))
					$dosyaYolu="../dosyalar/pdf/".date('d_m_Y_His').".".$format;
			}	
			if(strtolower($format)==strtolower("pdf"))
			{
				$dosya="dosyalar/pdf/".date('d_m_Y_His').".".$format;		
				if(@copy($_FILES['dosya']['tmp_name'],$dosyaYolu))
				{
					setcookie("yukluPDF",$dosya);
					
					@include('inc/baglan.php'); 
					$sql = mysql_query("select * from pdfler order by id desc limit 0,1");
					$alanlar=mysql_fetch_array($sql);
					if($alanlar["id"]>=1)
						setcookie("yukluID",$alanlar["id"]+1);
					else
						setcookie("yukluID","1");	
					
					setcookie("bildirim","Dosya Y�klendi!");
				}
				else
					setcookie("bildirim","Dosya Y�klenemedi!");
			}
			else
					setcookie("bildirim","Yalnizca PDF dosyasi y�kleye bilirsiniz!");
		}
		else
			setcookie("bildirim","Once y�klediginiz dosyay� siliniz!");
		
		header ("Location:index.php?yuklePDF");
	}
?>
<?php
	if(isset($_GET["dosya"]) and isset($_FILES['dosya']))
	{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from dosyalar where id=".$_GET["dosya"]);
		$alanlar=mysql_fetch_array($sorgu);	
		
		if(empty($alanlar["dosyaURL"]))
		{
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			
			$format=end($dosyaAdi);
			$dosya=date('d_m_Y_His').".".$format;
			$dosyaYolu="dosyalar/".$dosya;
							
			if(@copy($_FILES['dosya']['tmp_name'],$dosyaYolu))
			{
				@include('inc/baglan.php');
				$sql="update dosyalar set dosyaURL = 'dosyalar/$dosya' where id=".$_GET["dosya"];
				
				if (@mysql_query($sql,$baglan))	
					setcookie("bildirim","Dosya G�ncellendi!");
				else
					setcookie("bildirim","Dosya G�ncellenemedi!");
			}
			else
				setcookie("bildirim","Dosya Y�klenemedi!");
		}
		else
			setcookie("bildirim","�nce y�kl� olan dosyay� siliniz!");
			
		header ("Location:index.php?dosya=$alanlar[id]");
	}
	if(isset($_GET["dosyaYukle"]) and isset($_FILES['dosya']))
	{
		if(empty($_COOKIE["yukluDosya"]))
		{
			$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
			
			$format=end($dosyaAdi);
			$dosya=date('d_m_Y_His').".".$format;	
			$dosyaYolu="dosyalar/".$dosya;
					
			if(@copy($_FILES['dosya']['tmp_name'],$dosyaYolu))
			{
				setcookie("yukluDosya",$dosya);
				setcookie("bildirim","Dosya Y�klendi!");
			}
			else
				setcookie("bildirim","Dosya Y�klenemedi!");
		}
		else
			setcookie("bildirim","�nce y�kledi�iniz dosyay� siliniz!");
		
		header ("Location:index.php?dosyaYukle");
	}
?>
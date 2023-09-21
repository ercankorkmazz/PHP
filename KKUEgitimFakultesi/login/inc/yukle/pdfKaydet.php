<?php
	if(!empty($_COOKIE["yukluPDF"]))
	{
		if(!empty($_POST["pdfTanimi"]))
		{
			@include('inc/baglan.php'); 
			$sql = mysql_query("select * from pdfler order by id desc limit 0,1");
			$alanlar=mysql_fetch_array($sql);
			if($alanlar["id"]>=1)
				$id=$alanlar["id"]+1;
			else
				$id=1;
				
			$sql="insert into pdfler (id,url,pdfURL,pdfTanim) values ('$id','$_COOKIE[yukluPDF]','index.php?PDF=$_COOKIE[yukluID]','$_POST[pdfTanimi]')";
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","PDF dosyasi kaydedildi! <br/><br/>Dosyayi herhangi bir baglantida kullanmak icin (PDF dosyasýna ait URL) yi kullaniniz.");
				setcookie("yukluPDF","");
				setcookie("yukluID","");
			}
			else
				setcookie("bildirim","Kayit Basarisiz!");
		}
		else
			setcookie("bildirim","PDF dosyasinin tanimini yaziniz!");
	}
	else
		setcookie("bildirim","PDF dosyasi yükleyiniz!");
				
		header ("Location:index.php?yuklePDF");
?>
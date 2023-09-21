<?php
		$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
		$format=end($dosyaAdi);
		$dosyaYolu="dosyalar/excell/".date('d_m_Y_His').".".$format;
		
		if(strtolower($format)==strtolower("xls"))	
		{			
			if(@copy($_FILES['dosya']['tmp_name'],$dosyaYolu))
			{
				require_once 'mcexcell/reader.php';
				$data = new Spreadsheet_Excel_Reader();
				$data->setUTFEncoder('iconv'); // iconv metoduyla dil cevrimini sagliyoruz
				$data->setOutputEncoding('ISO-8859-9'); //turkce dil kodlamasý
				$data->read("$dosyaYolu"); // demo.xls dosyasý okunuyor
				
				$satir=$data->sheets[0]['numRows']; //satir sayisi
				$sutun=$data->sheets[0]['numCols'];//sutun sayisi
				
				for ($i=1;$i<=$satir;$i++)
				{
					$tc=$data->sheets[0]["cells"][$i][1];
					$oNo=$data->sheets[0]["cells"][$i][2];
					
					if(!empty($tc))
					{
						@include('inc/baglan.php');
						$sql="insert into mezun (tcNo,okulNo) values ('$tc','$oNo')";
						
						if (@mysql_query($sql,$baglan))
							setcookie("bildirim","Mezunlar Kaydedildi!");
						else
							setcookie("bildirim","Bazý Mezunlar Eklenemedi. Sistemde kayýtlý mezunlar tekrar eklenemez.");
					}
				}
				unlink("$dosyaYolu");
			}
			else
				setcookie("bildirim","Dosya Yüklenemedi!");
		}
		else
			setcookie("bildirim","Desteklenen Format xls");
		
		header ("Location:index.php?mezunEkle");
?>
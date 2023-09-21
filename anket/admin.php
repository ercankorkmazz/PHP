<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
    <meta name="description" content="Project Description" />
    <meta name="keywords" content="Project Keywords" />
    <title>Scratch / C Programlama Anketi</title>	
    <link href="css/style.css" rel="stylesheet" type="text/css" />	
</head>
<?php
	ob_start();
	session_start();
	
	function trCevir($text){
		$text = trim($text);
		$search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü');
		$replace = array('C','c','G','g','i','I','O','o','S','s','U','u');
		$new_text = str_replace($search,$replace,$text);
		return $new_text;
	}
			
	if(count($_POST)>0 and $_POST["kadi"]=="admin" and $_POST["sifre"]=="1"){
		$_SESSION["$_SERVER[SERVER_NAME]anketOturumu"]="on";
	}
	if(isset($_GET["oturumuKapat"]))
	{
		session_start();
		session_destroy();
		header ("Location:admin.php");
	}
	
	$dizin='sonuclar/';
	$dir=scandir($dizin);
	foreach($dir as $file)
	{
		clearstatcache();
		if (is_file($dizin.$file))
			unlink($dizin.$file);
	}
	if(isset($_SESSION["$_SERVER[SERVER_NAME]anketOturumu"]))
	{
		
		if(isset($_GET["temizle"]))
		{
			include("baglan.php");
			$sql="TRUNCATE sonuclar";
			if(@mysql_query($sql,$baglan))				
				header ("Location:admin.php");
			else
				echo "<script>alert('İşlem başarısız.');</script>";
		}
		require_once dirname(__FILE__) . '/Classes/PHPExcel.php';
		 
		// Excel Değişkeni ile Classımızı başlatıyoruz.
		$Excel = new PHPExcel();
		 
		// Oluşturacağımız Excel Dosyasının ayarlarını yapıyoruz.
		// Bu bilgiler O kadar önenli değil kafanıza göre doldurabilirsiniz.
		$Excel->getProperties()->setCreator("")
		->setLastModifiedBy("")
		->setTitle("")
		->setSubject("")
		->setDescription("")
		->setKeywords("")
		->setCategory("");
		 
		//Excel Dosyasının Sayfasını Adını Belirliyoruz.Ben vArsayılan olarak gelen Sayfa1 ' i tercih ettim.
		$Excel->getActiveSheet()->setTitle('AnketSonuclari');
		 
		//Belirtilen Alanlara Veri Girişi Yapıyoruz.
		$Excel->getActiveSheet()->setCellValue('A1', 'ID');
		$Excel->getActiveSheet()->setCellValue('B1', 'OgrenciNo');
		$harf="C";
		$grupID=1;
		$dilID=1;
		$soruID=1;
		for($i=2;$i<=77;$i++)
		{
			if($i>=2 and $i<=10)
			{
				$grupID=1;$dilID=1;
			}
			elseif($i>=11 and $i<=19)
			{
				$grupID=1;$dilID=2;
			}
			elseif($i>=20 and $i<=39)
			{
				$grupID=2;$dilID=1;
			}
			elseif($i>=40 and $i<=59)
			{
				$grupID=2;$dilID=2;
			}
			elseif($i>=60 and $i<=68)
			{
				$grupID=3;$dilID=1;
			}
			elseif($i>=69 and $i<=77)
			{
				$grupID=3;$dilID=2;
			}
			if($i==2)
				$soruID=1;
			elseif($i==11)
				$soruID=1;
			elseif($i==20)
				$soruID=1;
			elseif($i==40)
				$soruID=1;
			elseif($i==60)
				$soruID=1;
			elseif($i==69)
				$soruID=1;
			$Excel->getActiveSheet()->setCellValue($harf.'1', 'G'.$grupID.'_D'.$dilID.'_S'.$soruID);
			$harf++;
			$soruID++;
		}
		$Excel->getActiveSheet()->setCellValue($harf.'1', 'Soru1');
		$harf++;
		$Excel->getActiveSheet()->setCellValue($harf.'1', 'Soru2');
		
		include("baglan.php");
		$sayac=2;
		$bul=mysql_query("select * from sonuclar");
		while($veri=mysql_fetch_array($bul))
		{	
			$Excel->getActiveSheet()->setCellValue('A'.$sayac, $veri["id"]);
			$Excel->getActiveSheet()->setCellValue('B'.$sayac, $veri["ogrNo"]);
			$harf="C";
			$grupID=1;
			$dilID=1;
			$soruID=1;
			for($i=2;$i<=77;$i++)
			{
				if($i>=2 and $i<=10)
				{
					$grupID=1;$dilID=1;
				}
				elseif($i>=11 and $i<=19)
				{
					$grupID=1;$dilID=2;
				}
				elseif($i>=20 and $i<=39)
				{
					$grupID=2;$dilID=1;
				}
				elseif($i>=40 and $i<=59)
				{
					$grupID=2;$dilID=2;
				}
				elseif($i>=60 and $i<=68)
				{
					$grupID=3;$dilID=1;
				}
				elseif($i>=69 and $i<=77)
				{
					$grupID=3;$dilID=2;
				}
				if($i==2)
					$soruID=1;
				elseif($i==11)
					$soruID=1;
				elseif($i==20)
					$soruID=1;
				elseif($i==40)
					$soruID=1;
				elseif($i==60)
					$soruID=1;
				elseif($i==69)
					$soruID=1;
				$veriGetir=$veri["G".$grupID."_".$dilID."_".$soruID];
				$Excel->getActiveSheet()->setCellValue($harf.$sayac, $veriGetir);
				$harf++;
				$soruID++;
			} 
			$Excel->getActiveSheet()->setCellValue($harf.$sayac, trCevir($veri["soru1"]));
			$harf++;
			$Excel->getActiveSheet()->setCellValue($harf.$sayac, trCevir($veri["soru2"]));
			$sayac++;
		}
		
		//Kaydet
		$dosyaAdi=date('d_m_Y_His').".xls";
		$Kaydet = PHPExcel_IOFactory::createWriter($Excel, 'Excel5');
		$Kaydet->save("sonuclar/".$dosyaAdi);
	}
?>
<body>
<div id="wrapper">
	<div id="container">
		<div id="header" class="clearfix">
		  <?php if(!isset($_SESSION["$_SERVER[SERVER_NAME]anketOturumu"])){ ?>
          	<center>
            	<h3 style="margin-top:90px;">Ankat verilerinin Excel çıktısını almak için yönetici bilgilerinizi giriniz.</h3>
            </center>
          <?php }else{ echo "<h3 style='margin-top:50px;'>&nbsp;</h3>"; ?>
            	<a href="admin.php?oturumuKapat" id="FormSubmit" style="font-size:12px;background:#FF7; width:100px; float:right; border-color:#999; ?>">Oturumu Kapat</a>
          <?php } ?>
		</div><!-- // end #header -->
		<div id="banner" style="text-align:center;margin-top:10px; padding:20px 0 40px 0;">
			<font face="Arial,Helvetica,sans-serif">
                <br />
                <?php if(isset($_SESSION["$_SERVER[SERVER_NAME]anketOturumu"])){ ?>
                	<table border="0" style="width:400px;margin:auto;">
                    	<tr>
                        	<td style="border:0;background:none;">
                            	<a href="sonuclar/<?php echo $dosyaAdi; ?>" id="FormSubmit" style="font-size:12px;background:#FF7;border-color:#999;">Anket Sonuçlarını İndir</a>
                            </td>
                            <td style="border:0;background:none;">
                            	<div id="FormSubmit" onClick="kontrol();" style="font-size:12px;background:#FF7;border-color:#999; width:130px;">Tüm  Yanıtları Sil</div>
                            </td>
                        </tr>
                    </table>
                	
               <?php }else{ ?>
               		<form action="admin.php" method="post">
                      <table border="0" style="width:300px; margin-left:auto; margin-right:auto;" cellspacing="10">
                        <tr>
                          <td style="background:none;"><label for="kadi"></label>
                          <input type="text" class="textbox" name="kadi" placeholder="Kullanıcı Adı" style="text-align:center;width:95%;border:none;padding:7px;" /></td>
                        </tr>
                        <tr>
                          <td style="background:none;"><input type="password" class="textbox" name="sifre" placeholder="Şifre" style="text-align:center;width:95%;border:none;padding:7px;" /></td>
                        </tr>
                        <tr>
                          <td><center><input type="submit" class="Button" name="Submit" value="Gönder" style="width:100%;border:none;margin:0;" id="FormSubmit" /></center></td>
                        </tr>
                      </table>
                    </form>
               <?php } ?>
			</font>
		</div>
		<div id="main" class="clearfix">
		  <div id="page" style="padding-bottom:100px;" align="center">
          	
	      </div>
		</div><!-- // İçerik Sonu -->
		<div id="footer">
			<p>&copy; 2016 Ercan KORKMAZ </p>
		</div><!-- // end #footer -->
	</div><!-- // end #container -->
</div><!-- // end #wrapper -->
<?php ob_end_flush(); ?>
<script type="text/javascript">
	function kontrol(){
		if(confirm('Tüm anket verileri silinecek!'))
			window.location="admin.php?temizle";
		else
			window.location="admin.php";
	}
</script>	
</body>
</html>
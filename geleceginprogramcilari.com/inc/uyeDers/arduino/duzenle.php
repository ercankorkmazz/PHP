<?php
	@include('login/inc/baglan.php');
	$sql=@mysql_query("select * from smallbasic where id=".$_GET['arduinoDuzenle']);
	$alanlar=mysql_fetch_array($sql);
	if($alanlar["yazarID"]==$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"])
	{ 
	
		if((isset($_GET["arduinoDuzenle"])) and (isset($_POST["baslik"])))
			@include('inc/uyeDers/arduino/adminGuncelle.php');
		if((isset($_GET["arduinoDuzenle"])) and (isset($_GET["dosyaSil"])))
		{
			$sorgu=mysql_query("select * from smallbasic where id=".$_GET['arduinoDuzenle']);
			$dosya=mysql_fetch_array($sorgu);
			
			if(!empty($dosya["dosya"]))
			{
				$url="dosyalar/smallBasic/".$dosya["dosya"];
				if(unlink("$url"))
				{
					$sql="update smallbasic set dosya='' where id=".$_GET['arduinoDuzenle'];
					if(@mysql_query($sql))
					{
						setcookie("bilgi","Dosya silindi.");
						setcookie("renk","#3C0");
					}
					else
						setcookie("bilgi","Silme iþlemi yapýlmadý.");
				}
			}
			
			header("Location:index.php?arduino&arduinoDuzenle=".$_GET['arduinoDuzenle']);
		}
		if((isset($_GET["arduinoDuzenle"])) and (isset($_GET["PDFSil"])))
		{
			$sorgu=mysql_query("select * from smallbasic where id=".$_GET['arduinoDuzenle']);
			$dosya=mysql_fetch_array($sorgu);
			
			if(!empty($dosya["PDF"]))
			{
				$url="dosyalar/smallBasic/".$dosya["PDF"];
				if(unlink("$url"))
				{
					$sql="update smallbasic set PDF='' where id=".$_GET['arduinoDuzenle'];
					if(@mysql_query($sql))
					{
						setcookie("bilgi","Dosya silindi.");
						setcookie("renk","#3C0");
					}
					else
						setcookie("bilgi","Silme iþlemi yapýlmadý.");
				}
			}
			
			header("Location:index.php?arduino&arduinoDuzenle=".$_GET['arduinoDuzenle']);
		}
		
		$sql=@mysql_query("select * from smallbasic where id=".$_GET['arduinoDuzenle']);
		$alanlar=mysql_fetch_array($sql);
		?>
        <div style="width:740px;float:left;">
			<form method="post" target="_self" action="index.php?arduino&arduinoDuzenle=<?php echo $_GET['arduinoDuzenle']; ?>" enctype="multipart/form-data">
                <input type="submit" value="Güncelle" class="Button" style="margin-top:-10px;"/>
                <h5><strong>Baþlýk</strong></h5>
                <input type="text" name="baslik" class="textbox" value="<?php echo $alanlar['baslik']; ?>" style="width:740px;text-align:left;">
                <h5><strong>"Video Yerleþtirme Kodunu" veya "Youtube Video Linkini" buraya yapýþtýrýnýz.</strong></h5>
                <textarea name="video" class="textbox" style="max-width:740px; min-width:740px; text-align:left;"><?php echo $alanlar['video']; ?></textarea>
                <h5><strong>Ders hakkýnda a&ccedil;ýklama yazýnýz.</strong></h5>
                <textarea name="icerik" style="width:740px;height:200px;" class="ckeditor"><?php echo $alanlar['icerik']; ?></textarea>
                
                <h5><strong>Konu anlatým  dosyasýný buradan y&uuml;kleyiniz.</strong><span style="font-size:12px;"> &raquo; Format: pdf</span></h5>
                <table width="100%" border="0">
                  <tr>
                    <td style="width:250px;text-align:left;"><input type="file" name="PDF" class="textbox" value="<?php echo $alanlar['PDF']; ?>" style="color:#000; width:380px;text-align:left;"  /></td>
                    <?php if(!empty($alanlar['PDF'])){ ?>
                    <td style="width:87px;"> <a class="Button" style="float:left; margin:3px 0 0 5px;color:#FFF;" href="index.php?PDFSil&arduino&arduinoDuzenle=<?php echo $_GET['arduinoDuzenle']; ?>">Dosya Sil</a></td>
                    <td style="width:37px;"> <a class="Button" style="float:left; margin:3px 0 0 0px;color:#FFF;" href="dosyalar/smallBasic/<?php echo $alanlar['PDF']; ?>">Ýndir</a></td>
                    <?php } ?>
                    <td><span style="color:#FFF;padding-left:5px;"><strong>Dosya: </strong><?php if(!empty($alanlar['PDF']))echo $alanlar['PDF']; else echo "Yok"; ?></span></td>
                  </tr>
                </table>
                <h5><strong>Proje dosyasýný buradan y&uuml;kleyiniz.</strong><span style="font-size:12px;"> &raquo; Formatlar: sb</span></h5>
                <table width="100%" border="0">
                  <tr>
                    <td style="width:250px;text-align:left;"><input type="file" name="dosya" class="textbox" value="<?php echo $alanlar['dosya']; ?>" style="color:#000; width:380px;text-align:left;"  /></td>
                    <?php if(!empty($alanlar['dosya'])){ ?>
                    <td style="width:87px;"> <a class="Button" style="float:left; margin:3px 0 0 5px;color:#FFF;" href="index.php?dosyaSil&arduino&arduinoDuzenle=<?php echo $_GET['arduinoDuzenle']; ?>">Dosya Sil</a></td>
                    <td style="width:37px;"> <a class="Button" style="float:left; margin:3px 0 0 0px;color:#FFF;" href="dosyalar/smallBasic/<?php echo $alanlar['dosya']; ?>">Ýndir</a></td>
                    <?php } ?>
                    <td><span style="color:#FFF;padding-left:5px;"><strong>Dosya: </strong><?php if(!empty($alanlar['dosya']))echo $alanlar['dosya']; else echo "Yok"; ?></span></td>
                  </tr>
                </table>
            </form>
   		</div>
        <div style="width:470px;float:right;background:url(img/overlay.png);padding:10px;height:590px;">
            <h5 style="font-size:14px;text-align:center;padding:0;margin:5px;"><strong>AÇIKLAMALAR</strong></h5>
            <h5 style="font-size:12px;"><strong><span style="color:#FF0;">Lütfen Dikkat!</span></strong> Ders için hazýrlamýþ olduðunuz video var ise videonuzu Youtube kanalýnýza yükleniz.</h5>
            <h5 style="font-size:12px;"><strong><span style="color:#FF0;">Lütfen Dikkat!</span></strong> Youtube'a yüklemiþ olduðunuz videonun yerleþtirme kodunu veya Youtube video linkini (Video URL adresi) -Ders Ekle- formunda ilgili alana yapýþtýrýnýz.</h5>
            <h5 style="font-size:12px;"><strong>Videolarýnýzýn baþýna k&uuml;&ccedil;&uuml;k resim ekleyiniz.&ldquo; <a href="img/videoKucukResim.jpg" target="_blank"><span style="color:#FF0;">K&uuml;&ccedil;&uuml;k Resim Ýndir</a> &rdquo;</span> </h5>
            <hr style="margin:0;"/>
            <h5 style="font-size:12px;color:#FF0;">Youtube nasýl video yüklerim? Video yerleþtirme koduna nereden ulaþabilirim?</h5>
            <iframe width="450" height="273" src="https://www.youtube.com/embed/i2PdroMBp4M" frameborder="0" allowfullscreen></iframe>
            <h5 style="font-size:12px;color:#FF0;"><strong>Konu Anlatým Dosyasý: </strong></h5>
            <h5 style="font-size:12px;">Eðer ders hakkýnda ayrýntýlý bilgi vermek istiyorsanýz, konu anlatýmýný PDF formatýnda sisteme yükleyebilirsiniz.</h5>
            
            <h5 style="font-size:12px;color:#FF0;"><strong>Proje Dosyasý: </strong></h5>
            <h5 style="font-size:12px;">Ders için hazýrlamýþ olduðunuz proje dosyanýz var ise sisteme yükleyebilirsiniz. Proje dosyasý dersin ilgili olduðu yazýlýmla hazýrlanmýþ olmalýdýr.</h5>
            </span>
        </div>
    <div class="clear"></div>
	<?php
	}
	else
	{
		setcookie("bilgi","Kendini uyanýk mý sandýn?");
		header("Location:index.php");	
	}
	?>


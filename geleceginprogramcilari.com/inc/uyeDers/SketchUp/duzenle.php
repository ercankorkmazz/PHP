<?php
	@include('login/inc/baglan.php');
	$sql=@mysql_query("select * from sketchup where id=".$_GET['SketchUpDuzenle']);
	$alanlar=mysql_fetch_array($sql);
	if($alanlar["yazarID"]==$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"])
	{ 
	
		if((isset($_GET["SketchUpDuzenle"])) and (isset($_POST["baslik"])))
			@include('inc/uyeDers/SketchUp/adminGuncelle.php');
		if((isset($_GET["SketchUpDuzenle"])) and (isset($_GET["dosyaSil"])))
		{
			$sorgu=mysql_query("select * from sketchup where id=".$_GET['SketchUpDuzenle']);
			$dosya=mysql_fetch_array($sorgu);
			
			if(!empty($dosya["dosya"]))
			{
				$url="dosyalar/sketchup/".$dosya["dosya"];
				if(unlink("$url"))
				{
					$sql="update sketchup set dosya='' where id=".$_GET['SketchUpDuzenle'];
					if(@mysql_query($sql))
					{
						setcookie("bilgi","Dosya silindi.");
						setcookie("renk","#3C0");
					}
					else
						setcookie("bilgi","Silme i�lemi yap�lmad�.");
				}
			}
			
			header("Location:index.php?SketchUp&SketchUpDuzenle=".$_GET['SketchUpDuzenle']);
		}
		if((isset($_GET["SketchUpDuzenle"])) and (isset($_GET["PDFSil"])))
		{
			$sorgu=mysql_query("select * from sketchup where id=".$_GET['SketchUpDuzenle']);
			$dosya=mysql_fetch_array($sorgu);
			
			if(!empty($dosya["PDF"]))
			{
				$url="dosyalar/sketchup/".$dosya["PDF"];
				if(unlink("$url"))
				{
					$sql="update sketchup set PDF='' where id=".$_GET['SketchUpDuzenle'];
					if(@mysql_query($sql))
					{
						setcookie("bilgi","Dosya silindi.");
						setcookie("renk","#3C0");
					}
					else
						setcookie("bilgi","Silme i�lemi yap�lmad�.");
				}
			}
			
			header("Location:index.php?SketchUp&SketchUpDuzenle=".$_GET['SketchUpDuzenle']);
		}
		
		$sql=@mysql_query("select * from sketchup where id=".$_GET['SketchUpDuzenle']);
		$alanlar=mysql_fetch_array($sql);
		?>
		<div style="width:740px;float:left;">
            <form method="post" target="_self" action="index.php?SketchUp&SketchUpDuzenle=<?php echo $_GET['SketchUpDuzenle']; ?>" enctype="multipart/form-data">
                <input type="submit" value="G�ncelle" class="Button" style="margin-top:-10px;"/>
                <h5><strong>Ba�l�k</strong></h5>
                <input type="text" name="baslik" class="textbox" value="<?php echo $alanlar['baslik']; ?>" style="width:740px;text-align:left;">
                <h5><strong>"Video Yerle�tirme Kodunu" veya "Youtube Video Linkini" buraya yap��t�r�n�z.</strong></h5>
                <textarea name="video" class="textbox" style="max-width:740px; min-width:740px; text-align:left;"><?php echo $alanlar['video']; ?></textarea>
                <h5><strong>Ders hakk�nda a&ccedil;�klama yaz�n�z.</strong></h5>
                <textarea name="icerik" style="width:740px;height:200px;" class="ckeditor"><?php echo $alanlar['icerik']; ?></textarea>
                
                <h5><strong>Konu anlat�m  dosyas�n� buradan y&uuml;kleyiniz.</strong><span style="font-size:12px;"> &raquo; Format: pdf</span></h5>
                <table width="100%" border="0">
                  <tr>
                    <td style="width:250px;text-align:left;"><input type="file" name="PDF" class="textbox" value="<?php echo $alanlar['PDF']; ?>" style="color:#000; width:290px;text-align:left;"  /></td>
                    <?php if(!empty($alanlar['PDF'])){ ?>
                    <td style="width:87px;"> <a class="Button" style="float:left; margin:3px 0 0 5px;color:#FFF;" href="index.php?PDFSil&SketchUp&SketchUpDuzenle=<?php echo $_GET['SketchUpDuzenle']; ?>">Dosya Sil</a></td>
                    <td style="width:37px;"> <a class="Button" style="float:left; margin:3px 0 0 0px;color:#FFF;" href="dosyalar/sketchup/<?php echo $alanlar['PDF']; ?>">�ndir</a></td>
                    <?php } ?>
                    <td><span style="color:#FFF;padding-left:5px;"><strong>Dosya: </strong><?php if(!empty($alanlar['PDF']))echo $alanlar['PDF']; else echo "Yok"; ?></span></td>
                  </tr>
                </table>
                <h5><strong>Proje dosyas�n� buradan y&uuml;kleyiniz.</strong><span style="font-size:12px;"> &raquo; Formatlar: skp</span></h5>
                <table width="100%" border="0">
                  <tr>
                    <td style="width:250px;text-align:left;"><input type="file" name="dosya" class="textbox" value="<?php echo $alanlar['dosya']; ?>" style="color:#000; width:290px;text-align:left;"  /></td>
                    <?php if(!empty($alanlar['dosya'])){ ?>
                    <td style="width:87px;"> <a class="Button" style="float:left; margin:3px 0 0 5px;color:#FFF;" href="index.php?dosyaSil&SketchUp&SketchUpDuzenle=<?php echo $_GET['SketchUpDuzenle']; ?>">Dosya Sil</a></td>
                    <td style="width:37px;"> <a class="Button" style="float:left; margin:3px 0 0 0px;color:#FFF;" href="dosyalar/sketchup/<?php echo $alanlar['dosya']; ?>">�ndir</a></td>
                    <?php } ?>
                    <td><span style="color:#FFF;padding-left:5px;"><strong>Dosya: </strong><?php if(!empty($alanlar['dosya']))echo $alanlar['dosya']; else echo "Yok"; ?></span></td>
                  </tr>
                </table>
            </form>
   		</div>
        <div style="width:470px;float:right;background:url(img/overlay.png);padding:10px;height:590px;">
            <h5 style="font-size:14px;text-align:center;padding:0;margin:5px;"><strong>A�IKLAMALAR</strong></h5>
            <h5 style="font-size:12px;"><strong><span style="color:#FF0;">L�tfen Dikkat!</span></strong> Ders i�in haz�rlam�� oldu�unuz video var ise videonuzu Youtube kanal�n�za y�kleniz.</h5>
            <h5 style="font-size:12px;"><strong><span style="color:#FF0;">L�tfen Dikkat!</span></strong> Youtube'a y�klemi� oldu�unuz videonun yerle�tirme kodunu veya Youtube video linkini (Video URL adresi) -Ders Ekle- formunda ilgili alana yap��t�r�n�z.</h5>
            <h5 style="font-size:12px;"><strong>Videolar�n�z�n ba��na k&uuml;&ccedil;&uuml;k resim ekleyiniz.&ldquo; <a href="img/videoKucukResim.jpg" target="_blank"><span style="color:#FF0;">K&uuml;&ccedil;&uuml;k Resim �ndir</a> &rdquo;</span> </h5>
            <hr style="margin:0;"/>
            <h5 style="font-size:12px;color:#FF0;">Youtube nas�l video y�klerim? Video yerle�tirme koduna nereden ula�abilirim?</h5>
            <iframe width="450" height="273" src="https://www.youtube.com/embed/i2PdroMBp4M" frameborder="0" allowfullscreen></iframe>
            <h5 style="font-size:12px;color:#FF0;"><strong>Konu Anlat�m Dosyas�: </strong></h5>
            <h5 style="font-size:12px;">E�er ders hakk�nda ayr�nt�l� bilgi vermek istiyorsan�z, konu anlat�m�n� PDF format�nda sisteme y�kleyebilirsiniz.</h5>
            
            <h5 style="font-size:12px;color:#FF0;"><strong>Proje Dosyas�: </strong></h5>
            <h5 style="font-size:12px;">Ders i�in haz�rlam�� oldu�unuz proje dosyan�z var ise sisteme y�kleyebilirsiniz. Proje dosyas� dersin ilgili oldu�u yaz�l�mla haz�rlanm�� olmal�d�r.</h5>
            </span>
        </div>
    <div class="clear"></div>
	<?php
	}
	else
	{
		setcookie("bilgi","Kendini uyan�k m� sand�n?");
		header("Location:index.php");	
	}
	?>


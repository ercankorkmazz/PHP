<?php
	@include('inc/baglan.php'); 
	
	if((isset($_GET["SketchUpUyeDuzenle"])) and (isset($_POST["baslik"])))
		@include('inc/SketchUp/uye/Guncelle.php');
	if((isset($_GET["SketchUpUyeDuzenle"])) and (isset($_GET["dosyaSil"])))
	{
		
		$sorgu=mysql_query("select * from sketchup where id=".$_GET['SketchUpUyeDuzenle']);
		$dosya=mysql_fetch_array($sorgu);
		
		if(!empty($dosya["dosya"]))
		{
			$url="../dosyalar/sketchup/".$dosya["dosya"];
			if(unlink("$url"))
			{
				$sql="update sketchup set dosya='' where id=".$_GET['SketchUpUyeDuzenle'];
				if(@mysql_query($sql))
					setcookie("bilgi","Dosya silindi.");
				else
					setcookie("bilgi","Silme iþlemi yapýlmadý.");
			}
		}
		
		header("Location:index.php?SketchUpUyeDuzenle=".$_GET['SketchUpUyeDuzenle']);
	}
	if((isset($_GET["SketchUpUyeDuzenle"])) and (isset($_GET["PDFSil"])))
	{
		
		$sorgu=mysql_query("select * from sketchup where id=".$_GET['SketchUpUyeDuzenle']);
		$dosya=mysql_fetch_array($sorgu);
		
		if(!empty($dosya["PDF"]))
		{
			$url="../dosyalar/sketchup/".$dosya["PDF"];
			if(unlink("$url"))
			{
				$sql="update sketchup set PDF='' where id=".$_GET['SketchUpUyeDuzenle'];
				if(@mysql_query($sql))
					setcookie("bilgi","Dosya silindi.");
				else
					setcookie("bilgi","Silme iþlemi yapýlmadý.");
			}
		}
		
		header("Location:index.php?SketchUpUyeDuzenle=".$_GET['SketchUpUyeDuzenle']);
	}
	
	$sql=@mysql_query("select * from sketchup where id=".$_GET['SketchUpUyeDuzenle']);
	$alanlar=mysql_fetch_array($sql);
	?>
    <form method="post" target="_self" action="index.php?SketchUpUyeDuzenle=<?php echo $_GET['SketchUpUyeDuzenle']; ?>" enctype="multipart/form-data">
        <input type="submit" value="Güncelle" class="Button" style="margin-top:-10px;"/>
    	<h5>Baþlýk</h5>
        <input type="text" name="baslik" class="textbox" value="<?php echo $alanlar['baslik']; ?>" style="width:500px;">
        <h5>Konu anlatým dosyasýný buradan y&uuml;kleyiniz. &raquo; Format: pdf</h5>
        <table width="100%" border="0" style="margin:-3px;">
          <tr>
            <td style="width:500px;"><input type="file" name="PDF" class="textbox" style="color:#000;background:#fff; width:500px;"  /></td>
            <?php if(!empty($alanlar['PDF'])){ ?>
            <td style="width:80px;"> <a class="Button" style="float:left; margin:3px 0 0 0; width:75px;text-align:center;" href="index.php?PDFSil&SketchUpUyeDuzenle=<?php echo $_GET['SketchUpUyeDuzenle']; ?>">Dosyayý Sil</a></td>
            <td style="width:37px;"> <a class="Button" style="float:left; margin:3px 0 0 0px;" href="../dosyalar/sketchup/<?php echo $alanlar['PDF']; ?>" target="_blank">Ýndir</a></td>
			<?php } ?>
            <td> <span style="color:#FFF;"> <strong>Dosya: </strong><?php if(!empty($alanlar['PDF']))echo $alanlar['PDF']; else echo "Yok"; ?></span></td>
          </tr>
		</table>
        <h5>Proje dosyasýný buradan y&uuml;kleyiniz. &raquo; Formatlar: skp - rar</h5>
        <table width="100%" border="0" style="margin:-3px;">
          <tr>
            <td style="width:500px;"><input type="file" name="dosya" class="textbox" style="color:#000;background:#fff; width:500px;"  /></td>
            <?php if(!empty($alanlar['dosya'])){ ?>
            <td style="width:80px;"> <a class="Button" style="float:left; margin:3px 0 0 0; width:75px;text-align:center;" href="index.php?dosyaSil&SketchUpUyeDuzenle=<?php echo $_GET['SketchUpUyeDuzenle']; ?>">Dosyayý Sil</a></td>
            <td style="width:37px;"> <a class="Button" style="float:left; margin:3px 0 0 0px;" href="../dosyalar/sketchup/<?php echo $alanlar['dosya']; ?>" target="_blank">Ýndir</a></td>
			<?php } ?>
            <td> <span style="color:#FFF;"> <strong>Dosya: </strong><?php if(!empty($alanlar['dosya']))echo $alanlar['dosya']; else echo "Yok"; ?></span></td>
          </tr>
		</table>
    	<h5>&quot;Video Yerleþtirme Kodunu&quot; veya &quot;Youtube Video Linkini&quot; buraya yapýþtýrýnýz.</h5>
        <textarea name="video"><?php echo $alanlar['video']; ?></textarea>
        <h5>Ders hakkýnda a&ccedil;ýklama yazýnýz.</h5>
        <textarea name="icerik" class="ckeditor"><?php echo $alanlar['icerik']; ?></textarea>
        <table style="width:630px;float:right; border:1px solid #FFF;margin-top:5px;-webkit-border-radius:5px;-moz-border-radius: 5px;border-radius: 5px;" border="0">
          <tr>
            <td style="color:#FFF;border-right:1px dotted #FFFFFF;">Ders ile ilgili güncellemeleri kabul edip onaylamak iþlemini yapmak için onay kutusunu iþaretleyiniz.</td>
            <td style="width:20px;"><input type="checkbox" name="onay" <?php if($alanlar["onay"]==1) echo "checked='checked'"; ?>/></td>
          </tr>
		</table>
	 </form>


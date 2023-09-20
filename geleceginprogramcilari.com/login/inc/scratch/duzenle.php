<?php
	@include('inc/baglan.php'); 
	
	if((isset($_GET["scratchDuzenle"])) and (isset($_POST["baslik"])))
		@include('inc/scratch/adminGuncelle.php');
	if((isset($_GET["scratchDuzenle"])) and (isset($_GET["dosyaSil"])))
	{
		
		$sorgu=mysql_query("select * from scratch where id=".$_GET['scratchDuzenle']);
		$dosya=mysql_fetch_array($sorgu);
		
		if(!empty($dosya["dosya"]))
		{
			$url="../dosyalar/scratch/".$dosya["dosya"];
			if(unlink("$url"))
			{
				$sql="update scratch set dosya='' where id=".$_GET['scratchDuzenle'];
				if(@mysql_query($sql))
					setcookie("bilgi","Dosya silindi.");
				else
					setcookie("bilgi","Silme iþlemi yapýlmadý.");
			}
		}
		
		header("Location:index.php?scratchDuzenle=".$_GET['scratchDuzenle']);
	}
	if((isset($_GET["scratchDuzenle"])) and (isset($_GET["PDFSil"])))
	{
		
		$sorgu=mysql_query("select * from scratch where id=".$_GET['scratchDuzenle']);
		$dosya=mysql_fetch_array($sorgu);
		
		if(!empty($dosya["PDF"]))
		{
			$url="../dosyalar/scratch/".$dosya["PDF"];
			if(unlink("$url"))
			{
				$sql="update scratch set PDF='' where id=".$_GET['scratchDuzenle'];
				if(@mysql_query($sql))
					setcookie("bilgi","Dosya silindi.");
				else
					setcookie("bilgi","Silme iþlemi yapýlmadý.");
			}
		}
		
		header("Location:index.php?scratchDuzenle=".$_GET['scratchDuzenle']);
	}
	
	$sql=@mysql_query("select * from scratch where id=".$_GET['scratchDuzenle']);
	$alanlar=mysql_fetch_array($sql);
	?>
    <form method="post" target="_self" action="index.php?scratchDuzenle=<?php echo $_GET['scratchDuzenle']; ?>" enctype="multipart/form-data">
        <input type="submit" value="Güncelle" class="Button" style="margin-top:-10px;"/>
    	<h5>Baþlýk</h5>
        <input type="text" name="baslik" class="textbox" value="<?php echo $alanlar['baslik']; ?>" style="width:500px;">
        <h5>Konu anlatým dosyasýný buradan y&uuml;kleyiniz. &raquo; Format: pdf</h5>
        <table width="100%" border="0" style="margin:-3px;">
          <tr>
            <td style="width:500px;"><input type="file" name="PDF" class="textbox" style="color:#000;background:#fff; width:500px;"  /></td>
            <?php if(!empty($alanlar['PDF'])){ ?>
            <td style="width:80px;"> 
            	<a class="Button" style="float:left; margin:3px 0 0 0; width:75px;text-align:center;" href="index.php?PDFSil&scratchDuzenle=<?php echo $_GET['scratchDuzenle']; ?>">Dosyayý Sil</a>
            </td>
            <td style="width:37px;"> 
            	<a class="Button" style="float:left; margin:3px 0 0 0;" href="../dosyalar/scratch/<?php echo $alanlar['PDF']; ?>" target="_blank">Ýndir</a>
            </td>
			<?php } ?>
            <td> 
            	<span style="color:#FFF"> <strong>Dosya: </strong><?php if(!empty($alanlar['PDF']))echo $alanlar['PDF']; else echo "Yok"; ?></span>
            </td>
          </tr>
		</table>
        <h5>Proje dosyasýný buradan y&uuml;kleyiniz. &raquo; Formatlar: sb - sb2 - rar</h5>
        <table width="100%" border="0" style="margin:-3px;">
          <tr>
            <td style="width:500px;"><input type="file" name="dosya" class="textbox" style="color:#000;background:#fff; width:500px;"  /></td>
            <?php if(!empty($alanlar['dosya'])){ ?>
            <td style="width:80px;"> 
            	<a class="Button" style="float:left; margin:3px 0 0 0; width:75px;text-align:center;" href="index.php?dosyaSil&scratchDuzenle=<?php echo $_GET['scratchDuzenle']; ?>">Dosyayý Sil</a>
            </td>
            <td style="width:37px;"> 
            	<a class="Button" style="float:left; margin:3px 0 0 0;" href="../dosyalar/scratch/<?php echo $alanlar['dosya']; ?>" target="_blank">Ýndir</a>
            </td>
			<?php } ?>
            <td> 
            	<span style="color:#FFF"> <strong>Dosya: </strong><?php if(!empty($alanlar['dosya']))echo $alanlar['dosya']; else echo "Yok"; ?></span>
            </td>
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


<?php 
	if(isset($_GET["SketchUpDersler"]) and isset($_POST["icerik"]))
		@include("inc/SketchUp/dersKaydet.php"); // Ders kaydet
	
	if(isset($_GET["SketchUpDersler"]) and isset($_POST["coklu"]))
		@include("inc/SketchUp/dersSil.php"); // Ders Sil
?>
	<form method="post" target="_self" action="index.php?SketchUpDersler" enctype="multipart/form-data">
        <input type="submit" value="Kaydet" class="Button" style="margin-top:-10px;"/>
    	<h5>Baþlýk</h5>
        <input type="text" name="baslik" class="textbox" style="width:500px;">
        <h5>Konu anlatým dosyasýný buradan yükleyiniz. » Format: pdf</h5>
        <input type="file" name="PDF" class="textbox" style="color:#000;background:#fff; width:500px;"  />
        <h5>Proje dosyasýný buradan y&uuml;kleyiniz. &raquo; Formatlar: skp - rar</h5>
        <input type="file" name="dosya" class="textbox" style="color:#000;background:#fff; width:500px;"  />
    	<h5>&quot;Video Yerleþtirme Kodunu&quot; veya &quot;Youtube Video Linkini&quot; buraya yapýþtýrýnýz.</h5>
        <textarea name="video"></textarea>
        <h5>Ders hakkýnda a&ccedil;ýklama yazýnýz.</h5>
        <textarea name="icerik" class="ckeditor"></textarea>
    </form>
    <form method="post" action="index.php?SketchUpDersler" target="_self">
    	<h5 style="margin:30px 0 -15px 0;">Sisteme Kayýtlý Duyurular</h5>
        <input type="submit" value="Seçili Kayýtlarý Sil" class="Button" style="margin-top:7px;" /><br/><hr/>
        <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
            <?php
				@include('inc/baglan.php'); 
				$sorgu=mysql_query("select * from sketchup order by id desc");
				while($alanlar=mysql_fetch_array($sorgu))
				{
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id']; ?>"  /></td>
                <td style="color:#FFF;"><?php echo $alanlar["baslik"] ;?></td>
                <td style="width:22px;"><a href="index.php?SketchUpYorumlar=<?php echo $alanlar['id']; ?>" style="border:0px;"><img src="img/yorum.png" /></a></td>
                <td style="width:20px;"><a href="index.php?SketchUpDuzenle=<?php echo $alanlar['id']; ?>" style="border:0px;"><img src="img/kalem.png" /></a></td>
            </tr>
            <?php } ?>
        </table>
    </form>
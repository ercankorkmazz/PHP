<?php 
	if(isset($_GET["baglantilar"]) and isset($_FILES['dosya']))
		@include("inc/anasayfa/baglantilar/kaydet.php"); // Fotoðraf Kaydeder
		
	if(isset($_GET["baglantilar"]) and isset($_POST["coklu"]))
		@include("inc/anasayfa/baglantilar/sil.php"); //Sil
?>
	<form method="post" target="_self" action="index.php?baglantilar" enctype="multipart/form-data">
    	<h5>Önerilen Genislik: 220px</h5>
    	<input type="file" name="dosya" class="textbox" style="color:#fff;width:300px;"/>
        <input type="submit" name="sliderKaydet" value="Kaydet" class="Button" style="float:right; margin:3px 500px 0 0;" />
        <h5>Bilgi (150 Karakter)</h5>
        <input type="text" name="bilgi" class="textbox" style="width:300px;display:block;margin-top:10px;"/>
        <h5>Baðlantý (URL)</h5>
        <input type="text" name="url" class="textbox" style="width:300px;display:block;margin-top:10px;"/>
    </form>
    <div class="clear"></div>
    <form method="post" action="index.php?baglantilar" target="_self">
    	<h5 style="margin:20px 0 10px 0;float:left;">Sisteme Kayýtlý Resimler</h5>
        <input type="submit" value="Seçili Kayýtlarý Sil" class="Button" style="margin:10px 5px 0 0; float:right;" />
        <div class="clear"></div>
        <table style="width:890px;" border="0" cellspacing="5" cellpadding="7" class="table">
        	<tr>
            	<td style="width:20px;">&nbsp;</td>
                <td style="padding:8px;width:220px;color:#FFF;"><strong>Resim</strong></td>
                <td style="padding:8px;color:#FFF;width:300px;"><strong>Bilgi</strong></td>
                <td style="padding:8px;color:#FFF;"><strong>Baðlantý (URL)</strong></td>
            </tr>
        <?php
			@include('inc/baglan.php'); 
			$sorgu=mysql_query("select * from baglantilar");
			while($alanlar=mysql_fetch_array($sorgu))
			{
		?>
        	<tr>
            	<td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                <td style="width:220px;"><img src="../img/baglanti/<?php echo $alanlar["resim"] ;?>" style="width:220px;"/></td>
                <td style="padding:8px;color:#FFF;"><?php echo $alanlar["bilgi"] ;?></td>
                <td style="padding:8px;color:#FFF;"><?php echo $alanlar["url"] ;?></td>
            </tr>
        <?php } ?>
        </table>
    </form>
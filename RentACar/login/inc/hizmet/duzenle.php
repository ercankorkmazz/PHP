<?php 
	@include("inc/hizmet/guncelle.php"); 
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select BaslikTR,BaslikEN,IcerikTR,IcerikEN,URL from sayfalar where id=".$_GET["hizmetduzenle"]);
	$alanlar=mysql_fetch_array($sorgu);
				
	@include('inc/baglanAR.php'); 
	$sorgu=mysql_query("select BaslikAR,IcerikAR from sayfalar where id=".$_GET["hizmetduzenle"]);
	$alanlarAR=mysql_fetch_array($sorgu);
?>
<form action="index.php?hizmetduzenle=<?php echo $_GET["hizmetduzenle"]; ?>" method="post" enctype="multipart/form-data">
    <div class="sol rent" style="width: 980px;">
		<div class="sol sayfa" style="width:980px; margin-bottom:10px;">
        	<div class="sol" style="padding: 5px; padding-left:0px;">
            	<table border="0">
                	<tr>
                    	<td align="right"><span style="color:#03F;font-size:13px; font-weight:bold;">
							<?php echo @mb_convert_encoding("Küçük", "UTF-8", "ISO-8859-9"); ?> resim (W:190 x H:90): </strong>
                        </td>
                        <td><input type="file" name="dosya" style="width:420px;border:0;" /></td>
                    </tr>
                    <tr>
                    	<td>
                        	<img src="<?php echo "../img/home/hizmetler/".$alanlar["URL"]; ?>" style="width:120px; height:90px;padding:5px; border:1px solid #999; margin-top:10px;">
                        </td>
                    </tr>
                </table>
            </div>
			<div class="sag" style="padding:0px; margin-right:0;">
				<div class="sol">
                    <input type="submit" value="<?php echo @mb_convert_encoding("Güncelle", "UTF-8", "ISO-8859-9"); ?>" class="submit" id="btn" />					
		        </div>						
			</div>
		</div>
        <div class="sol sayfa" style="width:980px;color:#333333; font-size:11px;">
            <span class="title"><?php echo @mb_convert_encoding("Türkçe", "UTF-8", "ISO-8859-9"); ?></span>
            <div class="clear"></div>
            <input type="text" name="BaslikTR" value="<?php echo @mb_convert_encoding($alanlar["BaslikTR"], "UTF-8", "ISO-8859-9");;?>" 
            	placeholder="<?php echo @mb_convert_encoding("Baþlýk Yazýnýz", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik">
            <div class="clear"></div>
            <textarea class="ckeditor" name="IcerikTR">
				<?php echo @mb_convert_encoding($alanlar["IcerikTR"], "UTF-8", "ISO-8859-9"); ?>
            </textarea>
        </div>
        <div class="sol sayfa" style="width:980px; color:#333333; font-size:11px;">
            <span class="title"><?php echo @mb_convert_encoding("Ýngilizce", "UTF-8", "ISO-8859-9"); ?></span>
            <div class="clear"></div>
            <input type="text" name="BaslikEN" value="<?php echo @mb_convert_encoding($alanlar["BaslikEN"], "UTF-8", "ISO-8859-9");;?>" 
            	placeholder="<?php echo @mb_convert_encoding("Baþlýk Yazýnýz", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik">
            <div class="clear"></div>
            <textarea class="ckeditor" name="IcerikEN">
				<?php echo @mb_convert_encoding($alanlar["IcerikEN"], "UTF-8", "ISO-8859-9"); ?>
            </textarea>
        </div>
        <div class="sol sayfa" style="width:980px; color:#333333; font-size:11px;">
            <span class="title"><?php echo @mb_convert_encoding("Arapça", "UTF-8", "ISO-8859-9"); ?></span>
            <div class="clear"></div>
            <input type="text" name="BaslikAR" value="<?php echo $alanlarAR["BaslikAR"];?>" 
            	placeholder="<?php echo @mb_convert_encoding("Baþlýk Yazýnýz", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik">
            <div class="clear"></div>
            <textarea class="ckeditor" name="IcerikAR"><?php echo $alanlarAR["IcerikAR"];?></textarea>
        </div>
	</div>
</form>
</div>
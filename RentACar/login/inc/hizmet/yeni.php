<?php @include("inc/hizmet/ekle.php"); ?>
<form action="index.php?yenihizmet" method="post" enctype="multipart/form-data">
    <div class="sol rent" style="width: 980px;">
		<div class="sol sayfa" style="width:980px; margin-bottom:10px;">
        	<div class="sol" style="padding: 5px; padding-left:0px;">
            	<table border="0">
                	<tr>
                    	<td align="right"><span style="color:#03F;font-size:13px; font-weight:bold;"><?php echo @mb_convert_encoding("Küçük", "UTF-8", "ISO-8859-9"); ?> resim (W:190 x H:90): </strong></td>
                        <td><input type="file" name="dosya" style="width:420px;border:0;" /></td>
                    </tr>
                </table>
            </div>
			<div class="sag" style="padding:0px; margin-right:0;">
				<div class="sol">
                    <input type="submit" value="Kaydet" class="submit" id="btn" />					
		        </div>						
			</div>
		</div>
        <div class="sol sayfa" style="width:980px;color:#333333; font-size:11px;">
            <span class="title">T&uuml;rk&ccedil;e</span><div class="clear"></div>
            <input type="text" name="BaslikTR" 
            	placeholder="<?php echo @mb_convert_encoding("Baþlýk Yazýnýz", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik">
            <div class="clear"></div>
            <textarea class="ckeditor" name="IcerikTR"></textarea>
        </div>
        <div class="sol sayfa" style="width:980px; color:#333333; font-size:11px;">
            <span class="title"><?php echo @mb_convert_encoding("Ýngilizce", "UTF-8", "ISO-8859-9"); ?></span><div class="clear"></div>
            <input type="text" name="BaslikEN" 
            	placeholder="<?php echo @mb_convert_encoding("Baþlýk Yazýnýz", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik">
            <div class="clear"></div>
            <textarea class="ckeditor" name="IcerikEN"></textarea>
        </div>
        <div class="sol sayfa" style="width:980px; color:#333333; font-size:11px;">
            <span class="title">Arap&ccedil;a</span><div class="clear"></div>
            <input type="text" name="BaslikAR" 
            	placeholder="<?php echo @mb_convert_encoding("Baþlýk Yazýnýz", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik">
            <div class="clear"></div>
            <textarea class="ckeditor" name="IcerikAR"></textarea>
        </div>
	</div>
</form>
</div>
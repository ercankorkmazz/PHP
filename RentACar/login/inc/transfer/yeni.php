<?php @include("inc/transfer/ekle.php"); ?>
<form action="index.php?yenitransfer" method="post">
    <div class="sol rent" style="width: 980px;">
		<div class="sol sayfa" style="width:980px; margin-bottom:10px;">
        	<div class="sol" style="padding: 5px; padding-left:0px;">
            	<span class="title"><?php echo mb_convert_encoding("Yeni Transfer", "UTF-8", "ISO-8859-9"); ?></span>
            </div>
			<div class="sag" style="padding:0px; margin-right:0;">
				<div class="sol">
                    <input type="submit" value="Kaydet" class="submit" id="btn" />					
		        </div>						
			</div>
		</div>
        <div class="sol sayfa" style="width:980px;color:#333333; font-size:11px;">
            <table width="100%" border="0">
              <tr>
                <td>
                    <input type="text" name="AYTR" style="font-weight:bold; text-align:center; width:300px;" class="txtBaslik" 
                    placeholder="<?php echo @mb_convert_encoding("Alýþ Yeri Türkçe *", "UTF-8", "ISO-8859-9"); ?>">
                </td>
                <td>&nbsp;</td>
                <td>
                    <input type="text" name="AYEN" style="font-weight:bold; text-align:center; width:300px;" class="txtBaslik" 
                    placeholder="<?php echo @mb_convert_encoding("Alýþ Yeri Ýngilizce *", "UTF-8", "ISO-8859-9"); ?>">
                </td>
                <td>&nbsp;</td>
                <td>
                    <input type="text" name="AYAR" style="font-weight:bold; text-align:center; width:300px;" class="txtBaslik" 
                    placeholder="<?php echo @mb_convert_encoding("Alýþ Yeri Arapça *", "UTF-8", "ISO-8859-9"); ?>">
                </td>
              </tr>
              <tr>
                <td>
                    <input type="text" name="DYTR" style="font-weight:bold; text-align:center; width:300px;" class="txtBaslik" 
                    placeholder="<?php echo @mb_convert_encoding("Dönüþ Yeri Türkçe *", "UTF-8", "ISO-8859-9"); ?>">
                </td>
                <td>&nbsp;</td>
                <td>
                    <input type="text" name="DYEN" style="font-weight:bold; text-align:center; width:300px;" class="txtBaslik" 
                    placeholder="<?php echo @mb_convert_encoding("Dönüþ Yeri Ýngilizce *", "UTF-8", "ISO-8859-9"); ?>">
                </td>
                <td>&nbsp;</td>
                <td>
                    <input type="text" name="DYAR" style="font-weight:bold; text-align:center; width:300px;" class="txtBaslik" 
                    placeholder="<?php echo @mb_convert_encoding("Dönüþ Yeri Arapça *", "UTF-8", "ISO-8859-9"); ?>">
                </td>
              </tr>
            </table>
        </div>
        <div class="sol sayfa" style="width:980px;color:#333333; font-size:11px;">
            <table width="100%" border="0">
              <tr>
                <td style="padding-left:10px;" align="right"><strong>1-4 <?php echo @mb_convert_encoding("Kiþi", "UTF-8", "ISO-8859-9"); ?> (TL)</strong></td>
                <td>
                	<input type="text" name="K1_4" placeholder="<?php echo @mb_convert_encoding("TL Fiyatý *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:100px; text-align:center; font-size:12px; font-weight:bold;"></td>
                <td align="right"><strong>5-8 <?php echo @mb_convert_encoding("Kiþi", "UTF-8", "ISO-8859-9"); ?> (TL)</strong></td>
                <td>
                	<input type="text" name="K5_8" placeholder="<?php echo @mb_convert_encoding("TL Fiyatý *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:100px; text-align:center;font-weight:bold;"></td>
                <td align="right"><strong>9-15 <?php echo @mb_convert_encoding("Kiþi", "UTF-8", "ISO-8859-9"); ?> (TL)</strong></td>
                <td>
                	<input type="text" name="K9_15" placeholder="<?php echo @mb_convert_encoding("TL Fiyatý *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:100px; text-align:center;font-weight:bold;"></td>
                <td style="padding-left:10px;" align="right"><strong>16-30 <?php echo @mb_convert_encoding("Kiþi ", "UTF-8", "ISO-8859-9"); ?>(TL)</strong></td>
                <td colspan="6">
                	<input type="text" name="K16_30" placeholder="<?php echo @mb_convert_encoding("TL Fiyatý *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:100px; text-align:center;font-weight:bold;"></td>
              </tr>
              <tr>
                <td style="padding-left:10px;" align="right"><strong>Mesafe <?php echo @mb_convert_encoding("Kiþi ", "UTF-8", "ISO-8859-9"); ?>(KM)</strong></td>
                <td colspan="8">
                	<input type="text" name="mesafe" placeholder="<?php echo @mb_convert_encoding("KM Türünden *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:100px; text-align:center;font-weight:bold;"></td>
              </tr>
            </table>
    	</div>
	</div>
</form>
</div>
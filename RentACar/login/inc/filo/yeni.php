<?php @include("inc/filo/ekle.php"); ?>
<form action="index.php?yeniarac" method="post" enctype="multipart/form-data">
    <div class="sol rent" style="width: 980px;">
		<div class="sol sayfa" style="width:980px; margin-bottom:10px;">
        	<div class="sol" style="padding: 5px; padding-left:0px;">
            	<table border="0">
                	<tr>
                    	<td align="right"><span style="color:#03F;font-size:13px; font-weight:bold;"><?php echo @mb_convert_encoding("Araç", "UTF-8", "ISO-8859-9"); ?> resmi ( W:220px , H:120px ): </strong></td>
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
          <input type="text" name="baslik" style="font-weight:bold;"
            	placeholder="<?php echo @mb_convert_encoding("Marka - Model yazýnýz. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik">
        </div>
        <div class="sol sayfa" style="width:980px;color:#333333; font-size:11px;">
            <table width="100%" border="0">
              <tr>
                <td style="padding-left:10px;" align="right"><strong>1-3 <?php echo @mb_convert_encoding("Gün", "UTF-8", "ISO-8859-9"); ?> (TL)</strong></td>
                <td>
                	<input type="text" name="F1_3" placeholder="<?php echo @mb_convert_encoding("TL deðerindeki günlük fiyatý. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:190px; text-align:center; font-size:12px; font-weight:bold;"></td>
                <td align="right"><strong>4-7 <?php echo @mb_convert_encoding("Gün", "UTF-8", "ISO-8859-9"); ?> (TL)</strong></td>
                <td>
                	<input type="text" name="F4_7" placeholder="<?php echo @mb_convert_encoding("TL deðerindeki günlük fiyatý. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:190px; text-align:center;font-weight:bold;"></td>
                <td align="right"><strong>8-15 <?php echo @mb_convert_encoding("Gün", "UTF-8", "ISO-8859-9"); ?> (TL)</strong></td>
                <td>
                	<input type="text" name="F8_15" placeholder="<?php echo @mb_convert_encoding("TL deðerindeki günlük fiyatý. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:190px; text-align:center;font-weight:bold;"></td>
              </tr>
              <tr>
                <td style="padding-left:10px;" align="right"><strong>16-21 <?php echo @mb_convert_encoding("Gün", "UTF-8", "ISO-8859-9"); ?>(TL)</strong></td>
                <td>
                	<input type="text" name="F16_21" placeholder="<?php echo @mb_convert_encoding("TL deðerindeki günlük fiyatý. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:190px; text-align:center;font-weight:bold;"></td>
                <td align="right"><strong>22-28 <?php echo @mb_convert_encoding("Gün", "UTF-8", "ISO-8859-9"); ?> (TL)</strong></td>
                <td>
                	<input type="text" name="F22_28" placeholder="<?php echo @mb_convert_encoding("TL deðerindeki günlük fiyatý. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:190px; text-align:center;font-weight:bold;"></td>
                <td align="right"><strong>29-99 <?php echo @mb_convert_encoding("Gün", "UTF-8", "ISO-8859-9"); ?> (TL)</strong></td>
                <td>
                	<input type="text" name="F29_99" placeholder="<?php echo @mb_convert_encoding("TL deðerindeki günlük fiyatý. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:190px; text-align:center;font-weight:bold;"></td>
              </tr>
            </table>
      		</div>
        <div class="sol sayfa" style="width:980px;color:#333333; font-size:11px;">
            <table width="100%" border="0" cellpadding="5">
              <tr>
                <td width="25%" align="center"><img src="../img/icon_kisi.png" /></td>
                <td width="25%" align="center"><img src="../img/icon_bagaj.png" /></td>
                <td width="25%" align="center"><img src="../img/icon_benzin.png" /></td>
                <td width="25%" align="center"><img src="../img/icon_vites.png" /></td>
              </tr>
              <tr>
                <td>
                	<select name="koltuk" class="txtBaslik" style="width:100%;text-align:center;font-weight:bold;">
                	  <option value="x2">x2</option>
                	  <option value="x3">x3</option>
                	  <option value="x4">x4</option>
                	  <option value="x5">x5</option>
                	  <option value="x6">x6</option>
                	  <option value="x7">x7</option>
                	  <option value="x8">x8</option>
                	  <option value="x9">x9</option>
                	  <option value="x10">x10</option>
                	  <option value="x11">x11</option>
                	  <option value="x12">x12</option>
                	  <option value="x13">x13</option>
                	  <option value="x14">x14</option>
                	  <option value="x15">x15</option>
                	  <option value="x16">x15</option>
                	  <option value="x17">x17</option>
                	  <option value="x18">x18</option>
                  </select>
                </td>
                <td>
                	<select name="canta" class="txtBaslik" style="width:100%;text-align:center;font-weight:bold;">
                	  <option value="x2">x2</option>
                	  <option value="x3">x3</option>
                	  <option value="x4">x4</option>
                	  <option value="x5">x5</option>
                	  <option value="x6">x6</option>
                	  <option value="x7">x7</option>
                	  <option value="x8">x8</option>
                	  <option value="x9">x9</option>
                	  <option value="x10">x10</option>
                    </select>
                </td>
                <td>
                	<select name="yakit" class="txtBaslik" style="width:100%;text-align:center;font-weight:bold;">
                	  <option value="1">Benzin</option>
                	  <option value="2">Dizel</option>
                	  <option value="3">LPG</option>
                    </select>
                </td>
                <td>
                	<select name="vites" class="txtBaslik" style="width:100%;text-align:center;font-weight:bold;">
                	  <option value="1">Manual</option>
                	  <option value="2">Otomatik</option>
                	  <option value="3">Tiptronik</option>
                    </select>
                </td>
              </tr>
            </table>
        </div>
	</div>
</form>
</div>
<?php 
	@include("inc/filo/guncelle.php"); 
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from araclar where id=".$_GET["aracduzenle"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<form action="index.php?aracduzenle=<?php echo $_GET["aracduzenle"]; ?>" method="post" enctype="multipart/form-data">
    <div class="sol rent" style="width: 980px;">
		<div class="sol sayfa" style="width:980px; margin-bottom:10px;">
            <div class="sol" style="padding: 5px; padding-left:0px;">
            	<table border="0">
                	<tr>
                    	<td align="right"><span style="color:#03F;font-size:13px; font-weight:bold;"><?php echo @mb_convert_encoding("Araç", "UTF-8", "ISO-8859-9"); ?> resmi ( W:220px , H:120px ): </strong></td>
                        <td><input type="file" name="dosya" style="width:420px;border:0;" /></td>
                    </tr>
                    <tr>
                    	<td>
                        	<img src="<?php echo "../img/arac/".$alanlar["URL"]; ?>" style="width:220px; height:120px;padding:5px; border:1px solid #999; margin-top:10px;">
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
          <input type="text" name="baslik" style="font-weight:bold;"
          		value="<?php echo @mb_convert_encoding($alanlar['baslik'], 'UTF-8', 'ISO-8859-9'); ?>"
            	placeholder="<?php echo @mb_convert_encoding("Marka - Model yazýnýz. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik">
        </div>
        <div class="sol sayfa" style="width:980px;color:#333333; font-size:11px;">
            <table width="100%" border="0">
              <tr>
                <td style="padding-left:10px;" align="right"><strong>1-3 <?php echo @mb_convert_encoding("Gün", "UTF-8", "ISO-8859-9"); ?> (TL)</strong></td>
                <td>
                	<input type="text" name="F1_3"
          				value="<?php echo @mb_convert_encoding($alanlar['F1_3'], 'UTF-8', 'ISO-8859-9'); ?>" 
                        placeholder="<?php echo @mb_convert_encoding("TL deðerindeki günlük fiyatý. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:190px; text-align:center; font-size:12px; font-weight:bold;"></td>
                <td align="right"><strong>4-7 <?php echo @mb_convert_encoding("Gün", "UTF-8", "ISO-8859-9"); ?> (TL)</strong></td>
                <td>
                	<input type="text" name="F4_7"
          				 value="<?php echo @mb_convert_encoding($alanlar['F4_7'], 'UTF-8', 'ISO-8859-9'); ?>" 
                         placeholder="<?php echo @mb_convert_encoding("TL deðerindeki günlük fiyatý. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:190px; text-align:center;font-weight:bold;"></td>
                <td align="right"><strong>8-15 <?php echo @mb_convert_encoding("Gün", "UTF-8", "ISO-8859-9"); ?> (TL)</strong></td>
                <td>
                	<input type="text" name="F8_15" 
          				value="<?php echo @mb_convert_encoding($alanlar['F8_15'], 'UTF-8', 'ISO-8859-9'); ?>" 
                        placeholder="<?php echo @mb_convert_encoding("TL deðerindeki günlük fiyatý. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:190px; text-align:center;font-weight:bold;"></td>
              </tr>
              <tr>
                <td style="padding-left:10px;" align="right"><strong>16-21 <?php echo @mb_convert_encoding("Gün", "UTF-8", "ISO-8859-9"); ?>(TL)</strong></td>
                <td>
                	<input type="text" name="F16_21" 
          				value="<?php echo @mb_convert_encoding($alanlar['F16_21'], 'UTF-8', 'ISO-8859-9'); ?>" 
                        placeholder="<?php echo @mb_convert_encoding("TL deðerindeki günlük fiyatý. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:190px; text-align:center;font-weight:bold;"></td>
                <td align="right"><strong>22-28 <?php echo @mb_convert_encoding("Gün", "UTF-8", "ISO-8859-9"); ?> (TL)</strong></td>
                <td>
                	<input type="text" name="F22_28" 
          				value="<?php echo @mb_convert_encoding($alanlar['F22_28'], 'UTF-8', 'ISO-8859-9'); ?>" 
                        placeholder="<?php echo @mb_convert_encoding("TL deðerindeki günlük fiyatý. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:190px; text-align:center;font-weight:bold;"></td>
                <td align="right"><strong>29-99 <?php echo @mb_convert_encoding("Gün", "UTF-8", "ISO-8859-9"); ?> (TL)</strong></td>
                <td>
                	<input type="text" name="F29_99" 
          				value="<?php echo @mb_convert_encoding($alanlar['F29_99'], 'UTF-8', 'ISO-8859-9'); ?>" 
                        placeholder="<?php echo @mb_convert_encoding("TL deðerindeki günlük fiyatý. *", "UTF-8", "ISO-8859-9"); ?>" class="txtBaslik" style="width:190px; text-align:center;font-weight:bold;"></td>
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
                	  <option value="x2" <?php if($alanlar['koltuk']=="x2") echo " selected='selected'";?>>x2</option>
                	  <option value="x3" <?php if($alanlar['koltuk']=="x3") echo " selected='selected'";?>>x3</option>
                	  <option value="x4" <?php if($alanlar['koltuk']=="x4") echo " selected='selected'";?>>x4</option>
                	  <option value="x5" <?php if($alanlar['koltuk']=="x5") echo " selected='selected'";?>>x5</option>
                	  <option value="x6" <?php if($alanlar['koltuk']=="x6") echo " selected='selected'";?>>x6</option>
                	  <option value="x7" <?php if($alanlar['koltuk']=="x7") echo " selected='selected'";?>>x7</option>
                	  <option value="x8" <?php if($alanlar['koltuk']=="x8") echo " selected='selected'";?>>x8</option>
                	  <option value="x9" <?php if($alanlar['koltuk']=="x9") echo " selected='selected'";?>>x9</option>
                	  <option value="x10" <?php if($alanlar['koltuk']=="x10") echo " selected='selected'";?>>x10</option>
                	  <option value="x11" <?php if($alanlar['koltuk']=="x11") echo " selected='selected'";?>>x11</option>
                	  <option value="x12" <?php if($alanlar['koltuk']=="x12") echo " selected='selected'";?>>x12</option>
                	  <option value="x13" <?php if($alanlar['koltuk']=="x13") echo " selected='selected'";?>>x13</option>
                	  <option value="x14" <?php if($alanlar['koltuk']=="x14") echo " selected='selected'";?>>x14</option>
                	  <option value="x15" <?php if($alanlar['koltuk']=="x15") echo " selected='selected'";?>>x15</option>
                	  <option value="x16" <?php if($alanlar['koltuk']=="x16") echo " selected='selected'";?>>x15</option>
                	  <option value="x17" <?php if($alanlar['koltuk']=="x17") echo " selected='selected'";?>>x17</option>
                	  <option value="x18" <?php if($alanlar['koltuk']=="x18") echo " selected='selected'";?>>x18</option>
                  </select>
                </td>
                <td>
                	<select name="canta" class="txtBaslik" style="width:100%;text-align:center;font-weight:bold;">
                	  <option value="x2" <?php if($alanlar['canta']=="x2") echo " selected='selected'";?>>x2</option>
                	  <option value="x3" <?php if($alanlar['canta']=="x3") echo " selected='selected'";?>>x3</option>
                	  <option value="x4" <?php if($alanlar['canta']=="x4") echo " selected='selected'";?>>x4</option>
                	  <option value="x5" <?php if($alanlar['canta']=="x5") echo " selected='selected'";?>>x5</option>
                	  <option value="x6" <?php if($alanlar['canta']=="x6") echo " selected='selected'";?>>x6</option>
                	  <option value="x7" <?php if($alanlar['canta']=="x7") echo " selected='selected'";?>>x7</option>
                	  <option value="x8" <?php if($alanlar['canta']=="x8") echo " selected='selected'";?>>x8</option>
                	  <option value="x9" <?php if($alanlar['canta']=="x9") echo " selected='selected'";?>>x9</option>
                	  <option value="x10" <?php if($alanlar['canta']=="x10") echo " selected='selected'";?>>x10</option>
                    </select>
                </td>
                <td>
                	<select name="yakit" class="txtBaslik" style="width:100%;text-align:center;font-weight:bold;">
                	  <option value="1" <?php if($alanlar['yakit']=="1") echo " selected='selected'";?>>Benzin</option>
                	  <option value="2" <?php if($alanlar['yakit']=="2") echo " selected='selected'";?>>Dizel</option>
                	  <option value="3" <?php if($alanlar['yakit']=="3") echo " selected='selected'";?>>LPG</option>
                    </select>
                </td>
                <td>
                	<select name="vites" class="txtBaslik" style="width:100%;text-align:center;font-weight:bold;">
                	  <option value="1" <?php if($alanlar['vites']=="1") echo " selected='selected'";?>>Manual</option>
                	  <option value="2" <?php if($alanlar['vites']=="2") echo " selected='selected'";?>>Otomatik</option>
                	  <option value="3" <?php if($alanlar['vites']=="3") echo " selected='selected'";?>>Tiptronik</option>
                    </select>
                </td>
              </tr>
            </table>
        </div>
	</div>
</form>
</div>
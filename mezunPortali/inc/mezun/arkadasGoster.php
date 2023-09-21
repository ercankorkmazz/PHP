<div class="icerik">
  <div class="icerikSol">
  <?php
	@include('inc/baglan.php');
	$sec=@mysql_query("select * from mezun where id=".$_GET["mezunGoster"],$baglan);
	$alanlar=@mysql_fetch_array($sec);
  ?>
  	<table width="100%" border="0" class="uyeFormu">
      <tr>
      	<td style="border:0;text-align:left;"><h3 style="margin:0;"><?php echo $alanlar["adSoyad"]; ?></h3></td>
        <td colspan="3" style="border:0;margin:0;font-weight:normal;">
        	<?php
				$sql=@mysql_query("select * from bolumler where id=".$alanlar["bolumNo"],$baglan);
				$bolumAdi=@mysql_fetch_array($sql);
               	echo $bolumAdi["bolumAdi"];
			?>
        </td>
      </tr>
      <tr>
      	<td colspan="4" style="margin:0;padding:0;border:0;"><hr></td>
      </tr>
      <tr>
      	<td style="border:0;">E-Posta: </td>
      	<td colspan="3" style="border:0;height:5px;"><input type="text" name="ePostaK" value="<?php if(!empty($alanlar["ePostaK"])) echo $alanlar["ePostaK"]; else echo "-"; ?>" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Ýlköðretim: </td>
        <td colspan="3" style="border:0;"><input type="text" name="ilkogretim" value="<?php if(!empty($alanlar["ilkogretim"])) echo $alanlar["ilkogretim"]; else echo "-"; ?>"  style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Ortaöðretim: </td>
        <td colspan="3" style="border:0;"><input type="text" name="ortaogretim" value="<?php if(!empty($alanlar["ortaogretim"])) echo $alanlar["ortaogretim"]; else echo "-"; ?>"  style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Yüksek Lisans: </td>
        <td colspan="3" style="border:0;"><input type="text" name="yukseklisans" value="<?php if(!empty($alanlar["ylisans"])) echo $alanlar["ylisans"]; else echo "-"; ?>"  style="width:100%;"></td>
      </tr>
      <tr>
      	<td colspan="4" style="border:0;text-align:left;"><h3>Güncel Durumu</h3><hr></td>
      </tr>
      <tr>
        <td style="border:0;">Çalýþýyor mu?</td>
        <td style="border:0;border-bottom:1px dashed #888;">
        	<table width="70%" border="0">
            	<tr><td style="border:0;">Evet</td><td style="border:0;text-align:left;"><input type="radio" name="calismaDurumu" value="1"<?php if($alanlar["calismaDurumu"]==1) echo " checked";?>></td><td style="border:0;">Hayýr</td><td style="border:0;text-align:left;"><input type="radio" name="calismaDurumu" value="0" <?php if($alanlar["calismaDurumu"]==0) echo "checked";?>></td></tr>
            </table>
        </td>
        <td style="border:0;">Ýþ Yeri Adý: </td>
        <td style="border:0;"><input type="text" name="isYeriAdi" value="<?php if(!empty($alanlar["isYeriAdi"])) echo $alanlar["isYeriAdi"]; else echo "-"; ?>"  style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">
        	<table width="70%" border="0">
            	<tr>
                	<td style="border:0;">Özel</td><td style="border:0;text-align:left;">
                    	<input type="radio" name="departman" value="0" <?php if($alanlar["departman"]==0) echo "checked='checked' "; ?>>
                    </td>
                    <td style="border:0;">Kamu</td><td style="border:0;text-align:left;">
                    	<input type="radio" name="departman" value="1"  <?php if($alanlar["departman"]==1) echo "checked='checked' "; ?>>
                    </td>
            	</tr>
            </table>
        </td>
        <td style="border:0;">Pozisyon: </td>
        <td style="border:0;"><input type="text" name="pozisyon" value="<?php if(!empty($alanlar["pozisyon"])) echo $alanlar["pozisyon"]; else echo "-"; ?>"  style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Diðer: </td>
        <td colspan="4" style="text-align:left;border:0;"><input type="text" name="diger" value="<?php if(!empty($alanlar["diger"])) echo $alanlar["diger"]; else echo "-"; ?>"  style="width:100%;"></td>
      </tr>
    </table>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
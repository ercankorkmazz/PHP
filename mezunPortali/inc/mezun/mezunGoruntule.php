<div class="icerik">
  <div class="icerikSol">
  <?php
	@include('inc/baglan.php');
	$id = (int) intval($_GET["mezun"]);
	if($id == 0){
		echo "bu güvenlik önlemidir";
		die();
		}
	$sec=@mysql_query("select * from mezun where id=".$id,$baglan);
	$alanlar=@mysql_fetch_array($sec);
  ?>
  	<table width="100%" border="0" class="uyeFormu">
      <tr>
      	<td colspan="5" style="border:0;text-align:left;"><h3 style="margin-top:0;">Kimlik Bilgileri</h3><hr></td>
      </tr>
      <tr>
        <td style="width:130px;border:0;">T.C. Kimlik No: </td>
        <td><input type="text" name="tcNo" value="<?php echo $alanlar["tcNo"]; ?>" style="width:100%;"></td>
        <td style="width:30px;border:0;">&nbsp;</td>
        <td style="width:130px;border:0;">Okul No: </td>
        <td><input type="text" name="okulNo" value="<?php echo $alanlar["okulNo"]; ?>" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Adý Soyadý: </td>
        <td><input name="adSoyad" type="text" value="<?php echo $alanlar["adSoyad"]; ?>" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;font-size:12px;">Bölüm / Anabilim Dalý: </td>
        <td style="margin:0;text-align:left;">
        	<select name="bolumNo" style="width:175px;margin:0;margin-right:-12px;">
        	  <?php 
			  	@include('inc/baglan.php');
				$sql=@mysql_query("select * from bolumler",$baglan);
				while($bolumler=@mysql_fetch_array($sql))
				{
			  ?>
        	  		<option value="<?php echo $bolumler['id']; ?>" <?php if($alanlar["bolumNo"]==$bolumler['id']) echo "selected='selected'";?>><?php echo $bolumler['bolumAdi']; ?></option>
              <?php } ?>
      	  </select></td>
      </tr>
      <tr>
        <td style="border:0;">Doðum Yeri: </td>
        <td><input type="text" name="dogumYeri" value="<?php echo $alanlar["dogumYeri"]; ?>"  style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Mezuniyet Yýlý:</td>
        <td>
        	<input type="text" name="mezuniyetYili" value="<?php echo $alanlar["mezuniyetYili"]; ?>"  style="width:100%;">
        </td>
      </tr>
      <tr>
        <td style="border:0;">Doðum Tarihi: </td>
        <td><input type="text" name="dogumTarihi" value="<?php echo $alanlar["dogumTarihi"]; ?>"  style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Baba Adý: </td>
        <td>
        	<input type="text" name="babaAdi" value="<?php echo $alanlar["babaAdi"]; ?>"  style="width:100%;">
        </td>
      </tr>
      <tr>
        <td style="border:0;">Kan Grubu: </td>
        <td>
            <select name="kanGrubu" style="width:100%;">
                <option <?php if($alanlar["kanGrubu"]=="A+") echo "selected='selected'";?>>A+</option>
                <option <?php if($alanlar["kanGrubu"]=="A-") echo "selected='selected'";?>>A-</option>
                <option <?php if($alanlar["kanGrubu"]=="B+") echo "selected='selected'";?>>B+</option>
                <option <?php if($alanlar["kanGrubu"]=="B-") echo "selected='selected'";?>>B-</option>
                <option <?php if($alanlar["kanGrubu"]=="AB+") echo "selected='selected'";?>>AB+</option>
                <option <?php if($alanlar["kanGrubu"]=="AB-") echo "selected='selected'";?>>AB-</option>
                <option <?php if($alanlar["kanGrubu"]=="0+") echo "selected='selected'";?>>0+</option>
                <option <?php if($alanlar["kanGrubu"]=="0-") echo "selected='selected'";?>>0-</option>
          </select>	        	    
        </td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Ana Adý: </td>
        <td>
          <input type="text" name="anaAdi" value="<?php echo $alanlar["anaAdi"]; ?>"  style="width:100%;">
        </td>
      </tr>
      <tr>
      	<td colspan="3" style="border:0;">&nbsp;</td>
      	<td style="border:0;">Medeni Hali: </td>
      	<td style="border:0;">
        	<table width="100%" border="0">
            	<tr><td style="border:0;">Evli</td><td style="border:0;text-align:left;"><input type="radio" name="medeniHali" value="Evli" <?php if($alanlar["medeniHali"]=="Evli") echo "checked";?>></td><td style="border:0;">Bekar</td><td style="border:0;text-align:left;"><input type="radio" name="medeniHali" value="Bekar" <?php if($alanlar["medeniHali"]=="Bekar") echo "checked";?>></td></tr>
            </table>  
        </td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;text-align:left;"><h3 style="margin-top:0;">Eðitim Bilgileri</h3><hr></td>
      </tr>
      <tr>
        <td style="border:0;">Ýlköðretim: </td>
        <td colspan="4"><input type="text" name="ilkogretim" value="<?php echo $alanlar["ilkogretim"]; ?>"  style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Ortaöðretim: </td>
        <td colspan="4"><input type="text" name="ortaogretim" value="<?php echo $alanlar["ortaogretim"]; ?>"  style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Yüksek Lisans: </td>
        <td colspan="4"><input type="text" name="yukseklisans" value="<?php echo $alanlar["ylisans"]; ?>"  style="width:100%;"></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;text-align:left;"><h3>Ýletiþim Bilgileri</h3><hr></td>
      </tr>
      <tr>
        <td style="border:0;">Cep Telefonu: </td>
        <td><input type="text" name="cepTel" value="<?php echo $alanlar["cepTel"]; ?>" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Ýþ Telefonu: </td>
        <td><input type="text" name="isTel" value="<?php echo $alanlar["isTel"]; ?>"  style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Ev Telefonu: </td>
        <td><input type="text" name="evTel" value="<?php echo $alanlar["evTel"]; ?>"  style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Fax: </td>
        <td><input type="text" name="fax" value="<?php echo $alanlar["fax"]; ?>"  style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">E-Posta (kiþisel): </td>
        <td><input type="text" name="ePostaK" value="<?php echo $alanlar["ePostaK"]; ?>" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">E-Posta (iþ): </td>
        <td><input type="text" name="ePostaI" value="<?php echo $alanlar["ePostaI"]; ?>"  style="width:100%;"></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;height:5px;"></td>
      </tr>
      <tr>
        <td style="border:0;" valign="top">Adres: </td>
        <td colspan="4" style="text-align:left;"><textarea name="adres"><?php echo $alanlar["adres"]; ?></textarea></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;text-align:left;"><h3>Güncel Durumu</h3><hr></td>
      </tr>
      <tr>
        <td style="border:0;">Çalýþýyor mu?</td>
        <td style="border:0;border-bottom:1px dashed #888;">
        	<table width="100%" border="0">
            	<tr><td style="border:0;">Evet</td><td style="border:0;text-align:left;"><input type="radio" name="calismaDurumu" value="1"<?php if($alanlar["calismaDurumu"]==1) echo " checked";?>></td><td style="border:0;">Hayýr</td><td style="border:0;text-align:left;"><input type="radio" name="calismaDurumu" value="0" <?php if($alanlar["calismaDurumu"]==0) echo "checked";?>></td></tr>
            </table>
        </td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Ýþ Yeri Adý: </td>
        <td><input type="text" name="isYeriAdi" value="<?php echo $alanlar["isYeriAdi"]; ?>"  style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">
        	<table width="100%" border="0">
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
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Pozisyon: </td>
        <td><input type="text" name="pozisyon" value="<?php echo $alanlar["pozisyon"]; ?>"  style="width:100%;"></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;height:5px;"></td>
      </tr>
      <tr>
        <td style="border:0;">Diðer: </td>
        <td colspan="4" style="text-align:left;"><input type="text" name="diger" value="<?php echo $alanlar["diger"]; ?>"  style="width:100%;"></td>
      </tr>
    </table>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
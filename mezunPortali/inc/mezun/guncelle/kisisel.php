<?php
  	if(isset($_POST["tcNo"]))
		include("inc/mezun/guncelle/kisiselG.php");
		
	@include('inc/baglan.php');
	$sec=@mysql_query("select * from mezun where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"],$baglan);
	$alanlar=@mysql_fetch_array($sec);
?>
<div class="icerik">
  <div class="icerikSol">
  <form action="index.php?kisiselBilgiler" method="post">
  	<table width="100%" border="0" class="uyeFormu">
      <tr>
      	<td colspan="5" style="border:0;text-align:left;"><h3 style="margin-top:0;">Kimlik Bilgileri</h3><hr></td>
      </tr>
      <tr>
        <td style="width:130px;border:0;">T.C. Kimlik No<span style="width:170px;border:0;"> <span style="color:red;">(*)</span></span>: </td>
        <td><input type="text" name="tcNo" value="<?php echo $alanlar["tcNo"]; ?>" style="width:100%;"></td>
        <td style="width:10px;border:0;">&nbsp;</td>
        <td style="width:150px;border:0;">Okul No<span style="width:170px;border:0;"> <span style="color:red;">(*)</span></span>: </td>
        <td><input type="text" name="okulNo" value="<?php echo $alanlar["okulNo"]; ?>" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Adý Soyadý<span style="width:170px;border:0;"> <span style="color:red;">(*)</span></span>: </td>
        <td><input name="adSoyad" type="text" value="<?php echo $alanlar["adSoyad"]; ?>" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;font-size:12px;">Bölüm / Anabilim Dalý<span style="color:red;"> (*)</span>: </td>
        <td style="width:170px;">
          <select name="bolumNo" style="width:100%;">
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
        <td><input type="text" name="dogumYeri" value="<?php echo $alanlar["dogumYeri"]; ?>" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Mezuniyet Yýlý<span style="color:red;"> (*)</span>:</td>
        <td>
        	<input type="text" name="mezuniyetYili" value="<?php echo $alanlar["mezuniyetYili"]; ?>" style="width:100%;">
        </td>
      </tr>
      <tr>
        <td style="border:0;">Doðum Tarihi: </td>
        <td><input type="text" name="dogumTarihi" value="<?php echo $alanlar["dogumTarihi"]; ?>" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Baba Adý: </td>
        <td>
        	<input type="text" name="babaAdi" value="<?php echo $alanlar["babaAdi"]; ?>" style="width:100%;">
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
          <input type="text" name="anaAdi" value="<?php echo $alanlar["anaAdi"]; ?>" style="width:100%;">
        </td>
      </tr>
      <tr>
      	<td style="border:0;">Medeni Hali: </td>
      	<td style="border:0;">
        	<table width="100%" border="0">
            	<tr><td style="border:0;">Evli</td><td style="border:0;text-align:left;"><input type="radio" name="medeniHali" value="Evli" <?php if($alanlar["medeniHali"]=="Evli") echo "checked";?>></td><td style="border:0;">Bekar</td><td style="border:0;text-align:left;"><input type="radio" name="medeniHali" value="Bekar" <?php if($alanlar["medeniHali"]=="Bekar") echo "checked";?>></td></tr>
            </table>  
        </td>
      	<td colspan="3" style="border:0;">&nbsp;</td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;height:5px;"><input type="submit" value="Güncelle" class="button" style="width:150px; margin-top:10px;"/></td>
      </tr>
    </table>
  </form>	
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
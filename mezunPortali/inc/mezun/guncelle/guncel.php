<?php
  	if(isset($_POST["isYeriAdi"]))
		include("inc/mezun/guncelle/guncelG.php");
		
	@include('inc/baglan.php');
	$sec=@mysql_query("select * from mezun where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"],$baglan);
	$alanlar=@mysql_fetch_array($sec);
?>
<div class="icerik">
  <div class="icerikSol">
  <form action="index.php?guncelDurum" method="post">
  	<table width="100%" border="0" class="uyeFormu">
      <tr>
      	<td colspan="5" style="border:0;text-align:left;"><h3 style="margin-top:0;">G�ncel Durumunuz</h3><hr></td>
      </tr>
      <tr>
        <td style="border:0;">�al���yor musunuz?</td>
        <td style="border:0;border-bottom:1px dashed #888;">
        	<table width="100%" border="0">
            	<tr><td style="border:0;">Evet</td><td style="border:0;text-align:left;"><input type="radio" name="calismaDurumu" value="1" <?php if($alanlar["calismaDurumu"]==1) echo "checked";?>></td><td style="border:0;">Hay�r</td><td style="border:0;text-align:left;"><input type="radio" name="calismaDurumu" value="0" <?php if($alanlar["calismaDurumu"]==0) echo "checked";?>></td></tr>
            </table>
        </td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">�� Yeri Ad�: </td>
        <td><input type="text" name="isYeriAdi" value="<?php echo $alanlar["isYeriAdi"]; ?>" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">
        	<table width="100%" border="0">
            	<tr>
                	<td style="border:0;">�zel</td><td style="border:0;text-align:left;">
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
        <td><input type="text" name="pozisyon" value="<?php echo $alanlar["pozisyon"]; ?>" style="width:100%;"></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;height:5px;"></td>
      </tr>
      <tr>
        <td style="border:0;">Di�er: </td>
        <td colspan="4" style="text-align:left;"><input type="text" name="diger" value="<?php echo $alanlar["diger"]; ?>" style="width:100%;"></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;height:5px;"><input type="submit" value="G�ncelle" class="button" style="width:150px; margin-top:10px;"/></td>
      </tr>
    </table>
  </form>	
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
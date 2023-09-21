<?php
  	if(isset($_POST["cepTel"]))
		include("inc/mezun/guncelle/iletisimG.php");
		
	@include('inc/baglan.php');
	$sec=@mysql_query("select * from mezun where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"],$baglan);
	$alanlar=@mysql_fetch_array($sec);
?>
<div class="icerik">
  <div class="icerikSol">
  <form action="index.php?iletisimBilgileri" method="post">
 	<table width="100%" border="0" class="uyeFormu">
      <tr>
      	<td colspan="5" style="border:0;text-align:left;"><h3 style="margin-top:0;">Ýletiþim Bilgileri</h3><hr></td>
      </tr>
      <tr>
        <td style="border:0;">Cep Telefonu<span style="width:170px;border:0;"> <span style="color:red;">(*)</span></span>: </td>
        <td><input type="text" name="cepTel" value="<?php echo $alanlar["cepTel"]; ?>" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Ýþ Telefonu: </td>
        <td><input type="text" name="isTel" value="<?php echo $alanlar["isTel"]; ?>" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Ev Telefonu: </td>
        <td><input type="text" name="evTel" value="<?php echo $alanlar["evTel"]; ?>" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Fax: </td>
        <td><input type="text" name="fax" value="<?php echo $alanlar["fax"]; ?>" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">E-Posta (kiþisel)<span style="width:170px;border:0;"> <span style="color:red;">(*)</span></span>: </td>
        <td><input type="text" name="ePostaK" value="<?php echo $alanlar["ePostaK"]; ?>" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">E-Posta (iþ): </td>
        <td><input type="text" name="ePostaI" value="<?php echo $alanlar["ePostaI"]; ?>" style="width:100%;"></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;height:5px;"></td>
      </tr>
      <tr>
        <td style="border:0;" valign="top">Adres<span style="width:170px;border:0;"> <span style="color:red;">(*)</span></span>: </td>
        <td colspan="4" style="text-align:left;"><textarea name="adres"><?php echo $alanlar["adres"]; ?></textarea></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;height:5px;"><input type="submit" value="Güncelle" class="button" style="width:150px; margin-top:10px;"/></td>
      </tr>
    </table>
  </form>	
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
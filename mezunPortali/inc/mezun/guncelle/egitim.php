<?php
  	if(isset($_POST["ilkogretim"]))
		include("inc/mezun/guncelle/egitimG.php");
		
	@include('inc/baglan.php');
	$sec=@mysql_query("select * from mezun where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"],$baglan);
	$alanlar=@mysql_fetch_array($sec);
?>
<div class="icerik">
  <div class="icerikSol">
  <form action="index.php?egitimBilgileri" method="post">
  	<table width="100%" border="0" class="uyeFormu">
      <tr>
      	<td colspan="2" style="border:0;text-align:left;"><h3 style="margin-top:0;">E�itim Bilgileri</h3><hr></td>
      </tr>
      <tr>
        <td style="border:0;width:110px;">�lk��retim: </td>
        <td><input type="text" name="ilkogretim" value="<?php echo $alanlar["ilkogretim"]; ?>" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Orta��retim: </td>
        <td><input type="text" name="ortaogretim" value="<?php echo $alanlar["ortaogretim"]; ?>" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Y�ksek Lisans: </td>
        <td><input type="text" name="yukseklisans" value="<?php echo $alanlar["ylisans"]; ?>" style="width:100%;"></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;height:5px;"><input type="submit" value="G�ncelle" class="button" style="width:150px; margin-top:10px;"/></td>
      </tr>
    </table>
  </form>	
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
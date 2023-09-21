<?php 
	if(isset($_GET["etkinlikOGR"]) and isset($_POST["etkinlikBaslik"]))
		@include("inc/etkinlikOGR/etkinlikGunKaydet.php"); // Etkinlik günceller
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from etkinlikler where id=".$_GET["etkinlikOGR"]);
	$alanlar=mysql_fetch_array($sorgu);	
	
	$zaman=explode(".",$alanlar['tarih'])
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
        <div class="bolumHakkinda">
        <?php if($alanlar["ogr"]==$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"]){ ?>
            <form method="post" target="_self" action="index.php?etkinlikOGR=<?php echo $alanlar['id']; ?>">
                <h3>Etkinlik Zamaný:</h3>
                <div class="txtBG" style="width:25px;float:left;"><input type="text" name="Sa" maxlength="2" style="width:25px;text-align:center;" placeholder="Sa" value="<?php echo $zaman[0] ?>"></div>
                <div style="float:left;width:10px;color:#FFF;font-size:18px;text-align:center;padding-top:4px;">:</div>
                <div class="txtBG" style="width:25px;float:left;"><input type="text" name="Dk" maxlength="2" style="width:25px;text-align:center;" placeholder="Dk" value="<?php echo $zaman[1] ?>"></div>
                <div style="float:left;width:20px;color:#FFF;font-size:28px;text-align:center;">&nbsp;</div>
                <div class="txtBG" style="width:25px;float:left;"><input type="text" name="Gun" maxlength="2" style="width:25px;text-align:center;" placeholder="Gün" value="<?php echo $zaman[2] ?>"></div>
                <div style="float:left;width:10px;color:#FFF;font-size:18px;text-align:center;padding-top:4px;">.</div>
                <div class="txtBG" style="width:25px;float:left;"><input type="text" name="Ay" maxlength="2" style="width:25px;text-align:center;" placeholder="Ay" value="<?php echo $zaman[3] ?>"></div>
                <div style="float:left;width:10px;color:#FFF;font-size:18px;text-align:center;padding-top:4px;">.</div>
                <div class="txtBG" style="width:50px;float:left;"><input type="text" name="Yil" maxlength="4" style="width:50px;text-align:center;" placeholder="Yýl" value="<?php echo $zaman[4] ?>"></div>
                <input type="submit" value="Kaydet" class="button" style="margin:-1.5px 0 0 5px;float:right;" />
                <div class="clear"></div>
                <h3>Etkinlik Baþlýðý:</h3>
                <div class="textareaBG"><textarea name="etkinlikBaslik" style="min-height:40px; font-size:15px;"><?php echo $alanlar['baslik']; ?></textarea></div>
                <div class="clear"></div>
                <h3>Etkinlik Ýçeriði:</h3>
                <textarea name="icerik" class="ckeditor" id="ckfinger" style="min-height:40px;"><?php echo $alanlar['icerik']; ?></textarea>
                <div class="clear"></div>
            </form>
        <?php }else{ echo "<h3 style='margin-top:-5px;'>Bu etkinliði güngelleme hakkýnýz bulunmamaktadýr.</h3>";}?>
        </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
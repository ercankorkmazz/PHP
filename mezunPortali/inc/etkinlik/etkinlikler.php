<?php 
	if(isset($_GET["etkinliklerYonet"]) and isset($_POST["etkinlikBaslik"]))
		@include("inc/etkinlik/etkinlikEkle.php"); // etkinlik ekler
	
	if(isset($_GET["etkinliklerYonet"]) and isset($_POST["coklu"]))
		@include("inc/etkinlik/etkinlikSil.php"); // etkinlik siler
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
        <div class="bolumHakkinda">
            <form method="post" target="_self" action="index.php?etkinliklerYonet">
                <h3>Etkinlik Zamaný:</h3>
                <div class="txtBG" style="width:25px;float:left;"><input type="text" name="Sa" maxlength="2" style="width:25px;text-align:center;" placeholder="Sa"></div>
                <div style="float:left;width:10px;color:#FFF;font-size:18px;text-align:center;padding-top:4px;">:</div>
                <div class="txtBG" style="width:25px;float:left;"><input type="text" name="Dk" maxlength="2" style="width:25px;text-align:center;" placeholder="Dk"></div>
                <div style="float:left;width:20px;color:#FFF;font-size:28px;text-align:center;">&nbsp;</div>
                <div class="txtBG" style="width:25px;float:left;"><input type="text" name="Gun" maxlength="2" style="width:25px;text-align:center;" placeholder="Gün"></div>
                <div style="float:left;width:10px;color:#FFF;font-size:18px;text-align:center;padding-top:4px;">.</div>
                <div class="txtBG" style="width:25px;float:left;"><input type="text" name="Ay" maxlength="2" style="width:25px;text-align:center;" placeholder="Ay"></div>
                <div style="float:left;width:10px;color:#FFF;font-size:18px;text-align:center;padding-top:4px;">.</div>
                <div class="txtBG" style="width:50px;float:left;"><input type="text" name="Yil" maxlength="4" style="width:50px;text-align:center;" placeholder="Yýl"></div>
                <input type="submit" value="Kaydet" class="button" style="margin:-1.5px 0 0 5px;float:right;" />
                <div class="clear"></div>
                <h3>Etkinlik Baþlýðý:</h3>
                <div class="textareaBG"><textarea name="etkinlikBaslik" style="min-height:40px; font-size:15px;"></textarea></div>
                <div class="clear"></div>
                <h3>Etkinlik Ýçeriði:</h3>
                <textarea name="icerik" class="ckeditor" id="ckfinger" style="min-height:40px;"></textarea>
                <div class="clear"></div>
            </form>
            <form method="post" action="index.php?etkinliklerYonet" target="_self">
                <h3 style="margin:30px 0 -15px 0;">Sisteme Kayýtlý Etkinlikler</h3>
                <input type="submit" value="Seçili Etkinlikleri Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
                <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
                    <?php
                        @include('inc/baglan.php'); 
                        $sorgu=mysql_query("select * from etkinlikler order by id desc");
                        while($alanlar=mysql_fetch_array($sorgu))
                        {
                    ?>
                    <tr>
                        <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                        <td><strong><?php echo $alanlar["baslik"] ;?></strong></td>
                        <td style="width:20px;"><a href="index.php?etkinlikYonet=<?php echo $alanlar["id"] ;?>" target="_self"><img src="img/kalem.png" /></a></td>
                    </tr>
                    <?php } ?>
                </table>
            </form>
        </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
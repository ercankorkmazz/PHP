<?php 
	if(isset($_GET["haberlerYonet"]) and isset($_POST["baslik"]))
		@include("inc/haber/yonet/haberEkle.php"); // haber ekler
	
	if(isset($_GET["haberlerYonet"]) and isset($_POST["coklu"]))
		@include("inc/haber/yonet/haberSil.php"); // haber siler
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
        <div class="bolumHakkinda">
            <form method="post" target="_self" action="index.php?haberlerYonet">
            	<input type="submit" value="Kaydet" class="button" style="margin:-1.5px 0 0 5px;float:right;" />
                <div class="clear"></div>
                <h3>Haber Başlığı (250 karakter)</h3>
                <div class="textareaBG"><textarea name="baslik" style="min-height:40px; font-size:15px;"></textarea></div>
                <div class="clear"></div>
                <h3>İçerik:</h3>
                <textarea name="icerik" class="ckeditor" id="ckfinger" style="min-height:40px;"></textarea>
                <div class="clear"></div>
                <table style="background:#FFF;margin-top:20px;width:100%;float:right;-moz-border-radius:5px;border-radius:5px;border:3px solid #333;" border="0">
                	<tr>
                    	<td align="right"><h3 style="margin-top:-4px;color:#000;float:left;">Haberi yayınlamak için onay kutusunu işaretleyin.</h3><h3 style="margin-top:-4px;color:#000;">Yayınla:</h3></td>
                        <td style="width:23px;"><input type="checkbox" checked="checked" name="onay"/></td>
                    </tr>
                </table>
            </form>
            <div class="clear"></div>
            <form method="post" action="index.php?haberlerYonet" target="_self">
                <h3 style="margin:30px 0 -15px 0;">Sisteme Kayıtlı Haberler</h3>
                <input type="submit" value="Seçili Haberleri Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
                <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
                    <?php
                        @include('inc/baglan.php');
                        $sorgu=mysql_query("select * from haberler order by id desc");
                        while($alanlar=mysql_fetch_array($sorgu))
                        {
                    ?>
                    <tr>
                        <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                        <td><strong><?php echo $alanlar["baslik"] ;?></strong></td>
                        <td style="width:20px;"><a href="index.php?onay=<?php echo $alanlar["id"] ;?>" target="_self"><img src="img/<?php if($alanlar["onay"]==1) echo "onayli"; else echo "onaysiz"; ?>.png" /></a></td>
                        <td style="width:20px;"><a href="index.php?haberYonet=<?php echo $alanlar["id"] ;?>" target="_self"><img src="img/kalem.png" /></a></td>
                    </tr>
                    <?php } ?>
                </table>
            </form>
        </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
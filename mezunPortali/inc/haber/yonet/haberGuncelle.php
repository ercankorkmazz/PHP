<?php 
	if(isset($_GET["haberYonet"]) and isset($_POST["baslik"]))
		@include("inc/haber/yonet/haberGunKaydet.php"); // Haber günceller
	
	@include('inc/baglan.php');
	$sorgu=mysql_query("select * from haberler where id=".$_GET["haberYonet"]);
	$alanlar=mysql_fetch_array($sorgu);
	
	if($alanlar["onay"]==1)
		$onay="checked='checked'";
	else
		$onay="";
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
        <div class="bolumHakkinda">
            <form method="post" target="_self" action="index.php?haberYonet=<?php echo $alanlar['id']; ?>">
                <input type="submit" value="Güncelle" class="button" style="margin:-1.5px 0 0 5px;float:right;" />
                <div class="clear"></div>
                <h3>Haber Başlığı:</h3>
                <div class="textareaBG"><textarea name="baslik" style="min-height:40px; font-size:15px;"><?php echo $alanlar['baslik']; ?></textarea></div>
                <div class="clear"></div>
                <h3>İçerik:</h3>
                <textarea name="icerik" class="ckeditor" id="ckfinger" style="min-height:40px;"><?php echo $alanlar['icerik']; ?></textarea>
                <div class="clear"></div>
                <table style="background:#FFF;margin-top:20px;width:100%;float:right;-moz-border-radius:5px;border-radius:5px;border:3px solid #333;" border="0">
                	<tr>
                    	<td align="right"><h3 style="margin-top:-4px;color:#000;float:left;">Haberi yayınlamak için onay kutusunu işaretleyin.</h3><h3 style="margin-top:-4px;color:#000;">Yayınla:</h3></td>
                        <td style="width:23px;"><input type="checkbox" <?php echo $onay; ?> name="onay"/></td>
                    </tr>
                </table>
            </form>
        </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
<?php 
	if(isset($_GET["logo"]) and isset($_FILES['dosya']))
		@include("inc/logo/guncelle.php"); // logo günceller
		
	@include('inc/baglan.php'); 
    $sorgu=mysql_query("select * from iletisim");
    $logo=mysql_fetch_array($sorgu);
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda">
        <form method="post" target="_self" action="index.php?logo" enctype="multipart/form-data">
            <h3>Önerilen Max. Boyutlar (Genislik: 480px - Yükseklik: 63px)</h3>
            <div class="txtBG" style="width:320px;float:left;"><input type="file" name="dosya" style="width:310px;border:0;" /></div>
            <input type="submit" value="Logo Güncelle" class="button" style="margin:-1px 0 0 5px;float:left;" />
        </form>
        <div class="clear"></div>
        <div class="etkinlikFotoBG" style="width:auto; height:auto;padding:10px;">
            <?php if(!empty($logo["logoURL"])){ ?>
                <img src="<?php echo "img/logo/".$logo["logoURL"]; ?>" style="width:auto; height:auto; max-width:480px; max-height:63px;">
            <?php }else { ?>
                <img src="img/logo/logo.png" style="width:auto; height:auto; max-width:480px; max-height:63px;">
            <?php } ?>
        </div>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
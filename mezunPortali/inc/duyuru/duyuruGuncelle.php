<?php 
	if(isset($_GET["duyuruYonet"]) and isset($_POST["duyuru"]))
		@include("inc/duyuru/duyuruGunKaydet.php"); // Başlık günceller
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from duyurular where id=".$_GET["duyuruYonet"]);
	$alanlar=mysql_fetch_array($sorgu);	
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda">
        <form method="post" target="_self" action="index.php?duyuruYonet=<?php echo $alanlar['id']; ?>">
            <h3>Duyuruya ait URL:</h3>
            <div class="txtBG" style="width:500px;float:left;"><input type="text" name="url" value="<?php echo $alanlar['url']; ?>" style="width:500px;"></div>
            <input type="submit" value="Kaydet" class="button" style="margin:-2px 0 0 5px;" />
            <h3>Duyuru:</h3>
            <div class="textareaBG"><textarea name="duyuru" style="min-height:80px; font-size:15px;"><?php echo strip_tags($alanlar['duyuru']); ?></textarea></div>
            <div class="clear"></div>
        </form>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
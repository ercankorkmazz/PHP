<?php 
	if(isset($_GET["duyuruOGR"]) and isset($_POST["duyuru"]))
		@include("inc/duyuruOGR/duyuruGunKaydet.php"); // Baþlýk günceller
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from duyurular where id=".$_GET["duyuruOGR"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda">
    <?php if($alanlar["ogr"]==$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"]){ ?>
        <form method="post" target="_self" action="index.php?duyuruOGR=<?php echo $alanlar['id']; ?>">
            <h3>Duyuruya ait URL:</h3>
            <div class="txtBG" style="width:500px;float:left;"><input type="text" name="url" value="<?php echo $alanlar['url']; ?>" style="width:500px;"></div>
            <input type="submit" value="Kaydet" class="button" style="margin:-2px 0 0 5px;" />
            <h3>Duyuru:</h3>
            <div class="textareaBG"><textarea name="duyuru" style="min-height:80px; font-size:15px;"><?php echo strip_tags($alanlar['duyuru']); ?></textarea></div>
            <div class="clear"></div>
        </form>
    <?php }else{ echo "<h3 style='margin-top:-5px;'>Bu duyuruyu güngelleme hakkýnýz bulunmamaktadýr.</h3>";}?>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
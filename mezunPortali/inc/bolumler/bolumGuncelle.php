<?php 
	if(isset($_GET["bolum"]) and isset($_POST["bolumAdi"]))
		@include("inc/bolumler/bolumGunKaydet.php"); // B�l�m g�nceller
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from bolumler where id=".$_GET["bolum"]);
	$alanlar=mysql_fetch_array($sorgu);	
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda">
        <form method="post" target="_self" action="index.php?bolum=<?php echo $alanlar['id']; ?>">
            <h3>B�l�m / Anabilim Dal�:</h3>
            <div class="txtBG" style="width:530px;float:left;"><input type="text" name="bolumAdi" value="<?php echo $alanlar['bolumAdi']; ?>" style="width:530px;"></div>
            <input type="submit" value="G�ncelle" class="button" style="margin:-2px 0 0 5px;" />
        </form>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
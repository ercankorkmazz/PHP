<?php
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from fotograflar where id=".$_GET["fotografYonet"]);
	$alanlar=mysql_fetch_array($sorgu);
	
	$sql=mysql_query("select * from albumler where id=".$alanlar["albumID"]);
	$album=mysql_fetch_array($sql);
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda">
        <p style="color:#FFF;font-weight:bold;float:left; font-size:13px;text-shadow:2px 2px 2px #333;"><?php echo $album["albumAdi"]; ?> / <span style="font-size:10px;"><?php echo $alanlar["url"]; ?></span></p>
        <a class="button" href="index.php?albumYonet=<?php echo $alanlar["albumID"]; ?>" style="float:right;height:15px;text-shadow:none;text-decoration:none;font-weight:bold;">Albüme Dön</a>
        <img src="Galeri/img/images/<?php echo $alanlar["url"]; ?>" width="100%" style="-moz-border-radius: 8px;border-radius: 8px;"/>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
<div class="icerik">
  <div class="icerikSol" style="background:url(img/anaBG.png);">
	  <?php 
        @include('inc/baglan.php'); 
        $sorgu=mysql_query("select * from albumler where id=".$_GET["album"]);
        $alanlar=mysql_fetch_array($sorgu);
      ?>
      <h3 style="text-shadow:1px 1px 1px #000;color:#FFF;" class="galeriBaslik"><?php echo $alanlar["albumAdi"]; ?></h3>
      <a href="index.php?albumler" style="border:0;float:right;"><img src="img/close.png"/></a>
      <a href="Galeri/index.php?album=<?php echo $alanlar["id"]; ?>" target="_blank" style="border:0;float:right;margin-right:5px;"><img src="img/fullscreen.png"/></a>
      <iframe src="Galeri/index.php?album=<?php echo $alanlar["id"]; ?>" width="660" height="350" frameborder="0" class="albumGoster"></iframe>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
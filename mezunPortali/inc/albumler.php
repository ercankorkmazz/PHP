<div class="icerik">
  <div class="icerikSol">
  <div class="clear"><h3 style="margin:0 auto 0 auto;">Fotoðraf Galerisi</h3></div>
  <hr />
  <div style="margin-top:-50px; margin-left:-20px;">
		<?php 
            @include('inc/baglan.php'); 
            $sorgu=mysql_query("select * from albumler");
			$kontrol=0;
            while($alanlar=mysql_fetch_array($sorgu))
			{
				$kontrol=1;
        ?>
        		<a href="index.php?album=<?php echo $alanlar["id"]; ?>">
                	<div class="album"><div style="height:30px;"><?php echo $alanlar["albumAdi"]; ?></div></div> 
                </a>
        <?php } if($kontrol==0){ ?>
        <div class="clear" style="margin-top:60px; text-shadow:2px 2px 2px #CCC;"><p style="margin-left:20px;"><strong>Bilgi:</strong> Sisteme kayýtlý fotoðraf albümü bulunamadý.</p></div>
        <?php } ?>
  </div>
  <div class="clear">&nbsp;</div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
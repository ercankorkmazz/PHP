<?php
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from fotograflar where id=".$_GET["fotograf"]);
	$alanlar=mysql_fetch_array($sorgu);
	
	$sql=mysql_query("select * from albumler where id=".$alanlar["albumID"]);
	$album=mysql_fetch_array($sql);
?>
<div class="bolumHakkinda">
	<p style="color:#FFF;font-weight:bold;float:left; font-size:13px;text-shadow:2px 2px 2px #333;"><?php echo $album["albumAdi"]; ?> / <span style="font-size:10px;"><?php echo $alanlar["url"]; ?></span></p>
	<a class="button" href="index.php?album=<?php echo $alanlar["albumID"]; ?>" style="float:right;height:15px;text-shadow:none;">Albüme Dön</a>
	<img src="../Galeri/img/images/<?php echo $alanlar["url"]; ?>" width="100%" style="-moz-border-radius: 8px;border-radius: 8px;"/>
</div>
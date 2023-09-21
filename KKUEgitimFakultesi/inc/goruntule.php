<?php
	if(isset($_GET["sayfa"]))
	{
    	@include('login/inc/baglan.php'); 
		$sorgu=mysql_query("select * from altmenuler where id=".$_GET["sayfa"]);
		$alanlar=mysql_fetch_array($sorgu);
	}
	else if(isset($_GET["sayfaa"]))
	{
    	@include('login/inc/baglan.php'); 
		$sorgu=mysql_query("select * from sayfalar where id=".$_GET["sayfaa"]);
		$alanlar=mysql_fetch_array($sorgu);
	}
	?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
        <?php echo $alanlar["icerik"]; ?>
    </div>
    <?php @include("inc/icerikSag.php");?>
</div>
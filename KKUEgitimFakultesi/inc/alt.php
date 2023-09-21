<div class="bolum5" style="margin-top:10px;">&nbsp;</div><!-- Bölüm 5 Sonu -->
<div class="bolum6">
	<div class="icerik">
    	<div class="sol">
    	<?php 
			@include('login/inc/baglan.php'); 
			$sorgu=mysql_query("select * from tasarim where id=1");
			$alanlar=mysql_fetch_array($sorgu);
		?>
        &copy; 2014 Kýrýkkale &Uuml;niversitesi <?php echo $alanlar['alt']; ?></div>
        <div class="sag"><a href="#basaDon" style="color:#333; text-decoration:none;"><img src="img/top.png"  style="margin:10px 0 10px 0; border:0;"/></a></div>
        <div class="clear"></div>
    </div><!-- Bölüm 6 Ýçerik Sonu -->
</div><!-- Bölüm 6 Sonu -->
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
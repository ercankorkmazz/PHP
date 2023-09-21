<div class="icerik">
  <div class="icerikSol" id="iletisim" style="background: #FFF url(img/iletisim.png) no-repeat left top;">
		<?php 
            @include('login/inc/baglan.php'); 
            $sorgu=mysql_query("select * from iletisim where id=1");
            $alanlar=mysql_fetch_array($sorgu);
        ?>
        <p style="text-align:center; margin:0;color:#333;">
		<?php 
			if(!empty($alanlar['iletisimBilgi']))
				echo $alanlar['iletisimBilgi']; 
			else
				echo "<h3 align='center'>Kýrýkkale Üniversitesi</h3>";
				
		?></p>
        <?php 
			if(!empty($alanlar['url']))
			{
				echo "<h3 style='margin-top:40px;'>Uydudan Kýrýkkale &Uuml;niversitesi:</h3>";
				echo $alanlar['url']; 
			}
		?>
    </div>
    <?php @include("inc/icerikSag.php");?>
</div>
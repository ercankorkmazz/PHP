<div class="icerik">
  <div class="icerikSol" id="iletisim">
		<?php 
            @include('inc/baglan.php'); 
            $sorgu=mysql_query("select * from iletisim where id=1");
            $alanlar=mysql_fetch_array($sorgu);
			
			if(!empty($alanlar['url']))
			{
				echo "<h3 style='margin-top:0px;'>Uydudan Kýrýkkale &Uuml;niversitesi</h3>";
				echo $alanlar['url']; 
			}
			if(!empty($alanlar['iletisimBilgi']))
			{
				echo "<h3 style='margin-top:20px;'>Ýletiþim Bilgileri</h3>";
				echo $alanlar['iletisimBilgi'];
			}
			if((empty($alanlar['url'])) and (empty($alanlar['iletisimBilgi'])))
				echo "<p style='text-shadow:2px 2px 2px #CCC;margin:0;padding:5px;'><strong>Bilgi:</strong> Ýletiþim bilgisi bulunamadý.</p>";
		?>
    </div>
    <div class="sag" style="margin:0;">
    	<?php @include("inc/icerikSag.php");?>
    </div>
    <div class="clear"></div>
</div>
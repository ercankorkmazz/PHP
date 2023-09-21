    <div class="sol rent" style="width: 980px;">
		<div class="sol sayfa" style="width:996px; height:38px; margin-bottom:10px; padding:2px;">
        	<div class="sol" style="padding-top:7px;"><span class="title"><?php echo mb_convert_encoding("Araç Filosu", "UTF-8", "ISO-8859-9"); ?></span></div>
			<div class="sag" style="padding:0px;">
				<div class="sol">
		        	<a href="index.php?yeniarac" id="btn"><?php echo mb_convert_encoding("Yeni Araç", "UTF-8", "ISO-8859-9"); ?></a>						
		        </div>						
			</div>
		</div>
        <div class="sol sayfa" style="width:980px; color:#333333; font-size:11px;">
    	<?php
        	@include('inc/baglan.php'); 
			$kontrol=0;
			$sorgu=mysql_query("select id,baslik from araclar");
			while($alanlar=mysql_fetch_array($sorgu))
			{$kontrol=1;
		?>
                <div class="temizle sol" style="width:980px; height:1px; background:#f2f2f2;"></div>
                <div class="sol ilk" style="width: 860px;" id="smallTitle"><?php echo @mb_convert_encoding("$alanlar[baslik]", "UTF-8", "ISO-8859-9"); ?></div>						
                <div class="sol" style="width:50px; text-align:center; padding:5px 0">
                  <a href="index.php?aracsil=<?php echo $alanlar["id"]; ?>" class="silBTN">&nbsp;</a>
                </div>							
                <div class="sol" style="width:36px; text-align:center; padding:5px 0">
                	<a href="index.php?aracduzenle=<?php echo $alanlar["id"]; ?>" class="duzenleBTN">&nbsp;</a>
                </div>
			<?php }
                if($kontrol==0)
                    echo @mb_convert_encoding("Hiçbir Kayýt Yok", "UTF-8", "ISO-8859-9");
            ?>
  </div>
	</div>
</div> 
<div class="icerik">
  <div class="icerikSol">
  <h3 style="margin:0;">Tüm Duyurular</h3>
  	<ul style="margin-left:-25px;">
		<?php 
            @include('login/inc/baglan.php'); 
            $sorgu=mysql_query("select * from duyurular order by id desc");
			$kontrol=0;
            while($alanlar=mysql_fetch_array($sorgu))
			{	
				$kontrol=1;
				if(!empty($alanlar["url"]))
				{
        		?>
                	<li style="list-style-image:url(img/bullet_mavi.png);"><a href="<?php echo $alanlar['url']; ?>" target="_blank"><?php echo $alanlar['duyuru']; ?></a></li>
                <?php }else{ ?>
                	<li><p style="margin:0;"><?php echo $alanlar['duyuru']; ?></p></li>
            <?php }} if($kontrol==0){ ?>
        	<li style="text-shadow:2px 2px 2px #CCC;">Sisteme kayýtlý duyuru bulunamadý.</li>
        <?php } ?>
    	</ul>
    </div>
    <?php @include("inc/icerikSag.php");?>
</div>
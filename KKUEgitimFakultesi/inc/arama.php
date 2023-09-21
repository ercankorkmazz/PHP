<div class="icerik">
  <div class="icerikSol">
  <h3 style="margin:0;">&#8220;<?php echo $_POST["ara"]; ?>&#8221; için arama sonuçlarý:</h3>
  	<ul style="margin-left:-25px;">
		<?php 
            @include('login/inc/baglan.php'); 
			$arama="$_POST[ara]";
            $sorgu=mysql_query("select * from duyurular where duyuru like '%".$arama."%' or url like '%".$arama."%'");
			$kontrol=0;
            while($alanlar=mysql_fetch_array($sorgu))
			{	
				$kontrol=1;
				if(!empty($alanlar["url"]))
				{
        		?>
                	<li style="list-style-image:url(img/bullet_mavi.png);"><a href="<?php echo $alanlar['url']; ?>"><?php echo $alanlar['duyuru']; ?></a></li>
                <?php }else{ ?>
                	<li><p style="margin:0;"><?php echo $alanlar['duyuru']; ?></p></li>
            <?php }} 
			@include('login/inc/baglan.php'); 
            $sorgu=mysql_query("select * from altmenuler where (baslik like '%".$arama."%' or icerik like '%".$arama."%') and (onay='0')");
            while($alanlar=mysql_fetch_array($sorgu))
			{	
				$kontrol=1;
        		?>
                	<li style="list-style-image:url(img/bullet_mavi.png);"><a href="index.php?sayfa=<?php echo $alanlar['id']; ?>"><strong>&#8220;<?php echo $alanlar['baslik']; ?>&#8221;</strong> adlý sayfada bulundu.</a></li>
            <?php }
			@include('login/inc/baglan.php'); 
            $sorgu=mysql_query("select * from sayfalar where (baslik like '%".$arama."%' or icerik like '%".$arama."%') and (onay='0')");
            while($alanlar=mysql_fetch_array($sorgu))
			{	
				$kontrol=1;
        		?>
                	<li style="list-style-image:url(img/bullet_mavi.png);"><a href="index.php?sayfaa=<?php echo $alanlar['id']; ?>"><strong>&#8220;<?php echo $alanlar['baslik']; ?>&#8221;</strong> adlý sayfada bulundu.</a></li>
            <?php }
            @include('login/inc/baglan.php'); 
            $sorgu=mysql_query("select * from faydalilinkler where baslik like '%".$arama."%' or link like '%".$arama."%'");
            while($alanlar=mysql_fetch_array($sorgu))
			{	
				$kontrol=1;
        		?>
                	<li style="list-style-image:url(img/bullet_mavi.png);"><a href="<?php echo $alanlar['link']; ?>" target="_blank"><?php echo $alanlar['baslik']; ?></a></li>
            <?php } if($kontrol==0){ ?>
        	<li style="text-shadow:2px 2px 2px #CCC;">Hiçbir kayýt bulunamadý.</li>
        <?php } ?>
    	</ul>
    </div>
    <?php @include("inc/icerikSag.php");?>
</div>
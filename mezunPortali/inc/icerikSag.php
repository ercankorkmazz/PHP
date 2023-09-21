<div style="float:left;margin-top:0;">
<?php
	if(isset($_SESSION["$_SERVER[SERVER_NAME]mezunportali"])){
?>
    <div class="icerikSag">
    	<div class="ust">Hoþ geldiniz, <?php echo $_SESSION["$_SERVER[SERVER_NAME]mezunportalikullanici"]; ?></div>
        <div class="alt">
        <!-- Yönetici Ýþlemleri -->
        <?php
		if($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]==0)
		{ 
        	if($_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]=="admin"){
		?>
          <div class="btn"><a href="index.php?etkinliklerYonet" style="margin:0;">Etkinlikler</a></div>
          <div class="btn"><a href="index.php?sliderYonet">Slider</a></div>
          <div class="btn"><a href="index.php?duyurularYonet">Duyurular</a></div>
          <div class="btn"><a href="index.php?linklerYonet">Baðlantýlar</a></div>
          <div class="btn"><a href="index.php?galeriYonet">Galeri</a></div>
          <div class="btn"><a href="index.php?dosyaYukle">Dosya Yükle</a></div>
          <div class="btn"><a href="index.php?iletisimYonet">Ýletiþim</a></div>
          <div class="btn"><a href="index.php?logo">Logo</a></div>
          <div class="clear" style="margin:10px 0 10px 0;"><hr /></div>
          <div class="btn"><a href="index.php?anketYonet">Anket Sonuçlarý</a></div>
          <div class="btn"><a href="index.php?basarilarYonet">Mezun Baþarýlarý</a></div>
          <div class="btn"><a href="index.php?haberlerYonet">Mezun Haberleri</a></div>
          <div class="btn"><a href="index.php?istatistikler">Ýstatistikler</a></div>
          <div class="btn"><a href="index.php?mezunSorgula">Mezun Sorgula</a></div>
          <div class="btn"><a href="index.php?mezunEkle">Sisteme Mezun Ekle</a></div>
          <div class="btn"><a href="index.php?bolumler">Bölüm / Anabilim Dallarý</a></div>
          <div class="clear" style="margin:10px 0 10px 0;"><hr /></div>
          <div class="btn"><a href="index.php?ogretmenler">Öðretim Üyeleri</a></div>
          <div class="btn"><a href="index.php?kullanici">Kullanýcý Ayarlarý</a></div>
        <?php }else{ ?>
        <!-- Mezun Ýþlemleri -->
          <div class="btn"><a href="index.php?kisiselBilgiler" style="margin:0;">Kiþisel Bilgiler</a></div>
          <div class="btn"><a href="index.php?iletisimBilgileri">Ýletiþim Bilgileri</a></div>
          <div class="btn"><a href="index.php?egitimBilgileri">Eðitim Bilgileri</a></div>
          <div class="btn"><a href="index.php?guncelDurum">Güncel Durumunuz</a></div>
          <div class="clear" style="margin:10px 0 10px 0;"><hr /></div>
          <div class="btn"><a href="index.php?arkadasBul">Arkadaþýný Bul</a></div>
          <div class="btn"><a href="index.php?haberler">Güncel Haber Gönder</a></div>
          <div class="btn"><a href="index.php?kullanici">Kullanýcý Ayarlarý</a></div>
    	<?php 
			}		
		}
		else
		{?>
          	<div class="btn"><a href="index.php?etkinliklerOGR" style="margin:0;">Etkinlikler</a></div>
          	<div class="btn"><a href="index.php?duyurularOGR">Duyurular</a></div>
          <div class="clear" style="margin:10px 0 10px 0;"><hr /></div>
        	<div class="btn"><a href="index.php?mezunSorgula">Mezun Sorgula</a></div>
        	<div class="btn"><a href="index.php?kullanici">Kullanýcý Ayarlarý</a></div>
        <?php } ?>
        </div>
    </div>
    <div style="clear:both"></div>
    <?php } ?>
    <div class="icerikSag">
    	<div class="ust">Etkinlik Takvimi</div>
        <div class="alt">
          <ul style="padding:0;width:260px;margin:0px;">
          	<?php
				@include('inc/baglan.php');
				$kontrol=0; 
				$sorgu=mysql_query("select * from etkinlikler order by id desc limit 0,5");
				while($alanlar=mysql_fetch_array($sorgu))
				{$kontrol=1; 
			?>
            	<li style="list-style-image:none;">
                <a href="index.php?etkinlik=<?php echo $alanlar["id"]; ?>" style="display:block;">
            	<?php 
					echo $alanlar["baslik"]; 
					$zaman=explode(".",$alanlar["tarih"]);
					$tarih=$zaman[0].":".$zaman[1]." ".$zaman[2].".".$zaman[3].".".$zaman[4];
				?></a>
            	<p align="right">Etkinlik Tarih: <span style="color:#B01111;"><?php echo $tarih; ?></span></strong></p>
            </li>
          </ul>
            <?php } 
				if($kontrol==0)
					echo "<li style='list-style-image:none;'>Sisteme kayýtlý etkinlik bulunamadý</li></ul>";
			?>
          <p class="tumDuyurular"><a href="index.php?etkinlikler">Tümünü Görüntüle</a></p>
        </div>
    </div>
    <div style="clear:both"></div>
    <div class="icerikSag">
    	<div class="ust">Güncel Duyurular</div>
        	<div class="alt">
            	<ul>
                <?php 
                	@include('inc/baglan.php'); 
                    $sorgu=mysql_query("select * from duyurular order by id desc limit 0,5");
					$kontrol=0;
                    while($alanlar=mysql_fetch_array($sorgu))
                    {	
						$kontrol=1;
                   		if(!empty($alanlar["url"]))
                    	{
				?>
                        <li style="padding-left:2px;list-style-image:url(img/kirmizi.png);"><a href="<?php echo $alanlar['url']; ?>" target="_blank"><?php echo $alanlar['duyuru']; ?></a></li>
                        <?php }else{ ?>
                        <li style="padding-left:2px;list-style-image:url(img/li.png);"><p style="margin:0;color:#222;"><?php echo $alanlar['duyuru']; ?></p></li>
           				<?php }}
					    if($kontrol==0){ ?>
                        <li style="padding-left:2px;text-shadow:2px 2px 2px #CCC;">Sisteme kayýtlý duyuru bulunamadý</li></ul>
                        <?php } ?>
                        </ul><p class="tumDuyurular"><a href="index.php?duyurular">Tümünü Görüntüle</a></p>
                        </div>
                    </div><!-- Bölüm 4 anaDuyuru Sonu -->
                    <div class="clear"></div>
     <div class="icerikSag">
    	<div class="ust">Hýzlý Baðlantýlar</div>
        <div class="alt">
          <ul>
          	<?php
				@include('inc/baglan.php');
				$kontrol=0; 
				$sorgu=mysql_query("select * from baglantilar");
				while($alanlar=mysql_fetch_array($sorgu))
				{$kontrol=1; 
			?>
            	<li style="list-style-image:url(img/kirmizi.png);"><a href="<?php echo $alanlar['link']; ?>" target="_blank"><?php echo $alanlar['baslik']; ?></a></li>
            <?php 
				}
				if($kontrol==0)
					echo "<li style='list-style-image:url(img/kirmizi.png);'>Sisteme kayýtlý baðlantý bulunamadý</li>";
			?>
          </ul>
        </div>
    </div>
</div>
<div class="clear"></div>
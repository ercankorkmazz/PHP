<a name="basaDon"></a>
<div class="bolum1">
	<div class="icerik">
        <div class="sol">
        	<a href="index.php">
            <?php 
				@include('inc/baglan.php'); 
				$sorgu=mysql_query("select * from iletisim");
				$logo=mysql_fetch_array($sorgu);
			?>
        	<?php if(!empty($logo["logoURL"])){ ?>
                <img src="<?php echo "img/logo/".$logo["logoURL"]; ?>" style="width:auto; height:auto; max-width:480px; max-height:63px; margin-top:15px;border:0;">
            <?php }else { ?>
                <img src="img/logo/logo.png" style="width:auto; height:auto; max-width:480px; max-height:63px; margin-top:15px;border:0;">
            <?php } ?>
            </a>
        </div><!-- Bölüm 1 Sol Sonu -->
        <div class="sag">
        	<img src="img/yonetimLogo.png"/>
        </div><!-- Bölüm 1 Sað Sonu -->
      <div style="clear:both;"></div>
  </div><!-- Bölüm 1 Ýçerik Sonu -->
</div><!-- Bölüm 1 Sonu -->
<div class="bolum3">
	<div class="icerik">
    	<ul id="MenuBar1" class="MenuBarHorizontal">
			<li><a href="index.php" style="background:#222 url(img/home.png) no-repeat;border:0; height:15px; display:block; width:15px;">&nbsp;</a></li>
              <li><a href="index.php?mezunhaberleri">Mezunlardan Haberler</a></li>
              <li><a href="index.php?anket">Görüþleriniz</a></li>
              <li><a href="index.php?albumler">Galeri</a></li>
              <li><a href="index.php?iletisim">Ýletiþim</a></li>
              <?php
              	if(!isset($_SESSION["$_SERVER[SERVER_NAME]mezunportali"])){
			  ?>
              <li style="float:right;"><a href="index.php?girisYap">Giriþ Yap</a></li>
              <?php 
				}else{
			  ?>
              <li style="float:right;"><a href="index.php?oturumKapat">Güvenli Çýkýþ</a></li>
              <?php } ?>
		</ul>
    </div><!-- Bölüm 3 Ýçerik Sonu -->
</div><!-- Bölüm 3 Sonu -->
<div style="background:url(img/bgr.png) center top;padding-bottom:10px;">
<?php if($_COOKIE["bildirim"]!=""){?>
<div class="bildirim">
	<img src="img/information.png" style="float:left;"/>
    <h3 style="margin:0;float:left;"><?php echo $_COOKIE["bildirim"]; ?></h3>
    <div class="clear"></div>
</div>
<?php } ?>
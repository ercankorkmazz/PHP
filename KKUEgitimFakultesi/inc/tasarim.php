<a name="basaDon"></a>
<div class="bolum1">
	<div class="icerik">
        <div class="sol">
        	<a href="index.php"><img src="img/logo.png" /></a>
        </div><!-- B�l�m 1 Sol Sonu -->
        <div class="sag">
        	<table width="100%" style="border:0px;">
            	<tr>
                	<td><a href="login/index.php?tasarim" target="_blank">Giri� Yap</a> | <a href="<?php echo $alanlar['aSLink']; ?>" target="_blank"><?php echo $alanlar['aSBaslik']; ?></a> | <a href="http://www.kku.edu.tr/" target="_blank">Anasayfa</a></td>
                </tr>
                <tr>
                	<td style="padding-top:50px;"><h2 style="margin:20px 0 0 0; color:#666;"><?php echo $alanlar['fakulte']; ?></h2></td>
                </tr>
            </table>
        </div><!-- B�l�m 1 Sa� Sonu -->
      <div style="clear:both;"></div>
  </div><!-- B�l�m 1 ��erik Sonu -->
</div><!-- B�l�m 1 Sonu -->
<div class="bolum2">
	<div class="icerik">
    	<h2 style="margin:0px; text-align:right; color:#FFF;"><?php echo $alanlar['bolum']; ?></h2>
    </div><!-- B�l�m 2 ��erik Sonu -->
</div><!-- B�l�m 2 Sonu -->
<div class="bolum3">
	<div class="icerik">
    	<ul id="MenuBar1" class="MenuBarHorizontal">
			<li><a href="index.php" style="background:url(img/home.png) no-repeat; margin-top:3px;border:0; height:15px; display:block; width:15px;">&nbsp;</a></li>
            <?php
			@include('login/inc/baglan.php'); 
			$sorgu=mysql_query("select * from menuler");
			while($alanlar=mysql_fetch_array($sorgu))
			{
		  ?>
              <li><a class="MenuBarItemSubmenu" href="#"><?php echo $alanlar["menu"]; ?></a>
                <ul style="margin-top:0;">
                	<?php
						$sor=mysql_query("select * from altmenuler where menu=".$alanlar["id"]);
						while($alan=mysql_fetch_array($sor))
						{
                 			if($alan["onay"]==0)
								$url="index.php?sayfa=$alan[id]'";
							else
								$url=$alan["url"]."' target='_blank'";
							echo "<li><a href='$url>$alan[baslik]</a></li>";
                        } 
                    ?>
                </ul>
              </li>
          <?php }
          	@include('login/inc/baglan.php'); 
			$sorgu=mysql_query("select * from sayfalar");
			while($alanlar=mysql_fetch_array($sorgu))
			{
				if($alanlar["onay"]==0)
					$url="index.php?sayfaa=$alanlar[id]'";
				else
					$url=$alanlar["url"]."' target='_blank'";
				echo "<li><a href='$url>$alanlar[baslik]</a></li>";
			}
		  ?>
              <li><a class="MenuBarItemSubmenu" href="#">Akademik Kadro</a>
                <ul>
                  <li><a href="index.php?ogretimUyeleri">��retim �yeleri</a></li>
                  <li><a href="index.php?arastirmaGorevlileri">Ara�t�rma G�revlileri</a></li>
                </ul>
              </li>
              <li><a href="index.php?duyurular">Duyurular</a></li>
              <li><a href="index.php?iletisim">�leti�im</a></li>
		</ul>
    </div><!-- B�l�m 3 ��erik Sonu -->
</div><!-- B�l�m 3 Sonu -->
<div class="icerik">
  <div class="icerikSol">
  <h3 style="margin:0 0 0 5px;">Araþtýrma G&ouml;revlileri</h3>
  <table width="100%" border="0" id="tablo">
		<?php 
            @include('login/inc/baglan.php'); 
            $sorgu=mysql_query("select * from arastirmagorevlileri");
			$kontrol=0;
            while($alanlar=mysql_fetch_array($sorgu))
			{
				$kontrol=1;
				if(empty($alanlar['url']))
					$resim="kisi.jpg";
				else
					$resim=$alanlar['url'];
        ?>
            <tr><td class="tr">
                <table width="100%" border="0">
                <tr>
                    <td style="width:120px; border:0;" rowspan="5"><img src="img/kisiler/<?php echo $resim; ?>" style="width:110px; height:110px;"/></td>
                    <td style="width:90px;" align="right"><strong>Adý Soyadý :</strong></td>
                    <td><?php echo $alanlar['adSoyad']; ?></td>
                </tr>
                <tr>
                  <td align="right"><strong>&Uuml;nvaný :</strong></td>
                    <td><?php echo $alanlar['unvan']; ?></td>
                </tr>
                <tr>
                  <td align="right"><strong>E-Posta :</strong></td>
                    <td><a href="mailto:<?php echo $alanlar['ePosta']; ?>"><?php echo $alanlar['ePosta']; ?></a></td>
                </tr>
                <tr>
                  <td align="right"><strong>Telefon :</strong></td>
                    <td><?php echo $alanlar['tel']; ?></td>
                </tr>
                <tr>
                  <td align="right" style="border:0;"><strong>Bilgiler :</strong></td>
                    <td style="border:0;">Akademik bilgileri i&ccedil;in <a href="index.php?<?php if(!empty($alanlar['link'])) echo "uyeUrl=".$alanlar['link']; else echo "arastirmaGorevlileri"; ?>">týklayýnýz.</a></td>
                </tr>
                </table>
        </td></tr>
        <?php }if($kontrol==0){ ?>
        <p style="margin-left:5px; text-shadow:2px 2px 2px #CCC;"><strong>Bilgi:</strong>Hiçbir kayýt bulunamadý.</p>
        <?php } ?>
    </table>
    </div>
    <?php @include("inc/icerikSag.php");?>
</div>
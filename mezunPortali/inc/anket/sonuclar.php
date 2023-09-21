<div class="icerik">
  <div class="icerikSol">
    <div class="giris">
    
    <?php
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from anket");
		$sayi=mysql_num_rows($sorgu);
	?>
    	<h4 style="margin:0 0 0 2px; padding:0;" align="center">Toplam Katýlýmcý ( <?php echo $sayi;?> )</h4>
    <?php
		$sorgu=mysql_query("select * from anket");
		while($alanlar=mysql_fetch_array($sorgu))
		{
			$sql=mysql_query("select * from mezun where id=".$alanlar["mezunID"]);
			$mezun=mysql_fetch_array($sql);
	?>
    <div class="bolumHakkinda" style="background:#333;">
        <table border="0" width="100%">
            <tr>
                <td>
                	<a href="index.php?mezun=<?php echo $mezun["id"]; ?>" style="color:#eee; font-weight:normal; text-shadow:none;" target="_blank">
                    	<strong><?php echo $mezun["adSoyad"]; ?> &raquo;</strong>
                    </a>
                </td>
                <td style="color:#eee;font-weight:bold;text-align:right;">
                 <?php 
					@include('inc/baglan.php');
					$sql=@mysql_query("select * from bolumler where id=".$mezun["bolumNo"],$baglan);
					$bolumler=@mysql_fetch_array($sql);
					echo $bolumler["bolumAdi"];
			  	?>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr /></td>
            </tr>
            <tr>
                <td style="color:#eee;" colspan="2"><strong>Mezunlar portalýnda neler olmasýný beklersiniz?</strong></td>
            </tr>
            <tr>
                <td colspan="2" style="background:#FFF;border:1px solid #CCC;padding:5px;">
					<?php if(!empty($alanlar["soru1"])) echo $alanlar["soru1"]; else echo " - "; ?>
                </td>
            </tr>
            <tr>
                <td style="color:#eee;padding-top:10px;" colspan="2"><strong>Mezun adayý veya mezun olarak fakültenizden hangi etkinliklerin düzenlemesini istersiniz?</strong></td>
            </tr>
            <tr>
                <td colspan="2" style="background:#FFF; border:1px solid #CCC;padding:5px;">
					<?php if(!empty($alanlar["soru2"])) echo $alanlar["soru2"]; else echo " - "; ?>
                </td>
            </tr>
            <tr>
                <td style="color:#eee;padding-top:10px;" colspan="2"><strong>Eklemek istedikleriniz?</strong></td>
            </tr>
            <tr>
                <td colspan="2" style="background:#FFF;border:1px solid #CCC;padding:5px;">
					<?php if(!empty($alanlar["soru3"])) echo $alanlar["soru3"]; else echo " - "; ?>
                </td>
            </tr>
        </table>
    </div>
    <?php } ?>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
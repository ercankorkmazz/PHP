        <table border="0" class="EDTable" style="border:0;font-size:9px;float:left;" cellspacing="0">
        	<tr>
                <td style="border:0px;" colspan="6">&nbsp;</td>
                <td style="border-bottom:0; width:25px;" colspan="8" align="center"><strong>HAFTALIK EK DERS SAAT� TOPLAMI</strong></td>
                <td style="border:0;">&nbsp;</td>
            </tr>
			<tr>
                <td style="border:0px;" colspan="6">&nbsp;</td>
                <td style="border-right:0px;border-bottom:0; width:25px;" colspan="4" align="center"><strong>Normal ��retim</strong></td>
                <td style="border-bottom:0; width:25px;" colspan="4" align="center"><strong>�kinci ��retim</strong></td>
            </tr>
			<tr>
               	<td style="border-top:0;border-left:0; border-right:0px;width:25px;" align="center">&nbsp;</td>
                <td style="border-right:0px;width:25px;" colspan="2" align="center"><strong>Normal ��retim</strong></td>
                <td style="border-right:0px;width:25px;" colspan="2" align="center"><strong>�kinci ��retim</strong></td>
                <td style="border-top:0; border-right:0px;width:25px;" align="center">&nbsp;</td>
                <td style="border-right:0px;width:25px;" colspan="2" align="center"><strong>Normal</strong></td>
                <td style="border-right:0px;width:25px;" colspan="2" align="center"><strong>Zaml�</strong></td>
                <td style="border-right:0px;width:25px;" colspan="2" align="center"><strong>Normal</strong></td>
                <td style="width:25px;" colspan="2" align="center"><strong>Zaml�</strong></td>
            </tr>
            <tr>
               	<td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong>Hafta No</strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong>TS</strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong>US</strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong>TS</strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong>US</strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong>ZDY</strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong>Ders</strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong>S�nav</strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong>Ders</strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong>S�nav</strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong>Ders</strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong>S�nav</strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong>Ders</strong></td>
                <td style="border-top:0px;width:25px;" align="center"><strong>S�nav</strong></td>
            </tr>
            <?php
				$TSnormalTop=0;
				$toplamNT=0;
				$toplamZT=0;
				for($i=1;$i<=$hafta-1;$i++)
				{
			?>
            <tr>
               	<td style="border-top:0px; border-right:0px;width:25px;" align="center"><strong><?php echo $i; ?></strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><?php echo $TS_1[$i]; ?></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center">
				<?php
					if($US_2[$i]>=10) 
						$US_1[$i]=0;
					else
					{
						if($US_1[$i]>(10-$US_2[$i]))
							$US_1[$i]=10-$US_2[$i];
					}
					echo $US_1[$i]; 
				?>
                </td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center">
					<?php
						if($TS_2[$i]>(10-$US_2[$i]))
							$TS_2[$i]=10-$US_2[$i];
							
						echo $TS_2[$i]; 
					?>
                </td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center">
					<?php
						if($US_2[$i]>=10)
							$US_2[$i]=10;
							
                        echo $US_2[$i]; 
                    ?>
                </td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><?php echo $dersYuku; ?></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center">
					<?php 
						if(($TS_1[$i]+$US_1[$i]-$dersYuku)>=20)
						{
							$TSnormalTop+=20;
							echo "20";
						}
                        elseif(($TS_1[$i]+$US_1[$i]-$dersYuku)<=0)
						{
							$TSnormalTop+=0;
							echo "0";
						}
						else
						{
							$TSnormalTop+=$TS_1[$i]+$US_1[$i]-$dersYuku;
							echo $TS_1[$i]+$US_1[$i]-$dersYuku;
						}
                    ?>
                </td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center">&nbsp;</td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center">&nbsp;</td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center">&nbsp;</td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><?php $toplamNT+=$NT[$i]; echo $NT[$i]; ?></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center">&nbsp;</td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><?php $toplamZT+=$ZT[$i]; echo $ZT[$i]; ?></td>
                <td style="border-top:0px;width:25px;" align="center">&nbsp;</td>
            </tr>
            <?php } ?>
            <tr>
                <td style="border:0px;width:25px;" colspan="6"><strong>AYLIK TOPLAMLAR</strong></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><?php echo $TSnormalTop; ?></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center">&nbsp;</td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center">&nbsp;</td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center">&nbsp;</td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><?php echo $toplamNT; ?></td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center">&nbsp;</td>
                <td style="border-top:0px; border-right:0px;width:25px;" align="center"><?php echo $toplamZT; ?></td>
                <td style="border-top:0px;width:25px;" align="center">&nbsp;</td>
            </tr>
    	</table>
        <table border="0" class="EDTable" style="width:auto; border:0; float:left;" cellspacing="0" cellpadding="0">
            <tr>
                <td valign="top">
                	<h4 style="text-align:center;"><i>A�ama (*4)</i></h4>
                	<h4 style="text-decoration:underline;font-weight:normal;" align="center">ZORUNLU DERS Y�K� E��T�M FAK�LTES�NDEN D���LD�</h4>
                    <p style='margin:0; margin-top:3px;font-size:10px;'>E�itim Fak�ltesi 
					<?php
					$efToplam=0;
					for($i=1;$i<=$hafta-1;$i++)
						$efToplam+=$efZT[$i];
					
					echo $efToplam;
					?> saat II.�.  Zaml�</p>
                    <p style='margin:0; margin-top:3px;font-size:10px;'>E�itim Fak�ltesi 
					<?php
					$efToplam=0;
					for($i=1;$i<=$hafta-1;$i++)
						$efToplam+=$efNT[$i];
					
					echo $efToplam;
					?> saat II.�.  Normal</p>
                    <p style='margin:0; margin-top:3px;font-size:10px;'>E�itim Fak�ltesi <?php echo $TSnormalTop;?> saat N.�.</p>
                    <?php
                    	@include('../../inc/baglan.php'); 
						
						$sql=mysql_query("select * from birimler where ogretmenID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
						while($alanlar=mysql_fetch_array($sql))
						{
							if($digerTop[$alanlar["id"]][2]!=0)
							echo "<p style='margin:0; margin-top:3px;font-size:10px;'>$alanlar[birim] ".$digerTop[$alanlar["id"]][2]." saat II.�.</p>";
							if($digerTop[$alanlar["id"]][1]!=0)
							echo "<p style='margin:0; margin-top:3px;font-size:10px;'>$alanlar[birim] ".$digerTop[$alanlar["id"]][1]." saat N.�.</p>";
						}
					?>
                </td>
            </tr>
        </table>
        <div class="clear"></div>
        
        <table border="0" class="EDTable" style="width:330px; border:0;" cellspacing="0">
            <tr>
                <td colspan="2" style="border:0px;"><strong>NOT</strong></td>
            </tr>
            <tr>
                <td style="border:0px;">*1</td>
                <td style="border:0px;">Derslerin KODU yandaki haftal�k ders program�nda belirtilecektir.</td>
            </tr>
            <tr>
                <td style="border:0px;">*2</td>
                <td style="border:0px;">��retim Eleman�n�n girdi�i b�t�n dersler ve di�er faaliyetler burada g�sterilecektir.</td>
            </tr>
            <tr>
                <td style="border:0px;">*3</td>
                <td style="border:0px;">Ders ve di�er faaliyetler normal(N) ve ikili (�) olarak belirtilecektir.</td>
            </tr>
            <tr>
                <td style="border:0px;">*4</td>
                <td style="border:0px;">Birimlerin her birinden ka� saat �cret alaca�� burada belirtilecektir.</td>
            </tr>
        </table>
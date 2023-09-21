		<?php include("inc/EDFormuYazdir/tsHesapla.php");?>
        <div class="clear">&nbsp;</div>
        <h3 style="padding:2px;">Ýzinli Olduðunuz Günleri Seçiniz</h3>
        <form action="?kapat" method="post">
        <table border="0" class="EDTable" style="border:1px solid #000;;font-size:9px;margin-top:0;float:left;" cellspacing="0">
			<tr>
                <?php
                	@include('../../inc/baglan.php'); 
					
					$sql=mysql_query("select * from ekdersgunleri where id=1");
					$alanlar=mysql_fetch_array($sql);
					
					$say=1;
					$gunler=explode(".",$alanlar["tatiller"]);
					foreach($gunler as $index => $deger)
					{
						if($say==8)
						$say=1;
						
						$tarih=explode("-",$deger);
						if(($say==6) or ($say==7) or ($tarih[1]==1))
						{
							echo "<td style='width:20px;background:#FFF url(../../img/tatil.png);color:#FFF;' align='center'><strong>$tarih[0]</strong></td>";	
						}
						else
						{
							echo "<td style='width:20px;' align='center'><strong>$tarih[0]</strong></td>";
						}
						$say++;
					}
				?>
            </tr>
            <tr>
                <?php
                	@include('../../inc/baglan.php'); 
					
					$sql=mysql_query("select * from ekdersgunleri where id=1");
					$alanlar=mysql_fetch_array($sql);
					
					$say=1;
					$gunler=explode(".",$alanlar["tatiller"]);
					foreach($gunler as $index => $deger)
					{
						if($say==8)
						$say=1;
						
						$tarih=explode("-",$deger);
						if(($say==6) or ($say==7) or ($tarih[1]==1))
						{
							echo "<td style='width:20px;background:#FFF url(../../img/tatil.png);color:#FFF;' align='center'>&nbsp;</td>";	
						}
						else
						{
							echo "<td style='width:20px;' align='center'><input type='checkbox' name='$tarih[0]' value='1' /></td>";
						}
						$say++;
					}
				?>
            </tr>
    	</table>
        <input type="submit" value="Ýzin Günlerini Belirle" style="margin-left:5px;height:40px;vertical-align:middle;float:left;" class="btn"/>
        <a href="?kapat" class="btn" style="float:left;height:17px;padding-top:12px;font-weight:bold;margin-left:5px;text-decoration:none;">Kapat</a>
        </form>
        <div class="clear" style="background:">&nbsp;</div>
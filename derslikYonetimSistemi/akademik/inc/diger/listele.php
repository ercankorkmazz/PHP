<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
<form action="index.php?kayitEkle" method="post">
    	<div class="menuAdi" style="padding-bottom:0;padding:4px;">
        	<div class="ad" style="width:19%; margin-top:1px;-moz-border-radius: 3px 0 0 3px;border-radius:3px 0 0 3px;">
            	<h3>Diðer Birimler Programý</h3>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link" style="width:81%;">
            	<ul>
                	<li><input type="submit" value="Seçime Kayýt Ekle" /></li>
                	<li><a href="index.php?dersler">Dersler</a></li>
                    <li><a href="index.php?birimler">Birimler</a></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <table width="100%" border="0" cellspacing="1" cellpadding="5" class="program" id="program1"> 
				<tr>
                	<td width="5%">Saat\Gün</td>
                    <td width="19%" style="background:#444;"><h3>Pazartesi</h3></td>
                    <td width="19%" style="background:#444;"><h3>Salý</h3></td>
                    <td width="19%" style="background:#444;"><h3>Çarþamba</h3></td>
                    <td width="19%" style="background:#444;"><h3>Perþembe</h3></td>
                    <td width="19%" style="background:#444;"><h3>Cuma</h3></td>
                </tr>
			<?php
				$kontrol=0;
				$say=1;
				@include('../inc/baglan.php'); 
				$sorgu=mysql_query("select * from digerbirimler where ogretmenID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
				while($alanlar=mysql_fetch_array($sorgu))
				{
					$kontrol=1;
					$say++;
			?>
                <tr>
                	<td style="background:#444; color:#FFF;">
                    	<?php
                        	switch($alanlar["saat"])
							{
								case 1:
									echo "08:30";
								break;
								case 2:
									echo "09:30";
								break;
								case 3:
									echo "10:30";
								break;
								case 4:
									echo "11:30";
								break;
								case 5:
									echo "13:00";
								break;
								case 6:
									echo "14:00";
								break;
								case 7:
									echo "15:00";
								break;
								case 8:
									echo "16:00";
								break;	
								case 9:
									echo "17:00";
								break;
								case 10:
									echo "18:00";
								break;
								case 11:
									echo "19:00";
								break;
								case 12:
									echo "20:00";
								break;
								case 13:
									echo "21:00";
								break;
								case 14:
									echo "22:00";
								break;
							}
						?>
                    </td>
                    <td style="text-shadow:0px 0px 1px #DDD;vertical-align:bottom;">
                    	<p><?php
						if(!empty($alanlar["g1"]))
						{
							$dizi=explode("+",$alanlar["g1"]);
							$dersID=$dizi[0];
							$oTuru=$dizi[1];
							$dTuru=$dizi[2];
							
							@include('inc/baglan.php');
							$sql = mysql_query("select * from digerdersler where id=".$dersID);
							$alan=mysql_fetch_array($sql);
							
							$sql = mysql_query("select * from birimler where id=".$alan["birim"]);
							$birim=mysql_fetch_array($sql);
							echo "<p style='font-size:13px;color:#030;margin:0;margin-bottom:10px;'>$birim[birim]<br>$alan[ders]</p>($oTuru. Öðretim - $dTuru)";
						}
						?></p>
                        <input type="checkbox" name="istek[]" value="<?php echo "$alanlar[saat].1.$alanlar[id]"; ?>"/>
                        <a href="index.php?bosalt=<?php echo "$alanlar[id]&G=1"; ?>"><input type="button" style="width:100%;" value="Boþalt" /></a>
                    </td>
                    <td style="text-shadow:0px 0px 1px #DDD;vertical-align:bottom;">
                    	<p><?php 
						if(!empty($alanlar["g2"]))
						{
							$dizi=explode("+",$alanlar["g2"]);
							$dersID=$dizi[0];
							$oTuru=$dizi[1];
							$dTuru=$dizi[2];
							
							@include('inc/baglan.php');
							$sql = mysql_query("select * from digerdersler where id=".$dersID);
							$alan=mysql_fetch_array($sql);
							
							$sql = mysql_query("select * from birimler where id=".$alan["birim"]);
							$birim=mysql_fetch_array($sql);
							echo "<p style='font-size:13px;color:#030;margin:0;margin-bottom:10px;'>$birim[birim]<br>$alan[ders]</p>($oTuru. Öðretim - $dTuru)";
						}
						?></p>
                        <input type="checkbox" name="istek[]" value="<?php echo "$alanlar[saat].2.$alanlar[id]"; ?>"/>
                        <a href="index.php?bosalt=<?php echo "$alanlar[id]&G=2"; ?>"><input type="button" style="width:100%;" value="Boþalt" /></a>
                    </td>
                    <td style="text-shadow:0px 0px 1px #DDD;vertical-align:bottom;">
                    	<p><?php 
						if(!empty($alanlar["g3"]))
						{
							$dizi=explode("+",$alanlar["g3"]);
							$dersID=$dizi[0];
							$oTuru=$dizi[1];
							$dTuru=$dizi[2];
							
							@include('inc/baglan.php');
							$sql = mysql_query("select * from digerdersler where id=".$dersID);
							$alan=mysql_fetch_array($sql);
							
							$sql = mysql_query("select * from birimler where id=".$alan["birim"]);
							$birim=mysql_fetch_array($sql);
							echo "<p style='font-size:13px;color:#030;margin:0;margin-bottom:10px;'>$birim[birim]<br>$alan[ders]</p>($oTuru. Öðretim - $dTuru)";
						}
						?></p>
                        <input type="checkbox" name="istek[]" value="<?php echo "$alanlar[saat].3.$alanlar[id]"; ?>"/>
                        <a href="index.php?bosalt=<?php echo "$alanlar[id]&G=3"; ?>"><input type="button" style="width:100%;" value="Boþalt" /></a>
                    </td>
                    <td style="text-shadow:0px 0px 1px #DDD;vertical-align:bottom;">
                    	<p><?php
						if(!empty($alanlar["g4"]))
						{
							$dizi=explode("+",$alanlar["g4"]);
							$dersID=$dizi[0];
							$oTuru=$dizi[1];
							$dTuru=$dizi[2];
							
							@include('inc/baglan.php');
							$sql = mysql_query("select * from digerdersler where id=".$dersID);
							$alan=mysql_fetch_array($sql);
							
							$sql = mysql_query("select * from birimler where id=".$alan["birim"]);
							$birim=mysql_fetch_array($sql);
							echo "<p style='font-size:13px;color:#030;margin:0;margin-bottom:10px;'>$birim[birim]<br>$alan[ders]</p>($oTuru. Öðretim - $dTuru)";
						}
						?></p>
                        <input type="checkbox" name="istek[]" value="<?php echo "$alanlar[saat].4.$alanlar[id]"; ?>"/>
                        <a href="index.php?bosalt=<?php echo "$alanlar[id]&G=4"; ?>"><input type="button" style="width:100%;" value="Boþalt" /></a>
                    </td>
                    <td style="text-shadow:0px 0px 1px #DDD;vertical-align:bottom;">
                    	<p><?php
						if(!empty($alanlar["g5"]))
						{
							$dizi=explode("+",$alanlar["g5"]);
							$dersID=$dizi[0];
							$oTuru=$dizi[1];
							$dTuru=$dizi[2];
							
							@include('../inc/baglan.php');
							$sql = mysql_query("select * from digerdersler where id=".$dersID);
							$alan=mysql_fetch_array($sql);
							
							$sql = mysql_query("select * from birimler where id=".$alan["birim"]);
							$birim=mysql_fetch_array($sql);
							echo "<p style='font-size:13px;color:#030;margin:0;margin-bottom:10px;'>$birim[birim]<br>$alan[ders]</p>($oTuru. Öðretim - $dTuru)";
						}
						?></p>
                        <input type="checkbox" name="istek[]" value="<?php echo "$alanlar[saat].5.$alanlar[id]"; ?>"/>
                        <a href="index.php?bosalt=<?php echo "$alanlar[id]&G=5"; ?>"><input type="button" style="width:100%;" value="Boþalt" /></a>
                    </td>
                </tr>
            <?php 
				if($say==5)
					echo "<tr><td colspan='6' style='margin:0;padding:1px;background:#777;'></td></tr>";
				if($say==9)
					echo "<tr><td colspan='6' style='margin:0;padding:1px;background:#777;'></td></tr>";
				}
				if($kontrol==0)
					echo "<td colspan='6' style='padding:10px;color:#060;'> Hiç bir kayýr bulunamadý.</td>";
			 ?>
        </table>
</form>
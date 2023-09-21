<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
<form method="get" action="index.php" target="_self">
    	<div class="menuAdi" style="padding-bottom:0;padding:4px;">
        	<div class="ad" style="width:19%; margin-top:1px; background:<?php if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin") echo "style='none'"; else echo "#333"; ?>;-moz-border-radius: 3px 0 0 3px;border-radius:3px 0 0 3px;">
            	<h3 align="center">
					Dersliðin Haftalýk Programý
                </h3>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link" style="width:81%;">
            	<ul>
                	<li><input type="submit" value="Listele" /></li>
                	<li>
                      <select name="derslik" id="jumpMenu" style="padding:5px; margin-top:-7px;">
                    	  <?php
								@include('inc/baglan.php'); 
								$sorgu=mysql_query("select * from derslikler");
								while($alanlar=mysql_fetch_array($sorgu))
								{
						  ?>
                          	<option value="<?php echo $alanlar['id']; ?>" style='text-align:left;' <?php if($_GET["derslik"]==$alanlar['id']) echo "selected='selected'"; ?>><?php echo $alanlar["derslikAdi"]; ?></option>
                          <?php } ?>
                  	  </select>
                    </li>
</form>
                    <li style="margin-left:0;margin-right:0;">
                    	<a href="inc/derslikYazdir.php?ID=<?php echo $_GET["derslik"]; ?>" target="_blank" style="background:none;margin:0;"><img src="img/print.png" style="margin-top:-7.5px;" /></a>
                    </li>
                    <?php
						if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin")
						{
					?>
<form action="index.php?istekGonder" method="post">
	<input type="hidden" name="derslik" value="<?php echo $_GET["derslik"]; ?>" />
                    <li style="float:left;margin-left:-40px;"><input type="submit" value="Seçime Ýstek Gönder" style="" /></li>
                   	<?php } ?>
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
				@include('inc/baglan.php'); 
				$sorgu=mysql_query("select * from derslikprogrami where derslikID=".$_GET["derslik"]);
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
                    <td style="color:#D00;text-shadow:0px 0px 1px #DDD;">
                    	<a href="index.php?S=<?php echo $alanlar["saat"]; ?>&G=1&D=<?php echo $_GET["derslik"]."&ID=".$alanlar["id"]; ?>" style="color:#900;text-shadow:0px 0px 1px #DDD;"><?php echo $alanlar["g1"]; ?></a>
                        <?php if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin"){ ?>
                        	<input type="checkbox" name="istek[]" value="<?php echo "$alanlar[saat].1.$alanlar[id]"; ?>"/>
                        <?php } ?>
                    </td>
                    <td style="color:#D00;text-shadow:0px 0px 1px #DDD;">
                    	<a href="index.php?S=<?php echo $alanlar["saat"]; ?>&G=2&D=<?php echo $_GET["derslik"]."&ID=".$alanlar["id"]; ?>" style="color:#900;text-shadow:0px 0px 1px #DDD;"><?php echo $alanlar["g2"]; ?></a>
                        <?php if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin"){ ?>
                        	<input type="checkbox" name="istek[]" value="<?php echo "$alanlar[saat].2.$alanlar[id]"; ?>"/>
                        <?php } ?>
                    </td>
                    <td style="color:#D00;text-shadow:0px 0px 1px #DDD;">
                    	<a href="index.php?S=<?php echo $alanlar["saat"]; ?>&G=3&D=<?php echo $_GET["derslik"]."&ID=".$alanlar["id"]; ?>" style="color:#900;text-shadow:0px 0px 1px #DDD;"><?php echo $alanlar["g3"]; ?></a>
                        <?php if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin"){ ?>
                        	<input type="checkbox" name="istek[]" value="<?php echo "$alanlar[saat].3.$alanlar[id]"; ?>"/>
                        <?php } ?>
                    </td>
                    <td style="color:#D00;text-shadow:0px 0px 1px #DDD;">
                    	<a href="index.php?S=<?php echo $alanlar["saat"]; ?>&G=4&D=<?php echo $_GET["derslik"]."&ID=".$alanlar["id"]; ?>" style="color:#900;"><?php echo $alanlar["g4"]; ?></a>
                        <?php if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin"){ ?>
                        	<input type="checkbox" name="istek[]" value="<?php echo "$alanlar[saat].4.$alanlar[id]"; ?>"/>
                        <?php } ?>
                    </td>
                    <td style="color:#D00;text-shadow:0px 0px 1px #DDD;">
                    	<a href="index.php?S=<?php echo $alanlar["saat"]; ?>&G=5&D=<?php echo $_GET["derslik"]."&ID=".$alanlar["id"]; ?>" style="color:#900;text-shadow:0px 0px 1px #DDD;"><?php echo $alanlar["g5"]; ?></a>
                        <?php if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin"){ ?>
                        	<input type="checkbox" name="istek[]" value="<?php echo "$alanlar[saat].5.$alanlar[id]"; ?>"/>
                        <?php } ?>
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
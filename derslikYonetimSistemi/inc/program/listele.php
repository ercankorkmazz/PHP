<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
<?php if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin") {?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin:-7px; padding:0;">
	<tr>
    	<td style="vertical-align:top;background:none;margin:0; width:200px;">
        <div class="guncellemeler" style="float:none;">
        	<h3>Bildirimler <a href="index.php?guncelSil&sinif=<?php echo $_POST["sinif"]; ?>"><img src="img/clear.png" style="float:right;"/></a></h3>
            <div style="clear:both;"></div>
            <div class="liste">
            	<ul style="margin-top:0px;">
                <?php
					@include('inc/baglan.php');
					$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
					$kontrol=0;
					
                	$sql = mysql_query("SELECT * FROM guncellemeler where bolumID=$bolumID and sinif=$_POST[sinif] order by id desc");
					while($alanlar=mysql_fetch_array($sql))
					{
						$kontrol=1;
						echo "<li><center>$alanlar[icerik]</center></li>";
					}
					if(($kontrol==0) and (!isset($_POST["sinif"])))
						echo "<li style='border:0;text-align:center;'>Bildirimleri görüntülemek için bir sýnýf seçiniz.</li>";
					elseif($kontrol==0)
						echo "<li style='border:0;text-align:center;'>Güncellene yok.</li>";
				?>
                </ul>
            </div>
        </div>
		</td>
    	<td style="vertical-align:top;background:none;padding-left:10px; margin-top:0;">      
<?php } ?>
<form method="post" action="index.php?programlar" target="_self">
    	<div class="menuAdi">
        	<div class="ad" style="width:40%;">
            	<h3 style="float:left;">
					<?php
						if(empty($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]))
							echo "Ders Programý Listele";
						else
						{
							@include('inc/baglan.php'); 
							$sorgu=mysql_query("select * from bolumler where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]);
							$alanlar=mysql_fetch_array($sorgu);
							
							echo $alanlar["bolumadi"];
						}
                	?>
                    </h3>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link" style="width:60%;height:35px;">
            	<ul>
                	<li><input type="submit" value="Listele" /></li>
                	<li>
                      <?php
                      	if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin")
						{
					  ?>
                      <select name="bolum" id="jumpMenu" style="padding:5px; margin-top:-6px;">   
                          <option style="border-bottom:1px solid #000; background:#333; color:#FFF;">&#8212; Bölüm Seçiniz &#8212;</option>
                    	  <?php
								@include('inc/baglan.php'); 
								$sorgu=mysql_query("select * from bolumler");
								while($alanlar=mysql_fetch_array($sorgu))
								{
									if($_POST["bolum"]==$alanlar["id"])
										echo "<option value='$alanlar[id]' selected='selected' style='text-align:left;'>$alanlar[bolumadi]</option>";
									else
										echo "<option value='$alanlar[id]' style='text-align:left;'>$alanlar[bolumadi]</option>";
								}
							?>
                  	  </select>
                      <?php } ?>
                      
                      <select name="sinif" id="jumpMenu" style="padding:5px; margin-top:-6.5px;">
                      	  <option style="border-bottom:1px solid #000; background:#333; color:#FFF;">&#8212; Sýnýf Seçiniz &#8212;</option>
                          <?php
							if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin")
							{
								for($i=1;$i<=6;$i++)
								{
									if($_POST["sinif"]==$i)
										echo "<option value='$i' selected='selected'>$i. Sýnýf</option>";
									else
										echo "<option value='$i'>$i. Sýnýf</option>";
								}
						    } 
						  	else 
							{
								@include('inc/baglan.php'); 
								$sorgu=mysql_query("select * from bolumler where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]);
								$alanlar=mysql_fetch_array($sorgu);
								
								for($i=1;$i<=$alanlar["sure"];$i++)
								{
									if($_POST["sinif"]==$i)
										echo "<option value='$i' selected='selected'>$i. Sýnýf</option>";
									else
										echo "<option value='$i'>$i. Sýnýf</option>";
								}
							}						  
						  ?>
                  	  </select>
                    </li>
                    <?php if(isset($_POST["sinif"]))
					{ 
						if(isset($_POST["bolum"]))
							$bolum=$_POST["bolum"];
						else
							$bolum=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
					?>
                    <li style="margin-left:0;margin-right:0;">
                    	<a href="inc/yazdir.php?bID=<?php echo "$bolum"; ?>&S=<?php echo $_POST['sinif']; ?>" target="_blank" style="background:none;margin:0;">
                        	<img src="img/print.png" style="margin-top:<?php if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=='admin')echo'-7.5px';else echo'-25px'; ?>;" />
                        </a>
                    </li>
                   	<?php } ?>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
</form>
        <table width="100%" border="0" cellspacing="1" cellpadding="5" class="program"> 
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
				if(isset($_POST["bolum"]))
					$bolum=$_POST["bolum"];
				else
					$bolum=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
				$sorgu=mysql_query("select * from dersprogramlari where bolumID=$bolum and sinif=$_POST[sinif]");
				while($alanlar=mysql_fetch_array($sorgu))
				{
					$kontrol=1;
					$say++;
			?>
                <tr>
                	<td style="background:#444;color:#FFF;">
                    	<?php
                        	switch($alanlar["saat"])
							{
								case 1:
									echo "8:30";
								break;
								case 2:
									echo "9:30";
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
                    
					<?php
					for($i=1;$i<=5;$i++)
					{
						echo "<td style='color:#333;'>";
							
							$hucre="";
							if(!empty($alanlar["g$i"]))
							{
								$dizi=explode(".",$alanlar["g$i"]);
								
								$derslik=mysql_fetch_array(@mysql_query("select * from derslikler where id=".$dizi[0]));
								$hucre .= $derslik["derslikAdi"]." <br>";
								
								$derslik=mysql_fetch_array(@mysql_query("select * from dersler where id=".$dizi[1]));
								if($derslik["id"]==$dizi[1])
								{
									$sql=mysql_query("select * from ogretmenler where id=".$derslik["ogretmen"]);
									$alan=mysql_fetch_array($sql);
									
									if($derslik["ogretmen"]!=0)
										$ogretmen=$alan["kullanici"];
									else
										$ogretmen="Öðretmen Belirlenmedi";
										
									$hucre .= $derslik["ders"]." <br>(".$ogretmen.")";
								}
								else
									$hucre .= "Ders Bulunamadý";
								
								if($dizi[2]==0)
									echo "<span style=color:red;>$hucre</span><hr>Onay Bekliyor";
								if($dizi[2]==1)
									echo "<span style=color:green;>$hucre</span><hr>Onaylandý";
							}
							if(empty($hucre))
								echo "&nbsp;";
						echo "</td>";
					}
					?>
                </tr>
            <?php 
				
				if($say==5)
					echo "<tr><td colspan='6' style='margin:0;padding:1px;background:#777;'></td></tr>";
				if($say==9)
					echo "<tr><td colspan='6' style='margin:0;padding:1px;background:#777;'></td></tr>";
				}
				if($kontrol==0)
					echo "<td colspan='6' style='padding:10px;color:#060;'> Hiçbir kayýt bulunamadý.</td>";
			 ?>
        </table>
</form>
<?php if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin") {?>
		</td>
	</td>
</table>
<?php } ?>
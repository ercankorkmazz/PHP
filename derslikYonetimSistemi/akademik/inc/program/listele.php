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
				for($i=1;$i<=14;$i++)
				{
					for($k=1;$k<=5;$k++)
					{
						@include('../inc/baglan.php'); 
						
						$sql=mysql_query("select * from dersler where ogretmen=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
						while($alanlar=mysql_fetch_array($sql))
						{
							
							$sorgu=mysql_query("select * from dersprogramlari where saat='$i'");
							while($alan=mysql_fetch_array($sorgu))
							{
								$dizi=explode(".",$alan["g$k"]);
								if($alanlar["id"]==$dizi[1])
								{
									$derslik=mysql_fetch_array(@mysql_query("select * from derslikler where id=".$dizi[0]));
									$hucre[$i][$k]="<p style='font-size:13px;color:#030;margin:0;margin-bottom:10px;'>".$derslik["derslikAdi"]." <br>";
									
									$derslik=mysql_fetch_array(@mysql_query("select * from dersler where id=".$dizi[1]));
									$hucre[$i][$k].=$derslik["ders"]."</p>($dizi[3]. Öðretim - $dizi[4])";	
								}
							}
						}
					}
				}
				for($i=1;$i<=14;$i++)
				{
					for($k=1;$k<=5;$k++)
					{
						@include('../inc/baglan.php'); 
						
						$sql=mysql_query("select * from digerdersler where ogretmenID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
						while($alanlar=mysql_fetch_array($sql))
						{
							
							$sorgu=mysql_query("select * from digerbirimler where saat='$i'");
							while($alan=mysql_fetch_array($sorgu))
							{
								$dizi=explode("+",$alan["g$k"]);
								if($alanlar["id"]==$dizi[0])
								{
									$derslik=mysql_fetch_array(@mysql_query("select * from digerdersler where id=".$dizi[0]));
									
									if(!empty($hucre[$i][$k]))
										$hucre[$i][$k].="<hr>";
									
									$sql = mysql_query("select * from birimler where id=".$derslik["birim"]);
									$birim=mysql_fetch_array($sql);
									
									$hucre[$i][$k].="<p style='font-size:13px;color:#030;margin:0;margin-bottom:10px;'>$birim[birim]<br>".$derslik["ders"]."</p>($dizi[1]. Öðretim - $dizi[2])";	
								}
							}
						}
					}
				}
				
				$say=1;
				for($i=1;$i<=14;$i++)
				{
					$say++;
			?>
                <tr>
                	<td style="background:#444;color:#FFF;">
                    	<?php
                        	switch($i)
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
                    <td><?php echo $hucre[$i][1]; ?>&nbsp;</td>
                    <td><?php echo $hucre[$i][2]; ?>&nbsp;</td>
                    <td><?php echo $hucre[$i][3]; ?>&nbsp;</td>
                    <td><?php echo $hucre[$i][4]; ?>&nbsp;</td>
                    <td><?php echo $hucre[$i][5]; ?>&nbsp;</td>
                </tr>
            <?php 
				
				if($say==5)
					echo "<tr><td colspan='6' style='margin:0;padding:1px;background:#777;'></td></tr>";
				if($say==9)
					echo "<tr><td colspan='6' style='margin:0;padding:1px;background:#777;'></td></tr>";
				}
			 ?>
        </table>
</form>
		</td>
	</td>
</table>
        <table border="0" width="100%" class="EDTable" style="border:0;font-size:9px;" cellspacing="0">
        	<tr><td colspan="15" align="center"><h4 style="margin:0;">HAFTALIK PROGRAM (*2)</h4></td></tr>
			<tr>
               	<td style="border-top:0px; border-right:0px;width:50px;"><strong>D. Saati</strong></td>
                <td style="border-top:0px; border-right:0px;" align="center"><strong>1</strong></td>
                <td style="border-top:0px; border-right:0px;" align="center"><strong>2</strong></td>
                <td style="border-top:0px; border-right:0px;" align="center"><strong>3</strong></td>
                <td style="border-top:0px; border-right:0px;" align="center"><strong>4</strong></td>
                <td style="border-top:0px; border-right:0px;" align="center"><strong>5</strong></td>
                <td style="border-top:0px; border-right:0px;" align="center"><strong>6</strong></td>
                <td style="border-top:0px; border-right:0px;" align="center"><strong>7</strong></td>
                <td style="border-top:0px; border-right:0px;" align="center"><strong>8</strong></td>
                <td style="border-top:0px; border-right:0px;background:#DDD;" align="center"><strong>9</strong></td>
                <td style="border-top:0px; border-right:0px;background:#DDD;" align="center"><strong>10</strong></td>
                <td style="border-top:0px; border-right:0px;background:#DDD;" align="center"><strong>11</strong></td>
                <td style="border-top:0px; border-right:0px;background:#DDD;" align="center"><strong>12</strong></td>
                <td style="border-top:0px; border-right:0px;background:#DDD;" align="center"><strong>13</strong></td>
                <td style="border-top:0px;background:#DDD;" align="center"><strong>14</strong></td>	
            </tr>
			<?php
				for($k=1;$k<=5;$k++)
				{
					for($i=1;$i<=14;$i++)
					{
						$hucre[$k][$i]="&nbsp;";
					}
				} 
				for($k=1;$k<=5;$k++)
				{
					for($i=1;$i<=14;$i++)
					{
						@include('../../inc/baglan.php'); 
						
						$sql=mysql_query("select * from dersler where ogretmen=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
						while($alanlar=mysql_fetch_array($sql))
						{
							
							$sorgu=mysql_query("select * from dersprogramlari where saat='$i'");
							while($alan=mysql_fetch_array($sorgu))
							{
								$dizi=explode(".",$alan["g$k"]);
								if($alanlar["id"]==$dizi[1])
								{				
									$derslik=mysql_fetch_array(@mysql_query("select * from dersler where id=".$dizi[1]));
									$hucre[$k][$i]=$derslik["kodu"];
									
									if($dizi[4]=="US")
										$hucre[$k][$i].="-U";
								}
							}
						}
					}
				}
				
				for($i=1;$i<=14;$i++)
				{
					for($k=1;$k<=5;$k++)
					{
						@include('../../inc/baglan.php'); 
						
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
									
									if($hucre[$k][$i]!="&nbsp;")
										$hucre[$k][$i].="<hr>";
										
									$hucre[$k][$i].=$derslik["kodu"];
									
									if($dizi[2]=="US")
										$hucre[$k][$i].="-U";
								}
							}
						}
					}
				}
			for($i=1;$i<=5;$i++)
			{
			?>
            <tr>
               	<td style="border-top:0px; border-right:0px;"><strong>
                	<?php
                    	switch($i)
							{
								case 1:
									echo "Pazartesi";
								break;
								case 2:
									echo "Salý";
								break;
								case 3:
									echo "Çarþamba";
								break;
								case 4:
									echo "Perþembe";
								break;
								case 5:
									echo "Cuma";
								break;
							}
					?></strong>
                </td>
                <td style="border-top:0px; border-right:0px;" align="center"><?php echo $hucre[$i][1]; ?></td>
                <td style="border-top:0px; border-right:0px;" align="center"><?php echo $hucre[$i][2]; ?></td>
                <td style="border-top:0px; border-right:0px;" align="center"><?php echo $hucre[$i][3]; ?></td>
                <td style="border-top:0px; border-right:0px;" align="center"><?php echo $hucre[$i][4]; ?></td>
                <td style="border-top:0px; border-right:0px;" align="center"><?php echo $hucre[$i][5]; ?></td>
                <td style="border-top:0px; border-right:0px;" align="center"><?php echo $hucre[$i][6]; ?></td>
                <td style="border-top:0px; border-right:0px;" align="center"><?php echo $hucre[$i][7]; ?></td>
                <td style="border-top:0px; border-right:0px;" align="center"><?php echo $hucre[$i][8]; ?></td>
                <td style="border-top:0px; border-right:0px;" align="center"><?php echo $hucre[$i][9]; ?></td>
                <td style="border-top:0px; border-right:0px;" align="center"><?php echo $hucre[$i][10]; ?></td>
                <td style="border-top:0px; border-right:0px;" align="center"><?php echo $hucre[$i][11]; ?></td>
                <td style="border-top:0px; border-right:0px;" align="center"><?php echo $hucre[$i][12]; ?></td>
                <td style="border-top:0px; border-right:0px;" align="center"><?php echo $hucre[$i][13]; ?></td>
                <td style="border-top:0px;" align="center"><?php echo $hucre[$i][14]; ?></td>	
            </tr>
            <?php } ?>
    	</table>
        <div class="clear">&nbsp;</div>
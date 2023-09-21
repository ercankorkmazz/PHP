		<?php include("inc/EDFormu/tsHesapla.php");?>
        <div class="clear">&nbsp;</div>
        <h4 style="padding:2px;">GÜNLER</h4>
        <table border="0" class="EDTable" style="border:1px solid #000;;font-size:9px;margin-top:0;" cellspacing="0">
			<tr>
               	<td style="width:80px;" colspan="2"><strong>Ögr. Türü</strong></td>
                <?php
                	@include('../inc/baglan.php'); 
					
					$sql=mysql_query("select * from ekdersgunleri where id=1");
					$alanlar=mysql_fetch_array($sql);
					
					$say=1;
					$gunler=explode(".",$alanlar["tatiller"]);
					foreach($gunler as $index => $deger)
					{
						if($say==8)
						$say=1;
						
						$tarih=explode("-",$deger);
						if(($say==6) or ($say==7) or ($tarih[1]==1) or ($_POST[$tarih[0]]==1))
						{
							echo "<td style='width:20px;background:#FFF url(../img/tatil.png);color:#FFF;' align='center'><strong>$tarih[0]</strong></td>";	
						}
						else
						{
							echo "<td style='width:20px;' align='center'><strong>$tarih[0]</strong></td>";
						}
						$say++;
					}
				?>
                <td><strong>Genel Toplam</strong></td>
            </tr>
            <tr>
               	<td style="width:50px;"><strong>Normal</strong></td>
                <td style="width:30px;"><strong>TS</strong></td>
                <?php
                    	@include('../inc/baglan.php'); 
						
						$sql=mysql_query("select * from birimler where ogretmenID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
						while($alanlar=mysql_fetch_array($sql))
						{
								$digerNToplam=0;
								$digerIToplam=0;
								for($k=1;$k<=5;$k++)
								{
									$sorgu=mysql_query("select * from digerbirimler");
									while($alan=mysql_fetch_array($sorgu))
									{
										$dizi=explode("+",$alan["g$k"]);
										$dersSor=mysql_query("select * from digerdersler where id=".$dizi[0]);
										$ders=mysql_fetch_array($dersSor);
										if($alanlar["id"]==$ders["birim"])
										{
											if($ders["oTuru"]==1)
												$digerNToplam++;
											elseif($ders["oTuru"]==2)
												$digerIToplam++;
										}
									}
								}
						}
					?>
                <?php
                	@include('../inc/baglan.php'); 
					
					$sql=mysql_query("select * from ekdersgunleri where id=1");
					$alanlar=mysql_fetch_array($sql);
					
					$say=1;
					$hafta=1;
					$toplam=0;
					$normalToplam=0;
					$zamliToplam=0;
					$nnToplam=0;
					$znToplam=0;
					$gunler=explode(".",$alanlar["tatiller"]);
					foreach($gunler as $index => $deger)
					{
						if($say==8)
						{
							$say=1;
						}
						
						$tarih=explode("-",$deger);
						if(($say==6) or ($say==7) or ($tarih[1]==1) or ($_POST[$tarih[0]]==1))
						{
							echo "<td style='width:20px;background:#FFF url(../img/tatil.png);color:#FFF;' align='center'><strong></strong></td>";	
						}
						else
						{
							?>
                            <td style='width:20px;' align='center'>
                            	<?php
                                	if($say==1)
									{
										$sql=mysql_query("select * from birimler where ogretmenID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
										while($birimler=mysql_fetch_array($sql))
										{
											$digerNToplam=0;
											$digerIToplam=0;
								
											$sorgu=mysql_query("select * from digerbirimler");
											while($alan=mysql_fetch_array($sorgu))
											{
												$dizi=explode("+",$alan["g1"]);
												$dersSor=mysql_query("select * from digerdersler where id=".$dizi[0]);
												$ders=mysql_fetch_array($dersSor);
												if($birimler["id"]==$ders["birim"])
												{
													if($ders["oTuru"]==1)
														$digerNToplam++;
													elseif($ders["oTuru"]==2)
														$digerIToplam++;
												}
											}
											$digerTop[$birimler["id"]][1]+=$digerNToplam;
											$digerTop[$birimler["id"]][2]+=$digerIToplam;
										}
										
										$toplam+=$TStoplam1_1;
										$normalToplam+=$normalToplam_1;
										$zamliToplam+=$zamliToplam_1;
										$nnToplam+=$nnToplam_1;
										$znToplam+=$znToplam_1;
										echo $TStoplam1_1;
									}
									if($say==2)
									{
										$sql=mysql_query("select * from birimler where ogretmenID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
										while($birimler=mysql_fetch_array($sql))
										{
											$digerNToplam=0;
											$digerIToplam=0;
								
											$sorgu=mysql_query("select * from digerbirimler");
											while($alan=mysql_fetch_array($sorgu))
											{
												$dizi=explode("+",$alan["g2"]);
												$dersSor=mysql_query("select * from digerdersler where id=".$dizi[0]);
												$ders=mysql_fetch_array($dersSor);
												if($birimler["id"]==$ders["birim"])
												{
													if($ders["oTuru"]==1)
														$digerNToplam++;
													elseif($ders["oTuru"]==2)
														$digerIToplam++;
												}
											}
											$digerTop[$birimler["id"]][1]+=$digerNToplam;
											$digerTop[$birimler["id"]][2]+=$digerIToplam;
										}	
										
										$toplam+=$TStoplam1_2;
										$normalToplam+=$normalToplam_2;
										$zamliToplam+=$zamliToplam_2;
										$nnToplam+=$nnToplam_2;
										$znToplam+=$znToplam_2;
										echo $TStoplam1_2;
									}
									if($say==3)
									{
										$sql=mysql_query("select * from birimler where ogretmenID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
										while($birimler=mysql_fetch_array($sql))
										{
											$digerNToplam=0;
											$digerIToplam=0;
								
											$sorgu=mysql_query("select * from digerbirimler");
											while($alan=mysql_fetch_array($sorgu))
											{
												$dizi=explode("+",$alan["g3"]);
												$dersSor=mysql_query("select * from digerdersler where id=".$dizi[0]);
												$ders=mysql_fetch_array($dersSor);
												if($birimler["id"]==$ders["birim"])
												{
													if($ders["oTuru"]==1)
														$digerNToplam++;
													elseif($ders["oTuru"]==2)
														$digerIToplam++;
												}
											}
											$digerTop[$birimler["id"]][1]+=$digerNToplam;
											$digerTop[$birimler["id"]][2]+=$digerIToplam;
										}
										
										$toplam+=$TStoplam1_3;
										$normalToplam+=$normalToplam_3;
										$zamliToplam+=$zamliToplam_3;
										$nnToplam+=$nnToplam_3;
										$znToplam+=$znToplam_3;
										echo $TStoplam1_3;
									}
									if($say==4)
									{
										$sql=mysql_query("select * from birimler where ogretmenID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
										while($birimler=mysql_fetch_array($sql))
										{
											$digerNToplam=0;
											$digerIToplam=0;
								
											$sorgu=mysql_query("select * from digerbirimler");
											while($alan=mysql_fetch_array($sorgu))
											{
												$dizi=explode("+",$alan["g4"]);
												$dersSor=mysql_query("select * from digerdersler where id=".$dizi[0]);
												$ders=mysql_fetch_array($dersSor);
												if($birimler["id"]==$ders["birim"])
												{
													if($ders["oTuru"]==1)
														$digerNToplam++;
													elseif($ders["oTuru"]==2)
														$digerIToplam++;
												}
											}
											$digerTop[$birimler["id"]][1]+=$digerNToplam;
											$digerTop[$birimler["id"]][2]+=$digerIToplam;
										}
										
										$toplam+=$TStoplam1_4;
										$normalToplam+=$normalToplam_4;
										$zamliToplam+=$zamliToplam_4;
										$nnToplam+=$nnToplam_4;
										$znToplam+=$znToplam_4;
										echo $TStoplam1_4;
									}
									if($say==5)
									{
										$sql=mysql_query("select * from birimler where ogretmenID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
										while($birimler=mysql_fetch_array($sql))
										{
											$digerNToplam=0;
											$digerIToplam=0;
								
											$sorgu=mysql_query("select * from digerbirimler");
											while($alan=mysql_fetch_array($sorgu))
											{
												$dizi=explode("+",$alan["g5"]);
												$dersSor=mysql_query("select * from digerdersler where id=".$dizi[0]);
												$ders=mysql_fetch_array($dersSor);
												if($birimler["id"]==$ders["birim"])
												{
													if($ders["oTuru"]==1)
														$digerNToplam++;
													elseif($ders["oTuru"]==2)
														$digerIToplam++;
												}
											}
											$digerTop[$birimler["id"]][1]+=$digerNToplam;
											$digerTop[$birimler["id"]][2]+=$digerIToplam;
										}
										
										$toplam+=$TStoplam1_5;
										$normalToplam+=$normalToplam_5;
										$zamliToplam+=$zamliToplam_5;
										$nnToplam+=$nnToplam_5;
										$znToplam+=$znToplam_5;
										echo $TStoplam1_5;
									}
								?>
                            </td>
                            <?php
						}
						if($say==5)
						{
							$TS_1[$hafta]+=$toplam;
							$NT[$hafta]+=$normalToplam;
							$ZT[$hafta]+=$zamliToplam;
							$efNT[$hafta]+=$nnToplam;
							$efZT[$hafta]+=$znToplam;
							$hafta++;
							$toplam=0;
							$normalToplam=0;
							$zamliToplam=0;
							$nnToplam=0;
							$znToplam=0;
						}
						$say++;
					}				
				?>
                <td align="center"><strong>
					<?php 
						$genelTop=0;
						foreach($TS_1 as $deger)
							$genelTop+=$deger;
						
						echo $genelTop;
					?>
                </strong></td>
            </tr>
            <tr>
               	<td style="width:50px;"><strong>Normal</strong></td>
                <td style="width:30px;"><strong>US</strong></td>
                <?php
                	@include('../inc/baglan.php'); 
					
					$sql=mysql_query("select * from ekdersgunleri where id=1");
					$alanlar=mysql_fetch_array($sql);
					
					$say=1;
					$hafta=1;
					$toplam=0;
					$gunler=explode(".",$alanlar["tatiller"]);
					foreach($gunler as $index => $deger)
					{
						if($say==8)
						$say=1;
						
						$tarih=explode("-",$deger);
						if(($say==6) or ($say==7) or ($tarih[1]==1) or ($_POST[$tarih[0]]==1))
						{
							echo "<td style='width:20px;background:#FFF url(../img/tatil.png);color:#FFF;' align='center'><strong></strong></td>";	
						}
						else
						{
							?>
                            <td style='width:20px;' align='center'>
                            	<?php
                                	if($say==1)
									{
										$toplam+=$UStoplam1_1;
										echo $UStoplam1_1;
									}
									if($say==2)
									{
										$toplam+=$UStoplam1_2;
										echo $UStoplam1_2;
									}
									if($say==3)
									{
										$toplam+=$UStoplam1_3;
										echo $UStoplam1_3;
									}
									if($say==4)
									{
										$toplam+=$UStoplam1_4;
										echo $UStoplam1_4;
									}
									if($say==5)
									{
										$toplam+=$UStoplam1_5;
										echo $UStoplam1_5;
									}
								?>
                            </td>
                            <?php
						}
						if($say==5)
						{
							$US_1[$hafta]+=$toplam;
							$hafta++;
							$toplam=0;
						}
						$say++;
					}
				?>
                <td align="center"><strong>
					<?php 
						$genelTop=0;
						foreach($US_1 as $deger)
							$genelTop+=$deger;
						
						echo $genelTop;
					?>
                </strong></td>
            </tr>
            <tr>
               	<td style="width:50px;"><strong>Ýkili</strong></td>
                <td style="width:30px;"><strong>TS</strong></td>
                <?php
                	@include('../inc/baglan.php'); 
					
					$sql=mysql_query("select * from ekdersgunleri where id=1");
					$alanlar=mysql_fetch_array($sql);
					
					$say=1;
					$hafta=1;
					$toplam=0;
					$gunler=explode(".",$alanlar["tatiller"]);
					foreach($gunler as $index => $deger)
					{
						if($say==8)
						$say=1;
						
						$tarih=explode("-",$deger);
						if(($say==6) or ($say==7) or ($tarih[1]==1) or ($_POST[$tarih[0]]==1))
						{
							echo "<td style='width:20px;background:#FFF url(../img/tatil.png);color:#FFF;' align='center'><strong></strong></td>";	
						}
						else
						{
							?>
                            <td style='width:20px;' align='center'>
                            	<?php
                                	if($say==1)
									{
										$toplam+=$TStoplam2_1;
										echo $TStoplam2_1;
									}
									if($say==2)
									{
										$toplam+=$TStoplam2_2;
										echo $TStoplam2_2;
									}
									if($say==3)
									{
										$toplam+=$TStoplam2_3;
										echo $TStoplam2_3;
									}
									if($say==4)
									{
										$toplam+=$TStoplam2_4;
										echo $TStoplam2_4;
									}
									if($say==5)
									{
										$toplam+=$TStoplam2_5;
										echo $TStoplam2_5;
									}
								?>
                            </td>
                            <?php
						}
						if($say==5)
						{
							$TS_2[$hafta]+=$toplam;
							$hafta++;
							$toplam=0;
						}
						$say++;
					}
				?>
                <td align="center"><strong>
					<?php 
						$genelTop=0;
						foreach($TS_2 as $deger)
							$genelTop+=$deger;
						
						echo $genelTop;
					?>
                </strong></td>
            </tr>
            <tr>
               	<td style="width:50px;"><strong>Ýkili</strong></td>
                <td style="width:30px;"><strong>US</strong></td>
                <?php
                	@include('../inc/baglan.php'); 
					
					$sql=mysql_query("select * from ekdersgunleri where id=1");
					$alanlar=mysql_fetch_array($sql);
					
					$say=1;
					$hafta=1;
					$toplam=0;
					$gunler=explode(".",$alanlar["tatiller"]);
					foreach($gunler as $index => $deger)
					{
						if($say==8)
						$say=1;
						
						$tarih=explode("-",$deger);
						if(($say==6) or ($say==7) or ($tarih[1]==1) or ($_POST[$tarih[0]]==1))
						{
							echo "<td style='width:20px;background:#FFF url(../img/tatil.png);color:#FFF;' align='center'><strong></strong></td>";	
						}
						else
						{
							?>
                            <td style='width:20px;' align='center'>
                            	<?php
                                	if($say==1)
									{
										$toplam+=$UStoplam2_1;
										echo $UStoplam2_1;
									}
									if($say==2)
									{
										$toplam+=$UStoplam2_2;
										echo $UStoplam2_2;
									}
									if($say==3)
									{
										$toplam+=$UStoplam2_3;
										echo $UStoplam2_3;
									}
									if($say==4)
									{
										$toplam+=$UStoplam2_4;
										echo $UStoplam2_4;
									}
									if($say==5)
									{
										$toplam+=$UStoplam2_5;
										echo $UStoplam2_5;
									}
								?>
                            </td>
                            <?php
						}
						if($say==5)
						{
							$US_2[$hafta]+=$toplam;
							$hafta++;
							$toplam=0;
						}
						$say++;
					}
				?>
                <td align="center"><strong>
					<?php 
						$genelTop=0;
						foreach($US_2 as $deger)
							$genelTop+=$deger;
						
						echo $genelTop;
					?>
                </strong></td>
            </tr>
    	</table>
        <div class="clear" style="background:">&nbsp;</div>
		<div class="container templatemo_wrapper">
            <!-- home start -->
            <div class="row">
              <div class="col-sm-6">
                <div class="col-sm-6"> &nbsp; </div>
              </div>
              <div class="col-sm-6 templatemo_home">
              		<div class="templatemo_headertitle">YÖNETÝM PANELÝ</div>
                    <div class="clear"></div>
                    <div class="yonetim_form_guncelle">
                    	<table width="100%" border="0">
                        	<tr>
                            	<?php
									if(isset($_POST["gelenFormNo"]))
									{
										@include("inc/inc_baglan.php");
										$sql_actFortm="update kullanici set actForm = '$_POST[gelenFormNo]' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
										@mysql_query($sql_actFortm,$baglan);
										setcookie("bilgi",$_POST["gelenFormNo"].". Gün aktif edildi.");
										header("Location:index.php");
									}								
								
                                	@include("inc/inc_baglan.php");
									$sql_actFortm=@mysql_query("select * from kullanici where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"]);
									$form=@mysql_fetch_array($sql_actFortm);
								?>
                           		<form action="index.php" method="post">
                                	<td align="right">
                                    	<div class="bilgi">
											<?php if(isset($_COOKIE['bilgi'])) echo $_COOKIE['bilgi']; ?>
                                        </div>
                                    </td>
                                    <td align="right" style="width:130px;">
                                    	<select name="gelenFormNo">
                                        	<option value="1" <?php if($form["actForm"] == 1) echo "selected='selected'"; ?>>1. Gün</option>
                                        	<option value="2" <?php if($form["actForm"] == 2) echo "selected='selected'"; ?>>2. Gün</option>
                                        	<option value="3" <?php if($form["actForm"] == 3) echo "selected='selected'"; ?>>3. Gün</option>
                                        	<option value="4" <?php if($form["actForm"] == 4) echo "selected='selected'"; ?>>4. Gün</option>
                                        	<option value="5" <?php if($form["actForm"] == 5) echo "selected='selected'"; ?>>5. Gün</option>
                                         	<option value="6" <?php if($form["actForm"] == 6) echo "selected='selected'"; ?>>6. Gün</option>
                                         	<option value="7" <?php if($form["actForm"] == 7) echo "selected='selected'"; ?>>7. Gün</option>
                                        	<option value="8" <?php if($form["actForm"] == 8) echo "selected='selected'"; ?>>8. Gün</option>
                                         	<option value="9" <?php if($form["actForm"] == 9) echo "selected='selected'"; ?>>9. Gün</option>
                                        	<option value="10" <?php if($form["actForm"] == 10) echo "selected='selected'"; ?>>10. Gün</option>
                                    	</select>
                                    </td>
                                    <td align="right" style="width:120px;"><input type="submit" value="Kaydet" /></td>
                               </form>
                            </tr>
                        </table>
                    </div>
                    <div class="clear"></div>
                    <div class="templatemo_hometext" style="min-height:320px;">
                    	<table border="0" width="100%" class="verilerTablosu">
                        	<tr>
                            	<td align='center'><a href="index.php?listele=all">*</a></td>
                                <?php
                                	for($i=1; $i<=10; $i++)
										echo "<td width='9%' align='center'><a href='index.php?listele&Gun=$i'>G$i</a></td>";
								?>
                                
                            </tr>
                            <?php for($i=1; $i<=30; $i++){ ?>
                            <tr>
                            	<td align='center'><a href="index.php?listele&Ogrenci=<?php echo $i; ?>">Ö<?php echo $i; ?></a></td>
                                <?php for($k=1; $k<=10; $k++) { ?>
									<td width='9%' align='center'>
                                    	<?php
											@include("inc/inc_baglan.php");
											$sql_gunler=@mysql_query("select * from kullanici where ogrenciNo='$i'");
											$alanlar=@mysql_fetch_array($sql_gunler);
											
                                            if($alanlar["f$k"] == 1)
												echo "<a href='index.php?listele&O=$i&G=$k'><img src='images/aktifTabloBTN.png' /></a>";
											else
												echo "<img src='images/pasifTabloBTN.png' />";
										?>
                                    </td>
								<?php } ?>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="clear"></div>
              </div>
          </div> 
		</div>  
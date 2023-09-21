				<div class="sol modul" style="margin-right:20px;">
		        	<div class="sol modulbaslik"><?php echo $dil["hizmetlerimiz"]; ?></div>
		            <div class="sol modulalt">
                    <?php
						if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
							@include('login/inc/baglanAR.php');
						else
							@include('login/inc/baglan.php');
							
							$sorgu=mysql_query("select * from sayfalar where kontrol='0'");
							while($alanlar=mysql_fetch_array($sorgu)){
					?>
						<div class="sol fiyat">
                        	<a href="index.php?hizmet=<?php echo $alanlar["id"]; ?>">
                            	<div class="sol resim"><img src="img/menutick.png" alt="" /></div>
                            	<div class="sol mini fontkalin">
                                	<?php
                                    	if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
											echo $alanlar["BaslikAR"]; 
										else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "en")
											echo $alanlar["BaslikEN"]; 
										else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "tr")
											echo $alanlar["BaslikTR"]; 
									?>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
		            </div>
		        </div>
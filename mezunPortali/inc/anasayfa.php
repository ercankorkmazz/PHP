            <div class="bolum4" style="padding-top:10px;">
                <div class="icerik">
                    <div class="sol">
                    <script src="js/agile_carousel.a1.1.min.js"></script>
						<script>
                            $.getJSON("inc/slider.php", function (data) {
                                $(document).ready(function () {
                                    $("#flavor_1").agile_carousel({
                                        carousel_data: data,
                                        carousel_outer_height: 300,
                                        carousel_height: 300,
                                        slide_height: 300,
                                        carousel_outer_width: 690,
                                        slide_width: 690,
                                        transition_time: 300,
                                        timer: 4000,
                                        continuous_scrolling: true,
                                        control_set_1: "numbered_buttons",
                                        no_control_set: "hover_previous_button,hover_next_button"
                                    });
                                })
                            });
                        </script>
                        <?php 
						@include('inc/baglan.php'); 
						$sorgu=mysql_query("select * from slider");
						$sliderSayisi=0;
						$sliderSayisi=mysql_num_rows($sorgu);
						if($sliderSayisi!=0){?>
                    	<div id="wrapper">
                            <div class="slideshow" id="flavor_1"></div>
                        </div>
                        <div style="height:10px;">&nbsp;</div>
                        <?php }
							@include('inc/baglan.php'); 
							$sorgu=mysql_query("select * from basarilar where onay='1'");
							$basariSayisi=0;
							$basariSayisi=mysql_num_rows($sorgu);
							
							if($basariSayisi!=0){
						?> 
                    <div class="icerikSag" style="margin:0; width:690px;margin-top:10px;float:none;">
                        <div class="ust" style="border:0;width:677px;color:#FFF;">Mezunlarýmýzýn Baþarýlarý</div>
                        <div class="alt" style="width:690px;padding:0;">
                        <?php
							@include('inc/baglan.php'); 
							$sorgu=mysql_query("select * from basarilar where onay='1' order by id desc");
							
							while($alanlar=mysql_fetch_array($sorgu))
							{
						?>
                        	<div class="mezunBasari">
                            	<img src="img/basari/
								<?php 
									if(!empty($alanlar["url"]))
										echo $alanlar["url"]; 
									else
										echo "mezun.jpg";
								?>" />
                                <h3><?php echo $alanlar["mezun"];	?></h3>
                                <p><?php echo $alanlar["baslik"]; ?></p>
								<a href="index.php?mezunbasari=<?php echo $alanlar["id"]; ?>">Devamýný Görüntüle</a>
                        	</div>
                        <?php } ?>
                        <div class='clear' style="padding:0 0 10px 10px;"><a href="index.php?mezunbasarilari"><img src="img/tumu.png" /></a></a></div>
                        </div>
                    </div><!-- Bölüm 4 anaDuyuru Sonu -->
                    <?php }else{echo "<div class='clear'>&nbsp;</div>";}
					
					?>
                  	</div><!-- Bölüm 4 Slider Sonu -->
                  	</div><!-- Bölüm 4 duyurular Sonu -->
                </div><!-- Bölüm 4 Ýçerik Sonu -->
                <div style="margin-top:-10px;float:left;margin-left:-1px;">
                    	<?php @include("inc/icerikSag.php");?>
                </div>
                <div class="clear"></div>
            </div><!-- Bölüm 4 Sonu -->
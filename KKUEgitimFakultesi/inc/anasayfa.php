            <div class="bolum4" style="padding-top:10px;">
                <div class="icerik">
                    <div class="sol">
                    <script src="js/agile_carousel.a1.1.min.js"></script>
						<script>
                            $.getJSON("inc/slider.php", function (data) {
                                $(document).ready(function () {
                                    $("#flavor_1").agile_carousel({
                                        carousel_data: data,
                                        carousel_outer_height: 150,
                                        carousel_height: 150,
                                        slide_height: 150,
                                        carousel_outer_width: 692,
                                        slide_width: 692,
                                        transition_time: 300,
                                        timer: 4000,
                                        continuous_scrolling: true,
                                        control_set_1: "numbered_buttons",
                                        no_control_set: "hover_previous_button,hover_next_button"
                                    });
                                })
                            });
                        </script>	
                    	<div id="wrapper">
                            <div class="slideshow" id="flavor_1"></div>
                        </div>                      
                        <div class="icerikSag" style="margin:0; width:692px;margin-top:15px;">
                        <div class="ust" style="border:0;width:678px;color:#FFF;">Güncel Duyurular</div>
                            <div class="alt" style="width:676px;">
                                  <ul>
                                    <?php 
                                        @include('login/inc/baglan.php'); 
                                        $sorgu=mysql_query("select * from duyurular order by id desc limit 0,5");
										$kontrol=0;
                                        while($alanlar=mysql_fetch_array($sorgu))
                                        {	
											$kontrol=1;
                                            if(!empty($alanlar["url"]))
                                            {
												
                                            ?>
                                                <li style="padding-left:2px;"><a href="<?php echo $alanlar['url']; ?>" target="_blank"><?php echo $alanlar['duyuru']; ?></a></li>
                                            <?php }else{ ?>
                                                <li style="padding-left:2px;list-style-image:url(img/li.png);"><p style="margin:0;color:#222;"><?php echo $alanlar['duyuru']; ?></p></li>
                                        <?php }} if($kontrol==0){ ?>
                                            <li style="text-shadow:2px 2px 2px #CCC;">Sisteme kayýtlý duyuru bulunamadý.</li>
                                        <?php } ?>
                                    </ul><br />
                                    <center><p style="margin:0;padding:0;">&#8212; <a href="index.php?duyurular" class="tumDuyurular">Tümünü Görüntüle</a> &#8212;</p></center> 
                        </div>
                    </div><!-- Bölüm 4 anaDuyuru Sonu -->
                  	</div><!-- Bölüm 4 Slider Sonu -->
                    <div class="sag" style="margin:0;">
                    	<div class="icerikSag" style="margin-top:0;width:275px;">
                            <div class="ust" style="-moz-border-radius:2px; border-radius:2px;">
                                <form method="post" action="index.php?arama" style="">
                                    <input type="text" name="ara" value="Arama yapýn." id="araTXT" onclick="arama();" onblur="if(this.value=='')this.value='Arama yapýn.'; araOut();" class="araTxt"/>
                                    <input type="image" src="img/ara.png" id="araBtn" onclick="araBtn();" onblur="araOut();" class="araBtn"/>
                                </form>
                            </div>
                        </div>
                    	<div class="icerikSag" style="width:275px;">
                        <?php
                        	@include('login/inc/baglan.php');
							$sor=mysql_query("select * from karsilamaalani where id=1");
							$alanlar=mysql_fetch_array($sor);
                        ?>
                            <div class="ust" align="center"><?php echo $alanlar['baslik']; ?></div>
                            <div class="alt" style="text-align:justify;">
                              <span style="font-size:70px;height:8px;display:block;margin-top:-12px; margin-bottom:30px;">&#8220;</span><div style="font-size:13px;text-shadow: 1px 1px 1px #DDD; width:204px;margin-left:28px;margin-top:-18px;"><?php echo $alanlar['icerik']; ?></div><span style="font-size:70px; height:27px;margin-top:-25px; float:right;">&#8221;</span>
                              <div class="clear"></div>
                              <div class="galeri" style="border-top:none;"><a href="index.php?albumler" target="_self">Galeri</a></div>
                              <?php
                                    @include('login/inc/baglan.php'); 
                                    $sorgu=mysql_query("select * from tasarim");
                                    $alanlar=mysql_fetch_array($sorgu);
                              ?>
                                  <div class="facebook"><a href="<?php echo $alanlar['facebook']; ?>" target="_blank">Facebook</a></div>
                                  <div class="twitter"><a href="<?php echo $alanlar['twitter']; ?>" target="_blank">Twitter</a></div>
                            </div>
                        </div>
                        <script type="text/javascript">
							function arama() {
								document.getElementById("araTXT").value = '';
								document.getElementById("araTXT").style.boxShadow = '<?php echo $alanlar['renk']; ?> 0px 0px 5px 1px';
								document.getElementById("araBtn").style.boxShadow = '<?php echo $alanlar['renk']; ?> 0px 0px 5px 1px';
							}
							function araBtn() {
								document.getElementById("araBtn").style.boxShadow = '<?php echo $alanlar['renk']; ?> 0px 0px 5px 1px';
							}
							function araOut() {
								document.getElementById("araTXT").style.boxShadow = 'none';
								document.getElementById("araBtn").style.boxShadow = 'none';
							}
						</script>
                        <div class="clear"></div>
                  	</div><!-- Bölüm 4 duyurular Sonu -->
                  <div class="clear"></div>
                </div><!-- Bölüm 4 Ýçerik Sonu -->
            </div><!-- Bölüm 4 Sonu -->
	<div id="ustalan" class="sol">
    	<div class="sol" id="logo"><a href="index.php"><img src="img/logo.png" alt="Rent A Car - Oto Kiralama"></a></div>
    	<div class="sag">
        	<div class="sol menu-sol"></div>
            <div class="sol menu">
                <div class="sag diller">
                	<?php if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar"){ ?>       
                        <a class="dilla" href="index.php?iletisim">
                            <span class="sprite tmi3"></span><span><?php echo $dil["iletisim"]; ?></span>
                        </a>
                        <a class="dilla" href="index.php?SSS">
                            <span class="sprite tmi2"></span><span><?php echo $dil["SSS"]; ?></span>
                        </a>
                        <a class="dilla" href="index.php?kiralamaKosullari">
                            <span class="sprite tmi1"></span><span><?php echo $dil["kiralamaKosullari"]; ?></span>
                        </a>
                    <?php }else{ ?>                    
                        <a class="dilla" href="index.php?kiralamaKosullari">
                            <span class="sprite tmi1"></span><span><?php echo $dil["kiralamaKosullari"]; ?></span>
                        </a>
                        <a class="dilla" href="index.php?SSS">
                            <span class="sprite tmi2"></span><span><?php echo $dil["SSS"]; ?></span>
                        </a>
                        <a class="dilla" href="index.php?iletisim">
                            <span class="sprite tmi3"></span><span><?php echo $dil["iletisim"]; ?></span>
                        </a>
                    <?php } ?> 
                    
                    <div class="dilalt">
                        <div class="dillink"><a href="index.php?dil=tr"><img src="img/b_tr.png" alt="Türkçe"></a></div>
    					<div class="dillink"><a href="index.php?dil=ar"><img src="img/b_sa.jpg" alt="Deutcsh"></a></div>
    					<div class="dillink"><a href="index.php?dil=en"><img src="img/b_en.png" alt="English"></a></div>
                    </div>
				</div>
            </div>
            
            <div id="destek" align="right">
                <?php echo $dil["destekverezervasyon"]; ?>
                <span style="padding-top:5px; text-align:right;">-90 555 269 12 42</span>
            </div>
            
            <div id="sosyal">
                <a href="http://www.facebook.com/" class="face" target="_blank">&nbsp;</a>
                <a href="http://www.twitter.com/" class="twit" target="_blank">&nbsp;</a>
                <a href="#" class="rss" target="_blank">&nbsp;</a>
            </div>
            
            <div class="mbar" <?php if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar"){ ?>style="direction:rtl;"<?php } ?>>
     			<a href="index.php"<?php if(count($_GET) == 0) echo " id='act'"; ?>>
					<?php echo $dil["anasayfa"]; ?>
                </a>
                <a href="index.php?hakkimizda"<?php if(isset($_GET["hakkimizda"])) echo " id='act'"; ?>>
					<?php echo $dil["hakkinda"]; ?>
                </a>
                <a href="index.php?filomuz"<?php if(isset($_GET["filomuz"]) or isset($_GET["rezervasyon"])) echo " id='act'"; ?>>
					<?php echo $dil["filomuz"]; ?>
                </a>
                <a href="index.php?transfer"<?php if(isset($_GET["transfer"])) echo " id='act'"; ?>>
					<?php echo $dil["transfer"]; ?>
                </a>
                <a href="index.php?kiralamaKosullari"<?php if(isset($_GET["kiralamaKosullari"])) echo " id='act'"; ?>>
					<?php echo $dil["kiralamaKosullari"]; ?>
                </a>
                <a href="index.php?SSS"<?php if(isset($_GET["SSS"])) echo " id='act'"; ?>>
					<?php echo $dil["SSS"]; ?>
                </a>
     			<a href="index.php?iletisim"<?php if(isset($_GET["iletisim"])) echo " id='act'"; ?>>
					<?php echo $dil["iletisim"]; ?>
                </a>
            </div>
            
            <div id="dynamicmenu" style="display: none;">
                <div id="dynamicinner" <?php if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar"){ ?>style="direction:rtl;"<?php } ?>>
                    <a href="index.php"<?php if(count($_GET) == 0) echo " id='act'"; ?>>
                        <?php echo $dil["anasayfa"]; ?>
                    </a>
                    <a href="index.php?hakkimizda"<?php if(isset($_GET["hakkimizda"])) echo " id='act'"; ?>>
                        <?php echo $dil["hakkinda"]; ?>
                    </a>
                    <a href="index.php?filomuz"<?php if(isset($_GET["filomuz"]) or isset($_GET["rezervasyon"])) echo " id='act'"; ?>>
                        <?php echo $dil["filomuz"]; ?>
                    </a>
                    <a href="index.php?transfer"<?php if(isset($_GET["transfer"])) echo " id='act'"; ?>>
                        <?php echo $dil["transfer"]; ?>
                    </a>
                    <a href="index.php?kiralamaKosullari"<?php if(isset($_GET["kiralamaKosullari"])) echo " id='act'"; ?>>
                        <?php echo $dil["kiralamaKosullari"]; ?>
                    </a>
                    <a href="index.php?SSS"<?php if(isset($_GET["SSS"])) echo " id='act'"; ?>>
                        <?php echo $dil["SSS"]; ?>
                    </a>
                    <a href="index.php?iletisim"<?php if(isset($_GET["iletisim"])) echo " id='act'"; ?>>
                        <?php echo $dil["iletisim"]; ?>
                    </a>
                </div>
            </div>        	
            <div class="sol menu-sag"></div>
        </div>
    </div>
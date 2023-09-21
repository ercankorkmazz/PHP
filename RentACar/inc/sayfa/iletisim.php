<?php
	if(isset($_POST["adisoyadi"]))
		include("inc/iletisimMailGonder.php")
?>
    <!-- içerik -->
    <div class="sol" style="width:1000px;">
		<div class="sol" style="width:340px">
			<div class="sol" id="solmenu">
		        <?php @include("yanMenu.php"); @include("hizmetler.php"); ?>
			</div>
		</div>
		<div class="sol rent" style="width:660px; margin-left:-20px; <?php if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar"){ ?>direction:rtl;<?php } ?>">
            <div class="sol sayfa" style="color: #333333; font-size:11px; padding-left:15px; padding-right:15px; width:650px !important;">
				<?php
                    if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
                        @include('login/inc/baglanAR.php');
                    else
                        @include('login/inc/baglan.php');
                        
                        $sorgu=mysql_query("select * from sayfalar where kontrol='4'");
                        $alanlar=mysql_fetch_array($sorgu);
                ?>
                <div class="sol title">
				<?php 
					if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
						echo $alanlar["BaslikAR"]; 
					else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "en")
						echo $alanlar["BaslikEN"]; 
					else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "tr")
						echo $alanlar["BaslikTR"]; 
				?>
                </div>
            	<?php 
					if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
						echo $alanlar["IcerikAR"]; 
					else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "en")
						echo $alanlar["IcerikEN"]; 
					else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "tr")
						echo $alanlar["IcerikTR"]; 
				?>
            </div>
			<div class="sol sayfa" style="color: #333333; font-size:11px; padding-left:15px; padding-right:15px; width:650px !important;">
                <div class="sol title" <?php if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar"){ ?>style="text-align:right;"<?php } ?>><?php echo $dil["iletisimFormu"]; ?></div>
            
				<div class="sol" style="width:680px;" id="iformcont">
					<form action="index.php?iletisim" method="post">
						<div class="sol"><input type="text" name="adisoyadi" id="adisoyadi" style="width:312px; padding-right:5px;" placeholder="<?php echo $dil["adSoyad"]; ?>" class="rezervasyoninput validate[required]" /></div>
						<div class="sol"><input type="text" name="telefon" style="width:310px; padding-right:5px;" placeholder="<?php echo $dil["tel"]; ?>" id="tel" class="rezervasyoninput validate[required,custom[phone]]" /></div>
						<div class="sol"><input type="text" name="eposta" style="width:312px; padding-right:5px;" placeholder="<?php echo $dil["eposta"]; ?>" class="rezervasyoninput validate[required,custom[email]]" id="eposta" /></div>
						<div class="sol"><input type="text" name="konu" style="width:310px; padding-right:5px;" placeholder="<?php echo $dil["konu"]; ?>" class="rezervasyoninput validate[required]" id="konu" /></div>
						<div class="sol"><textarea name="mesaj" id="mesaj" class="textar" placeholder="<?php echo $dil["mesajiniz"]; ?>"></textarea></div>
						
						<div class="sol" style="width:660px; margin-top:5px;">
                            <input type="submit" value="<?php echo $dil["gonder"]; ?>" class="fiyathesapla" style="float: right; margin-top:3px; margin-right:3px;" />
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- içerik sonu -->
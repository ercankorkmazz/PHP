    <!-- içerik -->
	<div class="sol" style="width:1000px;">
		<div class="sol" style="width:340px">
			<div class="sol" id="solmenu">
		    	<?php @include("yanMenu.php"); @include("hizmetler.php"); ?>
			</div>
		</div>
		<div class="sol rent" style="width:660px; margin-left:-20px;">
			<div class="sol sayfa" style="color: #333333; font-size:11px; padding-left:15px; padding-right:15px; width:650px !important;">
				<?php
                    if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
                        @include('login/inc/baglanAR.php');
                    else
                        @include('login/inc/baglan.php');
                        
                        $sorgu=mysql_query("select * from sayfalar where kontrol='1'");
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
				<div class="sol">
                	<?php 
					if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
						echo $alanlar["IcerikAR"]; 
					else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "en")
						echo $alanlar["IcerikEN"]; 
					else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "tr")
						echo $alanlar["IcerikTR"]; 
				?>
                </div>
			</div>
		</div>
	</div>
</div>
<!-- içerik sonu -->
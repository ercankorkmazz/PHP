<!-- içerik -->
    <div class="sol rent" style="width: 990px;">
		<div class="sol sayfa" style="width:990px; margin-bottom:10px;">
        	<div class="sol" style="padding: 5px; padding-left:0px;"><span class="title">Transferler</span></div>
			<div class="sag" style="padding:0px; margin-right:10px;">
				<div class="sol">
		        	<a href="index.php?parabirimi=tl&sayfa=transfer" class="paraa" <?php if(isset($_COOKIE["paraBirimi"]) and ($_COOKIE["paraBirimi"]=="1")) echo "id='act'"; ?>>TL</a>					
		        </div>
				<div class="sol">
					<a href="index.php?parabirimi=euro&sayfa=transfer" class="paraa" <?php if(isset($_COOKIE["paraBirimi"]) and ($_COOKIE["paraBirimi"]=="2")) echo "id='act'"; ?>>&#8364;</a>							
		        </div>
				<div class="sol">
		        	<a href="index.php?parabirimi=dolar&sayfa=transfer" class="paraa" <?php if(isset($_COOKIE["paraBirimi"]) and ($_COOKIE["paraBirimi"]=="3")) echo "id='act'"; ?>>$</a>						
		        </div>						
			</div>
		</div>
        <div class="sol sayfa" style="width:990px; color:#333333; font-size:11px;">
            <div class="sol fontkalin" style="width:210px; padding-bottom:5px; font-size:11px !important;"><?php echo $dil["alisyerismall"]; ?></div>
            <div class="sol fontkalin" style="width:210px; padding-bottom:5px; font-size:11px !important;"><?php echo $dil["varisYeri"]; ?></div>
            <div class="sol fontkalin" style="width:95px; text-align:center; padding-bottom:5px; font-size:11px !important;">1-4 <?php echo $dil["kisi"]; ?></div>
            <div class="sol fontkalin" style="width:95px; text-align:center; padding-bottom:5px; font-size:11px !important;">5-8 <?php echo $dil["kisi"]; ?></div>
            <div class="sol fontkalin" style="width:95px; text-align:center; padding-bottom:5px; font-size:11px !important;">9-15 <?php echo $dil["kisi"]; ?></div>
            <div class="sol fontkalin" style="width:95px; text-align:center; padding-bottom:5px; font-size:11px !important;">16-30 <?php echo $dil["kisi"]; ?></div>
            <div class="sol fontkalin" style="width:90px; text-align:center; padding-bottom:5px; height:20px; overflow:hidden; font-size:11px !important;"><?php echo $dil["mesafe"]; ?></div>
            <div class="sol fontkalin" style="width:90px; text-align:center; padding-bottom:5px; font-size:11px !important;">&nbsp;</div>
    		<?php
				if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
					@include('login/inc/baglanAR.php');	
				else
					@include('login/inc/baglan.php');	
				$sorgu=mysql_query("select * from transfer");
				while($alanlar=mysql_fetch_array($sorgu)){
			?>
                <div class="temizle sol" style="width:980px; height:1px; background:#f2f2f2;"></div>
                <div class="sol ilk" style="width: 190px;"><?php
                	if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
						echo $alanlar["AYAR"]; 
					else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "en")
						echo $alanlar["AYEN"]; 
					else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "tr")
						echo $alanlar["AYTR"];
				?></div>
                <div class="sol" style="width:200px; padding:6px 0"><?php
                	if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
						echo $alanlar["DYAR"]; 
					else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "en")
						echo $alanlar["DYEN"]; 
					else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "tr")
						echo $alanlar["DYTR"];
				?></div>
                <div class="sol" style="width:95px; text-align:center; padding:6px 0">
               	<?php
                	if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
						echo $alanlar["K1_4"]." TL"; 
					else if($_COOKIE["paraBirimi"]==2)
						echo dovizGetir($alanlar["K1_4"], 1, 2)." &#8364;"; 
					else if($_COOKIE["paraBirimi"]==3)
						echo dovizGetir($alanlar["K1_4"], 1, 3)." $";
				?>
                </div>
                <div class="sol" style="width:95px; text-align:center; padding:6px 0">
               	<?php
                	if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
						echo $alanlar["K5_8"]." TL"; 
					else if($_COOKIE["paraBirimi"]==2)
						echo dovizGetir($alanlar["K5_8"], 1, 2)." &#8364;"; 
					else if($_COOKIE["paraBirimi"]==3)
						echo dovizGetir($alanlar["K5_8"], 1, 3)." $";
				?>
                </div>
                <div class="sol" style="width:95px; text-align:center; padding:6px 0">
               	<?php
                	if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
						echo $alanlar["K9_15"]." TL"; 
					else if($_COOKIE["paraBirimi"]==2)
						echo dovizGetir($alanlar["K9_15"], 1, 2)." &#8364;"; 
					else if($_COOKIE["paraBirimi"]==3)
						echo dovizGetir($alanlar["K9_15"], 1, 3)." $";
				?>
                </div>
                <div class="sol" style="width:95px; text-align:center; padding:6px 0">
               	<?php
                	if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
						echo $alanlar["K16_30"]." TL"; 
					else if($_COOKIE["paraBirimi"]==2)
						echo dovizGetir($alanlar["K16_30"], 1, 2)." &#8364;"; 
					else if($_COOKIE["paraBirimi"]==3)
						echo dovizGetir($alanlar["K16_30"], 1, 3)." $";
				?>
                </div>
                <div class="sol" style="width:90px; text-align:center; padding:6px 0"><?php echo $alanlar["mesafe"];?> KM</div>							
                <div class="sol" style="width:90px; text-align:center; padding:5px 0">
                    <a href="index.php?transferOnay=<?php echo $alanlar["id"];?>" class="salta">Rezervasyon</a>
                </div>
    		<?php }?>
        </div>
	</div>
</div> 
<!-- içerik sonu -->  
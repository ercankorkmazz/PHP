<!-- içerik -->
    <div class="sol" style="width:1000px">
		<div class="sol" style="width:340px">
			<div class="sol" id="solmenu">
		        <?php @include("sayfa/yanMenu.php"); @include("sayfa/hizmetler.php"); ?>
			</div>
		</div>
		<div class="sol" style="width:660px;margin-left:-20px;">
        	<div id="containerid" style="width:680px; background:none;">
                <div class="sol rent listeid5">
                    <div class="sayfa sol" style="width: 670px; text-align:center;">
                    	<?php if($_GET["mesajIletildi"]=="1"){ ?>
                        	<img src="img/onaylandi.png" />
                            <span class="title" style="display:block;">
								<?php echo $dil["mesajIletildi"]; ?>
                            </span>
                    	<?php } else if($_GET["mesajIletildi"]=="0"){ ?>
                        	<img src="img/hata.png" />
                            <span class="title" style="display:block;">
								<?php echo $dil["islemBasarisiz"]; ?>
                            </span>
                    	<?php } ?>
            		</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- içerik sonu -->
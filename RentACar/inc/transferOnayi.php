<?php
	if(isset($_POST["adisoyadi"]))
		include("inc/transferMailGonder.php")
?>
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
                    <div class="sayfa sol" style="width: 670px;">
				        <div class="temizle sol"><span class="title" style="width: 670px;">
							<?php echo $dil["TransferRezervasyonFormu"]; ?></span>
                           	<div class="clear">&nbsp;</div>
                        </div>
                        <form action="index.php?transferOnay=<?php echo $_GET["transferOnay"]; ?>" method="post">
								<div class="sol temizle " style="width:300px; margin-top:0px;">
									<div class="temizle sol inputyazisi" style="margin-top:0px; width:320px;">
                                    	<span class="sol yazi2" style="padding-top:10px"><?php echo $dil["adSoyad"]; ?></span>
                                        <span class="sol">: 
                                        	<input type="text" name="adisoyadi" id="adisoyadi" class="rezervasyoninput validate[required]" />
                                        </span>
                                    </div>
									<div class="temizle sol inputyazisi" style="margin-top:15px; width:320px;">
                                        <span class="sol yazi2" style="padding-top:10px"><?php echo $dil["eposta"]; ?></span>
                                        <span class="sol">: 
                                        	<input type="text" name="eposta" id="eposta" class="rezervasyoninput validate[required,custom[email]]" id="email" />
                                        </span>
                                    </div>
									<div class="temizle sol inputyazisi" style="margin-top:15px; width:320px;">
                                        <span class="sol yazi2" style="padding-top:10px"><?php echo $dil["havayoluSirketi"]; ?></span>
                                        <span class="sol">: 
                                            <input type="text" name="ucusfirmasi" id="ucusfirmasi" class="rezervasyoninput" />
                                        </span>
                                    </div>
									<div class="temizle sol inputyazisi" style="margin-top:15px; width:320px;">
                                        <span class="sol yazi2" style="padding-top:10px"><?php echo $dil["ucusNo"]; ?></span>
                                        <span class="sol">: 
                                            <input type="text" name="ucusno" id="ucusno" class="rezervasyoninput" />
                                        </span>
                                    </div>
								</div>
								<div class="sol" style="width:310px; margin:0 0 0 8px; margin-left:40px;">
									<div class="temizle sol inputyazisi" style="margin-top:0px; width:320px;">
                                        <span class="sol yazi2" style="padding-top:10px"><?php echo $dil["tel"]; ?></span>
                                        <span class="sol">: 
                                            <input type="text" name="telefon" id="telefon" class="rezervasyoninput" id="tel" />
                                        </span>
                                    </div>
									<div class="temizle sol inputyazisi" style="margin-top:15px; width:320px;">
                                        <span class="sol yazi2" style="padding-top:10px"><?php echo $dil["ulke"]; ?></span>
                                        <span class="sol">: 
                                            <input type="text" name="ulke" class="rezervasyoninput validate[required,custom[phone]]" id="gsmno" />
                                        </span>
                                    </div>
									<div class="temizle sol inputyazisi" style="margin-top:15px; width:320px;">
                                        <span class="sol yazi2" style="padding-top:10px"><?php echo $dil["kalkisHavalimani"]; ?></span>
                                        <span class="sol">: 
                                            <input type="text" name="kalkis" class="rezervasyoninput" />
                                        </span>
                                    </div>
									<div class="temizle sol inputyazisi" style="margin-top:15px; width:320px;">
                                        <span class="sol yazi2" style="padding-top:10px"><?php echo $dil["kisiSayisi"]; ?></span>
                                        <span class="sol">: 
                                            <input type="text" name="kisiSayisi" id="kisiSayisi" class="rezervasyoninput validate[required,custom[phone]]" id="gsmno" />
                                        </span>
                                    </div>
								</div>
                        	<div class="clear"></div>
						</div>
                        
                        <div class="sayfa sol" style="width: 670px;">
                       		<div class="sol" style="width:680px; padding:0;">
                            	<input type="submit" class="fiyathesapla" style="float: right; margin-right:20px;" value="<?php echo $dil["rezervasyonuTamamla"]; ?>" />
							</div>
                        </div>
                        <input type="hidden" id="toplaminput" name="toplam"/>
                        <input type="hidden" id="ekstrainput" name="ekstrainput"/>
                        <input type="hidden" class="secilenler" name="secilenler">
					</form>
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
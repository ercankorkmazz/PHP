<!-- içerik -->
    <div class="sol" style="width:1000px">
		<div class="sol" style="width:320px">
            <form action="index.php?form1&kontrol" method="post">
                <div class="sol" id="solmenu">
                    <div class="sol modul" style="margin-right:20px;">
                        <div class="sol modulbaslik"><span><?php echo $dil["alisbilgileri"]; ?></span></div>
                        <div class="sol modulalt" style="width: 280px;">
                            <div class="sol temizle" style="margin-bottom:10px;">
                                <select name="alisYeri" style="width:217px" id="alisyeri">
                                    <option value="0" <?php if(!isset($_COOKIE["alisYeri"]) or ($_COOKIE["alisYeri"]=="0")) echo "selected='selected'"; ?>>
										<?php echo $dil["alisyeriseciniz"]; ?></option>
                                    <option value="1" <?php if(isset($_COOKIE["alisYeri"]) and ($_COOKIE["alisYeri"]=="1")) echo "selected='selected'"; ?>>
										<?php echo $dil["adanasakirpasahavalimani"]; ?></option>
                                    <option value="2" <?php if(isset($_COOKIE["alisYeri"]) and ($_COOKIE["alisYeri"]=="2")) echo "selected='selected'"; ?>>
                                    	Antakya (Hatay) <?php echo $dil["havalimani"]; ?></option>
                                    <option value="3" <?php if(isset($_COOKIE["alisYeri"]) and ($_COOKIE["alisYeri"]=="3")) echo "selected='selected'"; ?>>
                                    	Samsun <?php echo $dil["havalimani"]; ?></option>
                                    <option value="4" <?php if(isset($_COOKIE["alisYeri"]) and ($_COOKIE["alisYeri"]=="4")) echo "selected='selected'"; ?>>
                                    	Adana (<?php echo $dil["merkezofis"]; ?>)</option>
                                </select>
                            </div>
                            
                            <div class="sol temizle" style="margin-bottom: 10px;">
                                <input style="width: 114px; margin:0;" name="startdate" id="startdate" class="date-pick inputtarih" value="<?php if(isset($_COOKIE["startdate"])) echo $_COOKIE["startdate"]; else echo (string)date('d.m.Y'); ?>" />
                                
                                <select name="alisSaati" style="width:25px;">
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="01")) echo "selected='selected'"; ?>>01</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="02")) echo "selected='selected'"; ?>>02</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="03")) echo "selected='selected'"; ?>>03</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="04")) echo "selected='selected'"; ?>>04</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="05")) echo "selected='selected'"; ?>>05</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="06")) echo "selected='selected'"; ?>>06</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="07")) echo "selected='selected'"; ?>>07</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="08")) echo "selected='selected'"; ?>>08</option>
                                    <option <?php if(!isset($_COOKIE["alisSaati"]) or ($_COOKIE["alisSaati"]=="09")) echo "selected='selected'"; ?>>09</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="10")) echo "selected='selected'"; ?>>10</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="11")) echo "selected='selected'"; ?>>11</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="12")) echo "selected='selected'"; ?>>12</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="13")) echo "selected='selected'"; ?>>13</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="14")) echo "selected='selected'"; ?>>14</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="15")) echo "selected='selected'"; ?>>15</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="16")) echo "selected='selected'"; ?>>16</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="17")) echo "selected='selected'"; ?>>17</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="18")) echo "selected='selected'"; ?>>18</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="19")) echo "selected='selected'"; ?>>19</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="20")) echo "selected='selected'"; ?>>20</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="21")) echo "selected='selected'"; ?>>21</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="22")) echo "selected='selected'"; ?>>22</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="23")) echo "selected='selected'"; ?>>23</option>
                                    <option <?php if(isset($_COOKIE["alisSaati"]) and ($_COOKIE["alisSaati"]=="24")) echo "selected='selected'"; ?>>24</option>
                                </select>
                                
                                <select name="alisDakika" style="width:27px;">
                                    <option <?php if(isset($_COOKIE["alisDakika"]) and ($_COOKIE["alisDakika"]=="00")) echo "selected='selected'"; ?>>00</option>
                                    <option <?php if(isset($_COOKIE["alisDakika"]) and ($_COOKIE["alisDakika"]=="15")) echo "selected='selected'"; ?>>15</option>
                                    <option <?php if(isset($_COOKIE["alisDakika"]) and ($_COOKIE["alisDakika"]=="30")) echo "selected='selected'"; ?>>30</option>
                                    <option <?php if(isset($_COOKIE["alisDakika"]) and ($_COOKIE["alisDakika"]=="45")) echo "selected='selected'"; ?>>45</option>
                                </select>
                            </div>
                            
                            <div class="sol modulbaslik"><span><?php echo $dil["donusbilgileri"]; ?></span></div>
                            
                            <div class="sol temizle" style="margin-bottom:10px;">
                                <select name="donusYeri" style="width:217px" id="varisyeri">
                                   <option value="0" <?php if(!isset($_COOKIE["donusYeri"]) or ($_COOKIE["donusYeri"]=="0")) echo "selected='selected'"; ?>>
								   		<?php echo $dil["donusyeriseciniz"]; ?></option>
                                   <option value="1" <?php if(isset($_COOKIE["donusYeri"]) and ($_COOKIE["donusYeri"]=="1")) echo "selected='selected'"; ?>>
								   		<?php echo $dil["adanasakirpasahavalimani"]; ?></option>
                                   <option value="2" <?php if(isset($_COOKIE["donusYeri"]) and ($_COOKIE["donusYeri"]=="2")) echo "selected='selected'"; ?>>
								   		<?php echo $dil["ankaraesenbogahavalimani"]; ?></option>
                                   <option value="3" <?php if(isset($_COOKIE["donusYeri"]) and ($_COOKIE["donusYeri"]=="3")) echo "selected='selected'"; ?>>
                                   		Antakya (Hatay) <?php echo $dil["havalimani"]; ?></option>
                                   <option value="4" <?php if(isset($_COOKIE["donusYeri"]) and ($_COOKIE["donusYeri"]=="4")) echo "selected='selected'"; ?>>
                                   		Gaziantep <?php echo $dil["havalimani"]; ?></option>
                                   <option value="5" <?php if(isset($_COOKIE["donusYeri"]) and ($_COOKIE["donusYeri"]=="5")) echo "selected='selected'"; ?>>
								   		<?php echo $dil["kahramanmarashavalimani"]; ?></option>
                                   <option value="6" <?php if(isset($_COOKIE["donusYeri"]) and ($_COOKIE["donusYeri"]=="6")) echo "selected='selected'"; ?>>
                                   		Konya <?php echo $dil["havalimani"]; ?></option>
                                   <option value="7" <?php if(isset($_COOKIE["donusYeri"]) and ($_COOKIE["donusYeri"]=="7")) echo "selected='selected'"; ?>>
                                   		Mersin (<?php echo $dil["merkez"]; ?>)</option>
                                   <option value="8" <?php if(isset($_COOKIE["donusYeri"]) and ($_COOKIE["donusYeri"]=="8")) echo "selected='selected'"; ?>>
                                   		Samsun <?php echo $dil["havalimani"]; ?></option>
                                </select>
                            </div>
                            
                            <div class="sol temizle" style="margin-bottom: 10px;">
                                <input style="width: 114px; margin:0;" name="enddate" id="enddate" class="date-pick inputtarih" value="<?php if(isset($_COOKIE["enddate"])) echo $_COOKIE["enddate"]; else echo (string)(date('d')+1).(string)date('.m.Y'); ?>" />
                                
                                <select name="donusSaati" style="width:25px;">
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="01")) echo "selected='selected'"; ?>>01</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="02")) echo "selected='selected'"; ?>>02</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="03")) echo "selected='selected'"; ?>>03</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="04")) echo "selected='selected'"; ?>>04</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="05")) echo "selected='selected'"; ?>>05</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="06")) echo "selected='selected'"; ?>>06</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="07")) echo "selected='selected'"; ?>>07</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="08")) echo "selected='selected'"; ?>>08</option>
                                    <option <?php if(!isset($_COOKIE["donusSaati"]) or ($_COOKIE["donusSaati"]=="09")) echo "selected='selected'"; ?>>09</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="10")) echo "selected='selected'"; ?>>10</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="11")) echo "selected='selected'"; ?>>11</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="12")) echo "selected='selected'"; ?>>12</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="13")) echo "selected='selected'"; ?>>13</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="14")) echo "selected='selected'"; ?>>14</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="15")) echo "selected='selected'"; ?>>15</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="16")) echo "selected='selected'"; ?>>16</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="17")) echo "selected='selected'"; ?>>17</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="18")) echo "selected='selected'"; ?>>18</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="19")) echo "selected='selected'"; ?>>19</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="20")) echo "selected='selected'"; ?>>20</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="21")) echo "selected='selected'"; ?>>21</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="22")) echo "selected='selected'"; ?>>22</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="23")) echo "selected='selected'"; ?>>23</option>
                                    <option <?php if(isset($_COOKIE["donusSaati"]) and ($_COOKIE["donusSaati"]=="24")) echo "selected='selected'"; ?>>24</option>
                                </select>
                                
                                <select name="donusDakika" style="width:27px;">
                                    <option <?php if(isset($_COOKIE["donusDakika"]) and ($_COOKIE["donusDakika"]=="00")) echo "selected='selected'"; ?>>00</option>
                                    <option <?php if(isset($_COOKIE["donusDakika"]) and ($_COOKIE["donusDakika"]=="15")) echo "selected='selected'"; ?>>15</option>
                                    <option <?php if(isset($_COOKIE["donusDakika"]) and ($_COOKIE["donusDakika"]=="30")) echo "selected='selected'"; ?>>30</option>
                                    <option <?php if(isset($_COOKIE["donusDakika"]) and ($_COOKIE["donusDakika"]=="45")) echo "selected='selected'"; ?>>45</option>
                                </select>
                            </div>
                            
                            <div class="temizle sol" style="margin-bottom:10px;">
                                <select name="paraBirimi" style="width:77px">
                                    <option value="1" <?php if(isset($_COOKIE["paraBirimi"]) and ($_COOKIE["paraBirimi"]=="1")) echo "selected='selected'"; ?>>TL</option>
                                    <option value="2" <?php if(isset($_COOKIE["paraBirimi"]) and ($_COOKIE["paraBirimi"]=="2")) echo "selected='selected'"; ?>>&#8364;</option>
                                    <option value="3" <?php if(isset($_COOKIE["paraBirimi"]) and ($_COOKIE["paraBirimi"]=="3")) echo "selected='selected'"; ?>>$</option>
                                </select>
                                
                                <span class="birim"><?php echo $dil["parabirimi"]; ?></span>
                            </div>
                            
                            <div class="sol temizle"><input type="submit" class="fiyathesapla" value="<?php echo $dil["rezervasyonolustur"]; ?>" /></div>
                        </div>
                    </div>
                </div>
            </form>		
        </div>
		<div class="sol" style="width:680px;">
            <?php
				@include('login/inc/baglan.php');		
				$sorgu=mysql_query("select * from araclar");
				while($alanlar=mysql_fetch_array($sorgu)){
			?>
        	<div id="containerid" style="width:680px; background:none;">
                <div class="sol rent listeid5">
                    <div class="sol sayfa">
                        <div class="sol arac"><img src="img/arac/<?php echo $alanlar["URL"]; ?>" alt="" /></div>
                        <div class="sol bilgiler">
                            <div class="sol baslik" style="padding-left:27px;"><?php echo $alanlar["baslik"]; ?></div>
                            <div class="bozellik">
                                <div><img src="img/icon_kisi.png" /><span><?php echo $alanlar["koltuk"]; ?></span></div>
                                <div><img src="img/icon_bagaj.png" /><span><?php echo $alanlar["canta"]; ?></span></div>
                                <div><img src="img/icon_benzin.png" /><span>
                                	<?php
										if($alanlar["yakit"]==1)
                                    		echo $dil["yakitBenzin"];
										else if($alanlar["yakit"]==2)
											echo $dil["yakitDizel"];
										else if($alanlar["yakit"]==3)
											echo $dil["yakitLPG"];
									?>
                                </span></div>
                                <div class="bolast"><img src="img/icon_vites.png" /><span>
                                	<?php
										if($alanlar["vites"]==1)
                                    		echo $dil["videsDuz"];
										else if($alanlar["vites"]==2)
											echo $dil["videsOtomatik"];
										else if($alanlar["vites"]==3)
											echo $dil["videsTiptronik"];
									?>
                                </span></div>
                            </div>
                        </div>
                        <div class="sol fiyatlar">
                            <div class="fiyatinn">
                                <div class="fiyatsol">
                                    <span style="width:170px;">1-3  <?php echo $dil["gun"]; ?> <em>
										<?php
											if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
												echo $alanlar["F1_3"]." TL"; 
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($alanlar["F1_3"], 1, 2)." &#8364;"; 
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($alanlar["F1_3"], 1, 3)." $"; 
										?> 
                                    </em></span>
                                    <span style="width:170px;">4-7  <?php echo $dil["gun"]; ?> <em>
                                    	<?php
											if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
												echo $alanlar["F4_7"]." TL"; 
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($alanlar["F4_7"], 1, 2)." &#8364;"; 
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($alanlar["F4_7"], 1, 3)." $"; 
										?> 
                                    </em></span>
                                    <span style="width:170px;">8-15  <?php echo $dil["gun"]; ?> <em>
                                    	<?php
											if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
												echo $alanlar["F8_15"]." TL"; 
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($alanlar["F8_15"], 1, 2)." &#8364;"; 
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($alanlar["F8_15"], 1, 3)." $"; 
										?>
                                    </em></span>
                                    <span style="width:170px;">16-21  <?php echo $dil["gun"]; ?> <em>
                                    	<?php
											if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
												echo $alanlar["F16_21"]." TL"; 
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($alanlar["F16_21"], 1, 2)." &#8364;"; 
											else if($_COOKIE["paraBirimi"]==3)  	
												echo dovizGetir($alanlar["F16_21"], 1, 3)." $"; 
										?>
                                    </em></span>
                                    <span style="width:170px;">22-28  <?php echo $dil["gun"]; ?> <em>
                                    	<?php
											if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
												echo $alanlar["F22_28"]." TL"; 
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($alanlar["F22_28"], 1, 2)." &#8364;"; 
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($alanlar["F22_28"], 1, 3)." $"; 
										?>
                                    </em></span>
                                    <span style="width:170px;">29-99  <?php echo $dil["gun"]; ?> <em>
                                    	<?php
											if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
												echo $alanlar["F29_99"]." TL"; 
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($alanlar["F29_99"], 1, 2)." &#8364;"; 
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($alanlar["F29_99"], 1, 3)." $"; 
										?>
                                    </em></span>
                                </div>
                            <div class="fiyatsag">
                                <a href="index.php?rezervasyon=<?php echo $alanlar["id"]; ?>" class="fiyathesapla lowyeni"><?php echo $dil["rezervasyon"]; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?> 
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- içerik sonu -->
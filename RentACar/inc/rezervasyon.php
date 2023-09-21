<?php
	if(isset($_POST["gunlukTutar"]))
		include("inc/rezervasyonMailGonder.php")
?>
<!-- içerik -->
    <div class="sol" style="width:1000px">
		<div class="sol" style="width:320px; ">
            <form action="index.php?form1&rezerve=<?php echo $_GET["rezervasyon"]; ?>" method="post">
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
                                <input style="width: 114px; margin:0;" name="startdate" id="startdate" class="date-pick inputtarih" value="<?php if(isset($_COOKIE["startdate"])) echo $_COOKIE["startdate"]; else echo "19.03.2016"; ?>" />
                                
                                <select name="alisSaati" style="width:25px">
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
                                
                                <select name="donusSaati" style="width:25px">
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
        	<div id="containerid" style="width:680px; background:none;">
            	<div class="sol rent">
                	<?php
						@include('login/inc/baglan.php');		
						$sorgu=@mysql_query("select * from araclar where id=".$_GET["rezervasyon"]);
						$alanlar=@mysql_fetch_array($sorgu);
						
						$sorgu=@mysql_query("select * from ekstralar where id=1");
						$ekstralar=@mysql_fetch_array($sorgu);
					?>
					<form action="index.php?rezervasyon=<?php echo $_GET["rezervasyon"]; ?>" method="POST" id="formID">
						<div class="sol sayfa listeid5">
                			<div class="sol arac"><img src="img/arac/<?php echo $alanlar["URL"]; ?>" alt="<?php echo $alanlar["baslik"]; ?>" /></div>
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
                                        <span class="scenter kapla"><?php echo $dil["gunlukFiyati"]; ?><em class="single"><span id="gunlukFiyati" style="width:auto; color:#06F;">
                                        <?php
                                        	if($_COOKIE["gunSayisi"]>=1 and $_COOKIE["gunSayisi"]<=3)
											{
												if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
												{
													echo $alanlar["F1_3"]." TL";
													$gunlukFiyat = $alanlar["F1_3"];
												}
												else if($_COOKIE["paraBirimi"]==2)
												{
													echo dovizGetir($alanlar["F1_3"], 1, 2)." &#8364;"; 
													$gunlukFiyat = dovizGetir($alanlar["F1_3"], 1, 2);
												}
												else if($_COOKIE["paraBirimi"]==3)
												{
													echo dovizGetir($alanlar["F1_3"], 1, 3)." $"; 	 
													$gunlukFiyat =  dovizGetir($alanlar["F1_3"], 1, 3);
												}
											}
                                        	if($_COOKIE["gunSayisi"]>=4 and $_COOKIE["gunSayisi"]<=7)
											{
												if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
												{
													echo $alanlar["F4_7"]." TL";  
													$gunlukFiyat =  $alanlar["F4_7"];
												}
												else if($_COOKIE["paraBirimi"]==2)
												{
													echo dovizGetir($alanlar["F4_7"], 1, 2)." &#8364;";  
													$gunlukFiyat =  dovizGetir($alanlar["F4_7"], 1, 2);
												}
												else if($_COOKIE["paraBirimi"]==3)
												{
													echo dovizGetir($alanlar["F4_7"], 1, 3)." $";  
													$gunlukFiyat =  dovizGetir($alanlar["F4_7"], 1, 3);
												}	
											}
                                        	if($_COOKIE["gunSayisi"]>=8 and $_COOKIE["gunSayisi"]<=15)
											{
												if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
												{
													echo $alanlar["F8_15"]." TL";  
													$gunlukFiyat =  $alanlar["F8_15"];
												}
												else if($_COOKIE["paraBirimi"]==2)
												{
													echo dovizGetir($alanlar["F8_15"], 1, 2)." &#8364;";  
													$gunlukFiyat =  dovizGetir($alanlar["F8_15"], 1, 2);
												}
												else if($_COOKIE["paraBirimi"]==3)
												{
													echo dovizGetir($alanlar["F8_15"], 1, 3)." $"; 	 
													$gunlukFiyat =  dovizGetir($alanlar["F8_15"], 1, 3);
												}
											}
                                        	if($_COOKIE["gunSayisi"]>=16 and $_COOKIE["gunSayisi"]<=21)
											{
												if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
												{
													echo $alanlar["F16_21"]." TL";  
													$gunlukFiyat =  $alanlar["F16_21"];
												}
												else if($_COOKIE["paraBirimi"]==2)
												{
													echo dovizGetir($alanlar["F16_21"], 1, 2)." &#8364;";  
													$gunlukFiyat =  dovizGetir($alanlar["F16_21"], 1, 2);
												}
												else if($_COOKIE["paraBirimi"]==3)
												{
													echo dovizGetir($alanlar["F16_21"], 1, 3)." $";  
													$gunlukFiyat =  dovizGetir($alanlar["F16_21"], 1, 3);
												}	
											}
                                        	if($_COOKIE["gunSayisi"]>=22 and $_COOKIE["gunSayisi"]<=28)
											{
												if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
												{
													echo $alanlar["F22_28"]." TL";  
													$gunlukFiyat = $alanlar["F22_28"];
												}
												else if($_COOKIE["paraBirimi"]==2)
												{
													echo dovizGetir($alanlar["F22_28"], 1, 2)." &#8364;";  
													$gunlukFiyat =  dovizGetir($alanlar["F22_28"], 1, 2);
												}
												else if($_COOKIE["paraBirimi"]==3)
												{
													echo dovizGetir($alanlar["F22_28"], 1, 3)." $";  
													$gunlukFiyat =  dovizGetir($alanlar["F22_28"], 1, 3);
												}	
											}
                                        	if($_COOKIE["gunSayisi"]>=29)
											{
												if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
												{
													echo $alanlar["F29_99"]." TL";  
													$gunlukFiyat =  $alanlar["F29_99"];
												}
												else if($_COOKIE["paraBirimi"]==2)
												{
													echo dovizGetir($alanlar["F29_99"], 1, 2)." &#8364;";  
													$gunlukFiyat =  dovizGetir($alanlar["F29_99"], 1, 2);
												}
												else if($_COOKIE["paraBirimi"]==3)
												{
													echo dovizGetir($alanlar["F29_99"], 1, 3)." $"; 	 
													$gunlukFiyat =  dovizGetir($alanlar["F29_99"], 1, 3);
												}
											}
										?>
                                        </span>
                                        </em></span>
                                        <input name="gunlukTutar" type="hidden" value="<?php
											if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
												echo $gunlukFiyat." TL";  
											else if($_COOKIE["paraBirimi"]==2)
												echo $gunlukFiyat." &#8364;";
											else if($_COOKIE["paraBirimi"]==3)
												echo $gunlukFiyat." $";
										 ?>" />
                                        <span class="scenter kapla"><?php echo $dil["gunSayisi"]; ?><em class="single"><span id="gunSayisi" style="width:auto; color:#06F;"><?php echo (int)$_COOKIE["gunSayisi"]; ?></span> <?php echo $dil["gun"]; ?></em></span>
                                        <input name="gunSayisi" type="hidden" value="<?php echo (int)$_COOKIE["gunSayisi"]; ?>" />
                                        <span class="scenter kapla"><?php echo $dil["ekstraUcretler"]; ?><em class="single"><font class="babyseat">0.00</font>
                                        <?php
                                        	if($_COOKIE["paraBirimi"]==1)
												echo "TL";
											else if($_COOKIE["paraBirimi"]==2)
												echo "&#8364";
											else if($_COOKIE["paraBirimi"]==3)
												echo "$";
										?>
                                        </em></span>
                                        <span class="scenter kapla"><?php echo $dil["toplam"]; ?><em class="single"><font id="totalprice">100.00</font>
                                        <?php
                                        	if($_COOKIE["paraBirimi"]==1)
											{
												echo "TL";
												$paraBirimi = "TL";
											}
											else if($_COOKIE["paraBirimi"]==2)
											{
												echo "&#8364";
												$paraBirimi = "&#8364";
											}
											else if($_COOKIE["paraBirimi"]==3)
											{
												echo "$";
												$paraBirimi = "$";
											}
										?>
                                        </em></span>
                                        <input name="paraBirimi" type="hidden" value="<?php echo $paraBirimi; ?>" />
                                    </div>
                                </div>
                            </div>
						</div>

					    <div class="sayfa sol" style="width: 670px;">
							<div class="sol" style="width:330px; font-size:11px !important;">
				            	<div class="sol"><span class="title"><?php echo $dil["alisbilgileri"]; ?></span></div>
								<div class="temizle sol" style="height:25px; margin-top:20px; width:95%; border-bottom:1px solid #f2f2f2;">
                                	<span class="sol yazi2"><?php echo $dil["alisyerismall"]; ?></span>
                                    <span class="sol" style="color: #333333;">: 
                                    <?php
                                    	if($_COOKIE["alisYeri"]==1)
										{
											echo $dil["adanasakirpasahavalimani"];
											$alisYeri = "Adana Sakirpasa Havalimani";
										}
										else if($_COOKIE["alisYeri"]==2)
										{
											echo "Antakya (Hatay) ".$dil["havalimani"];
											$alisYeri = "Antakya (Hatay) Havalimani";
										}
										else if($_COOKIE["alisYeri"]==3)
										{
											echo "Samsun ".$dil["havalimani"];
											$alisYeri = "Samsun Havalimani";
										}
										else if($_COOKIE["alisYeri"]==4)
										{
											echo "Adana ".$dil["merkezofis"];
											$alisYeri = "Adana (Merkez Ofis)";
										}
									?>
                                    <input name="alisYeri" type="hidden" value="<?php echo $alisYeri; ?>" />
                                    </span>
                                </div>
								<div class="temizle sol" style="height:25px; width:95%; border-bottom:1px solid #f2f2f2;">
                                	<span class="sol yazi2"><?php echo $dil["alistarihi"]; ?></span>
                                    <span class="sol" style="color: #333333;">: <?php echo $_COOKIE["startdate"];?></span>
                                </div>
                                <input name="alisTarihi" type="hidden" value="<?php echo $_COOKIE["startdate"]; ?>" />
								<div class="temizle sol" style="height:25px; width:95%; border-bottom:1px solid #f2f2f2;">
                                	<span class="sol yazi2"><?php echo $dil["alissaati"]; ?></span>
                                    <span class="sol" style="color: #333333;">: <?php echo $_COOKIE["alisSaati"].":".$_COOKIE["alisDakika"];?></span>
                                </div>
                                <input name="alisZamani" type="hidden" value="<?php echo $_COOKIE["alisSaati"].":".$_COOKIE["alisDakika"]; ?>" />
							</div>
							<div class="sol" style="width:330px; font-size:11px !important;">
				            	<div class="sol"><span class="title"><?php echo $dil["donusbilgileri"]; ?></span></div>
								<div class="temizle sol" style="height:25px; margin-top:20px; width:95%; border-bottom:1px solid #f2f2f2;">
                                	<span class="sol yazi2"><?php echo $dil["donusyerismall"]; ?></span>
                                    <span class="sol" style="color: #333333;">:  
                                    <?php
                                    	if($_COOKIE["donusYeri"]==1)
										{
											echo $dil["adanasakirpasahavalimani"];
											$donusYeri = "Adana Sakirpasa Havalimani";
										}
										else if($_COOKIE["donusYeri"]==2)
										{
											echo $dil["ankaraesenbogahavalimani"];
											$donusYeri = "Ankara Esenboga Havalimani";
										}
										else if($_COOKIE["donusYeri"]==3)
										{
											echo "Antakya (Hatay) ".$dil["havalimani"];
											$donusYeri = "Antakya (Hatay) Havalimani";
										}
										else if($_COOKIE["donusYeri"]==4)
										{
											echo "Gaziantep ".$dil["havalimani"];
											$donusYeri = "Gaziantep Havalimani";
										}
										else if($_COOKIE["donusYeri"]==5)
										{
											echo $dil["kahramanmarashavalimani"];
											$donusYeri = "Kahramanmaras Havalimani";
										}
										else if($_COOKIE["donusYeri"]==6)
										{
											echo "Konya ".$dil["havalimani"];
											$donusYeri = "Konya Havalimani";
										}
										else if($_COOKIE["donusYeri"]==7)
										{
											echo "Mersin ".$dil["merkez"];
											$donusYeri = "Mersin (Merkez)";
										}
										else if($_COOKIE["donusYeri"]==8)
										{
											echo "Samsun ".$dil["havalimani"];
											$donusYeri = "Samsun Havalimani";
										}
									?>
                                    </span>
                               		<input name="donusYeri" type="hidden" value="<?php echo $donusYeri; ?>" />
                                </div>
								<div class="temizle sol" style="height:25px; width:95%; border-bottom:1px solid #f2f2f2;">
                                	<span class="sol yazi2"><?php echo $dil["donustarihi"]; ?></span>
                                    <span class="sol" style="color: #333333;">: <?php echo $_COOKIE["enddate"];?></span>
                                </div>
                               	<input name="donusTarihi" type="hidden" value="<?php echo $_COOKIE["enddate"]; ?>" />
								<div class="temizle sol" style="height:25px; width:95%; border-bottom:1px solid #f2f2f2;">
                                	<span class="sol yazi2"><?php echo $dil["donussaati"]; ?></span>
                                    <span class="sol" style="color: #333333;">: <?php echo $_COOKIE["donusSaati"].":".$_COOKIE["donusDakika"];?></span>
                                </div>
                               	<input name="donusZamani" type="hidden" value="<?php echo $_COOKIE["donusSaati"].":".$_COOKIE["donusDakika"]; ?>" />
							</div>						
                        </div>
                        <div class="sayfa sol" style="width:670px;">
							<div class="sol" style="margin-bottom: 10px;">
                            	<span class="title" style="width: 670px;"><?php echo $dil["ekstralar"]; ?></span></div>
                                    <div class="temizle sol secenekler" style="width: 660px;">
                                    <span style="display:block; font-size:14px; width:200px; padding:3px 0;" class="sol secenekisim"><?php echo $dil["bebekKoltugu"]; ?></span>
									<span style="display:block; font-size:14px; width:300px;" class="sol">
                                        <span class="sol" style="padding:3px 0; width:120px">
                                            <input type="radio" name="extra[1]" id="1" class="istiyorum" value="1" onchange="calculate();" onmouseup="$(this).trigger('check');$(this).attr('checked',true);calculate();" /> <?php echo $dil["istiyorum"]; ?>
                                        </span>
										<span class="sol" style="padding:3px 0; width:120px">
	                                		<input name="extra[1]" type="radio" id="1_" checked="checked" onclick="calculate();" class="istemiyorum" value="Bebek Koltugu" /> <?php echo $dil["istemiyorum"]; ?>
                                            <input name="extraValue[1]" type="hidden" value="Bebek Koltugu"  />
                                            <input name="price[1]" id="price1" value="
											<?php
												if($_COOKIE["paraBirimi"]==1)
													echo $ekstralar["E1"].".".$ekstralar["E1_1"];
												else if($_COOKIE["paraBirimi"]==2)
													echo dovizGetir($ekstralar["E1"].".".$ekstralar["E1_1"], 1, 2);
												else if($_COOKIE["paraBirimi"]==3)
													echo dovizGetir($ekstralar["E1"].".".$ekstralar["E1_1"], 1, 3);
											?>
                                            " type="hidden" />
										</span>
								</span>
								<span style="displttffay:block; font-size:14px; width:100px; padding:3px 0; color:#333" class="sol "><?php echo $dil["gunlukFiyati"]; ?></span>
									<span style="display:block; font-size:14px; width:10px; padding:3px 0" class="sol ">:</span>
									<span style="display:block; font-size:14px; width:50px; padding:3px 0; text-align:right; font-weight:bold;" class="sol ">
                                        <?php
                                        	if($_COOKIE["paraBirimi"]==1)
												echo $ekstralar["E1"].".".$ekstralar["E1_1"]." TL";
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($ekstralar["E1"].".".$ekstralar["E1_1"], 1, 2)." &#8364;";
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($ekstralar["E1"].".".$ekstralar["E1_1"], 1, 3)." $";
										?>
                                        </span>
							</div>
							<div class="temizle sol secenekler" style="width: 660px;">
                                <span style="display:block; font-size:14px; width:200px; padding:3px 0;" class="sol secenekisim"><?php echo $dil["navigasyon"]; ?></span>
                                <span style="display:block; font-size:14px; width:300px;" class="sol">
                                    <span class="sol" style="padding:3px 0; width:120px">
                                		<input type="radio" name="extra[2]" id="2" class="istiyorum" value="1" onchange="calculate();" onmouseup="$(this).trigger('check');$(this).attr('checked',true);calculate();" /> <?php echo $dil["istiyorum"]; ?>
                                    </span>
									<span class="sol" style="padding:3px 0; width:120px">
                                        <input name="extra[2]" type="radio" id="2_" checked="checked" onclick="calculate();" class="istemiyorum" value="Navigasyon" /> <?php echo $dil["istemiyorum"]; ?>																	                                		<input name="extraValue[2]" type="hidden" value="Navigasyon"  />
                                        <input name="price[2]" id="price2" value="
										<?php
                                        	if($_COOKIE["paraBirimi"]==1)
												echo $ekstralar["E2"].".".$ekstralar["E2_2"];
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($ekstralar["E2"].".".$ekstralar["E2_2"], 1, 2);
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($ekstralar["E2"].".".$ekstralar["E2_2"], 1, 3);
										?>
                                        " type="hidden" /> 
									</span>
								</span>
								<span style="display:block; font-size:14px; width:100px; padding:3px 0; color:#333" class="sol "><?php echo $dil["gunlukFiyati"]; ?></span>
								<span style="display:block; font-size:14px; width:10px; padding:3px 0" class="sol ">:</span>
								<span style="display:block; font-size:14px; width:50px; padding:3px 0; text-align:right; font-weight:bold;" class="sol ">
                                        <?php
                                        	if($_COOKIE["paraBirimi"]==1)
												echo $ekstralar["E2"].".".$ekstralar["E2_2"]." TL";
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($ekstralar["E2"].".".$ekstralar["E2_2"], 1, 2)." &#8364;";
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($ekstralar["E2"].".".$ekstralar["E2_2"], 1, 3)." $";
										?>
                                        </span>
							</div>
							<div class="temizle sol secenekler" style="width: 660px;">
								<span style="display:block; font-size:14px; width:200px; padding:3px 0;" class="sol secenekisim"><?php echo $dil["ozelSofor"]; ?></span>
								<span style="display:block; font-size:14px; width:300px;" class="sol">
									<span class="sol" style="padding:3px 0; width:120px">
                                		<input type="radio" name="extra[3]" id="3" class="istiyorum" value="1" onchange="calculate();" onmouseup="$(this).trigger('check');$(this).attr('checked',true);calculate();" /> <?php echo $dil["istiyorum"]; ?>								
                                    </span>
									<span class="sol" style="padding:3px 0; width:120px">
	                                	<input name="extra[3]" type="radio" id="3_" checked="checked" onclick="calculate();" class="istemiyorum" value="Ozel Sofor" /> <?php echo $dil["istemiyorum"]; ?>														                                		<input name="extraValue[3]" type="hidden" value="Ozel Sofor"  />
                                        <input name="price[3]" id="price3" value="
										<?php
                                        	if($_COOKIE["paraBirimi"]==1)
												echo $ekstralar["E3"].".".$ekstralar["E3_3"];
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($ekstralar["E3"].".".$ekstralar["E3_3"], 1, 2);
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($ekstralar["E3"].".".$ekstralar["E3_3"], 1, 3);
										?>
                                        " type="hidden" />
									</span>
								</span>
								<span style="display:block; font-size:14px; width:100px; padding:3px 0; color:#333" class="sol "><?php echo $dil["gunlukFiyati"]; ?></span>
								<span style="display:block; font-size:14px; width:10px; padding:3px 0" class="sol ">:</span>
								<span style="display:block; font-size:14px; width:50px; padding:3px 0; text-align:right; font-weight:bold;" class="sol ">
                                        <?php
                                        	if($_COOKIE["paraBirimi"]==1)
												echo $ekstralar["E3"].".".$ekstralar["E3_3"]." TL";
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($ekstralar["E3"].".".$ekstralar["E3_3"], 1, 2)." &#8364;";
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($ekstralar["E3"].".".$ekstralar["E3_3"], 1, 3)." $";
										?>
                                        </span>
							</div>
							<div class="temizle sol secenekler" style="width: 660px;">
								<span style="display:block; font-size:14px; width:200px; padding:3px 0;" class="sol secenekisim"><?php echo $dil["karZinciri"]; ?></span>
								<span style="display:block; font-size:14px; width:300px;" class="sol">
									<span class="sol" style="padding:3px 0; width:120px">
                                		<input type="radio" name="extra[4]" id="4" class="istiyorum" value="1" onchange="calculate();" onmouseup="$(this).trigger('check');$(this).attr('checked',true);calculate();" /> <?php echo $dil["istiyorum"]; ?>								
                                    </span>
									<span class="sol" style="padding:3px 0; width:120px">
	                                	<input name="extra[4]" type="radio" id="4_" checked="checked" onclick="calculate();" class="istemiyorum" value="Kar Zinciri" /> <?php echo $dil["istemiyorum"]; ?>																	                                		<input name="extraValue[4]" type="hidden" value="Kar Zinciri"  />
                                        <input name="price[4]" id="price4" value="
										<?php
                                        	if($_COOKIE["paraBirimi"]==1)
												echo $ekstralar["E4"].".".$ekstralar["E4_4"];
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($ekstralar["E4"].".".$ekstralar["E4_4"], 1, 2);
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($ekstralar["E4"].".".$ekstralar["E4_4"], 1, 3);
										?>
                                        " type="hidden" />
									</span>
								</span>
								<span style="display:block; font-size:14px; width:100px; padding:3px 0; color:#333" class="sol "><?php echo $dil["gunlukFiyati"]; ?></span>
								<span style="display:block; font-size:14px; width:10px; padding:3px 0" class="sol ">:</span>
								<span style="display:block; font-size:14px; width:50px; padding:3px 0; text-align:right; font-weight:bold;" class="sol ">
                                        <?php
                                        	if($_COOKIE["paraBirimi"]==1)
												echo $ekstralar["E4"].".".$ekstralar["E4_4"]." TL";
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($ekstralar["E4"].".".$ekstralar["E4_4"], 1, 2)." &#8364;";
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($ekstralar["E4"].".".$ekstralar["E4_4"], 1, 3)." $";
										?>
                                        </span>
							</div>
							<div class="temizle sol secenekler" style="width: 660px;">
								<span style="display:block; font-size:14px; width:200px; padding:3px 0;" class="sol secenekisim">
<?php echo $dil["ozelSoforLang"]; ?></span>
								<span style="display:block; font-size:14px; width:300px;" class="sol">
									<span class="sol" style="padding:3px 0; width:120px">
                                		<input type="radio" name="extra[5]" id="5" class="istiyorum" value="1" onchange="calculate();" onmouseup="$(this).trigger('check');$(this).attr('checked',true);calculate();" /> <?php echo $dil["istiyorum"]; ?>								
                                    </span>
									<span class="sol" style="padding:3px 0; width:120px">
	                                	<input name="extra[5]" type="radio" id="5_" checked="checked" onclick="calculate();" class="istemiyorum" value="Ozel Sofor (Ingilizce-Almanca)" /> <?php echo $dil["istemiyorum"]; ?>																	                                		<input name="extraValue[5]" type="hidden" value="Ozel Sofor (Ingilizce-Almanca)"  />
                                        <input name="price[5]" id="price5" value="
										<?php
                                        	if($_COOKIE["paraBirimi"]==1)
												echo $ekstralar["E5"].".".$ekstralar["E5_5"];
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($ekstralar["E5"].".".$ekstralar["E5_5"], 1, 2);
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($ekstralar["E5"].".".$ekstralar["E5_5"], 1, 3);
										?>
                                        " type="hidden" />
									</span>
								</span>
								<span style="display:block; font-size:14px; width:100px; padding:3px 0; color:#333" class="sol "><?php echo $dil["gunlukFiyati"]; ?></span>
								<span style="display:block; font-size:14px; width:10px; padding:3px 0" class="sol ">:</span>
								<span style="display:block; font-size:14px; width:50px; padding:3px 0; text-align:right; font-weight:bold;" class="sol ">
                                        <?php
                                        	if($_COOKIE["paraBirimi"]==1)
												echo $ekstralar["E5"].".".$ekstralar["E5_5"]." TL";
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($ekstralar["E5"].".".$ekstralar["E5_5"], 1, 2)." &#8364;";
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($ekstralar["E5"].".".$ekstralar["E5_5"], 1, 3)." $";
										?>
                                        </span>
							</div>
							<div class="temizle sol secenekler" style="width: 660px;">
								<span style="display:block; font-size:14px; width:200px; padding:3px 0;" class="sol secenekisim"><?php echo $dil["ekstraSigorta"]; ?></span>
								<span style="display:block; font-size:14px; width:300px;" class="sol">
									<span class="sol" style="padding:3px 0; width:120px">
                                		<input type="radio" name="extra[6]" id="6" class="istiyorum" value="1" onchange="calculate();" onmouseup="$(this).trigger('check');$(this).attr('checked',true);calculate();" /> <?php echo $dil["istiyorum"]; ?>								
                                    </span>
									<span class="sol" style="padding:3px 0; width:120px">
	                                	<input name="extra[6]" type="radio" id="6_" checked="checked" onclick="calculate();" class="istemiyorum" value="Ekstra Sigorta CDW" /> <?php echo $dil["istemiyorum"]; ?>																	                                		<input name="extraValue[6]" type="hidden" value="Ekstra Sigorta CDW"  />
                                        <input name="price[6]" id="price6" value="
										<?php
                                        	if($_COOKIE["paraBirimi"]==1)
												echo $ekstralar["E6"].".".$ekstralar["E6_6"];
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($ekstralar["E6"].".".$ekstralar["E6_6"], 1, 2);
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($ekstralar["E6"].".".$ekstralar["E6_6"], 1, 3);
										?>
                                        " type="hidden" />
									</span>
								</span>
								<span style="display:block; font-size:14px; width:100px; padding:3px 0; color:#333" class="sol "><?php echo $dil["gunlukFiyati"]; ?></span>
								<span style="display:block; font-size:14px; width:10px; padding:3px 0" class="sol ">:</span>
								<span style="display:block; font-size:14px; width:50px; padding:3px 0; text-align:right; font-weight:bold;" class="sol ">
                                        <?php
                                        	if($_COOKIE["paraBirimi"]==1)
												echo $ekstralar["E6"].".".$ekstralar["E6_6"]." TL";
											else if($_COOKIE["paraBirimi"]==2)
												echo dovizGetir($ekstralar["E6"].".".$ekstralar["E6_6"], 1, 2)." &#8364;";
											else if($_COOKIE["paraBirimi"]==3)
												echo dovizGetir($ekstralar["E6"].".".$ekstralar["E6_6"], 1, 3)." $";
										?>
                                        </span>
							</div>  
						</div>       
					    <div class="sayfa sol" style="width: 670px;">
				        	<div class="temizle sol"><span class="title" style="width: 670px;"><?php echo $dil["kisiselBilgileriniz"]; ?></span></div>
								<div class="sol temizle " style="width:300px; margin-top:0px;">
									<div class="temizle sol inputyazisi" style="margin-top:0px; width:320px;">
                                    	<span class="sol yazi2" style="padding-top:10px"><?php echo $dil["adSoyad"]; ?> (*)</span>
                                        <span class="sol">: 
                                        	<input type="text" name="adisoyadi" placeholder=" (*)" class="rezervasyoninput validate[required]" />
                                        </span>
                                    </div>
									<div class="temizle sol inputyazisi" style="margin-top:15px; width:320px;">
                                        <span class="sol yazi2" style="padding-top:10px"><?php echo $dil["eposta"]; ?> (*)</span>
                                        <span class="sol">: 
                                        	<input type="text" name="email" placeholder=" (*)" class="rezervasyoninput validate[required,custom[email]]" />
                                        </span>
                                    </div>
									<div class="temizle sol inputyazisi" style="margin-top:15px; width:320px;">
                                        <span class="sol yazi2" style="padding-top:10px"><?php echo $dil["havayoluSirketi"]; ?> (*)</span>
                                        <span class="sol">: 
                                            <input type="text" name="havayoluSirketi" placeholder=" (*)" class="rezervasyoninput" />
                                        </span>
                                    </div>
									<div class="temizle sol inputyazisi" style="margin-top:15px; width:320px;">
                                        <span class="sol yazi2" style="padding-top:10px"><?php echo $dil["ucusNo"]; ?> (*)</span>
                                        <span class="sol">: 
                                            <input type="text" name="ucusno" placeholder=" (*)" class="rezervasyoninput" />
                                        </span>
                                    </div>
								</div>
								<div class="sol" style="width:310px; margin:0 0 0 8px; margin-left:40px;">
									<div class="temizle sol inputyazisi" style="margin-top:0px; width:320px;">
                                        <span class="sol yazi2" style="padding-top:10px"><?php echo $dil["tel"]; ?> (*)</span>
                                        <span class="sol">: 
                                            <input type="text" name="telefon" placeholder=" (*)" class="rezervasyoninput" />
                                        </span>
                                    </div>
									<div class="temizle sol inputyazisi" style="margin-top:15px; width:320px;">
                                        <span class="sol yazi2" style="padding-top:10px"><?php echo $dil["ulke"]; ?></span>
                                        <span class="sol">: 
                                            <input type="text" name="ulke" class="rezervasyoninput validate[required,custom[phone]]" />
                                        </span>
                                    </div>
									<div class="temizle sol inputyazisi" style="margin-top:15px; width:320px;">
                                        <span class="sol yazi2" style="padding-top:10px"><?php echo $dil["kalkisHavalimani"]; ?></span>
                                        <span class="sol">: 
                                            <input type="text" name="kalkisHavalimani" class="rezervasyoninput" />
                                        </span>
                                    </div>
								</div>
                                
                                <div class="sol" style="width:680px; height:120px;">
									<div class="temizle sol inputyazisi" style="margin-top:0px; width:680px;">
                                        <span class="sol yazi2" style="padding-top:20px; width:114px;"><?php echo $dil["ozelIstekleriniz"]; ?>
                                        <span style="float: right;">:</span></span>
                                        <span class="sol" style="width: 560px;"> 
                                            <textarea name="ozelistek" class="textar" style="width: 514px; margin-left:16px; margin-top:20px;"></textarea>
                                        </span>
                                    </div>
								</div>
                                
                                <div class="sol" style="width:680px;">
									<div class="temizle sol inputyazisi" style="margin-top:0px; width:680px;">
                                        <span class="sol" style="padding-top:2px; color:#333333; font-size:11px; padding-left:128px;">
                                            <b><?php echo $dil["odemeTipi"]; ?></b> : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="odeme" value="0" checked="checked" /> <?php echo $dil["nakit"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="odeme" value="1" /> <?php echo $dil["krediKarti"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="odeme" value="2" /> <?php echo $dil["havaleEFT"]; ?>                                        
                                        </span>
                                    </div>
								</div>
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
	<script type="text/javascript">
		$(document).ready(function(){
		$(document).click(function(){
		var toplam=$('#totalprice').text();
		var ekstra=$('.babyseat').text();
		$('#toplaminput').val(toplam);
		$('#ekstrainput').val(ekstra);
		});
		var gunluk = $('#gunlukFiyati').text();
		
		$('.secenekler .istiyorum').click(function(){
		var veri=$(this).parent().parent().parent().html();
		var deger=$(veri).html();
		var seci=$('.secilenler').val();
		var seci=seci.replace('<br /><br />','');
		var news=seci.replace(deger,'');
		var yeni=news+deger+'<br />';
		$('.secilenler').val(yeni);
		});
		
		$('.secenekler .istemiyorum').click(function(){
		var veri=$(this).parent().parent().parent().html();
		var deger=$(veri).html();
		var seci=$('.secilenler').val();
		var seci=seci.replace('<br /><br />','');
		var news=seci.replace(deger,'');
		var yeni=news;
		$('.secilenler').val(yeni);
		});
		
		});
		
		if(document.getElementsByName("b").length>0)
			var sayilar = klavyeOlustur(document.getElementsByName("b"));
			function nexte(e){ if(tab == 4 && $(e).val().length == 4 ) $('#klavye').fadeOut(); if($(e).val().length >= 4 ) $(e).next().focus();
		}
		function calculate(){
			var extras_price = 0;	
			var car_price = p($('#p2').is(':checked')?'0':'0');	
			var local_price = p('');	
			$("input[onchange]").each(function(i){	
				if (this.checked)	extras_price = extras_price + (p($('#price'+this.id).val())*p($('#gunSayisi').text()));	
			});	
			$('#price').html(p($('#p2').is(':checked')?'0':'0').toFixed(2));	
			$('.babyseat').html(extras_price.toFixed(2));
			$('#totalprice').html((local_price+extras_price+car_price+(<?php echo $gunlukFiyat; ?>*p($('#gunSayisi').text()))).toFixed(2));
			
			$('#toplaminput').val(extras_price);
		}
		function p(val){	
				var p = parseFloat(val);	
				return isNaN(p)?0:p;
		}
		function updown(id,a){	
			if(a=='u'){	if(p($('#unit'+id).val())<20){	
				$('#'+id).trigger('check');	
				$('#'+id).attr('checked',true).parent().prev().trigger('click');	
				$('#unit'+id).val(p($('#unit'+id).val())+1);}}	
					if(a=='d'){	if(p($('#unit'+id).val())>0){	
						$('#unit'+id).val(p($('#unit'+id).val())-1);
					}}	
					if(p($('#unit'+id).val())==0){	
						$('#'+id+'_').trigger('check').parent().prev().trigger('click');	
						$('#'+id+'_').attr('checked',true);}	calculate();
		}	
		calculate();	
    </script>
	<!-- içerik sonu -->
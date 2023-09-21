</div>
    <div id="newhome">
        <div id="homeust">
            <div id="newslider">
                <div class="banner" id="bdiv0" style="background-image: url(img/banner/banner4.jpg); display: none;">&nbsp;</div>
                <div class="banner" id="bdiv1" style="background-image: url(img/banner/banner1.jpg); display: none;">&nbsp;</div>
                <div class="banner" id="bdiv2" style="background-image: url(img/banner/banner2.jpg); display: none;">&nbsp;</div>
                <div class="banner" id="bdiv3" style="background-image: url(img/banner/banner3.jpg);">&nbsp;</div>
                <script type="text/javascript">triggerslider();</script>        
            </div>
            
            <div id="newrezervasyon">
                <div id="rezervasyoninner">
                    <div id="homerez">
                        <div id="homerezinner">
                            <form method="POST" action="index.php?form1" onsubmit="return fiyatformchk();">
                                <div class="title home"><?php echo $dil["onlinearackiralama"]; ?></div>
                                <span class="titz home"><?php echo $dil["rezervasyonbilgimetni"]; ?></span>
                                
                                <div class="sol alt" style="width:260px; font-size:11px;">
                                    <div class="temizle sol" style="margin:0 0 15px 0">
                                        <span class="titz"><?php echo $dil["alisyeri"]; ?></span>
                                        <select name="alisYeri" style="width:219px" id="alisyeri" onchange="setsubs(this, 'a1');">
                                             <option value="0" selected="selected"><?php echo $dil["alisyeriseciniz"]; ?></option>
                                             <option value="1"><?php echo $dil["adanasakirpasahavalimani"]; ?></option>
                                             <option value="2">Antakya (Hatay) <?php echo $dil["havalimani"]; ?></option>
                                             <option value="3">Samsun <?php echo $dil["havalimani"]; ?></option>
                                             <option value="4">Adana (<?php echo $dil["merkezofis"]; ?>)</option>
                                        </select>
                                    </div>
                                    <div class="temizle sol" style="margin:0 0 15px 0; width:263px;">
                                        <span class="titz"><?php echo $dil["alistarihsaat"]; ?></span>
                                        <input name="startdate" id="startdate" class="date-pick inputtarih" value="<?php if(isset($_COOKIE["startdate"])) echo $_COOKIE["startdate"]; else echo (string)date('d.m.Y'); ?>" style="width:112px; margin:0;" />
                                        
                                        <select name="alisSaati" style="width:30px; margin-top:-2px;">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option selected="selected">09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                        </select>
                                        
                                        <select name="alisDakika" style="width:25px; margin-top:-2px;">
                                            <option selected="selected">00</option>
                                            <option>15</option>
                                            <option>30</option>
                                            <option>45</option>
                                        </select>
                                    </div>
                                    
                                    <div class="temizle sol" style="margin-bottom:10px; width:263px;">
                                        <select name="paraBirimi" style="width:77px">
                                            <option value="1">TL</option>
                                            <option value="2">&#8364;</option>
                                            <option value="3">$</option>
                                        </select>
                                                
                                        <span class="birim"><?php echo $dil["parabirimi"]; ?></span>
                                     </div>
                                </div>
                                <div class="sol alt" style="padding-right: 0px; margin-right:0px; margin-left:10px; width:260px; font-size:11px;">
                                    <div class="temizle sol" style="margin:0 0 15px 0">
                                        <span class="titz"><?php echo $dil["donusyeri"]; ?></span>
                                        <select name="donusYeri" style="width:219px" id="varisyeri">
                                            <option value="0"><?php echo $dil["donusyeriseciniz"]; ?></option>
                                            <option value="1"><?php echo $dil["adanasakirpasahavalimani"]; ?></option>
                                            <option value="2"><?php echo $dil["ankaraesenbogahavalimani"]; ?></option>
                                            <option value="3">Antakya (Hatay) <?php echo $dil["havalimani"]; ?></option>
                                            <option value="4">Gaziantep <?php echo $dil["havalimani"]; ?></option>
                                            <option value="5"><?php echo $dil["kahramanmarashavalimani"]; ?></option>
                                            <option value="6">Konya <?php echo $dil["havalimani"]; ?></option>
                                            <option value="7">Mersin (<?php echo $dil["merkez"]; ?>)</option>
                                            <option value="8">Samsun <?php echo $dil["havalimani"]; ?></option>
                                        </select>
                                    </div>
                                    <div class="temizle sol" style="margin:0 0 15px 0; width:263px; margin-bottom:20px;">
                                        <span class="titz"><?php echo $dil["donustarihsaat"]; ?></span>
                                        <input name="enddate" id="enddate" class="date-pick inputtarih" value="<?php if(isset($_COOKIE["enddate"])) echo $_COOKIE["enddate"]; else echo (string)(date('d')+1).(string)date('.m.Y'); ?>" style="width:112px; margin:0;" />
                                        
                                        <select name="donusSaati" style="width:30px; margin-top:-2px;">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option selected="selected">09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                        </select>
                                        
                                        <select name="donusDakika" style="width:25px; margin-top:-2px;">
                                            <option>00</option>
                                            <option>15</option>
                                            <option>30</option>
                                            <option>45</option>
                                        </select>
                                    </div>
                    
                                    <div class="temizle sol" style="margin:0px;">
                                        <input type="submit" class="fiyathesapla" value="<?php echo $dil["rezervasyonolustur"]; ?>" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="homelogos">
                        <div id="logosinner">
                            <span><img src="img/home/marka5.png" alt="Pevgeot"></span>
                            <span><img src="img/home/marka2.png" alt="Fiat"></span>
                            <span><img src="img/home/marka3.png" alt="Hyundai"></span>
                            <span><img src="img/home/marka4.png" alt="Wolkswagen"></span>
                            <span><img src="img/home/marka1.png" alt="Renault"></span>
                            <span><img src="img/home/marka6.png" alt="Dacia"></span>
                            <span><img src="img/home/marka7.png" alt="Isuzu"></span>
                            <span><img src="img/home/marka8.png" alt="Nissan"></span>
                            <span><img src="img/home/marka9.png" alt="Mitsubishi"></span>
                            <span><img src="img/home/marka10.png" alt="Citroen"></span>
                        </div>
                        <script type="text/javascript">triggermarquee();</script>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="onecikanhome">
            <div class="title home full">
                &raquo; <?php echo $dil["filomuztolower"]; ?>
                <div class="oneciksagsol">
                    <a href="javascript:void(0);" onclick="homeslidesol();" class="osol">&nbsp;</a>
                    <a href="javascript:void(0);" onclick="homeslidesag();" class="osag">&nbsp;</a>
                </div>
            </div>
            
            <div id="onecikanvitrin">
                <div id="vitrincontainer">
                <?php
				@include('login/inc/baglan.php');		
				$sorgu=mysql_query("select * from araclar");
				$sayac=0;
				while($alanlar=mysql_fetch_array($sorgu)){
			?>
                    <div id="v<?php echo $sayac; ?>" class="vdiv">
                    	 <div class="vdivimg hidden visible animated flipInX"><img src="img/arac/<?php echo $alanlar["URL"]; ?>" alt="<?php echo $alanlar["baslik"]; ?>"></div>
                    	 <div class="vdivgo">
                         	<h1 class="vdivtitle"><?php echo $alanlar["baslik"]; ?></h1>
                         	<h2 class="vdivgunluk">
								<?php
									if(!isset($_COOKIE["paraBirimi"]) || $_COOKIE["paraBirimi"]==1)
										echo $alanlar["F1_3"]." TL"; 
									else if($_COOKIE["paraBirimi"]==2)
										echo dovizGetir($alanlar["F1_3"], 1, 2)." &#8364;"; 
									else if($_COOKIE["paraBirimi"]==3)
										echo dovizGetir($alanlar["F1_3"], 1, 3)." $"; 
								?>/<?php echo $dil["gunluk"]; ?></h2>
                                <div class="clear"></div>
                            	<a href="index.php?rezervasyon=<?php echo $alanlar["id"]; ?>" class="fiyathesapla home" style="padding:7px; padding-left:40px; padding-right:40px;"><?php echo $dil["rezervasyon"]; ?></a>
                         </div>
                	</div>
                <?php $sayac++;} ?>
                </div>
                <script type="text/javascript">triggerhomeslide();</script>
            </div>
        </div>
        
        <div id="hometanitim">
            <div class="hidden visible animated zoomIn" id="tanitimin">
                <div>
                    <img src="img/home/tanitim1.png" alt="Hızlı Rezervasyon">
                    <h1><?php echo $dil["hizlirezervasyon"]; ?></h1>
                    <h2><?php echo $dil["hizlirezervasyonbilgi"]; ?></h2>
                </div>
                <div>
                    <img src="img/home/tanitim2.png" alt="Merkezi Yerler">
                    <h1><?php echo $dil["merkeziyerler"]; ?></h1>
                    <h2><?php echo $dil["merkeziyerlerbilgi"]; ?></h2>
                </div>
                <div>
                    <img src="img/home/tanitim3.png" alt="Ekonomik Fiyatlar">
                    <h1><?php echo $dil["ekonomikfiyatlar"]; ?></h1>
                    <h2><?php echo $dil["ekonomikfiyatlarbilgi"]; ?></h2>
                </div>
                <div>
                    <img src="img/home/tanitim4.png" alt="Canlı Destek">
                    <h1><?php echo $dil["724canlidestek"]; ?></h1>
                    <h2><?php echo $dil["724bilgi"]; ?></h2>
                </div>
            </div>
        </div>
        
        <div id="homehaber">
            <div class="title home full">&raquo; <?php echo $dil["bazihizmetlerimizvekampanyalar"]; ?></div>
            <div id="habercontainer">
            <?php
				if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
					@include('login/inc/baglanAR.php');
				else
					@include('login/inc/baglan.php');
							
				$sorgu=mysql_query("select * from sayfalar where kontrol='0'");
				while($alanlar=mysql_fetch_array($sorgu)){
			?>
                <div class="haberdiv hidden visible animated fadeIn">
                    <div class="haberresim">
                        <a href="index.php?hizmet=<?php echo $alanlar["id"]; ?>"><img src="img/home/hizmetler/<?php echo $alanlar["URL"]; ?>" alt="Oto Kiralama Hizmetlerimiz"></a>
                    </div>
                    <div class="haberdesc">
                        <h1><a href="index.php?hizmet=<?php echo $alanlar["id"]; ?>">
                        	<?php
                            	if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
									echo $alanlar["BaslikAR"]; 
								else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "en")
									echo $alanlar["BaslikEN"]; 
								else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "tr")
									echo $alanlar["BaslikTR"]; 
							?>
                        </a></h1>
                        <h2><p><span style="font-size: small;">
                        	<?php
                            	if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
									echo substr($alanlar["IcerikAR"],0,200)."..."; 
								else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "en")
									echo substr($alanlar["IcerikEN"],0,150)."..."; 
								else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "tr")
									echo substr($alanlar["IcerikTR"],0,150)."..."; 
							?>
                        </span></p></h2>
                        <div class="hdevam"><a href="index.php?hizmet=<?php echo $alanlar["id"]; ?>" class="devamia"><?php echo $dil["devaminioku"]; ?></a></div>
                    </div>
                </div>
                <?php } ?>
                
            </div>
        </div>
    </div>
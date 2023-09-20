<style>
	section#ana { 
		background-color: #00c0e4;
		padding:50px;
		height:auto;
		min-height:573px;
	}
</style>
<section id="ana">
  <div style="width:1250px;">
      <h2 style="font-size:26px;font-family:'Comic Sans MS', cursive;float:left;color:#e6567a; text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;">ÇOCUKLARA PROGRAMLAMA ÖÐRETEN ARAÇLAR</h2>
      
      <table border="0" style="width:550px;float:right;margin-top:-5px;">
        <tr>
        	<td align="right" style="padding-right:116px;">
            	<?php if(isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturum"])) { ?>
                  <h5 style="color:#FFF;text-shadow:#333 0px 0px 2px;">
                      <strong>Hoþ geldin, <?php echo $_SESSION["$_SERVER[SERVER_NAME]uyeOturum"]; ?></strong>
                  </h5>
                <?php } ?>
            </td>
            <td style="width:40px;">
                <a href="https://www.facebook.com/pages/Gelece%C4%9Fin-Programc%C4%B1lar%C4%B1/923777290999513?fref=ts" target="_blank" style="border:0;">
                    <div id="facebook" style="width:35px; height:35px;background:url(img/Face1.png)" onmouseover="Goster('facebook', 'Face2')" onmouseout="Gizle('facebook', 'Face1')"></div>
                </a>
            </td>
            <td style="width:40px;">
                <a href="https://twitter.com/geleceginPrg" target="_blank" style="border:0;">
                    <div id="twitter" style="width:35px; height:35px;background:url(img/Twit1.png)" onmouseover="Goster('twitter', 'Twit2')" onmouseout="Gizle('twitter', 'Twit1')"></div>
                </a>
            </td>
            <td style="width:40px;">
                <a href="https://www.youtube.com/channel/UC5NR5VLLt0oYFpMDI9waRng" target="_blank" style="border:0;">
                    <div id="youtube" style="width:35px; height:35px;background:url(img/You1.png)" onmouseover="Goster('youtube', 'You2')" onmouseout="Gizle('youtube', 'You1')"></div>
                </a>
            </td>
            <td style="width:35px;">
                <a href="mailto:bilgi@geleceginprogramcilari.com" style="border:0;">
                    <div id="mail" style="width:35px; height:35px;background:url(img/Mail1.png)" onmouseover="Goster('mail', 'Mail2')" onmouseout="Gizle('mail', 'Mail1')"></div>
                </a>
            </td>
        </tr>
    </table>
    <div class="clear"></div>
  </div>
  <div style="width:1250px;">
  	<div style="width:630px;float:left;">
    	<div id="slider">
	    	<?php  include("inc/anasayfa/slider.php"); ?>
        </div>
        <div style="margin-top:20px;">
        	<div id="hepsi">
                <div id="duyuru">
                    <li style="color:#e6567a;font-weight:bold;margin-top:-10px;">Çocuklara Programlama Öðreten Araçlar Hakkýnda</li>
                </div>
                <div id="caption" style="color:#FFF;padding:7px;">
                <?php  
					@include('login/inc/baglan.php'); 
					$sorgu=mysql_query("select * from karsilama where id=1");
					$alanlar=mysql_fetch_array($sorgu);
					echo $alanlar["anasayfa"];
				?>
                </div>
            </div>
        </div>
    </div><!-- sol bölüm sonu -->
    <div style="width:300px;float:left;margin-left:50px;">
			<?php  include("inc/anasayfa/sonEklenenler.php"); ?>
    </div><!-- sag bölüm sonu -->
    <div class="baglantilar">
    	<div class="superr" title="SonEklenenler" style="margin-left:0; width:220px;margin-bottom:4px;">
    		<div class="baslik">Duyurular</div>
   		</div>
        <?php include("inc/anasayfa/duyurular.php"); ?>
    </div><!-- Baðlantýlar bölüm sonu -->
    <div style="clear:both;"></div>
  </div>
</section>
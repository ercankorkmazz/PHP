<?php 
	if(isset($_POST["Kadi"]))
		@include("inc/ayarlar/guncelle.php"); // Kullan�c� bilsisi g�nceller
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from uyeler where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
	<form method="post" action="uye.php?#page3" target="_self">
    	<div class="menuAdi">
        	<div class="ad">
            	<h3 style="float:left;">Kullan�c� Bilgileri</h3>
                <input type="submit" value="G�ncelle" style="float:left; margin-left:250px;" class="button"/>
                <div class="clear"></div>
            </div><!-- ��erik Sa� Ba�l�k Sol son -->
            <div class="clear"></div>
        </div><!-- Men� Ba�l��� son -->
        <table width="100%" border="0" cellspacing="5" cellpadding="7">
        	<tr>
                <td colspan="2" style="background:none;" height="0"></td>
            </tr>
            <tr>
            	<td style="width:120px; text-align:right;vertical-align:middle;"><strong>Kullan�c� Ad�:</strong></td>
                <td style="width:350px;"><input type="text" name="Kadi" value="<?php echo $alanlar["Kadi"]; ?>" style="width:300px;text-align:center; font-weight:bold;"> *</td>
                <td rowspan="4" style="vertical-align:top;">
                	<?php if(!empty($_COOKIE["bildirim"])){?>
                    <center>
                        <div class="bildirim" align="center">
                            <h3 style="margin:10px;">
                                <?php echo $_COOKIE["bildirim"]; ?>
                            </h3>
                        </div>
                    </center>
                    <?php }?>
                </td>
            </tr>
            <tr>
            	<td style="width:120px; text-align:right;vertical-align:middle;"><strong>Mevcut �ifre:</strong></td>
                <td><input type="password" name="mSifre" style="width:300px;text-align:center;"> *</td>
            </tr>
            <tr>
            	<td style="width:120px; text-align:right;vertical-align:middle;"><strong>Yeni �ifre:</strong></td>
                <td><input type="password" name="ySifre" style="width:300px;text-align:center;"> *</td>
            </tr>
            <tr>
            	<td style="width:120px; text-align:right;vertical-align:middle;"><strong>Yeni �ifre Tekrar:</strong></td>
                <td><input type="password" name="tSifre" style="width:300px;text-align:center;"> *</td>
            </tr>
            <tr>
                <td colspan="3" style="padding-top:40px;"><h3>&Uuml;yelik Bilgileri</h3></td>
            </tr>
            <tr>
                <td style="width:120px; text-align:right;vertical-align:middle;"><strong>&Ouml;�renci Ad�:</strong></td>
                <td><input type="text" name="Ad" style="width:300px;text-align:center;" value="<?php echo $alanlar["Ad"]; ?>" /> *</td>
                <td></td>
            </tr>
            <tr>
                <td style="width:120px; text-align:right;vertical-align:middle;"><strong>&Ouml;�renci Soyad�:</strong></td>
                <td><input type="text" name="Soyad" style="width:300px;text-align:center;" value="<?php echo $alanlar["Soyad"]; ?>" /> *</td>
                <td></td>
            </tr>
            <tr>
                <td style="width:120px; text-align:right;vertical-align:middle;"><strong>Adres:</strong></td>
                <td><input type="text" name="Adres" style="width:300px;text-align:center;" value="<?php echo $alanlar["Adres"]; ?>" /> *</td>
                <td></td>
            </tr>
            <tr>
                <td style="width:120px; text-align:right;vertical-align:middle;"><strong>Veli Ad�:</strong></td>
                <td><input type="text" name="VeliAdi" style="width:300px;text-align:center;" value="<?php echo $alanlar["VeliAdi"]; ?>" /> *</td>
                <td></td>
            </tr>
            <tr>
                <td style="width:120px; text-align:right;vertical-align:middle;"><strong>Veli Telefon No:</strong></td>
                <td><input type="text" name="VeliTel" style="width:300px;text-align:center;" value="<?php echo $alanlar["VeliTel"]; ?>" /> *</td>
                <td></td>
            </tr>
            <tr>
                <td style="width:120px; text-align:right;vertical-align:middle;"><strong>Veli Mail Adresi:</strong></td>
                <td><input type="text" name="VeliEPosta" style="width:300px;text-align:center;" value="<?php echo $alanlar["VeliEPosta"]; ?>" /> *</td>
                <td></td>
            </tr>
            <tr>
                <td style="width:120px; text-align:right;vertical-align:middle;"><strong>G&uuml;nl&uuml;k Kalori:</strong></td>
                <td><input type="text" name="GunlukKalori" style="width:300px;text-align:center;" value="<?php echo $alanlar["GunlukKalori"]; ?>" /> *</td>
                <td></td>
            </tr>
        </table>
</form>
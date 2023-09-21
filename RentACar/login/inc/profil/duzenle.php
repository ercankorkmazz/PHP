<?php 	
	if(isset($_GET["ayarlar"]) and isset($_POST["kadi"]))
		include("inc/profil/guncelle/kadi.php");
		
	if(isset($_GET["ayarlar"]) and isset($_POST["mSifre"]))
		include("inc/profil/guncelle/sifre.php");
	
	if(isset($_GET["ayarlar"]) and isset($_POST["eposta"]))
		include("inc/profil/guncelle/eposta.php");
		
	include("inc/baglan.php");	
	$sql=@mysql_query("select * from kullanici where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"]);
	$alanlar=@mysql_fetch_array($sql);
?>
    <div class="sol rent" style="width: 980px;">
    	<div class="sol sayfa" style="width:996px; height:38px; margin-bottom:10px; padding:2px;">
        	<div class="sol" style="padding-top:7px;"><span class="title">
            	<?php echo mb_convert_encoding("Kullanýcý Bilgileri", "UTF-8", "ISO-8859-9"); ?>
            </span></div>
		</div>
        
        <div class="sol sayfa" style="width:980px;color:#333333; font-size:11px;">
            <table border="0" style="margin-left:220px;">
                <form method="post" target="_self" action="index.php?ayarlar">
                    <tr>
                        <td style="width:110px;">
                            <h4 style="margin:0;">Kullanici Adi</h4>
                        </td>
                        <td>
                            <input type="text" name="kadi" value="<?php echo $alanlar['kadi'] ?>" class="txtBaslik" style="width:170px;font-weight:bold;text-align:center;"/>
                        </td>
                        <td>
                            <input type="submit" value="Guncelle" id="btn" style="width:100px; margin:0;padding:6px;" />
                        </td>
                    </tr>
                </form>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <form method="post" target="_self" action="index.php?ayarlar">
                    <tr>
                        <td>
                            <h4 style="margin:0;">Mevcut Sifre</h4>
                        </td>
                        <td>
                            <input type="password" name="mSifre" class="txtBaslik" style="width:170px;font-weight:bold;text-align:center;"/>
                        </td>
                        <td>
                            <input type="submit" value="Guncelle" id="btn"  style="width:100px;margin:0;padding:6px;"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 style="margin:0;">Yeni Sifre</h4>
                        </td>
                        <td>
                            <input type="password" name="ySifre" class="txtBaslik" style="width:170px;font-weight:bold;text-align:center;"/>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <h4 style="margin:0;">Sifre Tekarari</h4>
                        </td>
                        <td>
                            <input type="password" name="tSifre" class="txtBaslik" style="width:170px;font-weight:bold;text-align:center;"/>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                </form>
            </table>
      	</div>
        
    	<div class="sol sayfa" style="width:996px; height:38px; margin-bottom:10px; padding:2px;">
        	<div class="sol" style="padding-top:7px;"><span class="title">
            	<?php echo mb_convert_encoding("GMail Bilgileri", "UTF-8", "ISO-8859-9"); ?>
            </span></div>
		</div>
        <div class="sol sayfa" style="width:980px;color:#333333; font-size:11px;">
        <form method="post" target="_self" action="index.php?ayarlar">
            <table border="0" width="100%">
                <tr>
                    <td>
                        <input type="text" name="eposta" style="width:860px; font-weight:bold; text-align:center;"
                            placeholder="<?php echo @mb_convert_encoding("GMail adresinizi yazýnýz.", "UTF-8", "ISO-8859-9"); ?>" value="<?php echo $alanlar['eposta'] ?>" class="txtBaslik">
                    </td>
                    <td>
                        <input type="submit" value="Guncelle" id="btn" style="width:100px; margin:0;padding:6px;"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="gmailSifresi" style="width:860px; font-weight:bold; text-align:center;"
                            placeholder="<?php echo @mb_convert_encoding("Güncel GMail þifrenizi yazýnýz.", "UTF-8", "ISO-8859-9"); ?>" value="<?php echo $alanlar['gmailSifresi'] ?>" class="txtBaslik">
                    </td>
                    <td>
                        &nbsp;
                    </td>
                </tr>
            </table>
        </form>
        </div>
	</div>
</div>
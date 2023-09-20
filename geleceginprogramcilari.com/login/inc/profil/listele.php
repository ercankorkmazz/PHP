<?php 	
	if(isset($_GET["ayarlar"]) and isset($_POST["kadi"]))
		include("inc/profil/guncelle/kadi.php");
		
	if(isset($_GET["ayarlar"]) and isset($_POST["mSifre"]))
		include("inc/profil/guncelle/sifre.php");
	
	if(isset($_GET["ayarlar"]) and isset($_POST["eposta"]))
		include("inc/profil/guncelle/eposta.php");
		
	include("inc/baglan.php");	
	$sql=@mysql_query("select * from kullanicilar where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"]);
	$alanlar=@mysql_fetch_array($sql);
?>
    <h4 style="margin-bottom:5px;">Kullanýcý Ayarlarý</h4>
    <div class="clear"><hr /></div>
	<table border="0" style="margin-left:220px;">
    	<form method="post" target="_self" action="index.php?ayarlar">
            <tr>
                <td style="width:110px;">
                    <h4 style="margin:0;">Kullanýcý Adý</h4>
                </td>
                <td>
                    <input type="text" class="textbox" name="kadi" value="<?php echo $alanlar['kadi'] ?>" style="width:170px;font-weight:bold;text-align:center;"/>
                </td>
                <td>
                    <input type="submit" value="Güncelle" class="Button"  style="margin:0;padding:6px;" />
                </td>
            </tr>
        </form>
        <tr>
          	<td colspan="3">&nbsp;</td>
        </tr>
        <form method="post" target="_self" action="index.php?ayarlar">
            <tr>
                <td>
                    <h4 style="margin:0;">Mevcut Þifre</h4>
                </td>
                <td>
                    <input type="password" class="textbox" name="mSifre" style="width:170px;font-weight:bold;text-align:center;"/>
                </td>
                <td>
                    <input type="submit" value="Güncelle" class="Button"  style="margin:0;padding:6px;"/>
                </td>
            </tr>
            <tr>
                <td>
                    <h4 style="margin:0;">Yeni Þifre</h4>
                </td>
                <td>
                    <input type="password" class="textbox" name="ySifre" style="width:170px;font-weight:bold;text-align:center;"/>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <h4 style="margin:0;">Þifre Tekararý</h4>
                </td>
                <td>
                    <input type="password" class="textbox" name="tSifre" style="width:170px;font-weight:bold;text-align:center;"/>
                </td>
                <td>&nbsp;</td>
            </tr>
        </form>
        <tr>
          	<td colspan="3">&nbsp;</td>
        </tr>
        <form method="post" target="_self" action="index.php?ayarlar">
            <tr>
                <td>
                    <h4 style="margin:0;">E-Posta Adresi</h4>
                </td>
                <td>
                    <input type="text" class="textbox" name="eposta" value="<?php echo $alanlar['eposta'] ?>" style="width:170px; text-align:center;"/>
                </td>
                <td>
                    <input type="submit" value="Güncelle" class="Button"  style="margin:0;padding:6px;"/>
                </td>
            </tr>
        </form>
	</table>
</form>
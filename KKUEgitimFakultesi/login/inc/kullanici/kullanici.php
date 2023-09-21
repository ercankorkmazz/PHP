<?php 
	if(isset($_GET["kullanici"]) and isset($_POST["kadi"]))
		@include("inc/kullanici/kullaniciGuncelle.php"); // Kullanýcý adý günceller
	
	if(isset($_GET["kullanici"]) and isset($_POST["mSifre"]))
		@include("inc/kullanici/sifreGuncelle.php"); // Þifre Günceller
		
	if(isset($_GET["kullanici"]) and isset($_POST["yeniKullanici"]))
		@include("inc/kullanici/kullaniciEkle.php"); // Kullanýcý Ekler
	
	if(isset($_GET["kullanici"]) and isset($_POST["coklu"]))
		@include("inc/kullanici/kullaniciSil.php"); // Kullanýcý Sil
?>
<div style="width:430px;float:left;">
    <div class="fakulteAdi" style="width:400px;">
    <h2 style="float:right;color:#FFF; margin: 5px; auto 0 auto;">Kullanici Bilgileri Güncelle</h2>
    <div class="clear"></div>
    <hr />
        <form method="post" target="_self" action="index.php?kullanici" style="margin-top:10px;">
            <table width="100%" border="0" align="left">
                <tr>
                    <td align="right" valign="top" style="width:160px;"><h3 style="margin:10px auto;font-size:14px;">Kullanici Adi:</h3></td>
                    <td><div class="txtBG" style="width:100px;float:left;margin-left:5px;"><input type="text" name="kadi" value="<?php echo $_SESSION["$_SERVER[SERVER_NAME]kadi"]; ?>" style="width:100px; text-align:center; font-weight:bold;"></div><?php if($_SESSION["$_SERVER[SERVER_NAME]kadi"]!="admin"){?><input type="submit" value="Kullanýcý Adýný Güncelle" class="button" style="margin:10px 0 0 5px;" /><?php } ?></td>
                </tr>
            </table> 
        </form>   
        <form method="post" target="_self" action="index.php?kullanici">
            <table width="100%" border="0" align="left" style="margin-top:20px;">
                <tr>
                    <td align="right" style="width:160px;"><h3 style="margin:0;font-size:14px;">Mevcut Sifre:</h3></td>
                    <td><div class="txtBG" style="width:200px;margin-left:5px;"><input type="password" name="mSifre" style="width:200px; text-align:center; font-weight:bold;"></div></td>
                </tr>
                <tr>
                    <td align="right" style="width:160px;"><h3 style="margin:0;font-size:14px;">Yeni Sifre:</h3></td>
                    <td><div class="txtBG" style="width:200px;margin-left:5px;"><input type="password" name="ySifre" style="width:200px; text-align:center; font-weight:bold;"></div></td>
                </tr>
                <tr>
                    <td align="right" style="width:160px;"><h3 style="margin:0;font-size:14px;">Sifreyi Tekrar Giriniz:</h3></td>
                    <td><div class="txtBG" style="width:200px;margin-left:5px;"><input type="password" name="tSifre" style="width:200px; text-align:center; font-weight:bold;"></div></td>
                </tr>
                <tr><td colspan="2"><input type="submit" value="Güncelle" class="button" style="margin:5px 0 0 286px;" /></td></tr>
            </table>
        </form>
        <div class="clear"></div>
    </div>
<?php 
	if($_SESSION["$_SERVER[SERVER_NAME]kadi"]=="admin")
	{
?>
    <div class="fakulteAdi" style="width:400px;">
    <h2 style="float:right;color:#FFF; margin: 5px; auto 0 auto;">Yeni Kullanici Ekle</h2>
    <div class="clear"></div>
    <hr />
        <form method="post" target="_self" action="index.php?kullanici">
            <table width="100%" border="0" align="left" style="margin-top:20px;">
                <tr>
                    <td align="right" style="width:160px;"><h3 style="margin:0;font-size:14px;">Kullanici Adi:</h3></td>
                    <td><div class="txtBG" style="width:200px;margin-left:5px;"><input type="text" name="yeniKullanici" style="width:200px; text-align:center; font-weight:bold;"></div></td>
                </tr>
                <tr>
                    <td align="right" style="width:160px;"><h3 style="margin:0;font-size:14px;">Sifre:</h3></td>
                    <td><div class="txtBG" style="width:200px;margin-left:5px;"><input type="password" name="yeniSifre" style="width:200px; text-align:center; font-weight:bold;"></div></td>
                </tr>
                <tr><td colspan="2"><input type="submit" value="Kaydet" class="button" style="margin:5px 0 0 300px;" /></td></tr>
            </table>
        </form>
        <div class="clear"></div>
    </div>
<?php } ?>
</div>
<?php 
	if($_SESSION["$_SERVER[SERVER_NAME]kadi"]=="admin")
	{
?>
<div style="width:320px;float:left;">
<div class="fakulteAdi" style="width:320px;">
    <h2 style="float:right;color:#FFF; margin: 5px; auto 0 auto;">Sisteme Kayitli Kullanicilar</h2>
    	<form method="post" target="_self" action="index.php?kullanici">
            <table width="100%" border="0" align="left" style="margin-top:-10px;">
                <?php
                    @include('inc/baglan.php'); 
                    $sorgu=mysql_query("select * from kullanici");
                    while($alanlar=mysql_fetch_array($sorgu))
                    {
						if($alanlar["kadi"]!="admin")
						{
                ?>
                <tr><td colspan="3" style="height:30px;"><hr/></td></tr>              
                <tr>
                    <td rowspan="2" style="width:30px;border-right:1px solid #CCC;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                    <td align="right" style="width:110px;"><h3 style="margin:0;font-size:14px;">Kullanici Adi: </h3></td>
                    <td><p style="color:#FFF;font-size:15px;margin-left:10px;text-shadow: 3px 3px 3px #333;"><?php echo $alanlar['kadi']; ?></p></td>
                </tr>
                <tr>
                    <td align="right"><h3 style="margin:0;font-size:14px;">Sifre:</h3></td>
                    <td><p style="color:#FFF;font-size:15px;margin-left:10px;text-shadow: 3px 3px 3px #333;"><?php echo $alanlar['sifre']; ?></p></td>
                </tr>
                <?php }}?>
            </table>
        <div class="clear"></div>
        <input type="submit" value="Seçili Kullanýcýlarý Sil" class="button" style="margin: 15px 0 -10px 0; width:100%" />
	</form>
    </div>
</div>
<?php } ?>

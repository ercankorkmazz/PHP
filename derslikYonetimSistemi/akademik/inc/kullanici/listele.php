<?php 
	if(isset($_GET["kullanici"]) and isset($_POST["mail"]))
		@include("inc/kullanici/guncelle.php"); // Kullan�c� bilsisi g�nceller
	
	@include('../inc/baglan.php'); 
	$sorgu=mysql_query("select * from ogretmenler where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<form method="post" action="index.php?kullanici" target="_self">
    	<div class="menuAdi">
        	<div class="ad">
            	<h3>Kullan�c� Bilgileri</h3>
            </div><!-- ��erik Sa� Ba�l�k Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="G�ncelle" /></li>
                </ul>
            </div><!-- ��erik Sa� Ba�l�k Sa� son -->
            <div class="clear"></div>
        </div><!-- Men� Ba�l��� son -->
        <table width="100%" border="0" cellspacing="5" cellpadding="7">
            <tr>
            	<td style="width:120px; text-align:right;color:#060;"><strong>Ad� Soyad�:</strong></td>
                <td><input type="text" name="isim" value="<?php echo $alanlar["kullanici"]; ?>" style="width:300px;text-align:center; font-weight:bold;"> <span style="color:#060;">*</span></td>
            </tr>
            <tr>
            	<td style="width:120px; text-align:right;color:#060;"><strong>�dari G�revi:</strong></td>
                <td><input type="text" name="gorev" value="<?php echo $alanlar["gorev"]; ?>" style="width:300px;text-align:center; font-weight:bold;"> <span style="color:#060;">*</span></td>
            </tr>
            <tr>
            	<td style="width:120px; text-align:right;color:#060;"><strong>Haftal�k Ders Y�k�:</strong></td>
                <td><input type="text" name="dersYuku" value="<?php echo $alanlar["dersYuku"]; ?>" style="width:300px;text-align:center; font-weight:bold;"> <span style="color:#060;">*</span></td>
            </tr>
        	<tr>
                <td colspan="2" style="background:none;" height="0"></td>
            </tr>
        	<tr>
                <td colspan="2"><h3>Kullan�c� Ad� Ayarlar�</h3></td>
            </tr>
            <tr>
            	<td style="width:120px; text-align:right;color:#060;"><strong>Kullan�c� Ad�:</strong></td>
                <td><input type="text" name="kullanici" value="<?php echo $_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkadi"]; ?>" style="width:300px;text-align:center; font-weight:bold;"> <span style="color:#060;">*</span></td>
            </tr>
            <tr>
                <td colspan="2"><h3>�ifre Ayarlar�</h3></td>
            </tr>
            <tr>
            	<td style="width:120px; text-align:right;color:#060;"><strong>Mevcut �ifre:</strong></td>
                <td><input type="password" name="mSifre" style="width:300px;text-align:center;"> <span style="color:#060;">*</span></td>
            </tr>
            <tr>
            	<td style="width:120px; text-align:right;color:#060;"><strong>Yeni �ifre:</strong></td>
                <td><input type="password" name="ySifre" style="width:300px;text-align:center;"> <span style="color:#060;">*</span></td>
            </tr>
            <tr>
            	<td style="width:120px; text-align:right;color:#060;"><strong>Yeni �ifre Tekrar:</strong></td>
                <td><input type="password" name="tSifre" style="width:300px;text-align:center;"> <span style="color:#060;">*</span></td>
            </tr>
            <tr>
                <td colspan="2"><h3>Mail Ayarlar�</h3></td>
            </tr>
            <tr>
                <td style="width:120px; text-align:right;color:#060;"><strong>Mail Adresi:</strong></td>
                <td><input type="text" name="mail" style="width:300px;text-align:center;" value="<?php echo $alanlar["mail"]; ?>" /> <span style="color:#060;">*</span></td>
            </tr>
        </table>
</form>
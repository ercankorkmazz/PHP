<?php
	if(isset($_GET["yeniOgretmen"]) and isset($_POST['kadi']))
		@include("inc/ogretmen/kaydet.php"); // Kaydeder
?>
<form method="post" target="_self" action="index.php?yeniOgretmen">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>B�l�me Ait ��retmenler / <span style="font-size:11px;">Yeni ��retmen</span></h3>
            </div><!-- ��erik Sa� Ba�l�k Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Kaydet" /></li>
                </ul>
            </div><!-- ��erik Sa� Ba�l�k Sa� son -->
            <div class="clear"></div>
        </div><!-- Men� Ba�l��� son -->
        <table border="0" width="99%" cellspacing="5" cellpadding="7">
            <tr>
            	<td style="width:160px; text-align:right;"><h3>Ad� Soyad� :</h3></td>
                <td><input type="text" name="kullanici" style="width:100%;padding:5px; font-weight:bold;"></td>
            </tr>
            <tr>
            	<td style="text-align:right;"><h3>�dari G�revi :</h3></td>
                <td><input type="text" name="gorev" style="width:100%;padding:5px; font-weight:bold;"></td>
            </tr>
            <tr>
            	<td style="text-align:right;"><h3>Haftal�k Ders Y�k� :</h3></td>
                <td><input type="text" name="dersYuku" style="width:100%;padding:5px; font-weight:bold;"></td>
            </tr>
            <tr><td colspan="2" style="background:none;padding:0;height:10px;">&nbsp;</td></tr>            
            <tr>
            	<td style="text-align:right;"><h3>Kullan�c� Ad� :</h3></td>
                <td><input type="text" name="kadi" style="width:100%;padding:5px; text-align:center; font-weight:bold;"></td>
            </tr>
        </table>
</form>
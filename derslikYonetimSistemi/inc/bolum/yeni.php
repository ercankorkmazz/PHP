<?php
	if(isset($_GET["yeniBolum"]) and isset($_POST['ad']))
		@include("inc/bolum/kaydet.php"); // Kaydeder
?>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>

<form method="post" target="_self" action="index.php?yeniBolum">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>Bölüm - Anabilim Dallarý / <span style="font-size:11px;">Yeni Bölüm - Anabilim Dalý</span></h3>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Kaydet" /></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <table border="0" width="99%" cellspacing="5" cellpadding="7">
            <tr>
                <td colspan="2"><h3>Bölüm - Anabilim Dalýnýn Adý</h3></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="ad" style="width:99%;padding:5px;"></td>
            </tr>
            <tr>
                <td colspan="2"><h3>Eðitim - Öðretim Süresi</h3></td>
            </tr>
            <tr>
                <td colspan="2"><select name="sure" id="jumpMenu" style="width:100%;padding:5px;">
                  <option value="2">2 Yýllýk</option>
                  <option value="3">3 Yýllýk</option>
                  <option value="4" selected="selected">4 Yýllýk</option>
                  <option value="5">5 Yýllýk</option>
                  <option value="6">6 Yýllýk</option>
                </select></td>
            </tr>
            <tr>
                <td colspan="2" style="background:none;">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2"><h3>Bölüm Yöneticisinin Kullanýcý Bilgileri</h3></td>
            </tr>
            <tr>
            	<td style="width:150px; text-align:right;"><h3>Adý Soyadý :</h3></td>
                <td><input type="text" name="kullanici" style="width:98%;padding:5px; text-align:center; font-weight:bold;"></td>
            </tr>
            <tr>
            	<td style="width:150px; text-align:right;"><h3>Kullanýcý Adý :</h3></td>
                <td><input type="text" name="kadi" style="width:98%;padding:5px; text-align:center; font-weight:bold;"></td>
            </tr>
        </table>
</form>
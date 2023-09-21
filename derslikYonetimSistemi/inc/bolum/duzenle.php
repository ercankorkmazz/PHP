<?php
	if(isset($_GET["bolum"]) and isset($_POST['ad']))
		@include("inc/bolum/guncelle.php"); // Güncelle
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from bolumler where id=".$_GET["bolum"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<form method="post" target="_self" action="index.php?bolum=<?php echo $_GET["bolum"]; ?>">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>Bölüm - Anabilim Dallý Güncelle</h3>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Güncelle" /></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <table border="0" width="99%" cellspacing="5" cellpadding="7">
            <tr>
                <td colspan="2"><h3>Bölüm - Anabilim Dalýnýn Adý</h3></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="ad" value="<?php echo $alanlar["bolumadi"];?>" style="width:99%;padding:5px;"></td>
            </tr>            
        </table>
</form>
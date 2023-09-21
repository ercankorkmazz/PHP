<?php
	if(isset($_GET["birim"]) and isset($_POST['birim']))
		@include("inc/birim/guncelle.php"); // Günceller
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from birimler where id=".$_GET["birim"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<form method="post" target="_self" action="index.php?birim=<?php echo $_GET["birim"]; ?>">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>Diðer Birimler / <span style="font-size:11px;"><?php echo $alanlar["birim"];?></span></h3>
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
                <td><h3>Birim Adý</h3></td>
            </tr>
            <tr>
                <td><input type="text" name="birim" value="<?php echo $alanlar["birim"];?>" style="width:100%;padding:5px;font-weight:bold;"></td>
                </td>
            </tr>
        </table>
</form>
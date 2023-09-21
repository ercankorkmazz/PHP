<?php
	if(isset($_GET["yeniBirim"]) and isset($_POST['birim']))
		@include("inc/birim/kaydet.php"); // Kaydeder
?>

<form method="post" target="_self" action="index.php?yeniBirim">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>Diðer Birimler / <span style="font-size:11px;">Yeni Birim</span></h3>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Kaydet" /></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <table border="0" width="100%" cellspacing="5" cellpadding="7">
            <tr>
                <td><h3>Birim Adý</h3></td>
            </tr>
            <tr>
                <td><input type="text" name="birim" style="width:100%;padding:5px;font-weight:bold;"></td>
            </tr>
        </table>
</form>
<?php
	if(isset($_GET["yeniBirim"]) and isset($_POST['birim']))
		@include("inc/birim/kaydet.php"); // Kaydeder
?>

<form method="post" target="_self" action="index.php?yeniBirim">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>Di�er Birimler / <span style="font-size:11px;">Yeni Birim</span></h3>
            </div><!-- ��erik Sa� Ba�l�k Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Kaydet" /></li>
                </ul>
            </div><!-- ��erik Sa� Ba�l�k Sa� son -->
            <div class="clear"></div>
        </div><!-- Men� Ba�l��� son -->
        <table border="0" width="100%" cellspacing="5" cellpadding="7">
            <tr>
                <td><h3>Birim Ad�</h3></td>
            </tr>
            <tr>
                <td><input type="text" name="birim" style="width:100%;padding:5px;font-weight:bold;"></td>
            </tr>
        </table>
</form>
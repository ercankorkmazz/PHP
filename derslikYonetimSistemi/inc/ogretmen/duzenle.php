<?php
	if(isset($_GET["ogretmen"]) and isset($_POST['adSoyad']))
		@include("inc/ogretmen/guncelle.php"); // G�nceller
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from ogretmenler where id=".$_GET["ogretmen"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<form method="post" target="_self" action="index.php?ogretmen=<?php echo $_GET["ogretmen"]; ?>">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>B�l�me Ait ��retmenler / <span style="font-size:11px;"><?php echo $alanlar["kullanici"];?></span></h3>
            </div><!-- ��erik Sa� Ba�l�k Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="G�ncelle" /></li>
                </ul>
            </div><!-- ��erik Sa� Ba�l�k Sa� son -->
            <div class="clear"></div>
        </div><!-- Men� Ba�l��� son -->
        <table border="0" width="99%" cellspacing="5" cellpadding="7">
            <tr>
                <td style="width:160px;" align="right"><h3>Ad� Soyad�</h3></td> 
                <td><input type="text" name="adSoyad" value="<?php echo $alanlar["kullanici"];?>" style="width:100%;padding:5px;font-weight:bold;"></td>
            </tr>
            <tr>
            	<td style="text-align:right;"><h3>�dari G�revi :</h3></td>
                <td><input type="text" name="gorev" value="<?php echo $alanlar["gorev"];?>" style="width:100%;padding:5px; font-weight:bold;"></td>
            </tr>
            <tr>
            	<td style="text-align:right;"><h3>Haftal�k Ders Y�k� :</h3></td>
                <td><input type="text" name="dersYuku" value="<?php echo $alanlar["dersYuku"];?>" style="width:100%;padding:5px; font-weight:bold;"></td>
            </tr>
        </table>
</form>
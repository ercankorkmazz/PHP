<?php
	include("../inc/baglan.php");
	$sorgu=mysql_query("select * from ogretmenler where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
	$alanlar=mysql_fetch_array($sorgu);
	
	$sorgu=mysql_query("select * from bolumler where id=".$alanlar["bolumID"]);
	$bolum=mysql_fetch_array($sorgu);
	$bolum=$bolum["bolumadi"];
?>
<table border="0" width="100%" class="EDTable" style="border:0;" cellspacing="0">
	<tr>
    	<td style="width:400px;border:0;padding:0;">
        	<table style="width:100%;margin:0;" border="0" cellspacing="0">
            	<tr>
                	<td style="width:120px;border:0;"><h4>Birimi</h4></td>
                    <td>E��T�M FAK�LTES�</td>
                </tr>
                <tr>
                	<td style="border:0;"><h4>B�l�m� ve Anabilim Dal�</h4></td>
                    <td style="border-top:0;"><?php echo strtoupper($bolum); ?></td>
                </tr>
                <tr>
                	<td style="border:0;"><h4>Ad� Soyad�</h4></td>
                    <td style="border-top:0;"><?php echo $alanlar["kullanici"]; ?></td>
                </tr>
                <tr>
                	<td style="border:0;"><h4>�dari G�revi</h4></td>
                    <td style="border-top:0;"><?php echo $alanlar["gorev"]; ?></td>
                </tr>
            </table>
        </td>
        <td style="padding:0;border:0;vertical-align:top;">
        	<table style="width:100%;margin:0;" border="0" cellspacing="0">
            	<tr>
                	<td style="text-align:right;border:0;padding-right:10px;"><h4>Ay - Y�l</h4></td>
                    <td style="width:150px;" align="center">Eyl�l - 2014</td>
                </tr>
                <tr>
                	<td style="text-align:right;border:0;padding-right:10px;"><h4>Haftal�k Ders Y�k�</h4></td>
                    <td style="border-top:0;" align="center"><?php echo $dersYuku=$alanlar["dersYuku"]; ?></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<div class="clear">&nbsp;</div>
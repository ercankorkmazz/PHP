<?php
	include("../../inc/baglan.php");
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
                	<td style="width:130px;border:0;padding:0;"><h4 style="margin:2px;">Birimi</h4></td>
                    <td style="padding:0;">EÐÝTÝM FAKÜLTESÝ</td>
                </tr>
                <tr>
                	<td style="border:0;padding:0;"><h4 style="margin:2px;">Bölümü ve Anabilim Dalý</h4></td>
                    <td style="border-top:0;padding:0;"><?php echo strtoupper($bolum); ?></td>
                </tr>
                <tr>
                	<td style="border:0;padding:0;"><h4 style="margin:2px;">Adý Soyadý</h4></td>
                    <td style="border-top:0;padding:0;"><?php echo $alanlar["kullanici"]; ?></td>
                </tr>
                <tr>
                	<td style="border:0;padding:0;"><h4 style="margin:2px;">Ýdari Görevi</h4></td>
                    <td style="border-top:0;padding:0;"><?php echo $alanlar["gorev"]; ?></td>
                </tr>
            </table>
        </td>
        <td style="padding:0;border:0;vertical-align:top;">
        	<table style="width:100%;margin:0;" border="0" cellspacing="0">
            	<tr>
                	<td style="text-align:right;border:0;padding-right:10px;"><h4 style="margin:0;">Ay - Yýl</h4></td>
                    <td style="width:100px;padding:0;" align="center">Eylül - 2014</td>
                </tr>
                <tr>
                	<td style="text-align:right;border:0;padding-right:10px;"><h4 style="margin:0;">Haftalýk Ders Yükü</h4></td>
                    <td style="border-top:0;padding:0;" align="center"><?php echo $dersYuku=$alanlar["dersYuku"]; ?></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
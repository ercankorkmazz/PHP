<?php
	include("../inc/baglan.php");
	$sorgu=mysql_query("select * from ogretmenler where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
	$alanlar=mysql_fetch_array($sorgu);
	
	$sorgu=mysql_query("select * from bolumler where id=".$alanlar["bolumID"]);
	$bolum=mysql_fetch_array($sorgu);
	$bolum=$bolum["bolumadi"];
?>
<table border="0" width="100%" class="EDTable" style="border:0;" cellspacing="0">
	<tr><td colspan="7" style="border:0;"><h4>DERS VE DÝÐER FAALÝYETLER</h4></td></tr>
	<tr>
    	<td style="border-right:0;width:30px;text-align:center;"><H4>NO</H4></td>
    	<td style="border-right:0;width:70px;text-align:center;"><H4>KODU</H4></td>
    	<td style="border-right:0;"><H4>ADI</H4></td>
    	<td style="border-right:0;width:55px;"><H4>ÞEKÝL</H4></td>
    	<td style="border-right:0;"><H4>VERÝLDÝÐÝ BÝRÝM</H4></td>
    	<td style="border-right:0;width:30px;" align="center"><H4>TS</H4></td>
    	<td style="width:30px;" align="center"><H4>US</H4></td>
    </tr>
    <?php 
		@include('../inc/baglan.php'); 
		$say=0;
		$TStoplam=0;
		$UStoplam=0;			
		$sql=mysql_query("select * from dersler where ogretmen=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
		while($alanlar=mysql_fetch_array($sql))
		{
			$say++;
			$TS=0;
			$US=0;
			for($i=1;$i<=14;$i++)
			{
				for($k=1;$k<=5;$k++)
				{
					$sorgu=mysql_query("select * from dersprogramlari where saat='$i'");
					while($alan=mysql_fetch_array($sorgu))
					{
						$dizi=explode(".",$alan["g$k"]);
						if($alanlar["id"]==$dizi[1])
						{
							if($dizi[4]=="TS")
							{
								$TS++;
								$TStoplam++;
							}
							else if($dizi[4]=="US")
							{
								$US++;
								$UStoplam++;
							}
						}
					}
				}
			}
	?>
    <tr>
    	<td style="border-right:0;border-top:0;" align="center"><?php echo "<strong>$say</strong>";?></td>
    	<td style="border-right:0;border-top:0;" align="center"><?php echo $alanlar["kodu"]; ?></td>
    	<td style="border-right:0;border-top:0;"><?php echo $alanlar["ders"]; ?></td>
    	<td style="border-right:0;border-top:0;"><?php if($alanlar["oTuru"]==1) echo "NORMAL"; else echo "ÝKÝLÝ";?></td>
    	<td style="border-right:0;border-top:0;">Eðitim Fakültesi <?php echo $bolum; ?></td>
    	<td style="border-right:0;border-top:0;" align="center"><?php echo $TS; ?></td>
    	<td style="border-top:0;" align="center"><?php echo $US; ?></td>
    </tr>
    <?php } ?>
    <tr>
    	<td style="border-right:0;border-top:0;" align="right" colspan="5"><h4>ARA TOPLAM</h4></td>
    	<td style="border-right:0;border-top:0;" align="center"><?php echo $TStoplam; ?></td>
    	<td style="border-top:0;" align="center"><?php echo $UStoplam; ?></td>
    </tr>
    <tr><td colspan="7" style="border-top:0px;"><h4>DÝÐER BÝRÝMLERDE GÝRDÝÐÝ DERSLER VE UYGULAMALAR</h4></td></tr>
    <?php 
		@include('../inc/baglan.php'); 
		$TStoplam2=0;
		$UStoplam2=0;			
		$sql=mysql_query("select * from digerdersler where ogretmenID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
		while($alanlar=mysql_fetch_array($sql))
		{
			$say++;
			$TS=0;
			$US=0;
			for($i=1;$i<=14;$i++)
			{
				for($k=1;$k<=5;$k++)
				{
					$sorgu=mysql_query("select * from digerbirimler where saat='$i'");
					while($alan=mysql_fetch_array($sorgu))
					{
						$dizi=explode("+",$alan["g$k"]);
						if($alanlar["id"]==$dizi[0])
						{
							if($dizi[2]=="TS")
							{
								$TS++;
								$TStoplam2++;
							}
							else if($dizi[2]=="US")
							{
								$US++;
								$UStoplam2++;
							}
						}
					}
				}
			}
	?>
    <tr>
    	<td style="border-right:0;border-top:0;" align="center"><?php echo "<strong>$say</strong>";?></td>
    	<td style="border-right:0;border-top:0;" align="center"><?php echo $alanlar["kodu"]; ?></td>
    	<td style="border-right:0;border-top:0;"><?php echo $alanlar["ders"]; ?></td>
    	<td style="border-right:0;border-top:0;"><?php if($alanlar["oTuru"]==1) echo "NORMAL"; else echo "ÝKÝLÝ";?></td>
    	<td style="border-right:0;border-top:0;">
		<?php 
			$birimSQL = mysql_query("select * from birimler where id=".$alanlar["birim"]);
			$birim=mysql_fetch_array($birimSQL);
			echo $birim["birim"]; 
		?>
        </td>
    	<td style="border-right:0;border-top:0;" align="center"><?php echo $TS; ?></td>
    	<td style="border-top:0;" align="center"><?php echo $US; ?></td>
    </tr>
    <?php } ?>
    <tr>
    	<td style="border-right:0;border-top:0;" align="right" colspan="5"><h4>ARA TOPLAM</h4></td>
    	<td style="border-right:0;border-top:0;" align="center"><?php echo $TStoplam2; ?></td>
    	<td style="border-top:0;" align="center"><?php echo $UStoplam2; ?></td>
    </tr>
    <tr>
    	<td style="border-right:0;border-top:0;" align="right" colspan="5"><h4>GENEL TOPLAM</h4></td>
    	<td style="border-right:0;border-top:0;" align="center"><?php echo $TStoplam+$TStoplam2; ?></td>
    	<td style="border-top:0;" align="center"><?php echo $UStoplam+$UStoplam2; ?></td>
    </tr>
</table>
<div class="clear">&nbsp;</div>
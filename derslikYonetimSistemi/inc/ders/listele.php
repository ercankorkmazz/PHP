<script language="JavaScript">
function onayla(ders)
{
	if(document.getElementById(ders).checked == 1)
		alert("Se�ili dersi sildi�inizde, dersliklere kay�tl� ders isteklerini g�ncellemeniz gerekecektir.");
}
</script>
<?php 
	if(isset($_GET["dersler"]) and isset($_POST["coklu"]))
		@include("inc/ders/sil.php"); // Ders siler
?>
<form method="post" action="index.php?dersler" target="_self">
    	<div class="menuAdi">
        	<div class="ad">
            	<h3>B�l�me Ait Dersler</h3>
            </div><!-- ��erik Sa� Ba�l�k Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Se�ili Dersleri Sil" /></li>
                	<li><a href="index.php?yeniDers">Yeni Ders Ekle</a></li>
                </ul>
            </div><!-- ��erik Sa� Ba�l�k Sa� son -->
            <div class="clear"></div>
        </div><!-- Men� Ba�l��� son -->
        <table width="100%" border="0" cellspacing="5" cellpadding="7"> 
		<?php
			@include('inc/baglan.php'); 
			$kontrol=0;
			$sorgu=mysql_query("select * from dersler where bolumID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]." order by id desc");
			while($alanlar=mysql_fetch_array($sorgu))
			{
				$kontrol=1;
				$sql=mysql_query("select * from ogretmenler where id=".$alanlar["ogretmen"]);
				$alan=mysql_fetch_array($sql);
				if(!empty($alan["kullanici"]))
					$ogretmen=$alan["kullanici"];
				else
					$ogretmen="��retmen Belirlenmedi";
		?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' id="<?php echo $alanlar['id'] ?>" onclick="onayla(<?php echo $alanlar['id'] ?>);" value="<?php echo $alanlar['id'] ?>"  /></td>
                <td align="center" style="width:90px;"><strong><?php echo "$alanlar[kodu]" ;?></strong></td>
                <td><strong><?php echo "$alanlar[ders] &#8212; <span style='color:#060;'>&#8220;$ogretmen&#8221;</span>" ;?></strong></td>
                <td align="center" style="width:90px;"><strong><?php echo "$alanlar[oTuru]. ��retim" ;?></strong></td>
                <td style="width:20px;"><a href="index.php?ders=<?php echo $alanlar['id'] ?>" target="_self"><img src="img/kalem.png" /></a></td>
            </tr>
        <?php }
		if($kontrol==0)
			echo "<tr><td>Hi�bir ders bulunamad�.</td></tr>";
		 ?>
        </table>
</form>
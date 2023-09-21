<script language="JavaScript">
function onayla(ders)
{
	if(document.getElementById(ders).checked == 1)
		alert("Seçili öðretmeni sildiðinizde, öðretmenin kayýtlý olduðu dersleri güncellemeniz gerekecektir.");
}
</script>
<?php 
	if(isset($_GET["ogretmenler"]) and isset($_POST["coklu"]))
		@include("inc/ogretmen/sil.php"); // Ders siler
?>
<form method="post" action="index.php?ogretmenler" target="_self">
    	<div class="menuAdi">
        	<div class="ad">
            	<h3>Bölüm Öðretmenleri</h3>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Seçili Öðretmenleri Sil" /></li>
                	<li><a href="index.php?yeniOgretmen">Yeni Öðretmen Ekle</a></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <table width="100%" border="0" cellspacing="5" cellpadding="7"> 
		<?php
			@include('inc/baglan.php'); 
			$kontrol=0;
			$sorgu=mysql_query("select * from ogretmenler where bolumID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]);
			while($alanlar=mysql_fetch_array($sorgu))
			{
				$kontrol=1;
		?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' id="<?php echo $alanlar['id'] ?>" onclick="onayla(<?php echo $alanlar['id'] ?>);" value="<?php echo $alanlar['id'] ?>"  /></td>
                <td>
                	<?php 
					echo "<strong>$alanlar[kullanici]</strong>";
					if($alanlar["onay"]==0)
						 echo "<span style='font-size:14px;'> - [<span style='color:#000;'><strong>$alanlar[kadi]</strong></span>] - [<span style='color:#000;'><strong>$alanlar[sifre]</strong></span>]</span>";
					?></span>
                </td>
                <td style="width:20px;"><a href="index.php?ogretmen=<?php echo $alanlar['id'] ?>" target="_self"><img src="img/kalem.png" /></a></td>
            </tr>
        <?php }
		if($kontrol==0)
			echo "<tr><td>Hiçbir öðretmen bulunamadý.</td></tr>";
		 ?>
        </table>
</form>
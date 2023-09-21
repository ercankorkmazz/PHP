<?php 
	if(isset($_GET["sayfalar"]) and isset($_POST["coklu"]))
		@include("inc/sayfalar/kayitSil.php"); // Kayýt siler
?>
<form method="post" action="index.php?sayfalar" target="_self">
<div class="bolumHakkinda" id="link">
<input type="submit" value="Seçili Sayfalarý Sil" class="submit" />
<a href="index.php?yeniSayfa" class="button">Yeni Sayfa</a>
<div class="clear"></div>
        <table width="99%" border="0" cellspacing="5" cellpadding="7" class="table"> 
		<?php
			@include('inc/baglan.php'); 
			$sorgu=mysql_query("select * from sayfalar");
			while($alanlar=mysql_fetch_array($sorgu))
			{
		?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                <td><strong><?php echo $alanlar["baslik"] ;?></strong></td>
                <td style="width:20px;"><a href="index.php?sayfa=<?php echo $alanlar['id'] ?>" target="_self"><img src="../img/kalem.png" /></a></td>
            </tr>
        <?php } ?>
            <tr>
                <td style="width:20px;">&nbsp;</td>
                <td><strong>Ýletiþim</strong></td>
                <td style="width:20px;"><a href="index.php?iletisim" target="_self"><img src="../img/kalem.png" /></a></td>
            </tr>
        </table>
</div>
</form>
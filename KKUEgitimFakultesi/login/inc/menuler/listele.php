<?php 
	if(isset($_GET["menuler"]) and isset($_POST["coklu"]))
		@include("inc/menuler/menuSil.php"); // Kayýt siler
?>
<form method="post" action="index.php?menuler" target="_self">
<div class="bolumHakkinda" id="link">
<input type="submit" value="Seçili Menüleri Sil" class="submit" />
<a href="index.php?yeniMenu" class="button">Yeni Menü</a>
<div class="clear"></div>
        <table width="99%" border="0" cellspacing="5" cellpadding="7" class="table">
        <?php
			@include('inc/baglan.php'); 
			$sorgu=mysql_query("select * from menuler");
			while($alanlar=mysql_fetch_array($sorgu))
			{
		?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                <td id="menuAdi"><a href="index.php?altmenuler=<?php echo $alanlar['id']; ?>"><strong><?php echo $alanlar["menu"] ;?></strong></a></td>
                <td style="width:20px;"><a href="index.php?menu=<?php echo $alanlar['id'] ?>" target="_self"><img src="../img/kalem.png" /></a></td>
            </tr>
        <?php } ?> 
        </table>
</form>
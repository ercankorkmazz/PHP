<?php 
	if(isset($_GET["altmenuler"]) and isset($_POST["coklu"]))
		@include("inc/menuler/altmenuSil.php"); // Kayýt siler
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from menuler where id=".$_GET["altmenuler"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<form method="post" action="index.php?altmenuler=<?php echo $_GET["altmenuler"];?>" target="_self">
<div class="bolumHakkinda" id="link">
<h3 style="float:left;"><?php echo $alanlar["menu"];?></h3>
<input type="submit" value="Seçili Alt Menüleri Sil" class="submit"  />
<a href="index.php?yeniAltmenu=<?php echo $_GET["altmenuler"];?>" class="button">Yeni Alt Menü</a>
<div class="clear"></div>
        <table width="99%" border="0" cellspacing="5" cellpadding="7" class="table">
		<?php
			@include('inc/baglan.php'); 
			$sorgu=mysql_query("select * from altmenuler where menu=".$_GET["altmenuler"]);
			while($alanlar=mysql_fetch_array($sorgu))
			{
		?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                <td><strong><?php echo $alanlar["baslik"] ;?></strong></td>
                <td style="width:20px;"><a href="index.php?menuID=<?php echo $_GET["altmenuler"];?>&altmenu=<?php echo $alanlar['id'] ?>" target="_self"><img src="../img/kalem.png" /></a></td>
            </tr>
        <?php } ?>
        </table>
</form>
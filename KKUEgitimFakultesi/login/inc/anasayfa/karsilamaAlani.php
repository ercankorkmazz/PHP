<?php 
	@include('inc/baglan.php'); 
	$sor=mysql_query("select * from karsilamaalani where id=1");
	$alanlar=mysql_fetch_array($sor);
	
	if(isset($_GET["karsilamaAlani"]) and isset($_POST["icerik"]))
		@include("inc/anasayfa/karsilamaAlaniGuncelle.php"); // karsilama alani günceller
?>
<div class="bolumHakkinda">
	<form method="post" target="_self" action="index.php?karsilamaAlani">
    	<h3>Baslik:</h3>
    	<div class="txtBG" style="width:500px;float:left;"><input type="text" name="baslik" value="<?php echo $alanlar['baslik']; ?>" style="width:500px;"></div>
        <input type="submit" value="Güncelle" class="button" style="margin:-1.5px 0 0 5px;" />
    	<h3>Karsilama Metni:</h3>
        <div class="textareaBG"><textarea name="icerik" style="max-width:700px; min-width:700px; min-height:130px;"><?php echo strip_tags($alanlar['icerik']); ?></textarea></div>
        <div class="clear"></div>
    </form>
</div>
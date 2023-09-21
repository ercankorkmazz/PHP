<?php 
	@include('inc/baglan.php'); 
	$sor=mysql_query("select * from iletisim where id=1");
	$alanlar=mysql_fetch_array($sor);
	
	if(isset($_GET["iletisim"]) and isset($_POST["url"]))
		@include("inc/iletisim/iletisimGuncelle.php"); // Baþlýk günceller
?>
<div class="bolumHakkinda" style="width:900px;">
	<form method="post" target="_self" action="#">
    <input type="submit" value="Güncelle" class="button" style="float:right;margin-top:-15px;" />
    	<h3>Iletisim Bilgileri:</h3>
        <textarea name="iletisimBilgi" class="ckeditor"><?php echo $alanlar['iletisimBilgi']; ?></textarea>
        <div class="clear"></div>
    	<h3 style="margin-top:20px;"><a href="https://maps.google.com/" target="_blank">Google Harita</a> / <span style="font-size:10px;"><u><a href="https://support.google.com/maps/answer/3544418?hl=tr" target="_blank">Google Harita Yerlestir</a></u> kodlarini buraya yapistiriniz. / Önerilen Boyutlar : Genislik = 680 X Yüksekli = 380</h3>
    	<div class="txtBG" style="width:890px; height:auto;float:left;"><textarea name="url" style="max-width:890px;min-width:890px;min-height:80px;"><?php echo $alanlar['url']; ?></textarea></div>
        <div class="clear"></div>
    </form>
</div>
<?php
	if(isset($_GET["mezunEkle"]) and isset($_POST["tcNo"]))
		@include("inc/mezun/kaydet.php"); // Mezun Ekler
	
	if(isset($_GET["mezunEkle"]) and isset($_FILES["dosya"]))
		@include("inc/mezun/excelKaydet.php"); // Excell Ýle Mezun Ekle
	
	@include('inc/baglan.php'); 
	$sor=mysql_query("select * from mezun");
	$mezunSay=mysql_num_rows($sor);
	
	@include('inc/baglan.php'); 
	$sor=mysql_query("select * from kullanici");
	$uyeSay=mysql_num_rows($sor)-1;
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda">
    	<h3>Sisteme kayýtlý &#8212; <?php echo $mezunSay; ?> &#8212; mezun bulunmaktadýr. Toplam &#8212; <?php echo $uyeSay; ?> &#8212; mezun üye kaydýný yaptý.</h3>
        <hr />
        <h3>Mezun Ekle (Microsoft Excel "Format: xls")</h3>
        <form method="post" action="index.php?mezunEkle" target="_self" enctype="multipart/form-data">
            <div class="txtBG" style="float:left; width:264px;"><input type="file" name="dosya" style="width:264px;border:0;" /></div>
            <input type="submit" value="Kaydet" class="button" style="margin:-1.5px 0 0 5px;" />
        </form>
        <div class="clear"></div>
        <h3>Mezun Ekle</h3>
        <form method="post" action="index.php?mezunEkle" target="_self">
            <div class="txtBG" style="float:left; width:264px;"><input type="text" name="tcNo" placeholder="TC Kimlik NO" style="width:264px;text-align:center;"></div>
            <div class="txtBG" style="float:left; width:264px; margin-left:5px;"><input type="text" name="okulNo" placeholder="Okul NO" style="width:264px;text-align:center;"></div>
            <input type="submit" value="Kaydet" class="button" style="margin:-1.5px 0 0 5px;" />
            <div class="clear"></div>
        </form>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
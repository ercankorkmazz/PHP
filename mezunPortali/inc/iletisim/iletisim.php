<?php 
	@include('inc/baglan.php'); 
	$sor=mysql_query("select * from iletisim where id=1");
	$alanlar=mysql_fetch_array($sor);
	
	if(isset($_GET["iletisimYonet"]) and isset($_POST["url"]))
		@include("inc/iletisim/iletisimGuncelle.php"); // Ba�l�k g�nceller
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda" style="width:640px;">
        <form method="post" target="_self" action="#">
        	<input type="submit" value="G�ncelle" class="button" style="float:right;margin-top:-30px;" />
            <h3 style="margin-top:30px;"><a href="https://maps.google.com/" target="_blank" style="color:#FFF;text-decoration:underline;">Google Harita</a> / <span style="font-size:10px;"><u><a href="https://support.google.com/maps/answer/3544418?hl=tr" target="_blank" style="color:#FFF;">Google Harita Yerle�tir</a></u> kodlar�n� buraya yap��t�r�n�z. / �nerilen Boyutlar : Geni�lik = 680 , Y�ksekli = 300</h3>
            <div class="txtBG" style="width:630px; height:auto;float:left;"><textarea name="url" style="min-height:90px;"><?php echo $alanlar['url']; ?></textarea></div>
            <div class="clear"></div>
            <h3>�leti�im Bilgileri</h3>
            <textarea name="iletisimBilgi" class="ckeditor" id="ckfinger"><?php echo $alanlar['iletisimBilgi']; ?></textarea>
            <div class="clear"></div>
        </form>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
<?php 
	if(isset($_GET["dosyaYukle"]) and isset($_FILES['dosya']))
		@include("inc/yukle/dosyayiYukle.php"); // Dosya y�kler
		
	if(isset($_GET["dosyaYukle"]) and isset($_POST["dosyaSil"]))
		@include("inc/yukle/dosyayiSil.php"); // Y�kl� Dosyay� Siler
	
	if(isset($_GET["dosyaYukle"]) and isset($_POST["dosyaURL"]))
		@include("inc/yukle/dosyayiKaydet.php"); // Dosyay� Kaydeder
		
	if(isset($_GET["dosyaYukle"]) and isset($_POST["coklu"]))
		@include("inc/yukle/dosyaSil.php"); // Dosya siler
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda">
        <form method="post" target="_self" action="index.php?dosyaYukle" enctype="multipart/form-data">
            <h3>Yeni Dosya Y�kle:</h3>
            <div class="txtBG" style="width:405px;float:left;"><input type="file" name="dosya" style="width:405px;border:0;" /></div>
            <input type="submit" value="Dosya Y�kle" class="button" style="margin:-1px 0 0 5px;float:left;" />
        </form>
        <form method="post" target="_self" action="index.php?dosyaYukle">
            <input type="submit" name="dosyaSil" value="Dosya Sil" class="button" style="margin:-1px 0 0 5px;" />
        </form>
        <form method="post" target="_self" action="index.php?dosyaYukle">
            <h3>Dosyan�n Tan�m�:</h3>
            <div class="txtBG" style="width:405px;"><input type="text" name="dosyaTanimi" style="width:405px;" /></div>
            <div class="txtBG" style="width:405px; margin-top:10px; float:left;"><input type="text" name="dosyaURL" style="width:405px;" value="<?php if(!empty($_COOKIE["yukluDosya"])){ echo 'dosyalar/'.$_COOKIE['yukluDosya']; }else { echo 'Bu alan sistem taraf�ndan doldurulacakt�r. (Dosyaya ait URL)'; } ?>"></div>
            <input type="submit" value="Dosyay� Kaydet" class="button" style="margin:-1px 0 0 5px; padding:5px;width:220px; margin-top:10px;" />
        </form>
        <form method="post" action="index.php?dosyaYukle" target="_self">
            <h3 style="margin:30px 0 -15px 0;">Sisteme Kay�tl� Dosyalar</h3>
            <input type="submit" value="Se�ili Dosyalar� Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
            <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
                <?php
                    @include('inc/baglan.php'); 
                    $sorgu=mysql_query("select * from dosyalar order by id desc");
                    while($alanlar=mysql_fetch_array($sorgu))
                    {
                ?>
                <tr>
                    <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                    <td><strong><?php echo $alanlar["dosyaTanim"] ;?></strong></td>
                    <td style="width:20px;"><a href="index.php?dosya=<?php echo $alanlar['id'] ?>" target="_self"><img src="img/kalem.png" /></a></td>
                </tr>
                <?php } ?>
            </table>       
        </form>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
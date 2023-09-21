<?php
	if(isset($_GET["sayfa"]) and isset($_POST['baslik']))
		@include("inc/sayfalar/guncelle.php"); // Günceller
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from sayfalar where id=".$_GET["sayfa"]);
	$alanlar=mysql_fetch_array($sorgu);
	
	$chec='';
	if($alanlar['onay']==1)
		$chec='checked';
?>
<form method="post" target="_self" action="index.php?sayfa=<?php echo $_GET["sayfa"];?>">
<div class="bolumHakkinda" id="link" style="width:900px;">
<input type="submit" value="Kaydet" class="submit" style="float:right;margin-right:10px;" />
        <table border="0" width="99%" cellspacing="5" cellpadding="7" class="table">
            <tr>
                <td style="background:none;"><h3>Sayfa Adi:</h3></td>
            </tr>
            <tr>
                <td><input type="text" name="baslik" value="<?php echo $alanlar["baslik"];?>" style="width:99%;padding:5px;"></td>
            </tr>
            <tr>
                <td style="background:none;"><h3 style="float:left;">Baglanti Adresi: </h3></td>
            </tr>
            <tr>
                <td><input type="text" name="url" value="<?php echo $alanlar["url"];?>" style="width:100%;padding:5px;background:#0CF;"><p style="margin-top:5px;color:#000;"><input type="checkbox" <?php echo $chec;?> name="onay" /><strong>Sayfayý baðlantý olarak kullanmak için onay kutusunu iþaretleyin.</strong></p></td>
            </tr>
            <tr>
                <td style="background:none;"><h3>Içerik:</h3></td>
            </tr>
            <tr>
                <td><textarea class="ckeditor" name="icerik"><?php echo $alanlar["icerik"];?></textarea></td>
            </tr>
        </table>
</div>
</form>
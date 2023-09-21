<?php
	if(isset($_GET["altmenu"]) and isset($_POST['baslik']))
		@include("inc/menuler/guncelle.php"); // Günceller
	
	@include('inc/baglan.php'); 
	$sor=mysql_query("select * from menuler where id=".$_GET["menuID"]);
	$alan=mysql_fetch_array($sor);
	
	$sorgu=mysql_query("select * from altmenuler where id=".$_GET["altmenu"]);
	$alanlar=mysql_fetch_array($sorgu);
	
	$chec='';
	if($alanlar['onay']==1)
		$chec='checked';
?>
<form method="post" target="_self" action="index.php?menuID=<?php echo $_GET["menuID"];?>&altmenu=<?php echo $_GET["altmenu"];?>">
<div class="bolumHakkinda" id="link" style="width:900px;">
    <h3 style="float:left;"><?php echo $alan["menu"];?></span> / <span style="font-size:12px;"><?php echo $alanlar["baslik"];?></span></h3>
    <input type="submit" value="Kaydet" class="submit"  />
        <table border="0" width="99%" cellspacing="5" cellpadding="7" class="table">
            <tr>
                <td style="background:none;"><h3>Alt Menü Adi</h3></td>
            </tr>
            <tr>
                <td><input type="text" name="baslik" value="<?php echo $alanlar["baslik"];?>" style="width:99%;padding:5px;"></td>
            </tr>
            <tr>
                <td style="background:none;"><h3 style="float:left;">Baglanti Adresi: </h3></td>
            </tr>
            <tr>
                <td><input type="text" name="url" value="<?php echo $alanlar["url"];?>" style="width:100%;padding:5px;background:#0CF;"><p style="margin-top:5px;color:#000;"><input type="checkbox" name="onay" <?php echo $chec;?> /><strong>Sayfayý baðlantý olarak kullanmak için onay kutusunu iþaretleyin.</strong></p></td>
            </tr>
            <tr>
                <td style="background:none;"><h3>Içerik</h3></td>
            </tr>
            <tr>
                <td><textarea class="ckeditor" name="icerik"><?php echo $alanlar["icerik"];?></textarea></td>
            </tr>
        </table>
</form>
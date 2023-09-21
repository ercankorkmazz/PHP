<?php		
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from ogretimuyeleri where id=".$_GET["ogretimUyesi"]);
	$alanlar=mysql_fetch_array($sorgu);	
		
	if(isset($_GET["ogretimUyesi"]) and isset($_FILES['dosya']))
		@include("inc/kisiler/ogrUyeFotoYukle.php"); // Fotoðraf yükler
	
	if(isset($_GET["ogretimUyesi"]) and isset($_POST["fotoSil"]))
		@include("inc/kisiler/ogrUyeFotoSil.php"); // Fotoðraf Siler
	
	if(isset($_GET["ogretimUyesi"]) and isset($_POST["adSoyad"]))
		@include("inc/kisiler/ogrUyeGuncelle.php"); // Bilgileri Günceller Günceller
?>
<div class="bolumHakkinda">
	<form method="post" target="_self" action="index.php?ogretimUyesi=<?php echo $alanlar['id']; ?>" enctype="multipart/form-data">
    	<h3>Önerilen Boyutlar (Genislik: 110px - Yükseklik: 110px)</h3>
    	<div class="txtBG" style="width:400px;float:left;"><input type="file" name="dosya" style="width:400px;border:0;" /></div>
        <input type="submit" value="Fotoðrafý Güncelle" class="button" style="margin:-1px 0 0 5px;float:left;" />
    </form>
    <form method="post" target="_self" action="index.php?ogretimUyesi=<?php echo $alanlar['id']; ?>">
        <input type="submit" name="fotoSil" value="Fotoðrafi Silin" class="button" style="margin:-1px 0 0 5px;" />
    </form>
    <div class="etkinlikFotoBG" style="width:110px; height:110px; text-align:center; margin-top:50px;">
		<?php if(!empty($alanlar["url"])){ ?>
        	<img src="<?php echo "../img/kisiler/".$alanlar["url"]; ?>" style="width:110px; height:110px;">
        <?php }else { ?>
        	<p style="padding:20px;padding-top:40px; font-weight:bold; text-align:center;">Fotoðraf Yükleyiniz</p>
        <?php } ?>
    </div>
    <form method="post" target="_self" action="index.php?ogretimUyesi=<?php echo $alanlar['id']; ?>">
    <table width="100%" border="0" style="font-size:12px;margin-top:-145px;margin-left:90px;">
      <tr>
        <td style="width:150px;"><h3 style="margin:0;float:right;">Adi Soyadi :</h3></td>
        <td><div class="txtBG" style="width:200px;"><input type="text" name="adSoyad" value="<?php echo $alanlar['adSoyad']; ?>" style="width:200px;"></div></td>
      </tr>
      <tr>
        <td><h3 style="margin:0;float:right;">&Uuml;nvaný :</h3></td>
        <td><div class="txtBG" style="width:200px;"><input type="text" name="gorev" value="<?php echo $alanlar['gorev']; ?>" style="width:200px;"></div></td>
      </tr>
      <tr>
        <td><h3 style="margin:0;float:right;">E-Posta :</h3></td>
        <td><div class="txtBG" style="width:200px;"><input type="text" name="ePosta" value="<?php echo $alanlar['ePosta']; ?>" style="width:200px;"></div></td>
      </tr>
      <tr>
        <td><h3 style="margin:0;float:right;">Telefon :</h3></td>
        <td><div class="txtBG" style="width:200px;"><input type="text" name="tel" value="<?php echo $alanlar['tel']; ?>" style="width:200px;"></div></td>
      </tr>
      <tr>
        <td><h3 style="margin:0;float:right;">Bilgiler (URL):</h3></td>
        <td>
        	<div class="txtBG" style="width:285px; float:left;"><input type="text" name="url" value="<?php echo $alanlar['link']; ?>" style="width:285px;"></div>
        	<a href="http://www.kku.edu.tr/akademik/ara.php" target="_blank" style="margin-left:5px;"><img src="../img/uyeAra.png" /></a>
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Bilgileri Güncelle" class="button" style="margin:-1.5px 0 0 310px;" /></td>
      </tr>
    </table>
	</form>
</div>
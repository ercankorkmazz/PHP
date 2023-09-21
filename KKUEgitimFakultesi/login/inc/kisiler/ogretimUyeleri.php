<?php 
	if(isset($_GET["ogretimUyeleri"]) and isset($_FILES['dosya']))
		@include("inc/kisiler/ogrUyeFotoYukle.php"); // Fotoðraf yükler
		
	if(isset($_GET["ogretimUyeleri"]) and isset($_POST["fotoSil"]))
		@include("inc/kisiler/ogrUyeFotoSil.php"); // Fotoðraf Siler
	
	if(isset($_GET["ogretimUyeleri"]) and isset($_POST["adSoyad"]))
		@include("inc/kisiler/ogrUyeEkle.php"); // Öðretim Üyesini Kaydeder
		
	if(isset($_GET["ogretimUyeleri"]) and isset($_POST["coklu"]))
		@include("inc/kisiler/ogrUyeSil.php"); // Etkinlik siler
?>
<div class="bolumHakkinda">
	<form method="post" target="_self" action="index.php?ogretimUyeleri" enctype="multipart/form-data">
    	<h3>Önerilen Boyutlar (Genislik: 110px - Yükseklik: 110px)</h3>
    	<div class="txtBG" style="width:420px;float:left;"><input type="file" name="dosya" style="width:420px;border:0;" /></div>
        <input type="submit" value="Fotoðrafý Yükleyin" class="button" style="margin:-1px 0 0 5px;float:left;" />
    </form>
    <form method="post" target="_self" action="index.php?ogretimUyeleri">
        <input type="submit" name="fotoSil" value="Fotoðrafi Silin" class="button" style="margin:-1px 0 0 5px;" />
    </form>
    <div class="etkinlikFotoBG" style="width:110px; height:110px; text-align:center; margin-top:50px;">
		<?php if(!empty($_COOKIE["ogretimUyesiFoto"])){ ?>
        	<img src="<?php echo "../img/kisiler/".$_COOKIE["ogretimUyesiFoto"]; ?>" style="width:110px; height:110px;">
        <?php }else { ?>
        	<p style="padding:20px;padding-top:40px; font-weight:bold;">Fotoðraf Yükleyiniz</p>
        <?php } ?>
    </div>
    <form method="post" target="_self" action="index.php?ogretimUyeleri">
    <table width="100%" border="0" style="font-size:12px;margin-top:-145px;margin-left:90px;">
      <tr>
        <td style="width:150px;"><h3 style="margin:0;float:right;">Adi Soyadi :</h3></td>
        <td><div class="txtBG" style="width:200px;"><input type="text" name="adSoyad" style="width:200px;"></div></td>
      </tr>
      <tr>
        <td><h3 style="margin:0;float:right;">&Uuml;nvaný :</h3></td>
        <td><div class="txtBG" style="width:200px;"><input type="text" name="gorev" style="width:200px;"></div></td>
      </tr>
      <tr>
        <td><h3 style="margin:0;float:right;">E-Posta :</h3></td>
        <td><div class="txtBG" style="width:200px;"><input type="text" name="ePosta" style="width:200px;"></div></td>
      </tr>
      <tr>
        <td><h3 style="margin:0;float:right;">Telefon :</h3></td>
        <td><div class="txtBG" style="width:200px;"><input type="text" name="tel" style="width:200px;"></div></td>
      </tr>
      <tr>
        <td><h3 style="margin:0;float:right;">Bilgiler (URL):</h3></td>
        <td>
        	<div class="txtBG" style="width:300px; float:left;"><input type="text" name="url" style="width:300px;"></div>
        	<a href="http://www.kku.edu.tr/akademik/ara.php" target="_blank" style="margin-left:5px;"><img src="../img/uyeAra.png" /></a>
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Öðretim Üyesini Kaydet" class="button" style="margin:2px 0 0 285px;" /></td>
      </tr>
    </table>
	</form>
    <form method="post" action="index.php?ogretimUyeleri" target="_self">
    	<h3 style="margin:30px 0 -15px 0;">Sisteme Kayitli Ogretim Uyeleri</h3>
        <input type="submit" value="Seçili Kiþileri Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
        <table width="99%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
            <?php
				@include('inc/baglan.php'); 
				$sorgu=mysql_query("select * from  ogretimuyeleri");
				while($alanlar=mysql_fetch_array($sorgu))
				{
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                <td><strong><?php echo $alanlar["adSoyad"]." - &#8220;".$alanlar["gorev"]."&#8221;" ;?></strong></td>
                <td style="width:20px;"><a href="index.php?ogretimUyesi=<?php echo $alanlar['id'] ?>" target="_self"><img src="../img/kalem.png" /></a></td>
            </tr>
            <?php } ?>
        </table>        
    </form>
</div>
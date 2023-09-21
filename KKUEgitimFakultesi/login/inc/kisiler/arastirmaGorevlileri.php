<?php 
	if(isset($_GET["arastirmaGorevlileri"]) and isset($_FILES['dosya']))
		@include("inc/kisiler/arasGorevFotoYukle.php"); // Foto�raf y�kler
		
	if(isset($_GET["arastirmaGorevlileri"]) and isset($_POST["fotoSil"]))
		@include("inc/kisiler/arasGorevFotoSil.php"); // Foto�raf Siler
	
	if(isset($_GET["arastirmaGorevlileri"]) and isset($_POST["adSoyad"]))
		@include("inc/kisiler/arasGorevEkle.php"); // Ara�t�rma G�revlisi Kaydeder
		
	if(isset($_GET["arastirmaGorevlileri"]) and isset($_POST["coklu"]))
		@include("inc/kisiler/arasGorevSil.php"); // Ki�i siler
?>
<div class="bolumHakkinda">
	<form method="post" target="_self" action="index.php?arastirmaGorevlileri" enctype="multipart/form-data">
    	<h3>�nerilen Boyutlar (Genislik: 110px - Y�kseklik: 110px)</h3>
    	<div class="txtBG" style="width:420px;float:left;"><input type="file" name="dosya" style="width:420px;border:0;" /></div>
        <input type="submit" value="Foto�raf� Y�kleyin" class="button" style="margin:-1px 0 0 5px;float:left;" />
    </form>
    <form method="post" target="_self" action="index.php?arastirmaGorevlileri">
        <input type="submit" name="fotoSil" value="Foto�rafi Silin" class="button" style="margin:-1px 0 0 5px;" />
    </form>
    <div class="etkinlikFotoBG" style="width:110px; height:110px; text-align:center; margin-top:50px;">
		<?php if(!empty($_COOKIE["arastirmaGorevlisiFoto"])){ ?>
        	<img src="<?php echo "../img/kisiler/".$_COOKIE["arastirmaGorevlisiFoto"]; ?>" style="width:110px; height:110px;">
        <?php }else { ?>
        	<p style="padding:20px;padding-top:40px; font-weight:bold;">Foto�raf Y�kleyiniz</p>
        <?php } ?>
    </div>
    <form method="post" target="_self" action="index.php?arastirmaGorevlileri">
    <table width="100%" border="0" style="font-size:12px;margin-top:-145px;margin-left:90px;">
      <tr>
        <td style="width:150px;"><h3 style="margin:0;float:right;">Adi Soyadi :</h3></td>
        <td><div class="txtBG" style="width:200px;"><input type="text" name="adSoyad" style="width:200px;"></div></td>
      </tr>
      <tr>
        <td><h3 style="margin:0;float:right;">&Uuml;nvan� :</h3></td>
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
        	<div class="txtBG" style="width:300px;float:left;"><input type="text" name="url" style="width:300px;"></div>
        	<a href="http://www.kku.edu.tr/akademik/ara.php" target="_blank" style="margin-left:5px;"><img src="../img/uyeAra.png" /></a>
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Ara�t�rma G�revlisini Kaydet" class="button" style="margin:2px 0 0 257px;" /></td>
      </tr>
    </table>
	</form>
    <form method="post" action="index.php?arastirmaGorevlileri" target="_self">
    	<h3 style="margin:30px 0 -15px 0;">Sisteme Kayitli Arastirma G&ouml;revlileri</h3>
        <input type="submit" value="Se�ili Ki�ileri Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
        <table width="99%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
            <?php
				@include('inc/baglan.php'); 
				$sorgu=mysql_query("select * from arastirmagorevlileri");
				while($alanlar=mysql_fetch_array($sorgu))
				{
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                <td><strong><?php echo $alanlar["adSoyad"]." - &#8220;".$alanlar["unvan"]."&#8221;" ;?></strong></td>
                <td style="width:20px;"><a href="index.php?arastirmaGorevlisi=<?php echo $alanlar['id'] ?>" target="_self"><img src="../img/kalem.png" /></a></td>
            </tr>
            <?php } ?>
        </table>        
    </form>
</div>
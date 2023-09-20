<?php 
	if(isset($_GET["slider"]) and isset($_FILES['dosya']))
		@include("inc/anasayfa/slider/fotoYukle.php"); // Fotoðraf yükler
		
	if(isset($_GET["slider"]) and isset($_POST["fotoSil"]))
		@include("inc/anasayfa/slider/fotoSil.php"); // Fotoðraf Siler
	
	if(isset($_GET["slider"]) and isset($_POST["sliderKaydet"]))
		@include("inc/anasayfa/slider/kaydet.php"); // Kaydet
		
	if(isset($_GET["slider"]) and isset($_POST["coklu"]))
		@include("inc/anasayfa/slider/sil.php"); //Sil
?>
	<form method="post" target="_self" action="index.php?slider" enctype="multipart/form-data">
    	<h5>Önerilen Boyutlar (Genislik: 630px - Yükseklik: 250px)</h5>
    	<input type="file" name="dosya" class="textbox" style="color:#fff;float:left;"/>
        <input type="submit" value="Resmi Yükle" class="Button" style="margin:3px 0 0 5px;float:left;" />
    </form>
    <form method="post" target="_self" action="index.php?slider">
        <input type="submit" name="fotoSil" value="Resmi Sil" class="Button" style="margin:3px 0 0 5px;float:left;" />
    </form>
    <form method="post" target="_self" action="index.php?slider">
        <input type="submit" name="sliderKaydet" value="Kaydet" class="Button" style="float:left;margin:3px 0 0 138px;" />
    </form>
    <div class="clear"></div>
    <div class="etkinlikFotoBG">
		<?php if(!empty($_COOKIE["etkinlikFoto"])){ ?>
        	<p><img src="<?php echo "../img/slider/".$_COOKIE["etkinlikFoto"]; ?>" style="width:630px; height:250px;"></p>
        <?php }else { ?>
        	<p style="padding-top:130px;padding-left:220px; font-weight:bold;">&#8212; Resim Yükleyiniz &#8212;</p>
        <?php } ?>
    </div>
    <form method="post" action="index.php?slider" target="_self">
    	<h5 style="margin:40px 0 10px 0;float:left;">Sisteme Kayýtlý Resimler</h5>
        <input type="submit" value="Seçili Resimleri Sil" class="Button" style="margin:30px 0 0 413px; float:left;" />
        <div class="clear"></div>
        <table style="width:630px;" border="0" cellspacing="5" cellpadding="7" class="table">
        <?php
			@include('inc/baglan.php'); 
			$sorgu=mysql_query("select * from slider");
			while($alanlar=mysql_fetch_array($sorgu))
			{
		?>
        	<tr>
            	<td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id']; ?>"  /></td>
                <td style="padding:8px;"><img src="../img/slider/<?php echo $alanlar["resim"];?>" style="width:630px; height:250px;"/></td>
            </tr>
        <?php } ?>
        </table>
    </form>
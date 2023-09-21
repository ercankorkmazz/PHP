<?php 
	if(isset($_GET["sliderYonet"]) and isset($_FILES['dosya']))
		@include("inc/slider/fotografYukle.php"); // Fotoðraf yükler
		
	if(isset($_GET["sliderYonet"]) and isset($_POST["fotoSil"]))
		@include("inc/slider/fotografSil.php"); // Fotoðraf Siler
	
	if(isset($_GET["sliderYonet"]) and isset($_POST["sliderKaydet"]))
		@include("inc/slider/etkinlikEkle.php"); // Etkinliði Kaydeder
		
	if(isset($_GET["sliderYonet"]) and isset($_POST["coklu"]))
		@include("inc/slider/etkinlikSil.php"); // Etkinlik siler
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda">
        <form method="post" target="_self" action="index.php?sliderYonet" enctype="multipart/form-data">
            <h3>Önerilen Boyutlar (Genislik: 690px - Yükseklik: 300px)</h3>
            <div class="txtBG" style="width:320px;float:left;"><input type="file" name="dosya" style="width:310px;border:0;" /></div>
            <input type="submit" value="Resmi Yükle" class="button" style="margin:-1px 0 0 5px;float:left;" />
        </form>
        <form method="post" target="_self" action="index.php?sliderYonet">
            <input type="submit" name="fotoSil" value="Resmi Sil" class="button" style="margin:-1px 0 0 5px;float:left;" />
        </form>
        <form method="post" target="_self" action="index.php?sliderYonet">
            <input type="submit" name="sliderKaydet" value="Kaydet" class="button" style="margin:-1px 0 0 5px;" />
        </form>
        <div class="etkinlikFotoBG">
            <?php if(!empty($_COOKIE["etkinlikFoto"])){ ?>
                <img src="<?php echo "img/slider/".$_COOKIE["etkinlikFoto"]; ?>">
            <?php }else { ?>
                <p style="padding:100px 60px 60px 60px;padding-left:50px; font-weight:bold;text-align:center;">&#8212; Resim Yükleyiniz &#8212;<br /><br />Desteklenen Formatlar “jpg - jpeg - bmp - png - gif”</p>
            <?php } ?>
        </div>
        <form method="post" action="index.php?sliderYonet" target="_self">
            <h3 style="margin:30px 0 -15px 0;">Sisteme Kayýtlý Resimler</h3>
            <input type="submit" value="Seçili Resimleri Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
            <div class="clear"></div>
            <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table">
            <?php
                @include('inc/baglan.php'); 
                $sorgu=mysql_query("select * from slider order by id desc");
                while($alanlar=mysql_fetch_array($sorgu))
                {
            ?>
                <tr>
                    <td style="width:2	0px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                    <td style="padding:0;"><img src="img/slider/<?php echo $alanlar["URL"] ;?>" style="width:593px; height:143px;"/></td>
                </tr>
            <?php } ?>
            </table>
        </form>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
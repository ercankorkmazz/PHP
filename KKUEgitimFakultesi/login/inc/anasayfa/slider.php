<?php 
	if(isset($_GET["slider"]) and isset($_FILES['dosya']))
		@include("inc/anasayfa/fotografYukle.php"); // Fotoðraf yükler
		
	if(isset($_GET["slider"]) and isset($_POST["fotoSil"]))
		@include("inc/anasayfa/fotografSil.php"); // Fotoðraf Siler
	
	if(isset($_GET["slider"]) and isset($_POST["sliderKaydet"]))
		@include("inc/anasayfa/etkinlikEkle.php"); // Etkinliði Kaydeder
		
	if(isset($_GET["slider"]) and isset($_POST["coklu"]))
		@include("inc/anasayfa/etkinlikSil.php"); // Etkinlik siler
?>
<div class="bolumHakkinda">
	<form method="post" target="_self" action="index.php?slider" enctype="multipart/form-data">
    	<h3>Önerilen Boyutlar (Genislik: 692px - Yükseklik: 150px)</h3>
    	<div class="txtBG" style="width:373px;float:left;"><input type="file" name="dosya" style="width:373px;border:0;" /></div>
        <input type="submit" value="Resmi Yükle" class="button" style="margin:-1px 0 0 5px;float:left;" />
    </form>
    <form method="post" target="_self" action="index.php?slider">
        <input type="submit" name="fotoSil" value="Resmi Sil" class="button" style="margin:-1px 0 0 5px;float:left;" />
    </form>
    <form method="post" target="_self" action="index.php?slider">
        <input type="submit" name="sliderKaydet" value="Kaydet" class="button" style="margin:-1px 0 0 5px;" />
    </form>
    <div class="etkinlikFotoBG">
		<?php if(!empty($_COOKIE["etkinlikFoto"])){ ?>
        	<img src="<?php echo "../img/slider/".$_COOKIE["etkinlikFoto"]; ?>" style="width:692px; height:150px;">
        <?php }else { ?>
        	<p style="padding:60px;padding-left:280px; font-weight:bold;">&#8212; Resim Yükleyiniz &#8212;</p>
        <?php } ?>
    </div>
    <form method="post" action="index.php?slider" target="_self">
    	<h3 style="margin:30px 0 -15px 0;">Sisteme Kayitli Resimler</h3>
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
                <td style="padding:0;"><img src="../img/slider/<?php echo $alanlar["URL"] ;?>" style="width:662px; height:143px;"/></td>
            </tr>
        <?php } ?>
        </table>
    </form>
</div>
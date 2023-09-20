<?php 
	if(isset($_GET["appDersler"]) and isset($_POST["icerik"]))
		@include("inc/uyeDers/app/dersKaydet.php"); // Ders kaydet
	
	if(isset($_GET["appDersler"]) and isset($_POST["coklu"]))
		@include("inc/uyeDers/app/dersSil.php"); // Ders Sil
?>
	<div style="width:740px;float:left;">
		<form method="post" target="_self" action="index.php?app&appDersler" enctype="multipart/form-data">
            <input type="submit" value="Kaydet" class="Button" style="margin-top:-10px;"/>
            <h5><strong>Baþlýk</strong></h5>
            <input type="text" name="baslik" class="textbox" style="width:740px;text-align:left;">
            <h5><strong>"Video Yerleþtirme Kodunu" veya "Youtube Video Linkini" buraya yapýþtýrýnýz.</strong></h5>
            <textarea name="video" class="textbox" style="max-width:740px; min-width:740px; text-align:left;"></textarea>
            <h5><strong>Ders hakkýnda a&ccedil;ýklama yazýnýz.</strong></h5>
            <textarea name="icerik" class="ckeditor"></textarea>
            <h5><strong>Konu anlatým  dosyasýný buradan y&uuml;kleyiniz.</strong><span style="font-size:12px;"> &raquo; Format: pdf</span></h5>
            <input type="file" name="PDF" class="textbox" style="color:#000; width:380px; text-align:left;"  />
            <h5><strong>Proje dosyasýný buradan y&uuml;kleyiniz.</strong><span style="font-size:12px;"> &raquo; Formatlar: aia - apk</span></h5>
            <input type="file" name="dosya" class="textbox" style="color:#000; width:380px; text-align:left;"  />
        </form>
    </div>
	<div style="width:470px;float:right;background:url(img/overlay.png);padding:10px;height:590px;">
    	<h5 style="font-size:14px;text-align:center;padding:0;margin:5px;"><strong>AÇIKLAMALAR</strong></h5>
  		<h5 style="font-size:12px;"><strong><span style="color:#FF0;">Lütfen Dikkat!</span></strong> Ders için hazýrlamýþ olduðunuz video var ise videonuzu Youtube kanalýnýza yükleniz.</h5>
        <h5 style="font-size:12px;"><strong><span style="color:#FF0;">Lütfen Dikkat!</span></strong> Youtube'a yüklemiþ olduðunuz videonun yerleþtirme kodunu veya Youtube video linkini (Video URL adresi) -Ders Ekle- formunda ilgili alana yapýþtýrýnýz.</h5>
        <h5 style="font-size:12px;"><strong>Videolarýnýzýn baþýna k&uuml;&ccedil;&uuml;k resim ekleyiniz.&ldquo; <a href="img/videoKucukResim.jpg" target="_blank"><span style="color:#FF0;">K&uuml;&ccedil;&uuml;k Resim Ýndir</a> &rdquo;</span> </h5>
        <hr style="margin:0;"/>
  		<h5 style="font-size:12px;color:#FF0;">Youtube nasýl video yüklerim? Video yerleþtirme koduna nereden ulaþabilirim?</h5>
  		<iframe width="450" height="273" src="https://www.youtube.com/embed/i2PdroMBp4M" frameborder="0" allowfullscreen></iframe>
  		<h5 style="font-size:12px;color:#FF0;"><strong>Konu Anlatým Dosyasý: </strong></h5>
        <h5 style="font-size:12px;">Eðer ders hakkýnda ayrýntýlý bilgi vermek istiyorsanýz, konu anlatýmýný PDF formatýnda sisteme yükleyebilirsiniz.</h5>
        
        <h5 style="font-size:12px;color:#FF0;"><strong>Proje Dosyasý: </strong></h5>
        <h5 style="font-size:12px;">Ders için hazýrlamýþ olduðunuz proje dosyanýz var ise sisteme yükleyebilirsiniz. Proje dosyasý dersin ilgili olduðu yazýlýmla hazýrlanmýþ olmalýdýr.</h5>
        </span>
  	</div>
    <div class="clear"></div>
    <form method="post" action="index.php?app&appDersler" target="_self">
    	<h5 style="margin-top:25px;float:left;"><strong>Sisteme Kayýtlý Dersler</strong></h5>
        <input type="submit" value="Seçili Kayýtlarý Sil" class="Button" style="margin-top:12px;" />
        <div class="clear"></div>
        <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table"> 
            <?php
				@include('inc/baglan.php'); 
				$kontrolDers=0;
				$uyeId=$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"];
				$sorgu=mysql_query("select * from app where  yazarID='$uyeId' order by id desc");
				$kontrolDers=mysql_num_rows($sorgu);
				while($alanlar=mysql_fetch_array($sorgu))
				{
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id']; ?>"  /></td>
                <td style="color:#FFF;"><?php echo $alanlar["baslik"] ;?></td>
                <td style="width:20px;"><a href="index.php?app&appDuzenle=<?php echo $alanlar['id']; ?>" style="border:0px;"><img src="img/kalem.png" /></a></td>
            </tr>
            <?php } if($kontrolDers==0){ ?>
            <tr>
                <td colspan="3">Ders kayýdý bulunamadý.</td>
            </tr>
            <?php } ?>
        </table>
    </form>
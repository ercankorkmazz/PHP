<?php 
	if(isset($_GET["basarilarYonet"]) and isset($_FILES['dosya']))
		@include("inc/basari/fotografYukle.php"); // Fotoðraf yükler
		
	if(isset($_GET["basarilarYonet"]) and isset($_POST["fotoSil"]))
		@include("inc/basari/fotografSil.php"); // Fotoðraf Siler
	
	if(isset($_GET["basarilarYonet"]) and isset($_POST["baslik"]))
		@include("inc/basari/Ekle.php"); // basarilarYonet ekler
	
	if(isset($_GET["basarilarYonet"]) and isset($_POST["coklu"]))
		@include("inc/basari/Sil.php"); // basarilarYonet siler
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
        <div class="bolumHakkinda">
            <form method="post" target="_self" action="index.php?basarilarYonet" enctype="multipart/form-data">
                <h3>Önerilen Boyutlar (Genislik: 315px - Yükseklik: 150px)</h3>
                <div class="txtBG" style="width:320px;float:left;"><input type="file" name="dosya" style="width:310px;border:0;" /></div>
                <input type="submit" value="Resmi Yükle" class="button" style="margin:-1px 0 0 5px;float:left;" />
            </form>
            <form method="post" target="_self" action="index.php?basarilarYonet">
            	<input type="submit" name="fotoSil" value="Resmi Sil" class="button" style="margin:-1px 0 0 5px;float:left;" />
        	</form>
            <form method="post" target="_self" action="index.php?basarilarYonet">
                <div class="clear"></div>
               	<div class="baslikFotoBG">
					<?php if(!empty($_COOKIE["basariFoto"])){ ?>
                        <img src="<?php echo "img/basari/".$_COOKIE["basariFoto"]; ?>">
                    <?php }else { ?>
                        <p style="padding:40px 60px 60px 60px;padding-left:50px; font-weight:bold;text-align:center;">&#8212; Resim Yükleyiniz &#8212;<br /><br />Desteklenen Formatlar<br />“jpg - jpeg - bmp - png - gif”</p>
                    <?php } ?>
                </div>
                <h3>Mezunun Adý Soyadý (Max. 150 Karakter)</h3>
                <div class="txtBG" style="width:442px;float:left;"><input type="text" name="mezun" style="width:442px;border:0;" /></div>
            	<input type="submit" value="Baþarý Bilgilerini Kaydet" class="button" style="margin:0 0 0 5px;float:right;" />
                <div class="clear"></div>
                <h3>Baþarý hakkýnda kýsa bilgi (250 karakter)</h3>
                <div class="textareaBG"><textarea name="baslik" style="min-height:40px; font-size:15px;"></textarea></div>
                <div class="clear"></div>
                <h3>Ýçerik:</h3>
                <textarea name="icerik" class="ckeditor" id="ckfinger" style="min-height:40px;"></textarea>
                <div class="clear"></div>
                <table style="background:#FFF;margin-top:20px;width:100%;float:right;-moz-border-radius:5px;border-radius:5px;border:3px solid #333;" border="0">
                	<tr>
                    	<td align="right"><h3 style="margin-top:-4px;color:#000;float:left;">Baþarýyý anasayfada yayýnlamak için onay kutusunu iþaretleyin.</h3><h3 style="margin-top:-4px;color:#000;">Yayýnla:</h3></td>
                        <td style="width:23px;"><input type="checkbox" checked="checked" name="onay"/></td>
                    </tr>
                </table>
            </form>
            <div class="clear"></div>
            <form method="post" action="index.php?basarilarYonet" target="_self">
                <h3 style="margin:30px 0 -15px 0;">Sisteme Kayýtlý Baþarýlar</h3>
                <input type="submit" value="Seçili Baþarýlarý Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
                <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
                    <?php
                        @include('inc/baglan.php');
                        $sorgu=mysql_query("select * from basarilar order by id desc");
                        while($alanlar=mysql_fetch_array($sorgu))
                        {
                    ?>
                    <tr>
                        <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                        <td><strong><?php echo $alanlar["baslik"] ;?></strong></td>
                        <td style="width:20px;"><a href="index.php?onayBasari=<?php echo $alanlar["id"] ;?>" target="_self"><img src="img/<?php if($alanlar["onay"]==1) echo "onayli"; else echo "onaysiz"; ?>.png" /></a></td>
                        <td style="width:20px;"><a href="index.php?basariYonet=<?php echo $alanlar["id"] ;?>" target="_self"><img src="img/kalem.png" /></a></td>
                    </tr>
                    <?php } ?>
                </table>
            </form>
        </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
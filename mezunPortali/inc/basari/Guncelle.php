<?php 
	if(isset($_GET["basariYonet"]) and isset($_POST["baslik"]))
		@include("inc/basari/GunKaydet.php"); // basariYonet g�nceller
		
	if(isset($_GET["basariYonet"]) and isset($_FILES['dosya']))
		@include("inc/basari/fotoG.php"); // Foto�raf y�kler
		
	if(isset($_GET["basariYonet"]) and isset($_POST["fotoSil"]))
		@include("inc/basari/fotoGSil.php"); // Foto�raf Siler
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from basarilar where id=".$_GET["basariYonet"]);
	$alanlar=mysql_fetch_array($sorgu);

	if($alanlar["onay"]==1)
		$onay="checked='checked'";
	else
		$onay="";
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
        <div class="bolumHakkinda">
            <form method="post" target="_self" action="index.php?basariYonet=<?php echo $alanlar['id']; ?>" enctype="multipart/form-data">
                <h3>�nerilen Boyutlar (Genislik: 315px - Y�kseklik: 150px)</h3>
                <div class="txtBG" style="width:320px;float:left;"><input type="file" name="dosya" style="width:310px;border:0;" /></div>
                <input type="submit" value="Resmi G�ncelle" class="button" style="margin:-1px 0 0 5px;float:left;" />
            </form>
            <form method="post" target="_self" action="index.php?basariYonet=<?php echo $alanlar['id']; ?>">
                <input type="submit" name="fotoSil" value="Resmi Sil" class="button" style="margin:-1px 0 0 5px;float:left;" />
            </form>
            <form method="post" target="_self" action="index.php?basariYonet=<?php echo $alanlar['id']; ?>">
                <div class="clear"></div>
               	<div class="baslikFotoBG">
					<?php if(!empty($alanlar['url'])){ ?>
                        <img src="<?php echo "img/basari/".$alanlar['url']; ?>">
                    <?php }else { ?>
                        <p style="padding:40px 60px 60px 60px;padding-left:50px; font-weight:bold;text-align:center;">&#8212; Resim Y�kleyiniz &#8212;<br /><br />Desteklenen Formatlar<br />�jpg - jpeg - bmp - png - gif�</p>
                    <?php } ?>
                </div>
                <h3>Mezunun Ad� Soyad� (Max. 150 Karakter)</h3>
                <div class="txtBG" style="width:432px;float:left;"><input type="text" name="mezun" value="<?php echo $alanlar['mezun']; ?>" style="width:432px;border:0;" /></div>
            	<input type="submit" value="Ba�ar� Bilgilerini G�ncelle" class="button" style="margin:0 0 0 5px;float:right;" />
                <div class="clear"></div>
                <h3>Ba�ar� hakk�nda k�sa bilgi (250 karakter)</h3>
                <div class="textareaBG"><textarea name="baslik" style="min-height:40px; font-size:15px;"><?php echo $alanlar['baslik']; ?></textarea></div>
                <div class="clear"></div>
                <h3>��erik:</h3>
                <textarea name="icerik" class="ckeditor" id="ckfinger" style="min-height:40px;"><?php echo $alanlar['icerik']; ?></textarea>
                <div class="clear"></div>
                <table style="background:#FFF;margin-top:20px;width:100%;float:right;-moz-border-radius:5px;border-radius:5px;border:3px solid #333;" border="0">
                	<tr>
                    	<td align="right"><h3 style="margin-top:-4px;color:#000;float:left;">Ba�ar�y� anasayfada yay�nlamak i�in onay kutusunu i�aretleyin.</h3><h3 style="margin-top:-4px;color:#000;">Yay�nla:</h3></td>
                        <td style="width:23px;"><input type="checkbox" <?php echo $onay; ?> name="onay"/></td>
                    </tr>
                </table>
            </form>
        </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
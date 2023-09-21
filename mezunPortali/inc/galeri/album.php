<?php 
	if(isset($_GET["albumYonet"]) and isset($_FILES['dosya']))
		@include("inc/galeri/fotoEkle.php"); // Fotoðraf yükler
		
	if(isset($_GET["albumYonet"]) and isset($_POST['albumAdi']))
		@include("inc/galeri/albumGuncelle.php"); // Albüm adýný Günceller
		
	if(isset($_GET["albumYonet"]) and isset($_POST["coklu"]))
		@include("inc/galeri/fotoSil.php"); // Fotoðraf siler
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda">
        <form method="post" target="_self" action="index.php?albumYonet=<?php echo $_GET["albumYonet"]; ?>" enctype="multipart/form-data">
        <?php
            @include('inc/baglan.php'); 
            $sorgu=mysql_query("select * from albumler where id=".$_GET["albumYonet"]);
            $alanlar=mysql_fetch_array($sorgu);
        ?>
            <p style="text-align:center;margin:0; font-size:15px;color:#FFF;font-weight:bold; text-shadow:2px 2px 2px #000000;"><?php echo $alanlar["albumAdi"]; ?></p>
            <h3 style="margin-top:0px;">Yeni Fotoðraf Yükle:</h3>
            <div class="txtBG" style="width:420px;float:left;"><input type="file" name="dosya" style="width:420px;border:0;" /></div>
            <input type="submit" value="Fotoðraf Yükle" class="button" style="margin:-1px 0 0 5px;" />
        </form>
        <div class="clear" style="margin-top:10px;"></div>
        <form method="post" target="_self" action="index.php?albumYonet=<?php echo $_GET["albumYonet"]; ?>" style="padding-top:10px;border-top:1px solid #444;">
            <div class="txtBG" style="width:250px;float:left;"><input type="text" name="albumAdi" style="width:250px;" value="<?php echo $alanlar["albumAdi"]; ?>"></div>
            <input type="submit" value="Albüm Adýný Güncelle" class="button" style="margin:-1.5px 0 0 5px;" />
        </form>
        <form method="post" action="index.php?albumYonet=<?php echo $_GET["albumYonet"]; ?>" target="_self">
            <h3 style="margin:30px 0 -15px 0;">Sisteme Kayýtlý Fotoðraflar</h3>
            <input type="submit" value="Seçili Fotoðraflarý Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
            <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;">
            <?php
                @include('inc/baglan.php'); 
                $sorgu=mysql_query("select * from fotograflar where albumID=".$_GET["albumYonet"]);
                while($alanlar=mysql_fetch_array($sorgu))
                {
            ?>
            	<tr>
                   <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                   <td><a href="index.php?fotografYonet=<?php echo $alanlar['id'] ?>" target="_self" style="display:block;"><?php echo $alanlar["url"] ;?></a></td>
                </tr>
            <?php } ?>
           </table>
        </form>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
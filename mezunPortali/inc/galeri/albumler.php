<?php 
	if(isset($_GET["galeriYonet"]) and isset($_POST["albumAdi"]))
		@include("inc/galeri/albumEkle.php"); // Alb�m ekler
	
	if(isset($_GET["galeriYonet"]) and isset($_POST["coklu"]))
		@include("inc/galeri/albumSil.php"); // Alb�m siler
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda">
        <form method="post" target="_self" action="index.php?galeriYonet">
            <h3>Foto�raf Alb�m� Olu�tur:</h3>
            <div class="txtBG" style="width:300px;float:left;"><input type="text" name="albumAdi" placeholder="Alb�m ad�n� yaz�n�z." style="width:300px;"></div>
            <input type="submit" value="Kaydet" class="button" style="margin:-1.5px 0 0 5px;" />
        </form>
        <form method="post" action="index.php?galeriYonet" target="_self">
            <h3 style="margin:30px 0 -15px 0;">Sisteme Kay�tl� Alb�mler</h3>
            <input type="submit" value="Se�ili Alb�mleri Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
            <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
                <?php
                    @include('inc/baglan.php'); 
                    $sorgu=mysql_query("select * from albumler");
                    while($alanlar=mysql_fetch_array($sorgu))
                    {
                ?>
                <tr>
                    <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                    <td><strong><?php echo $alanlar["albumAdi"] ;?></strong></td>
                    <td style="width:20px;"><a href="index.php?albumYonet=<?php echo $alanlar["id"] ;?>" target="_self"><img src="img/kalem.png" /></a></td>
                </tr>
                <?php } ?>
            </table>        
        </form>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
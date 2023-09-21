<?php
	if(isset($_GET["linklerYonet"]) and isset($_POST["fayLinkAdres"]))
		@include("inc/link/linkEkle.php"); // Faydalý Link Ekler
	
	if(isset($_GET["linklerYonet"]) and isset($_POST["coklu"]))
		@include("inc/link/linkSil.php"); // Faydalý Link Sil
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda">
        <h3>Yeni Baðlantý Ekle:</h3>
        <form method="post" action="index.php?linklerYonet" target="_self">
            <div class="txtBG" style="float:left; width:264px;"><input type="text" name="fayLinkBaslik" placeholder="Baðlantýya ait baþlýðý buraya yazýnýz." style="width:264px;"></div>
            <div class="txtBG" style="float:left; width:264px; margin-left:5px;"><input type="text" name="fayLinkAdres" placeholder="Baðlantý adresini buraya yazýnýz." style="width:264px;"></div>
            <input type="submit" value="Kaydet" class="button" style="margin:-1.5px 0 0 5px;" />
            <div class="clear"></div>
        </form>
        <form method="post" action="index.php?linklerYonet" target="_self">
            <h3 style="margin:30px 0 -15px 0;">Sisteme Kayýtlý Baðlantýlar</h3>
            <input type="submit" value="Seçili Baðlantýlarý Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
            <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
            <?php
                @include('inc/baglan.php'); 
                $sorgu=mysql_query("select * from baglantilar");
                while($alanlar=mysql_fetch_array($sorgu))
                {
            ?>
                <tr>
                   <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                   <td><?php echo " <b>".$alanlar["baslik"]."</b> - &#8220;".$alanlar["link"]."&#8221;" ;?></td>
                </tr>
            <?php } ?>
           </table>
        </form>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
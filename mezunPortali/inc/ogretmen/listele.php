<?php
	if(isset($_GET["ogretmenler"]) and isset($_POST["kullanici"]))
		@include("inc/ogretmen/Ekle.php"); // Öðretmen Ekler
	
	if(isset($_GET["ogretmenler"]) and isset($_POST["coklu"]))
		@include("inc/ogretmen/Sil.php"); // Sil
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda">
        <h3>Yeni Öðretim Üyesi:</h3>
        <form method="post" action="index.php?ogretmenler" target="_self">
            <div class="txtBG" style="float:left; width:200px;"><input type="text" name="kullanici" placeholder="Adý Soyadý" style="width:200px;text-align:center;"></div>
            <div class="txtBG" style="float:left; width:155px; margin-left:5px;"><input type="text" name="kadi" placeholder="Kullanýcý Adý" style="width:155px;text-align:center;"></div>
            <input type="submit" value="Kaydet" class="button" style="margin:-1.5px 0 0 5px;" />
            <div class="clear"></div>
        </form>
        <form method="post" action="index.php?ogretmenler" target="_self">
            <h3 style="margin:30px 0 -15px 0;">Sisteme Kayýtlý Öðretim Üyeleri</h3>
            <input type="submit" value="Seçili Öðretim Üyelerini Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
            <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
            <?php
                @include('inc/baglan.php'); 
                $sorgu=mysql_query("select * from ogretmen");
                while($alanlar=mysql_fetch_array($sorgu))
                {
					if($alanlar["onay"]==0)
						$bilgi="<b>".$alanlar["kullanici"]."</b> - [<span style='font-size:14px;color:#B01111;'><b>".$alanlar["kadi"]."</b></span>] [<span style='font-size:14px;color:#B01111;'><b>".$alanlar["sifre"]."</b></span>]";
					else
						$bilgi="<b>".$alanlar["kullanici"]."</b>";
            ?>
                <tr>
                   <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                   <td><?php echo $bilgi; ?></td>
                </tr>
            <?php } ?>
           </table>
        </form>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
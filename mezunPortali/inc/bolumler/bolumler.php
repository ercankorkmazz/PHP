<?php 
	if(isset($_GET["bolumler"]) and isset($_POST["bolumAdi"]))
		@include("inc/bolumler/bolumEkle.php"); // B�l�m ekler
	
	if(isset($_GET["bolumler"]) and isset($_POST["coklu"]))
		@include("inc/bolumler/bolumSil.php"); // B�l�m siler
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
        <div class="bolumHakkinda">
            <form method="post" target="_self" action="index.php?bolumler">
                <h3>B�l�m / Anabilim Dal� Ekle:</h3>
                <div class="txtBG" style="width:555px;float:left;"><input type="text" name="bolumAdi" style="width:555px;"></div>
                <input type="submit" value="Ekle" class="button" style="margin:-1.5px 0 0 5px;" />
            </form>
            <form method="post" action="index.php?bolumler" target="_self">
                <h3 style="margin:30px 0 -15px 0;">Sisteme Kay�tl� B�l�m / Anabilim Dallar�</h3>
                <input type="submit" value="Se�ili B�l�m / Anabilim Dallar�n� Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
                <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
                    <?php
                        @include('inc/baglan.php'); 
                        $sorgu=mysql_query("select * from bolumler");
                        while($alanlar=mysql_fetch_array($sorgu))
                        {
                    ?>
                    <tr>
                        <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                        <td><strong><?php echo $alanlar["bolumAdi"] ;?></strong></td>
                        <td style="width:20px;"><a href="index.php?bolum=<?php echo $alanlar["id"] ;?>" target="_self"><img src="img/kalem.png" /></a></td>
                    </tr>
                    <?php } ?>
                </table>
            </form>
        </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
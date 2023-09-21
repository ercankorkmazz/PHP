<?php 
	if(isset($_GET["haberler"]) and isset($_POST["baslik"]))
		@include("inc/haber/haberEkle.php"); // etkinlik ekler
	
	if(isset($_GET["haberler"]) and isset($_POST["coklu"]))
		@include("inc/haber/haberSil.php"); // etkinlik siler
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
        <div class="bolumHakkinda">
            <form method="post" target="_self" action="index.php?haberler">
            	<input type="submit" value="Kaydet" class="button" style="margin:-1.5px 0 0 5px;float:right;" />
                <div class="clear"></div>
                <h3>Haber Baþlýðý (250 karakter)</h3>
                <div class="textareaBG"><textarea name="baslik" style="min-height:40px; font-size:15px;"></textarea></div>
                <div class="clear"></div>
                <h3>Ýçerik:</h3>
                <textarea name="icerik" class="ckeditor" id="ckfinger" style="min-height:40px;"></textarea>
                <div class="clear"></div>
            </form>
            <form method="post" action="index.php?haberler" target="_self">
                <h3 style="margin:30px 0 -15px 0;">Sisteme Kayýtlý Haberler</h3>
                <input type="submit" value="Seçili Haberleri Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
                <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
                    <?php
                        @include('inc/baglan.php');
						$kID=$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
                        $sorgu=mysql_query("select * from haberler where kID=".$kID);
                        while($alanlar=mysql_fetch_array($sorgu))
                        {
                    ?>
                    <tr>
                        <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                        <td><strong><?php echo $alanlar["baslik"] ;?></strong></td>
                        <td style="width:20px;"><a href="index.php?haber=<?php echo $alanlar["id"] ;?>" target="_self"><img src="img/kalem.png" /></a></td>
                    </tr>
                    <?php } ?>
                </table>
            </form>
        </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
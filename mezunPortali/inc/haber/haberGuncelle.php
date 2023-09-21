<?php 
	if(isset($_GET["haber"]) and isset($_POST["baslik"]))
		@include("inc/haber/haberGunKaydet.php"); // Haber günceller
	
	@include('inc/baglan.php'); 
	$kID=$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
	$sorgu=mysql_query("select * from haberler where id=".$_GET["haber"]." and kID=".$kID);
	$alanlar=mysql_fetch_array($sorgu);
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
        <div class="bolumHakkinda">
        <?php if(isset($alanlar["id"])){ ?>
            <form method="post" target="_self" action="index.php?haber=<?php echo $alanlar['id']; ?>">
                <input type="submit" value="Güncelle" class="button" style="margin:-1.5px 0 0 5px;float:right;" />
                <div class="clear"></div>
                <h3>Haber Baþlýðý:</h3>
                <div class="textareaBG"><textarea name="baslik" style="min-height:40px; font-size:15px;"><?php echo $alanlar['baslik']; ?></textarea></div>
                <div class="clear"></div>
                <h3>Ýçerik:</h3>
                <textarea name="icerik" class="ckeditor" id="ckfinger" style="min-height:40px;"><?php echo $alanlar['icerik']; ?></textarea>
                <div class="clear"></div>
            </form>
        <?php }else echo "<span style='color:#FFF;'>Bu içeriði düzenleme hakkýnýz bulunmamaktadýr.</span>"; ?>
        </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
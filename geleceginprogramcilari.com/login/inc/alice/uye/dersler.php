<?php 
	if(isset($_GET["aliceUyeDersler"]) and isset($_POST["icerik"]))
		@include("inc/alice/dersKaydet.php"); // Ders kaydet
	
	if(isset($_GET["aliceUyeDersler"]) and isset($_POST["coklu"]) and isset($_POST["sil"]))
		@include("inc/alice/uye/dersSil.php"); // Ders Sil
	if(isset($_GET["aliceUyeDersler"]) and isset($_POST["coklu"]) and isset($_POST["onayla"]))
		@include("inc/alice/uye/onayla.php"); // Ders onayla
?>
	
    <form method="post" action="index.php?aliceUyeDersler" target="_self">
    	<h4 style="margin:7px 0 -15px 0;">Alice / Onay Bekleyen Dersler</h4>
        <input type="submit" name="sil" value="Seçili Kayýtlarý Sil " class="Button" style="margin-left:5px;" />
        <input type="submit" name="onayla" value="Seçili Kayýtlarý Onayla " class="Button" /><br/>
        <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
            <?php
				@include('inc/baglan.php'); 
				$kontrol=0; 
				$sorgu=mysql_query("select * from alice where onay='0'");
				$kontrol=mysql_num_rows($sorgu);
				while($alanlar=mysql_fetch_array($sorgu))
				{	
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id']; ?>"  /></td>
                <td style="color:#FFF;"><?php echo $alanlar["baslik"] ;?></td>
                <td style="width:20px;"><a href="index.php?aliceUyeDuzenle=<?php echo $alanlar['id']; ?>" style="border:0px;"><img src="img/kalem.png" /></a></td>
            </tr>
            <?php } if($kontrol==0){ ?>
            <tr>
                <td colspan="3" style="color:#FFF;">Onay bekleyen ders bulunamadý.</td>
            </tr>
            <?php } ?>
        </table>
    </form>
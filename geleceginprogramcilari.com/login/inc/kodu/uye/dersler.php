<?php 
	if(isset($_GET["koduUyeDersler"]) and isset($_POST["icerik"]))
		@include("inc/kodu/dersKaydet.php"); // Ders kaydet
	
	if(isset($_GET["koduUyeDersler"]) and isset($_POST["coklu"]) and isset($_POST["sil"]))
		@include("inc/kodu/uye/dersSil.php"); // Ders Sil
	if(isset($_GET["koduUyeDersler"]) and isset($_POST["coklu"]) and isset($_POST["onayla"]))
		@include("inc/kodu/uye/onayla.php"); // Ders onayla
?>
	
    <form method="post" action="index.php?koduUyeDersler" target="_self">
    	<h4 style="margin:7px 0 -15px 0;">Kodu / Onay Bekleyen Dersler</h4>
        <input type="submit" name="sil" value="Seçili Kayýtlarý Sil " class="Button" style="margin-left:5px;" />
        <input type="submit" name="onayla" value="Seçili Kayýtlarý Onayla " class="Button" /><br/>
        <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
            <?php
				@include('inc/baglan.php'); 
				$kontrol=0;
				$sorgu=mysql_query("select * from kodu where onay='0'");
				$kontrol=mysql_num_rows($sorgu);
				while($alanlar=mysql_fetch_array($sorgu))
				{	
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id']; ?>"  /></td>
                <td style="color:#FFF;"><?php echo $alanlar["baslik"] ;?></td>
                <td style="width:20px;"><a href="index.php?koduUyeDuzenle=<?php echo $alanlar['id']; ?>" style="border:0px;"><img src="img/kalem.png" /></a></td>
            </tr>
            <?php } if($kontrol==0){ ?>
            <tr>
                <td colspan="3" style="color:#FFF;">Onay bekleyen ders bulunamadý.</td>
            </tr>
            <?php } ?>
        </table>
    </form>
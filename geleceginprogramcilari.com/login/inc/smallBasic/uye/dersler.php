<?php 
	if(isset($_GET["smallBasicUyeDersler"]) and isset($_POST["icerik"]))
		@include("inc/smallBasic/dersKaydet.php"); // Ders kaydet
	
	if(isset($_GET["smallBasicUyeDersler"]) and isset($_POST["coklu"]) and isset($_POST["sil"]))
		@include("inc/smallBasic/uye/dersSil.php"); // Ders Sil
	if(isset($_GET["smallBasicUyeDersler"]) and isset($_POST["coklu"]) and isset($_POST["onayla"]))
		@include("inc/smallBasic/uye/onayla.php"); // Ders onayla
?>
	
    <form method="post" action="index.php?smallBasicUyeDersler" target="_self">
    	<h4 style="margin:7px 0 -15px 0;">Arduino S4A / Onay Bekleyen Dersler</h4>
        <input type="submit" name="sil" value="Seçili Kayıtları Sil " class="Button" style="margin-left:5px;" />
        <input type="submit" name="onayla" value="Seçili Kayıtları Onayla " class="Button" /><br/>
        <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
            <?php
				@include('inc/baglan.php'); 
				$kontrol=0; 
				$sorgu=mysql_query("select * from smallbasic where onay='0'");
				$kontrol=mysql_num_rows($sorgu);
				while($alanlar=mysql_fetch_array($sorgu))
				{	
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id']; ?>"  /></td>
                <td style="color:#FFF;"><?php echo $alanlar["baslik"] ;?></td>
                <td style="width:20px;"><a href="index.php?smallBasicUyeDuzenle=<?php echo $alanlar['id']; ?>" style="border:0px;"><img src="img/kalem.png" /></a></td>
            </tr>
            <?php } if($kontrol==0){ ?>
            <tr>
                <td colspan="3" style="color:#FFF;">Onay bekleyen ders bulunamadı.</td>
            </tr>
            <?php } ?>
        </table>
    </form>
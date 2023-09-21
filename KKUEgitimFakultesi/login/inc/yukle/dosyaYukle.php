<?php 
	if(isset($_GET["dosyaYukle"]) and isset($_FILES['dosya']))
		@include("inc/yukle/dosyayiYukle.php"); // Dosya yükler
		
	if(isset($_GET["dosyaYukle"]) and isset($_POST["dosyaSil"]))
		@include("inc/yukle/dosyayiSil.php"); // Yüklü Dosyayý Siler
	
	if(isset($_GET["dosyaYukle"]) and isset($_POST["dosyaURL"]))
		@include("inc/yukle/dosyayiKaydet.php"); // Dosyayý Kaydeder
		
	if(isset($_GET["dosyaYukle"]) and isset($_POST["coklu"]))
		@include("inc/yukle/dosyaSil.php"); // Dosya siler
?>
<div class="bolumHakkinda">
	<form method="post" target="_self" action="index.php?dosyaYukle" enctype="multipart/form-data">
    	<h3>Yeni Dosya Yükle:</h3>
    	<div class="txtBG" style="width:425px;float:left;"><input type="file" name="dosya" style="width:425px;border:0;" /></div>
        <input type="submit" value="Dosyayý Yükleyin" class="button" style="margin:-1px 0 0 5px;float:left;" />
    </form>
    <form method="post" target="_self" action="index.php?dosyaYukle">
        <input type="submit" name="dosyaSil" value="Dosyayý Silin" class="button" style="margin:-1px 0 0 5px;" />
    </form>
    <form method="post" target="_self" action="index.php?dosyaYukle">
    	<h3>Dosyanin Tanimi:</h3>
    	<div class="txtBG" style="width:425px;"><input type="text" name="dosyaTanimi" style="width:425px;" /></div>
        <div class="txtBG" style="width:425px; margin-top:10px; float:left;"><input type="text" name="dosyaURL" style="width:425px;" value="<?php if(!empty($_COOKIE["yukluDosya"])){ echo 'dosyalar/'.$_COOKIE['yukluDosya']; }else { echo 'Bu alan sistem tarafýndan doldurulacaktýr. (Dosyaya ait URL)'; } ?>"></div>
        <input type="submit" value="Dosyayý Kaydet" class="button" style="margin:-1px 0 0 5px; padding:5px;width:270px; margin-top:10px;" />
    </form>
    <form method="post" action="index.php?dosyaYukle" target="_self">
    	<h3 style="margin:30px 0 -15px 0;">Sisteme Kayitli Dosyalar</h3>
        <input type="submit" value="Seçili Dosyalarý Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
        <table width="99%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
            <?php
				@include('inc/baglan.php'); 
				$sorgu=mysql_query("select * from dosyalar order by id desc");
				while($alanlar=mysql_fetch_array($sorgu))
				{
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                <td><strong><?php echo $alanlar["dosyaTanim"] ;?></strong></td>
                <td style="width:20px;"><a href="index.php?dosya=<?php echo $alanlar['id'] ?>" target="_self"><img src="../img/kalem.png" /></a></td>
            </tr>
            <?php } ?>
        </table>       
    </form>
</div>
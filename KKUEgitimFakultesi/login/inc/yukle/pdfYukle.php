<?php 
	if(isset($_GET["yuklePDF"]) and isset($_FILES['dosya']))
		@include("inc/yukle/pdfyiYukle.php"); // Dosya yükler
		
	if(isset($_GET["yuklePDF"]) and isset($_POST["dosyaSil"]))
		@include("inc/yukle/pdfyiSil.php"); // Yüklü Dosyayý Siler
	
	if(isset($_GET["yuklePDF"]) and isset($_POST["pdfURL"]))
		@include("inc/yukle/pdfKaydet.php"); // PDF'yi Kaydeder
		
	if(isset($_GET["yuklePDF"]) and isset($_POST["coklu"]))
		@include("inc/yukle/pdfSil.php"); // Seçili PDF dosyalarýný siler
?>
<div class="bolumHakkinda">
	<form method="post" target="_self" action="index.php?yuklePDF" enctype="multipart/form-data">
    	<h3>Yeni PDF Yükle:</h3>
    	<div class="txtBG" style="width:425px;float:left;"><input type="file" name="dosya" style="width:425px;border:0;" /></div>
        <input type="submit" value="Dosyayý Yükleyin" class="button" style="margin:-1px 0 0 5px;float:left;" />
    </form>
    <form method="post" target="_self" action="index.php?yuklePDF">
        <input type="submit" name="dosyaSil" value="Dosyayý Silin" class="button" style="margin:-1px 0 0 5px;" />
    </form>
    <form method="post" target="_self" action="index.php?yuklePDF">
    	<h3>PDF Dosyasinin Tanimi:</h3>
    	<div class="txtBG" style="width:425px;"><input type="text" name="pdfTanimi" style="width:425px;" /></div>
        <div class="txtBG" style="width:425px; margin-top:10px; float:left;"><input type="text" name="pdfURL" style="width:425px;" value="<?php if(!empty($_COOKIE["yukluPDF"])){ echo 'index.php?PDF='.$_COOKIE['yukluID']; }else { echo 'Bu alan sistem tarafýndan doldurulacaktýr. (PDF dosyasýna ait URL)'; } ?>"></div>
        <input type="submit" value="PDF Dosyasýný Kaydet" class="button" style="margin:-1px 0 0 5px; padding:5px;width:270px; margin-top:10px;" />
    </form>
    <form method="post" action="index.php?yuklePDF" target="_self">
    	<h3 style="margin:30px 0 -15px 0;">Sisteme Kayitli PDF Dosyalari</h3>
        <input type="submit" value="Seçili PDF Dosyalarýný Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
        <table width="99%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
            <?php
				@include('inc/baglan.php'); 
				$sorgu=mysql_query("select * from pdfler order by id desc");
				while($alanlar=mysql_fetch_array($sorgu))
				{
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                <td><strong><?php echo $alanlar["pdfTanim"] ;?></strong></td>
                <td style="width:20px;"><a href="index.php?PDF=<?php echo $alanlar['id'] ?>" target="_self"><img src="../img/kalem.png" /></a></td>
            </tr>
            <?php } ?>
        </table>
    </form>
</div>
<?php		
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from pdfler where id=".$_GET["PDF"]);
	$alanlar=mysql_fetch_array($sorgu);	
		
	if(isset($_GET["PDF"]) and isset($_FILES['dosya']))
		@include("inc/yukle/pdfyiYukle.php"); // Dosya y�kler
	
	if(isset($_GET["PDF"]) and isset($_POST["dosyaSil"]))
		@include("inc/yukle/pdfyiSil.php"); // Dosya Siler
	
	if(isset($_GET["PDF"]) and isset($_POST["pdfTanimi"]))
		@include("inc/yukle/pdfGuncelle.php"); // Dosya Tan�m�n� G�nceller
?>
<div class="bolumHakkinda">
	<form method="post" target="_self" action="index.php?PDF=<?php echo $alanlar["id"]; ?>" enctype="multipart/form-data">
    	<h3>Yeni PDF Y�kle:</h3>
    	<div class="txtBG" style="width:425px;float:left;"><input type="file" name="dosya" style="width:425px;border:0;" /></div>
        <input type="submit" value="Dosyay� G�ncelle" class="button" style="margin:-1px 0 0 5px;float:left;" />
    </form>
    <form method="post" target="_self" action="index.php?PDF=<?php echo $alanlar["id"]; ?>">
        <input type="submit" name="dosyaSil" value="Dosyay� Sil" class="button" style="margin:-1px 0 0 5px;" />
    </form>
    <form method="post" target="_self" action="index.php?PDF=<?php echo $alanlar["id"]; ?>">
    	<h3>PDF Dosyasinin Tanimi:</h3>
    	<div class="txtBG" style="width:425px;"><input type="text" name="pdfTanimi" style="width:425px;" value="<?php echo $alanlar["pdfTanim"]; ?>" /></div>
        <div class="txtBG" style="width:425px; margin-top:10px; float:left;"><input type="text" name="pdfURL" style="width:425px;" value="<?php echo $alanlar["pdfURL"]; ?>"></div>
        <input type="submit" value="Dosya Tan�m�n� G�ncelle" class="button" style="margin:-1px 0 0 5px; padding:5px;width:270px; margin-top:10px;" />
    </form>
</div>
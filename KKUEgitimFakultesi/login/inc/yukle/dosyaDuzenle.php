<?php		
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from dosyalar where id=".$_GET["dosya"]);
	$alanlar=mysql_fetch_array($sorgu);	
		
	if(isset($_GET["dosya"]) and isset($_FILES['dosya']))
		@include("inc/yukle/dosyayiYukle.php"); // Dosya y�kler
	
	if(isset($_GET["dosya"]) and isset($_POST["dosyaSil"]))
		@include("inc/yukle/dosyayiSil.php"); // Dosya Siler
	
	if(isset($_GET["dosya"]) and isset($_POST["dosyaTanimi"]))
		@include("inc/yukle/dosyaGuncelle.php"); // Dosya Tan�m�n� G�nceller
?>
<div class="bolumHakkinda">
	<form method="post" target="_self" action="index.php?dosya=<?php echo $alanlar["id"]; ?>" enctype="multipart/form-data">
    	<h3>Yeni Dosya Y�kle:</h3>
    	<div class="txtBG" style="width:425px;float:left;"><input type="file" name="dosya" style="width:425px;border:0;" /></div>
        <input type="submit" value="Dosyay� G�ncelle" class="button" style="margin:-1px 0 0 5px;float:left;" />
    </form>
    <form method="post" target="_self" action="index.php?dosya=<?php echo $alanlar["id"]; ?>">
        <input type="submit" name="dosyaSil" value="Dosyay� Sil" class="button" style="margin:-1px 0 0 5px;" />
    </form>
    <form method="post" target="_self" action="index.php?dosya=<?php echo $alanlar["id"]; ?>">
    	<h3>Dosyanin Tanimi:</h3>
    	<div class="txtBG" style="width:425px;"><input type="text" name="dosyaTanimi" style="width:425px;" value="<?php echo $alanlar["dosyaTanim"]; ?>" /></div>
        <div class="txtBG" style="width:425px; margin-top:10px; float:left;"><input type="text" name="dosyaURL" style="width:425px;" value="<?php echo $alanlar["dosyaURL"]; ?>"></div>
        <input type="submit" value="Dosya Tan�m�n� G�ncelle" class="button" style="margin:-1px 0 0 5px; padding:5px;width:270px; margin-top:10px;" />
    </form>
</div>
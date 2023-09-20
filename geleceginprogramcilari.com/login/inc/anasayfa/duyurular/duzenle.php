<?php 
	if(isset($_GET["duyuru"]) and isset($_POST["duyuruBilgi"]))
		@include("inc/anasayfa/duyurular/guncelle.php"); // Duyuru günceller
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from duyurular where id=".$_GET["duyuru"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
	<form method="post" target="_self" action="index.php?duyuru=<?php echo $_GET["duyuru"]; ?>">
        <input type="submit" value="Güncelle" class="Button" style="margin-top:-10px;" />
    	<h5>Duyuruya ait URL</h5>
        <input type="text" name="url" class="textbox" value="<?php echo $alanlar["url"]; ?>" style="width:500px;">
    	<h5>Yeni Duyuru</h5>
        <textarea name="duyuruBilgi" class="ckeditor"><?php echo $alanlar["duyuru"]; ?></textarea>
    </form>
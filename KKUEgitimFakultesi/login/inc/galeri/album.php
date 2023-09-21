<?php 
	if(isset($_GET["album"]) and isset($_FILES['dosya']))
		@include("inc/galeri/fotoEkle.php"); // Fotoðraf yükler
		
	if(isset($_GET["album"]) and isset($_POST['albumAdi']))
		@include("inc/galeri/albumGuncelle.php"); // Albüm adýný Günceller
		
	if(isset($_GET["album"]) and isset($_POST["coklu"]))
		@include("inc/galeri/fotoSil.php"); // Fotoðraf siler
?>
<div class="bolumHakkinda">
	<form method="post" target="_self" action="index.php?album=<?php echo $_GET["album"]; ?>" enctype="multipart/form-data">
    <?php
    	@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from albumler where id=".$_GET["album"]);
		$alanlar=mysql_fetch_array($sorgu);
	?>
    	<p style="text-align:center;margin:0; font-size:15px;color:#FFF;font-weight:bold; text-shadow:2px 2px 2px #000000;"><?php echo $alanlar["albumAdi"]; ?></p>
    	<h3 style="margin-top:0px;">Yeni Fotograf Yükle:</h3>
    	<div class="txtBG" style="width:420px;float:left;"><input type="file" name="dosya" style="width:420px;border:0;" /></div>
        <input type="submit" value="Fotoðrafý Yükleyin" class="button" style="margin:-1px 0 0 5px;" />
    </form>
    <form method="post" target="_self" action="index.php?album=<?php echo $_GET["album"]; ?>" style="padding-top:10px;border-top:1px solid #444;">
    	<div class="txtBG" style="width:250px;float:left;"><input type="text" name="albumAdi" style="width:250px;" value="<?php echo $alanlar["albumAdi"]; ?>"></div>
        <input type="submit" value="Albüm Adýný Güncelle" class="button" style="margin:-1.5px 0 0 5px;" />
    </form>
    <form method="post" action="index.php?album=<?php echo $_GET["album"]; ?>" target="_self">
    	<h3 style="margin:30px 0 -15px 0;">Sisteme Kayitli Fotograflar</h3>
        <input type="submit" value="Seçili Fotoðraflarý Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
        <?php
			@include('inc/baglan.php'); 
			$sorgu=mysql_query("select * from fotograflar where albumID=".$_GET["album"]);
			while($alanlar=mysql_fetch_array($sorgu))
			{
		?>
        		<div style="width:690px; height:15px; overflow:hidden;padding:5px; color:#FFF; font-size:15px;" class="etkinlik"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /> <a href="index.php?fotograf=<?php echo $alanlar['id'] ?>" target="_self"><?php echo $alanlar["url"] ;?></a></div>
        <?php } ?>
    </form>
</div>
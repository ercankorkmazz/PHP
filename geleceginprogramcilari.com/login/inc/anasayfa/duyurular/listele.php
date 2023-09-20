<?php 
	if(isset($_GET["duyurular"]) and isset($_POST["duyuruBilgi"]))
		@include("inc/anasayfa/duyurular/duyuruEkle.php"); // Duyuru ekler
	
	if(isset($_GET["duyurular"]) and isset($_POST["coklu"]))
		@include("inc/anasayfa/duyurular/duyuruSil.php"); // Duyuru siler
?>
	<form method="post" target="_self" action="index.php?duyurular">
        <input type="submit" value="Kaydet" class="Button" style="margin-top:-10px;" />
    	<h5>Duyuruya ait URL</h5>
        <input type="text" name="url" class="textbox" style="width:500px;">
    	<h5>Yeni Duyuru</h5>
        <textarea name="duyuruBilgi" class="ckeditor"></textarea>
    </form>
    <form method="post" action="index.php?duyurular" target="_self">
    	<h5 style="margin:30px 0 -15px 0;">Sisteme Kayýtlý Duyurular</h5>
        <input type="submit" value="Seçili Kayýtlarý Sil" class="Button" style="margin-top:7px;" /><br/><hr/>
        <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" id="duyurular" style="margin-top:25px;"> 
            <?php
				@include('inc/baglan.php'); 
				$sorgu=mysql_query("select * from duyurular order by id desc");
				while($alanlar=mysql_fetch_array($sorgu))
				{
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                <td style="color:#FFF;"><?php echo $alanlar["duyuru"] ;?></td>
                <td style="width:20px;"><a href="index.php?duyuru=<?php echo $alanlar["id"]; ?>"><img src="img/kalem.png" /></a></td>
            </tr>
            <?php } ?>
        </table>
    </form>
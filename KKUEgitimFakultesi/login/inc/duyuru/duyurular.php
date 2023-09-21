<?php 
	if(isset($_GET["duyurular"]) and isset($_POST["duyuruBilgi"]))
		@include("inc/duyuru/duyuruEkle.php"); // Duyuru ekler
	
	if(isset($_GET["duyurular"]) and isset($_POST["coklu"]))
		@include("inc/duyuru/duyuruSil.php"); // Duyuru siler
?>
<div class="bolumHakkinda">
	<form method="post" target="_self" action="index.php?duyurular">
    	<h3>Duyuruya ait URL:</h3>
    	<div class="txtBG" style="width:500px;float:left;"><input type="text" name="url" style="width:500px;"></div>
        <input type="submit" value="Kaydet" class="button" style="margin:-1.5px 0 0 5px;" />
    	<h3>Yeni Duyuru:</h3>
        <div class="textareaBG"><textarea name="duyuruBilgi" style="max-width:700px; min-width:700px; min-height:80px; font-size:15px;"></textarea></div>
        <div class="clear"></div>
    </form>
    <form method="post" action="index.php?duyurular" target="_self">
    	<h3 style="margin:30px 0 -15px 0;">Sisteme Kayitli Duyurular</h3>
        <input type="submit" value="Seçili Kayýtlarý Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
        <table width="99%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
            <?php
				@include('inc/baglan.php'); 
				$sorgu=mysql_query("select * from duyurular order by id desc");
				while($alanlar=mysql_fetch_array($sorgu))
				{
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                <td><strong><?php echo $alanlar["duyuru"] ;?></strong></td>
                <td style="width:20px;"><a href="index.php?duyuru=<?php echo $alanlar["id"] ;?>" target="_self"><img src="../img/kalem.png" /></a></td>
            </tr>
            <?php } ?>
        </table>
    </form>
</div>
<?php 
	if(isset($_GET["galeri"]) and isset($_POST["albumAdi"]))
		@include("inc/galeri/albumEkle.php"); // Albüm ekler
	
	if(isset($_GET["galeri"]) and isset($_POST["coklu"]))
		@include("inc/galeri/albumSil.php"); // Albüm siler
?>
<div class="bolumHakkinda">
	<form method="post" target="_self" action="index.php?galeri">
    	<h3>Fotograf Albumu Olustur:</h3>
    	<div class="txtBG" style="width:300px;float:left;"><input type="text" name="albumAdi" value="Albüm adýný yazýnýz." onclick="this.value='';" onblur="if(this.value=='')this.value='Albüm adýný yazýnýz.';" style="width:300px;"></div>
        <input type="submit" value="Kaydet" class="button" style="margin:-1.5px 0 0 5px;" />
    </form>
    <form method="post" action="index.php?galeri" target="_self">
    	<h3 style="margin:30px 0 -15px 0;">Sisteme Kayitli Albümler</h3>
        <input type="submit" value="Seçili Albümleri Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
        <table width="99%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
            <?php
				@include('inc/baglan.php'); 
				$sorgu=mysql_query("select * from albumler");
				while($alanlar=mysql_fetch_array($sorgu))
				{
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                <td><strong><?php echo $alanlar["albumAdi"] ;?></strong></td>
                <td style="width:20px;"><a href="index.php?album=<?php echo $alanlar["id"] ;?>" target="_self"><img src="../img/kalem.png" /></a></td>
            </tr>
            <?php } ?>
        </table>        
    </form>
</div>
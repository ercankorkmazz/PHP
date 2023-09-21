<?php 
	if(isset($_GET["birimler"]) and isset($_POST["coklu"]))
		@include("inc/birim/sil.php"); // Birim siler
?>
<form method="post" action="index.php?birimler" target="_self">
    	<div class="menuAdi">
        	<div class="ad">
            	<h3>Diðer Birimler</h3>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Seçili Birimleri Sil" /></li>
                	<li><a href="index.php?yeniBirim">Yeni Birim Ekle</a></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <table width="100%" border="0" cellspacing="5" cellpadding="7"> 
		<?php
			@include('inc/baglan.php'); 
			$kontrol=0;
			$sorgu=mysql_query("select * from birimler where ogretmenID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]." order by id desc");
			while($alanlar=mysql_fetch_array($sorgu))
			{
				$kontrol=1;
		?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' id="<?php echo $alanlar['id'] ?>" value="<?php echo $alanlar['id'] ?>"  /></td>
                <td><strong><?php echo "$alanlar[birim]" ;?></strong></td>
                <td style="width:20px;"><a href="index.php?birim=<?php echo $alanlar['id'] ?>" target="_self"><img src="../img/kalem.png" /></a></td>
            </tr>
        <?php }
		if($kontrol==0)
			echo "<tr><td style='padding:15px;'>Hiçbir birim bulunamadý.</td></tr>";
		 ?>
        </table>
</form>
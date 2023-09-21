<?php 
	if(isset($_GET["bolumler"]) and isset($_POST["coklu"]))
		@include("inc/bolum/sil.php"); // Bölüm siler
?>
<form method="post" action="index.php?bolumler" target="_self">
    	<div class="menuAdi">
        	<div class="ad">
            	<h3>Bölüm - Anabilim Dallarý</h3>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Seçili Bölümleri Sil" /></li>
                	<li><a href="index.php?yeniBolum">Yeni Bölüm Ekle</a></li>
                	<li><a href="index.php?ekDersAyarlari">Ek Ders Formu Ayarlarý</a></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <table width="100%" border="0" cellspacing="5" cellpadding="7"> 
		<?php
			@include('inc/baglan.php'); 
			$kontrol=0;
			$sorgu=mysql_query("select * from bolumler");
			while($alanlar=mysql_fetch_array($sorgu))
			{
				$kontrol=1;
				$sql=mysql_query("select * from kullanici where id=".$alanlar["kID"]);
				$alan=mysql_fetch_array($sql);
		?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                <td><strong><?php echo "$alanlar[bolumadi]" ;?></strong></td>
                <td style="width:400px;"><strong>Yönetici:</strong> <span style='color:#060;'>
				<?php 
					echo "$alan[kullanici]";
					if($alan["onay"]==0)
						 echo "<span style='font-size:14px;'> - [<span style='color:#000;'><strong>$alan[kadi]</strong></span>] - [<span style='color:#000;'><strong>$alan[sifre]</strong></span>]</span>";
				?></span>
                </td>
                <td style="width:20px;"><a href="index.php?bolum=<?php echo $alanlar["id"]; ?>"><img src="img/kalem.png" /></a></td>
            </tr>
        <?php }
		if($kontrol==0)
			echo "<tr><td>Hiçbir bölüm bulunamadý.</td></tr>";
		 ?>
        </table>
</form>
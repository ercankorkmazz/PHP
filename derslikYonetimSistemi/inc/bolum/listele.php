<?php 
	if(isset($_GET["bolumler"]) and isset($_POST["coklu"]))
		@include("inc/bolum/sil.php"); // B�l�m siler
?>
<form method="post" action="index.php?bolumler" target="_self">
    	<div class="menuAdi">
        	<div class="ad">
            	<h3>B�l�m - Anabilim Dallar�</h3>
            </div><!-- ��erik Sa� Ba�l�k Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Se�ili B�l�mleri Sil" /></li>
                	<li><a href="index.php?yeniBolum">Yeni B�l�m Ekle</a></li>
                	<li><a href="index.php?ekDersAyarlari">Ek Ders Formu Ayarlar�</a></li>
                </ul>
            </div><!-- ��erik Sa� Ba�l�k Sa� son -->
            <div class="clear"></div>
        </div><!-- Men� Ba�l��� son -->
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
                <td style="width:400px;"><strong>Y�netici:</strong> <span style='color:#060;'>
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
			echo "<tr><td>Hi�bir b�l�m bulunamad�.</td></tr>";
		 ?>
        </table>
</form>
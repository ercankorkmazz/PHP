<?php 
	if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin")
	{
		if(isset($_GET["derslikler"]) and isset($_POST["coklu"]))
			@include("inc/derslik/sil.php"); // derslik siler
	}
?>
 		<div class="menuAdi">
        	<div class="ad">
            <form method="post" action="index.php?derslikler" target="_self">
            	<select name="turu" id="jumpMenu" style="margin-top:1px; padding:5px;">
                  <option value="1">Sýnýf</option>
                  <option value="2">Laboratuvar</option>
                  <option value="3">Amfi</option>
                </select>
                <input type="text" name="derslikAra" style="margin-top:1px; text-align:center; padding:5px; width:100px;" />
            	<input type="submit" value="Ara" style="padding:3px;" />
            </form>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
<?php if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin"){ ?>
<form method="post" action="index.php?derslikler" target="_self">
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Seçili Derslikleri Sil" /></li>
                	<li><a href="index.php?yeniDerslik">Yeni Derslik Ekle</a></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
<?php } ?>
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <table width="100%" border="0" cellspacing="5" cellpadding="7"> 
		<?php
			@include('inc/baglan.php'); 
			$kontrol=0;
			$sorgu=mysql_query("select * from derslikler where turu like '%$_POST[turu]%' and derslikAdi like '%$_POST[derslikAra]%'");
			while($alanlar=mysql_fetch_array($sorgu))
			{
				$kontrol=1;
				switch($alanlar["turu"])
				{
					case 1:
						$tur="Sýnýf";
					break;
					case 2:
						$tur="Laboratuvar";	
					break;
					case 3:
						$tur="Amfi";
					break;
				}
		?>
            <tr>
            	<td style="width:20px;">
					<?php 
                        if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin"){
                    ?>
                    	<input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>" />
                    <?php }else{ ?>
                    	<a href="index.php?derslik=<?php echo $alanlar["id"]; ?>"><img src="img/go.png" /></a>
                    <?php } ?>
                </td>
                <td>
                	<a href="index.php?derslik=<?php echo $alanlar["id"]; ?>">
						<?php 
							echo "<strong>$alanlar[derslikAdi]</strong> &#8212; <span style='color:#060;'>&#8220;$alanlar[kisi] Kiþilik $tur&#8221;</span> &#8212; &#8220;$alanlar[yeri]&#8221;";	
						?>
                    </a>
                </td>
                
                <?php if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin"){ ?>
                	<td style="width:20px;"><a href="index.php?derslikDuzenle=<?php echo $alanlar['id'] ?>" target="_self"><img src="img/kalem.png" /></a></td>
                <?php }else{ ?>
                	<td width="50%"><?php echo "Teknik Özellikleri : <span style='color:#060;'>$alanlar[ozellik]</span>"; ?></td>
                <?php } ?>
            </tr>
        <?php }
		if($kontrol==0)
			echo "<tr><td>Hiçbir derslik bulunamadý.</td></tr>";
		 ?>
        </table>
<?php if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin"){ echo "</form>"; }?>

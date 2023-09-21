<?php 
	if(isset($_GET['S']) and isset($_GET['G']) and isset($_GET['D']) and isset($_GET['ID']) and isset($_POST['sinif']))
		@include("inc/derslik/hucreGuncelle.php"); // Hücre Günceller
	else if(isset($_GET['S']) and isset($_GET['G']) and isset($_GET['D']) and isset($_GET['ID']) and isset($_POST["coklu"]))
		@include("inc/derslik/istekSil.php"); // istek siler
	
	if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin")
	{
		if(isset($_GET['S']) and isset($_GET['G']) and isset($_GET['D']) and isset($_GET['O']) and isset($_GET['ID']))
			@include("inc/derslik/onay.php"); // Onaylar
	}
?>
 		<div class="menuAdi">
        	<div class="ad" style="width:75%;">
            <?php
            	if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin")
				{
			?>
            <form method="post" action="index.php?<?php echo "S=".$_GET["S"]."&G=".$_GET["G"]."&D=$_GET[D]&ID=$_GET[ID]"?>" target="_self">
            	<select name="sinif" id="jumpMenu" style="margin-top:1px; padding:5px;width:105px;">
                  <option style="border-bottom:1px solid #000; background:#333; color:#FFF;">Sýnýf Seçiniz</option>
                    <?php
                    	@include('inc/baglan.php'); 
						$sorgu=mysql_query("select * from bolumler where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]);
						$alanlar=mysql_fetch_array($sorgu);
						
						for($i=1;$i<=$alanlar["sure"];$i++)
							echo "<option value='$i' style='padding:3px;'>$i. Sýnýf</option>";
					?>
                </select>
                <select name="ders" id="jumpMenu" style="margin-top:1px; padding:5px;">
                	<option style="border-bottom:1px solid #000; background:#333; color:#FFF;">Ders Seçiniz</option>
					<?php
                    	@include('inc/baglan.php'); 
						$sorgu=mysql_query("select * from dersler where bolumID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]);
						while($alanlar=mysql_fetch_array($sorgu))
						{
							echo "<option value='$alanlar[id]' style='padding:2px;'>$alanlar[ders]</option>";
						}
					?>
                </select>
                <select name="dTuru" id="jumpMenu" style="margin-top:1px; padding:5px;width:105px;text-align:center;">
					<option style="padding:3px;">TS</option>
                    <option style="padding:3px;">US</option>
                </select>
            	<input type="submit" value="Ýstek Gönder" style="padding:3px;width:110px;" />
            </form>
            <?php } ?>&nbsp;
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
        <form method="post" action="index.php?<?php echo "S=".$_GET["S"]."&G=".$_GET["G"]."&D=$_GET[D]&ID=$_GET[ID]"?>" target="_self">
            <div class="link" style="width:25%;">
            	<ul>
                	<li><input type="submit" value="Seçili Ýstekleri Sil" /></li>
                	<li><a href="index.php?derslik=<?php echo $_GET["D"]; ?>">Dersliðe Dön</a></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <table width="100%" border="0" cellspacing="5" cellpadding="7"> 
            <?php
            	@include('inc/baglan.php'); 
				$sorgu=mysql_query("select * from derslikhucreleri where satirID=$_GET[ID] and G=$_GET[G]");
				$kontrol=0;
				while($alanlar=mysql_fetch_array($sorgu))
				{
					$kontrol=1;
			?>
            <tr>
            	<td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
            	<td>
                	<?php
						@include('inc/baglan.php'); 
						$sor=mysql_query("select * from dersler where id=".$alanlar["dersID"]);
						$dersler=mysql_fetch_array($sor);
						if($dersler["id"]==$alanlar["dersID"])
							$ders=$dersler["ders"];
						else
							$ders="Ders Bulunamadý";
						
						$sql=mysql_query("select * from bolumler where id=".$alanlar["bolumID"]);
						$bolum=mysql_fetch_array($sql);
                    ?>
                    	<img src="img/li.png" style="float:left;" />
                        <h3 style="font-size:12px;margin-top:4px; margin-left:5px; float:left;">
							<?php echo "$bolum[bolumadi] / $alanlar[sinif]. Sýnýf / $ders ($alanlar[dTuru] - $alanlar[oTuru]. Öðretim)"; ?>
                        </h3>
                </td>
                <?php
                    if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin")
                    {
						echo "<td style='width:30px;padding-left:10px;'>";
						$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
						if($alanlar["bolumID"]==$bolumID)
						{
				?>
                        	<a href="index.php?istekGuncelle&<?php echo "S=".$_GET["S"]."&G=".$_GET["G"]."&K=$alanlar[sinif]&H=$alanlar[id]&DID=$alanlar[dersID]&DI=$_GET[D]&DS=$_GET[ID]"; ?>">
                            	<img src="img/kalem.png" />
                            </a>
				<?php }echo "</td>"; } ?>
                <td style="width:150px; text-align:center;"><span style="color:#060;"><?php echo $alanlar["onay"]; ?></span></td>
				<?php
                    if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin")
                    {
                ?>
                	<td style="width:27px; background:none;"><a href="index.php?<?php echo "S=".$_GET["S"]."&G=".$_GET["G"]."&D=$_GET[D]&O=$alanlar[id]&ID=$_GET[ID]"?>"><img src="img/onay.png" title="Onayla" alt="Onayla"/></a></td>
                <?php }?>
            </tr>
            <?php
            } 
			if($kontrol==0)
				echo "<tr><td>Dersliðin bu saati için istek bulunamadý.</td></td>";
			?>
        </table>
        </form>

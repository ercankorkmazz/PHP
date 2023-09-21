<?php 
	if(isset($_GET['S']) and isset($_GET['G']) and isset($_GET['K']) and isset($_GET['H']) and isset($_GET['DID']) and isset($_GET['DI']) and isset($_GET['DS']) and isset($_GET['istekGuncelle']) and isset($_POST['ders']))
		@include("inc/derslik/istekGuncelle.php"); // Ders Günceller
?>
<form method="post" action="index.php?istekGuncelle&<?php echo "S=".$_GET["S"]."&G=".$_GET["G"]."&K=$_GET[K]&H=$_GET[H]&DID=$_GET[DID]&DI=$_GET[DI]&DS=$_GET[DS]"?>" target="_self"> 						
		<div class="menuAdi">
        	<div class="ad">
            	<h3>Ders Güncelle</h3>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Güncelle" style="padding:3px;width:80px;" /></li>
                    <?php
						echo "<li><a href='index.php?S=$_GET[S]&G=$_GET[G]&D=$_GET[DI]&ID=$_GET[DS]'>Geri Dön</a></li>";
					?>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <table width="100%" border="0" cellspacing="5" cellpadding="7"> 
        	<tr>
            	<td>	
                	<select name="ders" id="jumpMenu" style="margin-top:1px; padding:5px;width:100%;text-align:center;">
                	<option style="border-bottom:1px solid #000; background:#333; color:#FFF;">Ders Seçiniz</option>
					<?php
                    	@include('inc/baglan.php'); 
						$sorgu=mysql_query("select * from dersler where bolumID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]);
						while($alanlar=mysql_fetch_array($sorgu))
						{
							if($_GET["DID"]!=$alanlar["id"])
								echo "<option value='$alanlar[id]'>$alanlar[ders]</option>";
							else
								echo "<option value='$alanlar[id]' selected='selected'>$alanlar[ders]</option>";
						}
					?>
                    </select>
                    </td>
                    <?php
                    	@include('inc/baglan.php'); 
						$sorgu=mysql_query("select * from derslikhucreleri where id=".$_GET["H"]);
						$alanlar=mysql_fetch_array($sorgu);
					?>
                    <td style="width:105px;">
                        </select>
                            <select name="dTuru" id="jumpMenu" style="margin-top:1px; padding:5px;width:105px;text-align:center;">
                            <option style="padding:3px;" <?php if($alanlar["dTuru"]=="TS") echo "selected='selected'"; ?>>TS</option>
                            <option style="padding:3px;" <?php if($alanlar["dTuru"]=="US") echo "selected='selected'"; ?>>US</option>
                        </select>
                    </td>
            </tr>
        </table>
        </form>
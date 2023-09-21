<?php
	if(isset($_GET["derslikDuzenle"]) and isset($_POST['derslikAdi']))
		@include("inc/derslik/guncelle.php"); // Günceller
		
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from derslikler where id=".$_GET["derslikDuzenle"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>

<form method="post" target="_self" action="index.php?derslikDuzenle=<?php echo $_GET["derslikDuzenle"]; ?>">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>Derslikler / <span style="font-size:11px;"><?php echo $alanlar["derslikAdi"]; ?></span></h3>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Kaydet" /></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <table border="0" width="99%" cellspacing="5" cellpadding="7">
            <tr>
                <td colspan="2"><h3>Derslik Adý</h3></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="derslikAdi" value="<?php echo $alanlar["derslikAdi"]; ?>" style="width:99%;padding:5px;"></td>
            </tr>
            <tr>
            	<td style="width:160px; text-align:right;"><h3>Derslik Türü :</h3></td>
                <td>
                <select name="turu" id="jumpMenu" style="width:100%;padding:5px;">
                <?php
                	for($i=1;$i<=3;$i++)
					{
				?>
                	<option value="<?php echo $i; ?>" <?php if($alanlar["turu"]==$i) echo "selected='selected'"; ?>>
                    	<?php 
							switch($i)
							{
								case 1:
									echo "Sýnýf";
								break;	
								case 2:
									echo "Laboratuvar";
								break;	
								case 3:
									echo "Amfi";
								break;	
							}
						?>
                    </option>
                <?php } ?>
                </select>
                </td>
            </tr>
            <tr>
            	<td style="width:150px; text-align:right;"><h3>Kiþi Sayýsý :</h3></td>
                <td><input type="text" name="kisi" value="<?php echo $alanlar["kisi"]; ?>" style="width:98.7%;padding:5px;"></td>
            </tr>  
            
            <tr>
            	<td style="width:150px; text-align:right;"><h3>Yeri :</h3></td>
                <td><input type="text" name="yeri" value="<?php echo $alanlar["yeri"]; ?>" style="width:98.7%;padding:5px;"></td>
            </tr>  
            
            <tr>
            	<td style="width:150px; text-align:right;"><h3>Teknik Özellikleri :</h3></td>
                <td><textarea name="ozellik"><?php echo $alanlar["ozellik"]; ?></textarea></td>
            </tr>            
        </table>
</form>
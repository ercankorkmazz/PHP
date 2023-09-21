<?php
	if(isset($_GET["yeniDers"]) and isset($_POST['ders']))
		@include("inc/ders/kaydet.php"); // Kaydeder
?>

<form method="post" target="_self" action="index.php?yeniDers">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>Bölüme Ait Dersler / <span style="font-size:11px;">Yeni Ders</span></h3>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Kaydet" /></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <table border="0" width="100%" cellspacing="5" cellpadding="7">
            <tr>
            	<td style="width:120px;"><h3>Ders Kodu</h3></td>
                <td><h3>Ders Adý</h3></td>
                <td><h3>Öðretim Türü</h3></td>
            </tr>
            <tr>
            	<td><input type="text" name="kodu" style="width:100%;padding:5px;text-align:center;font-weight:bold;"></td>
                <td><input type="text" name="ders" style="width:100%;padding:5px;font-weight:bold;"></td>
                <td style="width:105px;">
                	<select name="oTuru" id="jumpMenu" style="margin-top:1px; padding:5px;width:105px;">
                        <option style="padding:3px;" value="1">1. Öðretim</option>
                        <option style="padding:3px;" value="2">2. Öðretim</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3"><h3>Ders Öðretmeni</h3></td>
            </tr>
          <tr>
          	<td colspan="3">
                <select name="ogretmen" style="width:100%;padding:5px;" id="select" onchange="MM_jumpMenu('parent',this,0)">
                    <option value="0" style="text-align:center;border-bottom:1px solid #000; background:#333; color:#FFF;">&#8212; Öðretmen Seçiniz &#8212;</option>
                <?php
                    @include('inc/baglan.php'); 
                    $sorgu=mysql_query("select * from ogretmenler where bolumID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]);
                    while($alanlar=mysql_fetch_array($sorgu))
                    {
                ?>
                        <option value="<?php echo $alanlar["id"]; ?>" style="padding:3px;"><?php echo $alanlar["kullanici"]; ?></option>
                <?php } ?>
               </select>
           </td>
         </tr>
        </table>
</form>
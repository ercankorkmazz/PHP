<?php
	if(isset($_GET["ders"]) and isset($_POST['ders']))
		@include("inc/ders/guncelle.php"); // G�nceller
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from dersler where id=".$_GET["ders"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<form method="post" target="_self" action="index.php?ders=<?php echo $_GET["ders"]; ?>">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>B�l�me Ait Dersler / <span style="font-size:11px;"><?php echo $alanlar["ders"];?></span></h3>
            </div><!-- ��erik Sa� Ba�l�k Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="G�ncelle" /></li>
                </ul>
            </div><!-- ��erik Sa� Ba�l�k Sa� son -->
            <div class="clear"></div>
        </div><!-- Men� Ba�l��� son -->
        <table border="0" width="99%" cellspacing="5" cellpadding="7">
            <tr>
            	<td style="width:120px;"><h3>Ders Kodu</h3></td>
                <td><h3>Ders Ad�</h3></td>
                <td><h3>��retim T�r�</h3></td>
            </tr>
            <tr>
            	<td><input type="text" name="kodu" value="<?php echo $alanlar["kodu"];?>" style="width:100%;padding:5px;text-align:center;font-weight:bold;"></td>
                <td><input type="text" name="ders" value="<?php echo $alanlar["ders"];?>" style="width:100%;padding:5px;font-weight:bold;"></td>
                <td style="width:105px;">
                	<select name="oTuru" id="jumpMenu" style="margin-top:1px; padding:5px;width:105px;">
                        <option style="padding:3px;" value="1" <?php if($alanlar["oTuru"]==1) echo "selected='selected'"; ?>>1. ��retim</option>
                        <option style="padding:3px;" value="2" <?php if($alanlar["oTuru"]==2) echo "selected='selected'"; ?>>2. ��retim</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3"><h3>Ders ��retmeni</h3></td>
            </tr>
            <tr>
                <td colspan="3">
                    <select name="ogretmen" style="width:100%;padding:5px;" id="select" onchange="MM_jumpMenu('parent',this,0)">
                        <option value="0" style="text-align:center;border-bottom:1px solid #000; background:#333; color:#FFF;">&#8212; ��retmen Se�iniz &#8212;</option>
                    <?php
                        @include('inc/baglan.php'); 
                        $sql=mysql_query("select * from ogretmenler where bolumID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]);
                        while($alan=mysql_fetch_array($sql))
                        {
                    ?>
                            <option <?php if($alanlar["ogretmen"]==$alan["id"]) echo "selected='selected'";?> value="<?php echo $alan["id"]; ?>" style="padding:3px;"><?php echo $alan["kullanici"]; ?></option>
                    <?php } ?>
                   </select>
                </td>
            </tr>
        </table>
</form>
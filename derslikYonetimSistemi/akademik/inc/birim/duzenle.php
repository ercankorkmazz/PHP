<?php
	if(isset($_GET["birim"]) and isset($_POST['birim']))
		@include("inc/birim/guncelle.php"); // G�nceller
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from birimler where id=".$_GET["birim"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<form method="post" target="_self" action="index.php?birim=<?php echo $_GET["birim"]; ?>">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>Di�er Birimler / <span style="font-size:11px;"><?php echo $alanlar["birim"];?></span></h3>
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
                <td><h3>Birim Ad�</h3></td>
            </tr>
            <tr>
                <td><input type="text" name="birim" value="<?php echo $alanlar["birim"];?>" style="width:100%;padding:5px;font-weight:bold;"></td>
                </td>
            </tr>
        </table>
</form>
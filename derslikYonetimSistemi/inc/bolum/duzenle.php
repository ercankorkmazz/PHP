<?php
	if(isset($_GET["bolum"]) and isset($_POST['ad']))
		@include("inc/bolum/guncelle.php"); // G�ncelle
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from bolumler where id=".$_GET["bolum"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<form method="post" target="_self" action="index.php?bolum=<?php echo $_GET["bolum"]; ?>">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>B�l�m - Anabilim Dall� G�ncelle</h3>
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
                <td colspan="2"><h3>B�l�m - Anabilim Dal�n�n Ad�</h3></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="ad" value="<?php echo $alanlar["bolumadi"];?>" style="width:99%;padding:5px;"></td>
            </tr>            
        </table>
</form>
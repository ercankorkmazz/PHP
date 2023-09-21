<?php
	if(isset($_GET["menu"]) and isset($_POST['baslik']))
		@include("inc/menuler/menuGuncelle.php"); // Günceller
		
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from menuler where id=".$_GET["menu"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<form method="post" target="_self" action="index.php?menu=<?php echo $_GET["menu"];?>">
<div class="bolumHakkinda" id="link" style="width:500px;">
<input type="submit" value="Kaydet" class="submit" style="float:right;margin-right:10px;" />
        <table border="0" width="99%" cellspacing="5" cellpadding="7" class="table">
            <tr>
                <td style="background:none;"><h3>Menü Adý Güncelle:</h3></td>
            </tr>
            <tr>
                <td><input type="text" name="baslik" value="<?php echo $alanlar["menu"];?>" style="width:99%;padding:5px;"></td>
            </tr>
        </table>
</form>
<?php
	if(isset($_GET["yeniMenu"]) and isset($_POST['baslik']))
		@include("inc/menuler/menuKaydet.php"); // Kaydeder
?>
<form method="post" target="_self" action="index.php?yeniMenu">
<div class="bolumHakkinda" id="link" style="width:500px;">
<input type="submit" value="Kaydet" class="submit" style="float:right;margin-right:10px;" />
        <table border="0" width="99%" cellspacing="5" cellpadding="7" class="table">
            <tr> 
                <td style="background:none;"><h3>Yeni Menü Adi:</h3></td>
            </tr>
            <tr>
                <td><input type="text" name="baslik" style="width:99%;padding:5px;"></td>
            </tr>
        </table>
</div>
</form>
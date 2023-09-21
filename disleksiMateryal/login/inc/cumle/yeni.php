<?php
	if(isset($_GET["yeni"]) and isset($_POST['cumle']))
		@include("inc/cumle/kaydet.php");
?>

<form method="post" target="_self" action="index.php?yeni">
        <table border="0" width="99%" cellspacing="5" cellpadding="7">
            <tr>
                <td>
                	<h3 style="color:#FFF;float:left;">Cümle yazýnýz</h3>
                    <input type="submit" value="Kaydet" class="button" style="float:right;" />
                </td>
            </tr>
            <tr>
                <td><input type="text" name="cumle" style="width:99%;padding:5px;"></td>
            </tr>
        </table>
</form>
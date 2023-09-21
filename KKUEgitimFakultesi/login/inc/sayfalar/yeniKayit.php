<?php
	if(isset($_GET["yeniSayfa"]) and isset($_POST['baslik']))
		@include("inc/sayfalar/kaydet.php"); // Kaydeder
?>
<form method="post" target="_self" action="index.php?yeniSayfa">
<div class="bolumHakkinda" id="link" style="width:900px;">
<input type="submit" value="Kaydet" class="submit" style="float:right;margin-right:10px;" />
        <table border="0" width="99%" cellspacing="5" cellpadding="7" class="table">
            <tr>
                <td style="background:none;"><h3>Sayfa Adi:</h3></td>
            </tr>
            <tr>
                <td><input type="text" name="baslik" style="width:100%;padding:5px;"></td>
            </tr>
            <tr>
                <td style="background:none;"><h3>Baglanti Adresi: </h3></td>
            </tr>
            <tr>
                <td><input type="text" name="url" style="width:100%;padding:5px;background:#0CF;"><p style="margin-top:5px;color:#000;"><input type="checkbox" name="onay" /><strong>Sayfayý baðlantý olarak kullanmak için onay kutusunu iþaretleyin.</strong></p></td>
            </tr>
            <tr>
                <td style="background:none;"><h3>Içerik:</h3></td>
            </tr>
            <tr>
                <td><textarea class="ckeditor" name="icerik"></textarea></td>
            </tr>
        </table>
        </div>
</form>
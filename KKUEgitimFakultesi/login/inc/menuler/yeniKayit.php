<?php
	if(isset($_GET["yeniAltmenu"]) and isset($_POST['baslik']))
		@include("inc/menuler/kaydet.php"); // Kaydeder
	
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from menuler where id=".$_GET["yeniAltmenu"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<form method="post" target="_self" action="index.php?yeniAltmenu=<?php echo $_GET["yeniAltmenu"];?>">
<div class="bolumHakkinda" id="link" style="width:900px;">
    <h3 style="float:left;"><?php echo $alanlar["menu"];?></span> / <span style="font-size:12px;">Yeni Alt Menü</span></h3>
    <input type="submit" value="Kaydet" class="submit"  />
        <table border="0" width="99%" cellspacing="5" cellpadding="7" class="table">
            <tr>
                <td style="background:none;"><h3>Alt Menü Adi:</h3></td>
            </tr>
            <tr>
                <td><input type="text" name="baslik" style="width:99%;padding:5px;"></td>
            </tr>
            <tr>
                <td style="background:none;"><h3 style="float:left;">Baglanti Adresi: </h3></td>
            </tr>
            <tr>
                <td><input type="text" name="url" style="width:100%;padding:5px;background:#0CF;"><p style="margin-top:5px;color:#000;"><input type="checkbox" name="onay" /><strong>Sayfayý baðlantý olarak kullanmak için onay kutusunu iþaretleyin.</strong></p></td>
            </tr>
            <tr>
                <td style="background:none;"><h3>Içerik</h3></td>
            </tr>
            <tr>
                <td><textarea class="ckeditor" name="icerik"></textarea></td>
            </tr>
        </table>
</div>
</form>
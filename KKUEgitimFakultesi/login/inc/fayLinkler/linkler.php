<?php
	if(isset($_GET["faydaliLinkler"]) and isset($_POST["fayLinkAdres"]))
		@include("inc/fayLinkler/linkEkle.php"); // Faydal� Link Ekler
	
	if(isset($_GET["faydaliLinkler"]) and isset($_POST["coklu"]))
		@include("inc/fayLinkler/linkSil.php"); // Faydal� Link Sil
?>
<div class="bolumHakkinda">
	<h3>Yeni Baglanti Ekle:</h3>
    <form method="post" action="#" target="_self">
    	<div class="txtBG" style="float:left; width:298px;"><input type="text" name="fayLinkBaslik" value="Ba�lant�ya ait ba�l��� buraya yaz�n�z." onclick="this.value='';" onblur="if(this.value=='')this.value='Ba�lant�ya ait ba�l��� buraya yaz�n�z.';" style="width:298px;text-align:right;"></div>
        <div class="txtBG" style="float:left; width:298px; margin-left:5px;"><input type="text" name="fayLinkAdres" value="Ba�lant� adresini buraya yaz�n�z." onclick="this.value='';" onblur="if(this.value=='')this.value='Ba�lant� adresini buraya yaz�n�z.';" style="width:298px;text-align:right;"></div>
        <input type="submit" value="Kaydet" class="button" style="margin:-1.5px 0 0 5px;" />
        <div class="clear"></div>
    </form>
    <form method="post" action="#" target="_self">
    	<h3 style="margin:30px 0 -15px 0;">Sisteme Kayitli Baglantilar</h3>
        <input type="submit" value="Se�ili Ba�lant�lar� Sil" class="button" style="margin:5px 0 0 5px; float:right;" /><br/><hr/>
        <?php
			@include('inc/baglan.php'); 
			$sorgu=mysql_query("select * from faydalilinkler");
			while($alanlar=mysql_fetch_array($sorgu))
			{
		?>
        		<div style="width:690px; height:15px; overflow:hidden;padding:5px; color:#FFF; font-size:15px;text-shadow: 2px 2px 2px #444;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /><?php echo " <b>".$alanlar["baslik"]."</b> - &#8220;".$alanlar["link"]."&#8221;" ;?></div>
        <?php } ?>
    </form>
</div>
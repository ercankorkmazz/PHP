<?php 
	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from tasarim where id=1");
	$alanlar=mysql_fetch_array($sorgu);
	
	if(isset($_GET["tasarim"]) and isset($_POST["fakulte"]))
		@include("inc/tasarim/fakulteGuncelle.php"); // Fakülte bilgisi günceller
	if(isset($_GET["tasarim"]) and isset($_POST["bolum"]))
		@include("inc/tasarim/bolumGuncelle.php"); // Bölüm bilgisi günceller
	if(isset($_GET["tasarim"]) and isset($_POST["altBilgi"]))
		@include("inc/tasarim/altBilgiGuncelle.php"); // Alt bilgisi günceller
	if(isset($_GET["tasarim"]) and isset($_POST["facebookURL"]))
		@include("inc/tasarim/facebookGuncelle.php"); // Facebook adresi günceller
	if(isset($_GET["tasarim"]) and isset($_POST["twitterURL"]))
		@include("inc/tasarim/twitterGuncelle.php"); // Facebook adresi günceller
	if(isset($_GET["tasarim"]) and isset($_POST["aSLink"]))
		@include("inc/tasarim/aSBaglantiGuncelle.php"); // Anasayfa Baðlantý Bilgileri Güncelle
	if(isset($_GET["tasarim"]) and isset($_POST["renk"]))
		@include("inc/tasarim/renkGuncelle.php"); // Renk Güncelle
?>
<div class="fakulteAdi">
	<form method="post" target="_self" action="index.php?tasarim" style="margin-top:10px;">
   	  <div id="subEmail" class="txtBG" style="float:left; width:400px;">
          <select id="renk" name="renk" onchange="checkFilled();" style="width:400px; height:23px; border:0; text-shadow:#999 1px 1px 1px; text-align:center;background:none;">
            <option>- Renk Seçiniz -</option>
            <option>- Mavi -</option>
            <option>- Mor -</option>
            <option>- Yeþil -</option>
            <option>- Kýrmýzý -</option>
            <option>- Turuncu -</option>
          </select>
      </div>
        <input type="submit" value="Güncelle" class="button" style="margin:-1.5px 0 0 5px;" />
    </form>
</div><!-- Bölüm Adý -->
<div class="fakulteAdi">
	<h3>Fakülte Adi:</h3>
	<form method="post" target="_self" action="index.php?tasarim">
   	  <div class="txtBG" style="float:left; width:400px;"><input type="text" name="fakulte" value="<?php echo $alanlar['fakulte']; ?>" style="width:400px;text-align:right;"></div>
        <input type="submit" value="Güncelle" class="button" style="margin:-1.5px 0 0 5px;" />
    </form>
</div><!-- Fakülte Adý -->
<div class="fakulteAdi">
	<h3>Bölüm Adi:</h3>
	<form method="post" target="_self" action="index.php?tasarim">
   	  <div class="txtBG" style="float:left; width:400px;"><input type="text" name="bolum" value="<?php echo $alanlar['bolum']; ?>" style="width:400px;text-align:right;"></div>
        <input type="submit" value="Güncelle" class="button" style="margin:-1.5px 0 0 5px;" />
    </form>
</div><!-- Bölüm Adý -->
<div class="fakulteAdi">
	<h3>Alt Bilgi:</h3>
	<form method="post" target="_self" action="index.php?tasarim">
   	  <div class="txtBG" style="float:left; width:400px;"><input type="text" name="altBilgi" value="<?php echo $alanlar['alt']; ?>" style="width:400px;text-align:right;"></div>
        <input type="submit" value="Güncelle" class="button" style="margin:-1.5px 0 0 5px;" />
    </form>
</div><!-- Bölüm Adý -->
<div class="fakulteAdi">
	<h3>Facebook Adresi:</h3>
	<form method="post" target="_self" action="index.php?tasarim">
   	  <div class="txtBG" style="float:left; width:400px;"><input type="text" name="facebookURL" value="<?php echo $alanlar['facebook']; ?>" style="width:400px;text-align:right;"></div>
        <input type="submit" value="Güncelle" class="button" style="margin:-1.5px 0 0 5px;" />
    </form>
</div><!-- Bölüm Adý -->
<div class="fakulteAdi">
	<h3>Twitter Adresi:</h3>
	<form method="post" target="_self" action="index.php?tasarim">
   	  <div class="txtBG" style="float:left; width:400px;"><input type="text" name="twitterURL" value="<?php echo $alanlar['twitter']; ?>" style="width:400px;text-align:right;"></div>
        <input type="submit" value="Güncelle" class="button" style="margin:-1.5px 0 0 5px;" />
    </form>
</div><!-- Bölüm Adý -->
<div class="bolumHakkinda">
	<h3>Fakülteye Baglanti:</h3>
    <form method="post" action="index.php?tasarim" target="_self">
    	<div class="txtBG" style="float:left; width:292px;"><input type="text" name="aSBaslik" value="<?php echo $alanlar['aSBaslik']; ?>" style="width:292px;text-align:right;"></div>
        <div class="txtBG" style="float:left; width:292px; margin-left:5px;"><input type="text" name="aSLink" value="<?php echo $alanlar['aSLink']; ?>" style="width:292px;text-align:right;"></div>
        <input type="submit" value="Güncelle" class="button" style="margin:-1px 0 0 5px;" />
        <div class="clear"></div>
    </form>
</div>
<script>
	function checkFilled() {
    var inputVal = document.getElementById("renk").value;
    if (inputVal == "- Renk Seçiniz -") {
        document.getElementById("subEmail").style.backgroundColor = "<?php echo $alanlar['renk']; ?>";
    }
	else if (inputVal == "- Mavi -") {
        document.getElementById("subEmail").style.backgroundColor = "#1D82C6";
    }
	else if (inputVal == "- Mor -") {
        document.getElementById("subEmail").style.backgroundColor = "#925CA2";
    }
	else if (inputVal == "- Yeþil -") {
        document.getElementById("subEmail").style.backgroundColor = "#6C0";
    }
	else if (inputVal == "- Kýrmýzý -") {
        document.getElementById("subEmail").style.backgroundColor = "#F00";
    }
	else if (inputVal == "- Turuncu -") {
        document.getElementById("subEmail").style.backgroundColor = "#F90";
    }
}

checkFilled();
</script>
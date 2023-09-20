<style>
	section#kaydol { 
		background-color: #C70;
		padding:50px 40px 50px 50px;
		height:auto;
		min-height:573px;
	}
	p{color:#FFF;padding:0;}
</style>
<?php
	if(isset($_GET["uyelik"]) and isset($_POST["adSoyad"]))
		include("inc/ekler/uyeOl.php");
?>
<section id="kaydol">
<div style="width:738px;height:300px;margin:35px 0 0 78px;padding:0 20px 0 20px; background:url(img/overlay.png);overflow:hidden; float:left;color:#FFF;">
	<h3 style="color:#fff;">Üyelik Hakkýnda</h3><hr />
    <?php 
            echo $kayit["uyelikHakkinda"];
    ?>
</div>
<div style="float:left; margin-left:100px;">
    <form id="form2" name="form2" method="post" action="index.php?uyelik">
        <table style="width:320px;height:350px;" border="0">
            <tr>
              <td colspan="2" align="right"><h3 style="color:#FFF;padding-right:63px;text-shadow:#000 0px 0px 2px;">Üyelik Formu</h3></td>
            </tr>
            <tr>
              <td style="color:#fff;padding-right:10px;text-shadow:#222 0px 0px 3px;" align="right">Ad Soyad:</td>
              <td><input type="text" class="textbox" name="adSoyad"/></td>
            </tr>
            <tr>
              <td style="color:#fff;padding-right:10px;text-shadow:#222 0px 0px 3px;" align="right">E-Posta:</td>
              <td><input type="text" class="textbox" name="email" /></td>
            </tr>
            <tr><td colspan="2" style="padding:0;margin:0;height:10px;"></td></tr>
            <tr>
              <td style="color:#fff;padding-right:10px;text-shadow:#222 0px 0px 3px;" align="right">Kullanýcý Adý:</td>
              <td><input type="text" class="textbox" name="kadi" style="font-weight:bold;"/></td>
            </tr>
            <tr>
              <td style="color:#fff;padding-right:10px;text-shadow:#222 0px 0px 3px;" align="right">Þifre:</td>
              <td><input type="password" class="textbox" name="sifre" /></td>
            </tr>
            <tr>
              <td style="color:#fff;padding-right:10px;text-shadow:#222 0px 0px 3px;" align="right">Þifre Tekrarý:</td>
              <td><input type="password" class="textbox" name="sifreTekrar" /></td>
            </tr>
            <tr>
              <td colspan="2" align="right" style="padding-right:10px;"><input type="submit" class="Button" name="Submit" value="Kaydol" /></td>
            </tr>
      </table>
    </form>
</div>
</section>
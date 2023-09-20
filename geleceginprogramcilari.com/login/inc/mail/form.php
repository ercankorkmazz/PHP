<?php
	if(isset($_GET["sifremiUnuttum"]) and isset($_POST["kadi"]))
		include("inc/mail/gonder.php");
?>
<div class="girisIcon">
	<a href="../index.php"><img src="img/home-icon.png" /></a>
</div>
<div id="giris">
    <center>
    	<h3 style="color:#FFF;margin-left:72px;">Üyeliðini Doðrula</h3>
        <form id="form1" name="form1" method="post" action="index.php?sifremiUnuttum">
          <table width="100%" border="0" style="margin-top:20px;" cellspacing="10">
            <tr>
              <td align="right" style="width:125px;"><span style="text-shadow:#000 0px 0px 3px;font-size:15px;color:#FFF;">Kullanýcý Adý</span></td>
              <td><label for="kadi"></label>
              <input type="text" class="textbox" name="kadi" style="text-align:center;font-weight:bold;width:135px;" /></td>
            </tr>
            <tr>
              <td align="right"><span style="text-shadow:#000 0px 0px 3px;font-size:15px;color:#FFF;">E-Posta Adresi </span></td>
              <td><input type="text" class="textbox" name="eposta" style="text-align:center;width:135px;" /></td>
            </tr>
            <tr>
              <td colspan="2"><center><input type="submit" class="Button" name="Submit" value="Doðrula" style="float:left; margin-left:213px;" /></center></td>
            </tr>
            <tr>
              <td colspan="2" style="padding-right:36px;color:#FFF;font-size:14px;text-shadow:#000 0px 0px 3px;" align="right"><?php if(isset($_COOKIE['girisBilgi'])) echo $_COOKIE['girisBilgi']; ?></td>
            </tr>
          </table>
        </form>
    </center>
</div>
<div id="giris" style="margin-top:10px;height:auto;padding:10px;color:#FFF;" align="center">
	Doðrulama iþleminin ardýndan kullanýcý bilgileriniz sisteme kayýtlý E-Posya adresinize gönderilecektir.
</div>
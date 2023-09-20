<div class="girisIcon">
	<a href="../index.php"><img src="img/home-icon.png" /></a>
</div>
<div id="giris">
    <center>
    	<h3 style="color:#FFF;margin-left:35px;">Yönetim Paneline Giriþ</h3>
        <form id="form1" name="form1" method="post" action="index.php?oturumAc">
          <table width="100%" border="0" style="margin-top:20px;" cellspacing="10">
            <tr>
              <td align="right" style="width:125px;"><span style="text-shadow:#000 0px 0px 3px;font-size:16px;color:#FFF;">Kullanýcý Adý</span></td>
              <td><label for="kadi"></label>
              <input type="text" class="textbox" name="kadi" style="text-align:center;font-weight:bold;width:135px;" /></td>
            </tr>
            <tr>
              <td align="right"><span style="text-shadow:#000 0px 0px 3px;font-size:16px;color:#FFF;">Þifre </span></td>
              <td><input type="password" class="textbox" name="sifre" style="text-align:center;width:135px;" /></td>
            </tr>
            <tr>
              <td colspan="2"><center><input type="submit" class="Button" name="Submit" value="Giriþ Yap" style="float:left; margin-left:206px;" /></center></td>
            </tr>
            <tr>
              <td colspan="2" style="padding-right:36px;color:#FFF;font-size:15px;text-shadow:#000 0px 0px 3px;" align="right"><?php if(isset($_COOKIE['girisBilgi'])) echo $_COOKIE['girisBilgi']; ?></td>
            </tr>
          </table>
        </form>
    </center>
</div>
<?php if(isset($_COOKIE['girisBilgi'])){ ?>
    <div id="giris" style="margin-top:10px;height:auto;padding:10px;" align="center">
        <a href="index.php?sifremiUnuttum" style="color:#FFF;font-size:14px;text-decoration:none;">Þifreni mi unuttun?</a>
    </div>
<?php } ?>
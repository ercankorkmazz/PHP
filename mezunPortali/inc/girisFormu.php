<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
  	<div class="yonetim">
     <div class="giris" style="width:280px;">
     <h3 style="margin-right:15px;text-shadow:none;">Mezun Portalý Giriþ</h3>
	  <form method="post" action="index.php?giris" target="_self" style="margin:10px auto 0 auto;">
      <table border="0" style="width:280px;margin:0;" cellspacing="5">
      <tr>
        <td align="center" style="background:#FFF; border-radius: 5px;padding:5px;">
        	<select name="tur" id="tur" style="width:100%;">
        	  <option value="0">Mezun</option>
        	  <option value="0">Yönetici</option>
        	  <option value="1">Öðretim Üyesi</option>
      	  </select></td>
      </tr>
      <tr>
        <td style="background:#FFF; border-radius: 5px;padding:5px;"><input type="text" style="border:0;width:100%;" name="kadi" placeholder="Kullanýcý Adý" /></td>
      </tr>
      <tr>
        <td style="background:#FFF; border-radius: 5px;padding:5px;"><input style="border:0;width:100%;" type="password" name="sifre" placeholder="Þifre" /></td>
      </tr>
      <tr>
        <td height="48" colspan="2" align="right"><input type="submit" value="Giriþ Yap" class="button" />
      </tr>
      <tr>
        <td height="20" style="padding-left:20px; color:#FFF;">
	  		<h4 style="margin:0;">&nbsp;<?php echo $_COOKIE["bilgi"]; ?></h4>
       </td></tr>
        </table>
      </form>
    </div><!-- GÝRÝS SON -->
    <div class="giris" style="margin-top:-15px;">
    <h3 style="margin:5px 15px 5px 0;text-shadow:none;"><a href="index.php?uyeOl" style="color:#FFF; text-decoration:none;">Üye Ol</a></h3>
    	<table border="0" style="text-align:right;" align="right">
      	<tr>
        	<td><a href="index.php?uyeOl" style="float:left;color:#FFF; text-decoration:none;">Mezun Portalýna üye deðilseniz <span style="text-decoration:underline">týklayýn.</span></a></td>
        </tr>
      </table>
      <div class="clear"></div>
    </div>
    <div class="giris" style="margin-top:-15px;">
    <h3 style="margin:5px 15px 5px 0;text-shadow:none;">Þifremi Unuttum</h3>
    	<table border="0" align="center">
      	<tr>
        	<td><a href="index.php?sifremiUnuttum" style="float:left;color:#FFF; text-decoration:none;">"Kullanýcý Adý" - "Þifre" bilgileriniz için <span style="text-decoration:underline">týklayýn.</span></a></td>
        </tr>
      </table>
    </div>
   </div>  
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
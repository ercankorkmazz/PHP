<?php
	setcookie("mailBilgi","");
	
	if(isset($_GET["sifremiUnuttum"]) and isset($_POST["mail"]))
		include("inc/mail/gonder.php");
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
  	<div class="yonetim">
     <div class="giris">
     <h3 style="margin-left:5px;text-shadow:none;text-align:left;">Þifremi Unuttum</h3>
	  <form method="post" action="index.php?sifremiUnuttum" target="_self" style="margin:10px auto 0 auto;">
      <table border="0" style="width:250px;" border="0" cellspacing="5">
      	  <tr>
          	<td align="left" style="background:#FFF; border-radius: 5px;padding:5px;">
                <select name="tur" id="tur" style="width:170px;padding:4px;">
                  <option value="0">Mezun</option>
                  <option value="0">Yönetici</option>
                  <option value="1">Öðretim Üyesi</option>
                </select>
            </td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right" style="background:#FFF; border-radius: 5px;padding:5px;">
                <input type="text" name="mail" placeholder="Mail adresinizi yazýnýz" style="width:170px; border:0;" />
            </td>
            <td style="" align="left">
                <input type="submit" value="Gönder" class="button" />
            </td>
          </tr>
          <tr>
            <td height="20" colspan="2" style="padding-left:20px; color:#FFF;padding-top:5px;">
                <h4 style="margin:0 0 0 -20px;" align="center"><?php echo $_COOKIE["mailBilgi"]; ?></h4>
           </td>
          </tr>
        </table>
      </form>
    </div><!-- GÝRÝS SON -->
    <div class="giris" style="padding:0;">
    	<table width="100%" border="0" align="center">
      	<tr>
        	<td><a href="index.php?girisYap" style="padding:10px; display:block; text-align:center; color:#FFF; text-decoration:none;">Giriþ Yap</a></td>
        </tr>
      </table>
    </div>
   </div>  
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
<?php
	setcookie("mailBilgi","");
	
	if(isset($_GET["sifremiUnuttum"]) and isset($_POST["mail"]))
		include("inc/mail/gonder.php");
?>
<div class="bolum3">
	<img src="../img/icon.png" />
    <div class="giris" style="width:400px;">
	  <form method="post" action="index.php?sifremiUnuttum" target="_self" style="margin-top:20px;width:400px;">
      <table border="0" cellspacing="5" style="width:300px; margin:auto; margin-top:-10px;">
      <tr>
      	<td colspan="2">
        	<h4 align="left" style="color:#EEE; margin-bottom:5px;">Mail Adresi:</h4>
        </td>
      </tr>
      <tr>
        <td align="right" style="background:#FFF; border-radius: 5px;padding:5px;">
        	<input type="text" name="mail" style="width:290px; border:0;" />
        </td>
        <td style="" align="left">
        	<input type="submit" value="Ara" class="button" />
        </td>
      </tr>
      <tr>
        <td height="20" colspan="2" style="padding-left:20px; color:#FFF;">
	  		<h4 style="margin:0 0 0 -20px;" align="left"><?php echo $_COOKIE["mailBilgi"]; ?></h4>
       </td></tr>
        </table>
      </form>
    </div><!-- GÝRÝS SON -->
    <div class="giris">
    	<table border="0" align="center">
      	<tr>
        	<td><a href="index.php" style="padding:15px; color:#FFF; text-decoration:none;">Giriþ Yap</a></td>
        </tr>
      </table>
    </div>
</div><!-- BÖLÜM 3 SON -->
<span style="
	color: #666;
	float: left;
	width: 700px;
	font-size:13px;
    margin:10px;">&copy; 2014 Tüm Haklarý Bilgisayar ve Öðretim Teknolojileri Eðitimi Bölümüne Aittir.</span>
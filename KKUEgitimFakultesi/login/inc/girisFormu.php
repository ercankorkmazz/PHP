<div class="bolum3">
	<a href="../index.php"><img src="../img/icon.png" /></a>
    <div class="giris">
	  <h2 style="color:#FFF;margin-right:5px;padding:10px;">Yonetim Paneli Giris</h2>
	  <form method="post" action="index.php?giris" target="_self" style="margin-top:20px;">
      <table border="0" style="width:330px; margin:auto; margin-top:-10px;" cellspacing="5">
      <tr>
        <td width="162" height="24" style="color:#FFF;" align="right"><h4 style="margin:0;">Kullanici Adi : </h4></td>
        <td width="189" align="left" style="background:#FFF; border-radius: 5px;padding:5px; width:150px;"><input type="text" style="border:0;" name="kadi" /></td>
      </tr>
      <tr>
        <td height="24" style="color:#FFF;" align="right"><h4 style="margin:0;">Sifre :</h4></td>
        <td align="left" style="background:#FFF; border-radius: 5px;padding:5px; width:150px;"><input style="border:0;" type="password" name="sifre" /></td>
      </tr>
      <tr>
        <td height="48" colspan="2" style="padding-left:250px;" align="left"><input type="submit" value="Giri� Yap" class="button" />
      </tr>
      <tr>
        <td height="20" colspan="2" style="padding-left:20px; color:#FFF;">
	  		<h4 style="margin:0;">&nbsp;<?php echo $_COOKIE["bilgi"]; ?></h4>
       </td></tr>
        </table>
      </form>
    </div><!-- G�R�S SON -->
</div><!-- B�L�M 3 SON -->
<span style="
	color: #666;
	float: left;
	width: 700px;
	font-size:13px;
    margin:10px;">&copy; 2014 T�m Haklar� Bilgisayar ve ��retim Teknolojileri E�itimi B�l�m�ne Aittir.</span>
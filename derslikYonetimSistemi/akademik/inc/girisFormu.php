<div class="bolum3">
	<img src="../img/icon.png" />
    <div style="margin-right:-134px;">
        <div style="width:455px; margin:auto;">
            <div class="giris" style="padding-bottom:0;float:left;">
              <h2>��retmen Giri�i</h2>
              <form method="post" action="index.php?giris" target="_self" style="margin-top:20px;">
              <table border="0" cellspacing="5" style="width:300px;height:120px; margin:auto; margin-top:-10px;margin-left:-60px;">
              <tr>
                <td height="24" style="color:#FFF;" align="right"><h4 style="margin:0;">Kullan�c� Ad� : </h4></td>
                <td align="left" style="background:#FFF; border-radius: 5px;padding:5px; width:100px;"><input type="text" style="border:0;" name="kadi" /></td>
              </tr>
              <tr>
                <td height="24" style="color:#FFF;" align="right"><h4 style="margin:0;">�ifre :</h4></td>
                <td align="left" style="background:#FFF; border-radius: 5px;padding:5px; width:100px;"><input style="border:0;" type="password" name="sifre" /></td>
              </tr>
              <tr>
                <td height="48" colspan="2" style="padding-left:250px;" align="left"><input type="submit" value="Giri� Yap" class="button" />
              </tr>
              <tr>
                <td height="20" colspan="2" style="color:#FFF;">
                    <h4 style="margin:0; float:right;">&nbsp;<?php echo $_COOKIE["bilgi"]; ?></h4>
                </td>
              </tr>
           </table>
           </form>
            </div><!-- G�R�S SON -->
            <div class="giris" style="padding:0;width:120px;float:left; margin-left:10px;">
                <table border="0" align="center">
                <tr>
                    <td><a href="index.php" style="color:#FFF;width:100%; display:block; padding:10px; text-decoration:none;">��retmen Giri�i</a></td>
                </tr>
              </table>
            </div>
            <div class="giris" style="padding:0;width:120px;float:left; margin-left:10px;">
                <table border="0" align="center">
                    <tr>
                        <td><a href="../index.php" style="color:#FFF;width:100%; display:block; padding:10px; text-decoration:none;">Y�netici Giri�i</a></td>
                    </tr>
                </table>
            </div>
    	</div>
        <div class="clear"></div>
    </div>
    <?php
    	if(!empty($_COOKIE["bilgi"]))
		{
	?>
    <div class="giris">
    	<table border="0" align="center">
      	<tr>
        	<td><a href="index.php?sifremiUnuttum" style="float:left;color:#FFF; text-decoration:none;">"Kullan�c� Ad�" - "�ifre" bilgileriniz i�in <span style="text-decoration:underline">t�klay�n.</span></a></td>
        </tr>
      </table>
    </div>
    <?php }?>
</div><!-- B�L�M 3 SON -->
<span style="
	color: #666;
	float: left;
	width: 700px;
	font-size:13px;
    margin:10px;">&copy; 2014 T�m Haklar� Bilgisayar ve ��retim Teknolojileri E�itimi B�l�m�ne Aittir.</span>
<style>
	section#kaydol { 
		background-color: #C70;
		padding:50px 40px 50px 50px;
		height:auto;
	}
	.hakkimizda{
		background:url(img/overlay.png);
		width: 1250px;
		padding:10px;
		padding-top:25px;
		color: #FFF;
		-webkit-border-radius: 2px; 
    	-moz-border-radius: 2px;
		border-radius: 2px;
	}
</style>
<?php
	if(isset($_GET["sifreYenile"]) and isset($_POST["kadi"]))
		include("inc/mail/gonder.php");
?>
<section id="kaydol">
	<h2 style="color:#fff;font-size:30px;float:right;margin-right:28px;">�YEL���N� DO�RULA</h2>
	<div class="clear"></div>
  <div class="hakkimizda">
    <form id="form2" name="form2" method="post" action="index.php?sifreYenile">
        <table width="100%" border="0" style="height:140px;">
            <tr>
              <td style="color:#fff;text-shadow:#222 0px 0px 3px;width:100px;padding-right:10px;" align="right">Kullan�c� Ad�:</td>
              <td style="width:277px;"><input type="text" class="textbox" name="kadi"/></td>
              <td rowspan="3" valign="top">
              	<h4 style="color:#FFF;padding:0;margin:0;text-shadow:#000 0px 0px 2px;">Do�rulama ��lemi Hakk�nda</h4>
                <hr style="margin:5px 0 5px 0;padding:0;" />
                <p style="padding:0;text-shadow:#000 0px 0px 2px;">* �yelik do�rulama i�lemi �yelerimizin kullan�c� bilgilerinin g�venli�i i�in haz�rlanm��t�r. <br>* Do�rulama i�leminin ard�ndan kullan�c� bilgileriniz sisteme kay�tl� E-Posya adresinize g�nderilecektir.</p>
              </td>
            </tr>
            <tr>
              <td style="color:#fff;text-shadow:#222 0px 0px 3px;padding-right:10px;" align="right">E-Posta:</td>
              <td><input type="text" class="textbox" name="mail" /></td>
            </tr>
            <tr>
              <td colspan="2" align="right" style="padding-right:56px;"><input type="submit" class="Button" name="Submit" value="Do�rula" /></td>
            </tr>
      </table>
    </form>
</div>
</section>
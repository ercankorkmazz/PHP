  <?php
  	if(isset($_POST["tcNoKontrol"]))
		include("inc/mezun/mezunSorgu.php");
	if(isset($_POST["adSoyad"]))
		include("inc/mezun/mezunGuncelle.php");
	if(isset($_GET["iptal"]))
	{
		setcookie("kkuMezunkID","");
		header("location:index.php?uyeOl");
	}
  ?>

<div class="icerik">
  <div class="icerikSol">
  <?php if((!isset($_COOKIE["kkuMezunkID"])) or ($_COOKIE["kkuMezunkID"]=="")){?>
  <div class="yonetim" style="margin:0;">
     <h3 style="color:#FFF;margin-top:40px;text-shadow:none;">Kýrýkkale Üniversitesi Mezunu Olduðunu Doðrula</h3>
     <div class="giris" style="margin-top:10px;width:300px;height:105px;">
	  <form method="post" action="index.php?uyeOl" target="_self" style="margin:10px auto 0 auto;">
      <table border="0" style="width:290px;" cellspacing="5">
      <tr>
        <td height="24" style="color:#FFF; width:140px;" align="right"><h4 style="margin:0;">TC Kimlik No: </h4></td>
        <td align="left" style="background:#FFF; border-radius: 5px;padding:5px; width:150px;"><input type="text" style="border:0;" name="tcNoKontrol" maxlength="11"/></td>
      </tr>
      <tr>
        <td height="48" colspan="2" align="right"><input type="submit" value="Doðrula" class="button" />
      </tr>
      <tr>
        </table>
      </form>
    </div><!-- GÝRÝS SON -->
    <h4 style="margin:0;color:#FFF;">&nbsp;<?php echo $_COOKIE["mezunBilgi"]; ?></h4>
   </div>  
  <?php 
  }else
  {
	@include('inc/baglan.php');
	$sec=@mysql_query("select * from mezun where id=".$_COOKIE["kkuMezunkID"],$baglan);
	$alanlar=@mysql_fetch_array($sec);
  ?>
  <form action="index.php?uyeOl" method="post">
  	<table width="100%" border="0" class="uyeFormu">
      <tr>
      	<td colspan="5" style="border:0;text-align:left;">
        	<h3 style="margin-top:0;float:left;">Kimlik Bilgileri</h3>
            <a href="index.php?uyeOl&iptal"><input type="button" value="Üyeliði Ýptal Et" class="button" style="margin-top:-10px;padding:5px; background:#F00; color:#FFF; width:150px; float:right;"/></a>
            <div class="clear"></div>
            <hr style="margin-top:0px;">
        </td>
      </tr>
      <tr>
        <td style="width:170px;border:0;">T.C. Kimlik No <span style="color:red;">(*)</span>: </td>
        <td><input type="text" name="tcNo" value="<?php echo $alanlar["tcNo"]; ?>" style="width:100%;"></td>
        <td style="width:0px;border:0;">&nbsp;</td>
        <td style="width:170px;border:0;">Okul No <span style="color:red;">(*)</span>: </td>
        <td><input type="text" name="okulNo" value="<?php echo $alanlar["okulNo"]; ?>" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Adý Soyadý <span style="color:red;">(*)</span></span>: </td>
        <td><input name="adSoyad" type="text" value="<?php echo $alanlar["adSoyad"]; ?>" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;font-size:12px;">Bölüm/Anabilim Dalý<span style="color:red;"> (*)</span>: </td>
        <td style="margin:0;text-align:left;">
        	<select name="bolumNo" style="width:170px;margin:0;">
              <option value="0" style="background:#333;border-bottom:1px solid #000;color:#FFF;">&#8212; Bölüm Seçiniz &#8212;</option>
              <?php 
			  	@include('inc/baglan.php');
				$sql=@mysql_query("select * from bolumler",$baglan);
				while($bolumler=@mysql_fetch_array($sql))
				{
			  ?>
        	  		<option value="<?php echo $bolumler['id']; ?>" <?php if($alanlar["bolumNo"]==$bolumler['id']) echo "selected='selected'";?>><?php echo $bolumler['bolumAdi']; ?></option>
              <?php } ?>
      	  </select></td>
      </tr>
      <tr>
        <td style="border:0;">Doðum Yeri: </td>
        <td><input type="text" name="dogumYeri" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Mezuniyet Yýlý<span style="color:red;"> (*)</span>:</td>
        <td>
        	<input type="text" name="mezuniyetYili" value="<?php if(!empty($alanlar["mezuniyetYili"])) echo $alanlar["mezuniyetYili"]; ?>" style="width:100%;">
        </td>
      </tr>
      <tr>
        <td style="border:0;">Doðum Tarihi: </td>
        <td><input type="text" name="dogumTarihi" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Baba Adý: </td>
        <td>
        	<input type="text" name="babaAdi" style="width:100%;">
        </td>
      </tr>
      <tr>
        <td style="border:0;">Kan Grubu: </td>
        <td> 
           <select name="kanGrubu" style="width:100%;">
            <option>A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>AB+</option>
            <option>AB-</option>
            <option>0+</option>
            <option>0-</option>
          </select>       	    
        </td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Ana Adý: </td>
        <td>
        	<input type="text" name="anaAdi" style="width:100%;">
        </td>
      </tr>
      <tr>
      	<td colspan="3" style="border:0;">&nbsp;</td>
      	<td style="border:0;">Medeni Hali: </td>
      	<td style="border:0;">
        	<table width="100%" border="0">
            	<tr><td style="border:0;">Evli</td><td style="border:0;text-align:left;"><input type="radio" name="medeniHali" value="Evli"></td><td style="border:0;">Bekar</td><td style="border:0;text-align:left;"><input type="radio" name="medeniHali" value="Bekar" checked></td></tr>
            </table>
        </td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;text-align:left;"><h3 style="margin-top:0;">Eðitim Bilgileri</h3><hr></td>
      </tr>
      <tr>
        <td style="border:0;">Ýlköðretim: </td>
        <td colspan="4"><input type="text" name="ilkogretim" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Ortaöðretim: </td>
        <td colspan="4"><input type="text" name="ortaogretim" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Yüksek Lisans: </td>
        <td colspan="4"><input type="text" name="yukseklisans" style="width:100%;"></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;text-align:left;"><h3>Ýletiþim Bilgileri</h3><hr></td>
      </tr>
      <tr>
        <td style="border:0;">Cep Telefonu <span style="color:red;">(*)</span>: </td>
        <td><input type="text" name="cepTel" value="<?php echo $alanlar["cepTel"]; ?>" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Ýþ Telefonu: </td>
        <td><input type="text" name="isTel" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">Ev Telefonu: </td>
        <td><input type="text" name="evTel" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Fax: </td>
        <td><input type="text" name="fax" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">E-Posta (kiþisel) <span style="color:red;">(*)</span>: </td>
        <td><input type="text" name="ePostaK" value="<?php echo $alanlar["ePostaK"]; ?>" style="width:100%;"></td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">E-Posta (iþ): </td>
        <td><input type="text" name="ePostaI" style="width:100%;"></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;height:5px;"></td>
      </tr>
      <tr>
        <td style="border:0;" valign="top">Adres <span style="color:red;">(*)</span>: </td>
        <td colspan="4" style="text-align:left;"><textarea name="adres"><?php echo $alanlar["adres"]; ?></textarea></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;text-align:left;"><h3>Güncel Durumunuz</h3><hr></td>
      </tr>
      <tr>
        <td style="border:0;">Çalýþýyor musunuz?</td>
        <td style="border:0;border-bottom:1px dashed #888;">
        	<table width="100%" border="0">
            	<tr><td style="border:0;">Evet</td><td style="border:0;text-align:left;"><input type="radio" name="calismaDurumu" value="1"></td><td style="border:0;">Hayýr</td><td style="border:0;text-align:left;"><input type="radio" name="calismaDurumu" value="0" checked></td></tr>
            </table>
        </td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Ýþ Yeri Adý: </td>
        <td><input type="text" name="isYeriAdi" style="width:100%;"></td>
      </tr>
      <tr>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">
        	<table width="100%" border="0">
            	<tr>
                	<td style="border:0;">Özel</td><td style="border:0;text-align:left;">
                    	<input type="radio" name="departman" value="0">
                    </td>
                    <td style="border:0;">Kamu</td><td style="border:0;text-align:left;">
                    	<input type="radio" name="departman" value="1">
                    </td>
            	</tr>
            </table>
        </td>
        <td style="border:0;">&nbsp;</td>
        <td style="border:0;">Pozisyon: </td>
        <td><input type="text" name="pozisyon" style="width:100%;"></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;height:5px;"></td>
      </tr>
      <tr>
        <td style="border:0;">Diðer: </td>
        <td colspan="4" style="text-align:left;"><input type="text" name="diger" style="width:100%;"></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;text-align:left;"><h3>Kullanýcý Bilgileri</h3><hr></td>
      </tr>
      <tr>
      	<td style="border:0;">Kullanýcý Adý <span style="color:red;">(*)</span>: </td>
        <td><input type="text" name="kadi" style="width:100%;"></td>
        <td colspan="3" style="text-align:left;border:0;"></td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;height:5px;text-align:left;font-weight:normal;padding-left:48px;"><br>
      	<strong>Dikkat!</strong> : Kullanýcý adýnýzý<strong> Mezun Portalýna</strong> giriþ yapmak için kullanacaksýnýz. Þifreniz  E-Posta (kiþisel) adresinize gönderilecektir.</td>
      </tr>
      <tr>
      	<td colspan="5" style="border:0;height:5px;"><input type="submit" value="Kaydý Tamamla" class="button" style="width:150px; margin-top:10px;"/></td>
      </tr>
    </table>
  </form>
  <?php } ?>	
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
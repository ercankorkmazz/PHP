<?php 
	if(isset($_GET["kullanici"]) and isset($_POST["mail"]))
		@include("inc/kullanici/guncelle.php"); // Kullan�c� bilsisi g�nceller
	
	@include('inc/baglan.php');
	if($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]==0)
		$tablo="kullanici";
	else
		$tablo="ogretmen";
		
	$sorgu=mysql_query("select * from $tablo where id=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"]);
	$alanlar=mysql_fetch_array($sorgu);
?>
<div class="icerik">
  <div class="icerikSol">
  	<div class="bolumHakkinda" style="margin-top:0px;">
        <form method="post" action="index.php?kullanici" target="_self">
        		<input type="submit" value="G�ncelle" class="button" style="float:right;"/>
                <div class="clear"></div>
                <table width="100%" border="0" cellspacing="5" cellpadding="7">
                    <tr>
                        <td colspan="2"><hr /><h3 style="margin:0; padding:0;">Kullan�c� Bilgileri</h3><hr /></td>
                    </tr>
                    <tr>
                        <td style="width:120px; text-align:right;color:#CCC;"><strong>Ad� Soyad�:</strong></td>
                        <td><input type="text" name="isim" value="<?php echo $alanlar["kullanici"]; ?>" style="width:300px;text-align:center; font-weight:bold;"> <span style="color:#F00;">*</span></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr /><h3 style="margin:0; padding:0;">Kullan�c� Ad� Ayarlar�</h3><hr /></td>
                    </tr>
                    <tr>
                        <td style="width:120px; text-align:right;color:#CCC;"><strong>Kullan�c� Ad�:</strong></td>
                        <td><input type="text" name="kullanici" value="<?php echo $_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]; ?>" style="width:300px;text-align:center; font-weight:bold;"> <span style="color:#F00;">*</span></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr /><h3 style="margin:0; padding:0;">�ifre Ayarlar�</h3><hr /></td>
                    </tr>
                    <tr>
                        <td style="width:120px; text-align:right;color:#CCC;"><strong>Mevcut �ifre:</strong></td>
                        <td><input type="password" name="mSifre" style="width:300px;text-align:center;"> <span style="color:#F00;">*</span></td>
                    </tr>
                    <tr>
                        <td style="width:120px; text-align:right;color:#CCC;"><strong>Yeni �ifre:</strong></td>
                        <td><input type="password" name="ySifre" style="width:300px;text-align:center;"> <span style="color:#F00;">*</span></td>
                    </tr>
                    <tr>
                        <td style="width:120px; text-align:right;color:#CCC;"><strong>Yeni �ifre Tekrar:</strong></td>
                        <td><input type="password" name="tSifre" style="width:300px;text-align:center;"> <span style="color:#F00;">*</span></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr /><h3 style="margin:0; padding:0;">Mail Ayarlar�</h3><hr /></td>
                    </tr>
                    <tr>
                        <td style="width:120px; text-align:right;color:#CCC;"><strong>Mail Adresi:</strong></td>
                        <td><input type="text" name="mail" style="width:300px;text-align:center;" value="<?php echo $alanlar["mail"]; ?>" /> <span style="color:#F00;">*</span></td>
                    </tr>
                </table>
        </form>
  	</div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
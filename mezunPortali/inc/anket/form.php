<?php
	if(isset($_POST["kaydet"]))
		include("inc/anket/kaydet.php");
?>
<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
  <?php
  if(($_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]!="admin") and ($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]!=1))
  {
 	@include('inc/baglan.php'); 
	$sorgu=mysql_query("select * from mezun where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"]);
	$mezunID=mysql_fetch_array($sorgu); 
	
	$sorgu = mysql_query("select * from anket where mezunID=".$mezunID["id"]);
	if(mysql_num_rows($sorgu)==0)
	{
		if(!isset($_SESSION["$_SERVER[SERVER_NAME]mezunportali"]))
		{ 
		  ?>
			<div class="yonetim">
			 <div class="giris" style="width:280px;">
			 <h5 style="color:#ccc;font-size:12px;" align="center">Ankete katýlmak için lütfen giriþ yapýnýz.</h5>
			  <form method="post" action="index.php?giris&anket" target="_self" style="margin:10px auto 0 auto;">
				<input type="hidden" name="tur" value="0">
			  <table border="0" style="width:280px;margin:0;" cellspacing="5">
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
		   </div>
		   <?php }else{ ?>
			<div class="bolumHakkinda">
				<form method="post" action="index.php?anket" target="_self">
						<input type="submit" value="Kaydet" name="kaydet" class="button" style="float:right;"/>
						<table width="100%" border="0">
							<tr>
								<td style="height:30px;">&nbsp;</td>
							</tr>
							<tr>
								<td><h3 style="margin:0; padding:0;">Mezunlar portalýnda neler olmasýný beklersiniz?</h3><hr /></td>
							</tr>
							<tr>
								<td><div class="textareaBG"><textarea name="soru1" style="min-height:50px; font-size:15px;"></textarea></div></td>
							</tr>
							<tr>
								<td><br /><h3 style="margin:0; padding:0;">Mezun adayý veya mezun olarak fakültenizden hangi etkinliklerin düzenlemesini istersiniz?</h3><hr /></td>
							</tr>
							<tr>
								<td><div class="textareaBG"><textarea name="soru2" style="min-height:50px; font-size:15px;"></textarea></div></td>
							</tr>
							<tr>
								<td><br /><h3 style="margin:0; padding:0;">Eklemek istedikleriniz?</h3><hr /></td>
							</tr>
							<tr>
								<td><div class="textareaBG"><textarea name="soru3" style="min-height:50px; font-size:15px;"></textarea></div></td>
							</tr>
						</table>
				</form>
			</div>
		  <?php } ?>
  		<?php 
			}else{ 
			$sorgu=mysql_query("select * from anket where mezunID=".$mezunID["id"]);
			$alanlar=mysql_fetch_array($sorgu);
		?>
        	<div class="bolumHakkinda" align="center">
            	<h3>Katýlýmýnýz için teþekkür ederiz.</h3>
                <table border="0" width="100%">
                    <tr>
                        <td colspan="2"><hr /></td>
                    </tr>
                    <tr>
                        <td style="color:#0CF;" colspan="2">Mezunlar portalýnda neler olmasýný beklersiniz?</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="background:#FFF;border:1px solid #CCC;padding:3px;">
							<?php if(!empty($alanlar["soru1"])) echo $alanlar["soru1"]; else echo " - "; ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:#0CF;padding-top:10px;" colspan="2">Mezun adayý veya mezun olarak fakültenizden hangi etkinliklerin düzenlemesini istersiniz?</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="background:#FFF; border:1px solid #CCC;padding:3px;">
							<?php if(!empty($alanlar["soru2"])) echo $alanlar["soru2"]; else echo " - "; ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:#0CF;padding-top:10px;" colspan="2">Eklemek istedikleriniz?</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="background:#FFF;border:1px solid #CCC;padding:3px;">
							<?php if(!empty($alanlar["soru3"])) echo $alanlar["soru3"]; else echo " - "; ?>
                        </td>
                    </tr>
                </table>
            </div>
        <?php }	?>
  <?php 
  }else{
  		echo "<div class='bolumHakkinda' align='center'><h3>Ankete katýlým hakkýnýz bulunmamaktadýr.</h3></div>"; 
  }
  ?>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>
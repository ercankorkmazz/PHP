<?php
	//$icerikTR=mb_convert_encoding($_POST["IcerikTR"], "UTF-8", "ISO-8859-9");     UTF-8 to ISO-8859-9
	if(isset($_POST["E1"]))
	{
		$kontrol=0;
		@include('inc/baglan.php'); 
		$sql="update ekstralar set E1 = '$_POST[E1]', E1_1 = '$_POST[E1_1]', E2 = '$_POST[E2]', E2_2 = '$_POST[E2_2]', E3 = '$_POST[E3]', E3_3 = '$_POST[E3_3]', E4 = '$_POST[E4]', E4_4 = '$_POST[E4_4]', E5 = '$_POST[E5]', E5_5 = '$_POST[E5_5]', E6 = '$_POST[E6]', E6_6 = '$_POST[E6_6]' where id=1";
		
		if (@mysql_query($sql,$baglan))
			setcookie("bildirim","Güncelleme Yapýldý");
		else
			setcookie("bildirim","Güncelleme yapýlamadý. Lütfen daha sonra tekrar deneyiniz.");
			
		header("location: index.php?ekstralar");
	}
?>
<form action="index.php?ekstralar" method="post">
    <div class="sol rent" style="width: 980px;">
    	<div class="sol sayfa" style="width:996px; height:38px; margin-bottom:10px; padding:2px;">
        	<div class="sol" style="padding-top:7px;"><span class="title">
            <?php
				@include('inc/baglan.php'); 
				$sorgu=mysql_query("select * from ekstralar where id=1");
				$alanlar=mysql_fetch_array($sorgu);
			?><?php echo mb_convert_encoding("Ekstralar (Ürünlerin TL türünden deðerini giriniz.)", "UTF-8", "ISO-8859-9"); ?>
            </span></div>
			<div class="sag" style="padding:0px;">
				<div class="sol">
                  <input type="submit" value="<?php echo @mb_convert_encoding("Güncelle", "UTF-8", "ISO-8859-9"); ?>" class="submit" id="btnSubmit" />				
		        </div>						
			</div>
		</div>
        
        <div class="sol sayfa" style="width:980px;color:#333333; font-size:11px;">
            <table width="100%" border="0">
              	<tr>
                    <td style="padding-left:10px;" align="right">
                    	<strong><?php echo @mb_convert_encoding("Bebek Koltuðu", "UTF-8", "ISO-8859-9"); ?></strong>
                    </td>
                    <td style="width:70px;" align="right">
                		<input type="text" name="E1" value="<?php echo $alanlar['E1']; ?>" placeholder="00" class="txtBaslik" style="width:50px; text-align:right; font-size:12px; font-weight:bold;"><strong> .</strong>
                    </td>
                    <td align="left" style="width:70px;">
                		<input type="text" name="E1_1" value="<?php echo $alanlar['E1_1']; ?>" placeholder="00" class="txtBaslik" style="width:30px; text-align:center; font-size:12px; font-weight:bold;">
                    </td>
                    
                    <td style="padding-left:10px;" align="right">
                    	<strong><?php echo @mb_convert_encoding("Navigasyon", "UTF-8", "ISO-8859-9"); ?></strong>
                    </td>
                    <td style="width:70px;" align="right">
                		<input type="text" name="E2" value="<?php echo $alanlar['E2']; ?>" placeholder="00" class="txtBaslik" style="width:50px; text-align:right; font-size:12px; font-weight:bold;"><strong> .</strong>
                    </td>
                    <td align="left" style="width:70px;">
                		<input type="text" name="E2_2" value="<?php echo $alanlar['E2_2']; ?>" placeholder="00" class="txtBaslik" style="width:30px; text-align:center; font-size:12px; font-weight:bold;">
                    </td>
            	</tr>
              	<tr>
                    <td style="padding-left:10px;" align="right">
                    	<strong><?php echo @mb_convert_encoding("Özel Þöför", "UTF-8", "ISO-8859-9"); ?></strong>
                    </td>
                    <td style="width:70px;" align="right">
                		<input type="text" name="E3" value="<?php echo $alanlar['E3']; ?>" placeholder="00" class="txtBaslik" style="width:50px; text-align:right; font-size:12px; font-weight:bold;"><strong> .</strong>
                    </td>
                    <td align="left" style="width:70px;">
                		<input type="text" name="E3_3" value="<?php echo $alanlar['E3_3']; ?>" placeholder="00" class="txtBaslik" style="width:30px; text-align:center; font-size:12px; font-weight:bold;">
                    </td>
                    
                    <td style="padding-left:10px;" align="right">
                    	<strong><?php echo @mb_convert_encoding("Kar Zinciri", "UTF-8", "ISO-8859-9"); ?></strong>
                    </td>
                    <td style="width:70px;" align="right">
                		<input type="text" name="E4" value="<?php echo $alanlar['E4']; ?>" placeholder="00" class="txtBaslik" style="width:50px; text-align:right; font-size:12px; font-weight:bold;"><strong> .</strong>
                    </td>
                    <td align="left" style="width:70px;">
                		<input type="text" name="E4_4" value="<?php echo $alanlar['E4_4']; ?>" placeholder="00" class="txtBaslik" style="width:30px; text-align:center; font-size:12px; font-weight:bold;">
                    </td>
            	</tr>
              	<tr>
                    <td style="padding-left:10px;" align="right">
                    	<strong><?php echo @mb_convert_encoding("Özel þoför (Ýngilizce-Almanca)", "UTF-8", "ISO-8859-9"); ?></strong>
                    </td>
                    <td style="width:70px;" align="right">
                		<input type="text" name="E5" value="<?php echo $alanlar['E5']; ?>" placeholder="00" class="txtBaslik" style="width:50px; text-align:right; font-size:12px; font-weight:bold;"><strong> .</strong>
                    </td>
                    <td align="left" style="width:70px;">
                		<input type="text" name="E5_5" value="<?php echo $alanlar['E5_5']; ?>" placeholder="00" class="txtBaslik" style="width:30px; text-align:center; font-size:12px; font-weight:bold;">
                    </td>
                    
                    <td style="padding-left:10px;" align="right">
                    	<strong><?php echo @mb_convert_encoding("Ekstra Sigorta CDW", "UTF-8", "ISO-8859-9"); ?></strong>
                    </td>
                    <td style="width:70px;" align="right">
                		<input type="text" name="E6" value="<?php echo $alanlar['E6']; ?>" placeholder="00" class="txtBaslik" style="width:50px; text-align:right; font-size:12px; font-weight:bold;"><strong> .</strong>
                    </td>
                    <td align="left" style="width:70px;">
                		<input type="text" name="E6_6" value="<?php echo $alanlar['E6_6']; ?>" placeholder="00" class="txtBaslik" style="width:30px; text-align:center; font-size:12px; font-weight:bold;">
                    </td>
                    <td style="width:150px;">&nbsp;</td>
            	</tr>
            </table>
      	</div>
	</div>
</form>
</div>
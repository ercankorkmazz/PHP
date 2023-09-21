	<div class="sol rent" style="width: 500px; margin-left:235px;">
		<div class="sol sayfa" style="width:500px; margin-bottom:10px;">
        
        <div class="sol title"><?php echo @mb_convert_encoding("Yönetici Giriþi", "UTF-8", "ISO-8859-9"); ?></div>
            
				<div class="sol" style="width:500px; margin:auto;" id="iformcont">
					<form action="index.php?giris" method="post" id="formID">
                    	<table width="100%" border="0">
                        	<tr>
                            	<td>
                                	<input type="text" name="kadi" placeholder="<?php echo @mb_convert_encoding("Kullanýcý Adý", "UTF-8", "ISO-8859-9"); ?>" class="rezervasyoninput validate[required]" id="adisoyadi" style="width:438px; text-align:center;" />
                                </td>
                            </tr>
                            
                        	<tr>
                            	<td>
                                	<input type="password" name="sifre" placeholder="<?php echo @mb_convert_encoding("Þifre", "UTF-8", "ISO-8859-9"); ?>" class="rezervasyoninput validate[required,custom[email]]" id="mail" style="width:438px; text-align:center;" />
                                </td>
                            </tr>
                            
                        	<tr>
                            	<td style="padding-top:10px;">
                                	<input type="submit" value="<?php echo @mb_convert_encoding("Giriþ Yap", "UTF-8", "ISO-8859-9"); ?>" class="fiyathesapla" style="width:485px;" />
                                </td>
                            </tr>
                        </table>
						
					</form>
				</div>
            </div>
        </div>
    </div> 
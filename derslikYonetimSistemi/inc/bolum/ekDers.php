<?php
	if(isset($_GET["ekDersAyarlari"]) and isset($_POST['dizi']))
		@include("inc/bolum/ekDersGuncelle.php"); // Günceller
?>
		<form method="post" target="_self" action="index.php?ekDersAyarlari">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>Ek Ders Ücret Formu - Aylýk Tatil Günleri</h3>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Güncelle" /></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <div class="clear"></div>
		<?php 
			if(isset($_POST["Y1"]) and ($_POST["G1"]!="Gün") and ($_POST["G2"]!="Gün") and ($_POST["A1"]!="Ay") and ($_POST["A2"]!="Ay")){ 
				@include("inc/bolum/ayAlgoritmasi.php");
				
			
		?>
        <table border="0" width="100%" cellspacing="5" cellpadding="7">
            <tr>
                <td style="padding:5px;">
                	<h3 style="float:left;">Tatil Günlerini Saçiniz</h3>
                  <select name="yil" style='padding:5px;float:right;margin-left:5px;'>
                     <?php 
						for($i=2014;$i<=2030;$i++)
						{
							if($i==2015)
								echo "<option selected='selected'>$i</option>";
							else
								echo "<option>$i</option>";
						}
					?>
                    </select>
                      <select name="ay" style='padding:5px;float:right;'>
                          <option>Ocak</option>
                          <option>Þubat</option>
                          <option>Mart</option>
                          <option>Nisan</option>
                          <option>Mayýs</option>
                          <option>Haziran</option>
                          <option>Temmuz</option>
                          <option>Aðustos</option>
                          <option>Eylül</option>
                          <option>Ekim</option>
                          <option>Kasým</option>
                          <option>Aralýk</option>
                    </select>
                    <h3 style="float:right;">Ek Dersin Hesaplanacaðý Ay-Yýl: </h3>
                </td>
            </tr>
            <tr>
                <td style="padding:0;background:0;">
                	<table border="0" class="EDTable" style="margin:auto;margin-top:5px; border:1px solid #BBB;" cellspacing="0">
                    	<tr>
                        	<td align="right" style="width:75px;"><strong>Günler</strong></td>
                            <?php
								// Ayný yýl ve tek ay için listeleme yapar (A1==A2 and Y1==Y2)
									@include("inc/bolum/sorgu/s1.php");
								// Ayný yýl ve iki ay için listeleme yapar. (A1<A2 and (A2-A1)=1 and Y1==Y2)
									@include("inc/bolum/sorgu/s2.php");
								// Ayný yýl ve ikiden fazla ay için listeleme yapar. (A1<A2 and (A2-A1)>1 and Y1==Y2)
									@include("inc/bolum/sorgu/s3.php");
								// Farklý yýllar ve iki ay için listeleme yapar. (A1>A2 and (A1-A2)=11 and Y1<Y2)
									@include("inc/bolum/sorgu/s4.php");
								// Farklý yýllar ve ikiden fazla ay için listeleme yapar. (A1>A2 and (A1-A2)<11 and Y1<Y2)
									@include("inc/bolum/sorgu/s5.php");
								// Farklý yýllar ve ikiden fazla ay için listeleme yapar. (A1>A2 and (A1-A2)=10 and A1==11 and Y1<Y2)
									@include("inc/bolum/sorgu/s6.php");
							?>
                        </tr>
                        <tr>
                        	<td align="right"><strong>Tatil Günleri</strong></td>
                            <?php
								// Ayný yýl ve tek ay için listeleme yapar (A1==A2 and Y1==Y2)
									@include("inc/bolum/sorgu/c1.php");
								// Ayný yýl ve iki ay için listeleme yapar. (A1<A2 and (A2-A1)=1 and Y1==Y2)
									@include("inc/bolum/sorgu/c2.php");
								// Ayný yýl ve ikiden fazla ay için listeleme yapar. (A1<A2 and (A2-A1)>1 and Y1==Y2)
									@include("inc/bolum/sorgu/c3.php");
								// Farklý yýllar ve iki ay için listeleme yapar. (A1>A2 and (A1-A2)=11 and Y1<Y2)
									@include("inc/bolum/sorgu/c4.php");
								// Farklý yýllar ve ikiden fazla ay için listeleme yapar. (A1>A2 and (A1-A2)<11 and Y1<Y2)
									@include("inc/bolum/sorgu/c5.php");
                            	// Farklý yýllar ve ikiden fazla ay için listeleme yapar. (A1>A2 and (A1-A2)=10 and A1==11 and Y1<Y2)
									@include("inc/bolum/sorgu/c6.php");
							?>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <?php } ?>
        	<input type="hidden" name="dizi" value="<?php echo $gunler; ?>" />
        </form>
        <form method="post" target="_self" action="index.php?ekDersAyarlari" >
       	<table border="0" width="100%" cellspacing="5" cellpadding="7" style="margin-top:-10px;">
            <tr>
                <td colspan="3" align="center" style="padding:2px;"><h3>Gün Aralýðýný Seçiniz</h3></td>
            </tr>
            <tr>
                <td align="right">
                        <input type="text" name="G1" maxlength="2" style="width:40;text-align:center;padding:5px;" value="Gün" onclick="this.value='';" onblur="if(this.value=='')this.value='Gün';" /> .
                        <input type="text" name="A1" maxlength="2" style="width:40;text-align:center;padding:5px;" value="Ay" onclick="this.value='';" onblur="if(this.value=='')this.value='Ay';" /> .
                        <select name="Y1" style='padding:5px;'>
                        	<?php 
								for($i=2014;$i<=2030;$i++)
								{
									if($i==2015)
										echo "<option selected='selected'>$i</option>";
									else
										echo "<option>$i</option>";
								}
							?>
                        </select>
                </td>
                <td style="width:10px;" align="center"> <strong>-</strong> </td>
                <td>
                        <input type="text" name="G2" maxlength="2" style="width:40;text-align:center;padding:5px;" value="Gün" onclick="this.value='';" onblur="if(this.value=='')this.value='Gün';" /> .
                        <input type="text" name="A2" maxlength="2" style="width:40;text-align:center;padding:5px;" value="Ay" onclick="this.value='';" onblur="if(this.value=='')this.value='Ay';" /> .
                        <select name="Y2" style='padding:5px;'>
                        	<?php 
								for($i=2014;$i<=2030;$i++)
								{
									if($i==2015)
										echo "<option selected='selected'>$i</option>";
									else
										echo "<option>$i</option>";
								}
							?>
                        </select>
                </td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Tatil Günlerini Belirle" style="padding:7px;width:100%;" /></td>
            </tr>
        </table>
        </form>
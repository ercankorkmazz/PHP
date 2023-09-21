<?php
	if(isset($_GET["ekDersAyarlari"]) and isset($_POST['dizi']))
		@include("inc/bolum/ekDersGuncelle.php"); // G�nceller
?>
		<form method="post" target="_self" action="index.php?ekDersAyarlari">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>Ek Ders �cret Formu - Ayl�k Tatil G�nleri</h3>
            </div><!-- ��erik Sa� Ba�l�k Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="G�ncelle" /></li>
                </ul>
            </div><!-- ��erik Sa� Ba�l�k Sa� son -->
            <div class="clear"></div>
        </div><!-- Men� Ba�l��� son -->
        <div class="clear"></div>
		<?php 
			if(isset($_POST["Y1"]) and ($_POST["G1"]!="G�n") and ($_POST["G2"]!="G�n") and ($_POST["A1"]!="Ay") and ($_POST["A2"]!="Ay")){ 
				@include("inc/bolum/ayAlgoritmasi.php");
				
			
		?>
        <table border="0" width="100%" cellspacing="5" cellpadding="7">
            <tr>
                <td style="padding:5px;">
                	<h3 style="float:left;">Tatil G�nlerini Sa�iniz</h3>
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
                          <option>�ubat</option>
                          <option>Mart</option>
                          <option>Nisan</option>
                          <option>May�s</option>
                          <option>Haziran</option>
                          <option>Temmuz</option>
                          <option>A�ustos</option>
                          <option>Eyl�l</option>
                          <option>Ekim</option>
                          <option>Kas�m</option>
                          <option>Aral�k</option>
                    </select>
                    <h3 style="float:right;">Ek Dersin Hesaplanaca�� Ay-Y�l: </h3>
                </td>
            </tr>
            <tr>
                <td style="padding:0;background:0;">
                	<table border="0" class="EDTable" style="margin:auto;margin-top:5px; border:1px solid #BBB;" cellspacing="0">
                    	<tr>
                        	<td align="right" style="width:75px;"><strong>G�nler</strong></td>
                            <?php
								// Ayn� y�l ve tek ay i�in listeleme yapar (A1==A2 and Y1==Y2)
									@include("inc/bolum/sorgu/s1.php");
								// Ayn� y�l ve iki ay i�in listeleme yapar. (A1<A2 and (A2-A1)=1 and Y1==Y2)
									@include("inc/bolum/sorgu/s2.php");
								// Ayn� y�l ve ikiden fazla ay i�in listeleme yapar. (A1<A2 and (A2-A1)>1 and Y1==Y2)
									@include("inc/bolum/sorgu/s3.php");
								// Farkl� y�llar ve iki ay i�in listeleme yapar. (A1>A2 and (A1-A2)=11 and Y1<Y2)
									@include("inc/bolum/sorgu/s4.php");
								// Farkl� y�llar ve ikiden fazla ay i�in listeleme yapar. (A1>A2 and (A1-A2)<11 and Y1<Y2)
									@include("inc/bolum/sorgu/s5.php");
								// Farkl� y�llar ve ikiden fazla ay i�in listeleme yapar. (A1>A2 and (A1-A2)=10 and A1==11 and Y1<Y2)
									@include("inc/bolum/sorgu/s6.php");
							?>
                        </tr>
                        <tr>
                        	<td align="right"><strong>Tatil G�nleri</strong></td>
                            <?php
								// Ayn� y�l ve tek ay i�in listeleme yapar (A1==A2 and Y1==Y2)
									@include("inc/bolum/sorgu/c1.php");
								// Ayn� y�l ve iki ay i�in listeleme yapar. (A1<A2 and (A2-A1)=1 and Y1==Y2)
									@include("inc/bolum/sorgu/c2.php");
								// Ayn� y�l ve ikiden fazla ay i�in listeleme yapar. (A1<A2 and (A2-A1)>1 and Y1==Y2)
									@include("inc/bolum/sorgu/c3.php");
								// Farkl� y�llar ve iki ay i�in listeleme yapar. (A1>A2 and (A1-A2)=11 and Y1<Y2)
									@include("inc/bolum/sorgu/c4.php");
								// Farkl� y�llar ve ikiden fazla ay i�in listeleme yapar. (A1>A2 and (A1-A2)<11 and Y1<Y2)
									@include("inc/bolum/sorgu/c5.php");
                            	// Farkl� y�llar ve ikiden fazla ay i�in listeleme yapar. (A1>A2 and (A1-A2)=10 and A1==11 and Y1<Y2)
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
                <td colspan="3" align="center" style="padding:2px;"><h3>G�n Aral���n� Se�iniz</h3></td>
            </tr>
            <tr>
                <td align="right">
                        <input type="text" name="G1" maxlength="2" style="width:40;text-align:center;padding:5px;" value="G�n" onclick="this.value='';" onblur="if(this.value=='')this.value='G�n';" /> .
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
                        <input type="text" name="G2" maxlength="2" style="width:40;text-align:center;padding:5px;" value="G�n" onclick="this.value='';" onblur="if(this.value=='')this.value='G�n';" /> .
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
                <td colspan="3"><input type="submit" value="Tatil G�nlerini Belirle" style="padding:7px;width:100%;" /></td>
            </tr>
        </table>
        </form>
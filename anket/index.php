<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
    <title>Scratch / C Programlama Anketi</title>	
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.3.2.js" type="text/javascript"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script src="js/jquery.validation.functions.js" type="text/javascript"></script>
    <?php include("js/validation.php"); ?>
</head>

<body>
<div id="wrapper">
	<div id="container">
		<div id="header" class="clearfix">
		  <h1>Scratch / C Programlama Anketi</h1>
		</div><!-- // end #header -->
		<div id="banner">
			<font face="Arial, Helvetica, sans-serif">Sevgili Kat�l�mc�, </br>
			    </br>
Bu d&ouml;nem alm�� oldu�unuz Programlama Dilleri I ve Se&ccedil;meli I dersleri kapsam�nda kullanm�� programlama dili ve g&ouml;rsel programlama amac� ile ilgili d&uuml;�&uuml;ncelerinizi almak istiyoruz. Bu nedenle a�a��daki sorulardan olu�an anket haz�rlad�k. Sorulara verece�iniz cevaplar, yaln�zca ve kesinlikle akademik ara�t�rma amac�yla kullan�lacakt�r. Anketi doldurdu�unuz i&ccedil;in �imdiden te�ekk&uuml;r ederiz.</br>
</br>
Do&ccedil;. Dr. Erman Y&uuml;kselt&uuml;rk</br>
Ara�.G&ouml;r. Serhat Alt�ok</br>
			</font>
		</div>
		<div id="main" class="clearfix">
		  <div id="page" class="TabBody">
		    <!-- �&ccedil;erik -->
            <form action="sonuc.php" method="post" class="AdvancedForm">
		    <table width="100%" border="0">
              <tr>
              	<td style="width:110px; background:none;border:none;" align="right">��renci No:</td>
                <td style="background:none;border:none;width:150px;" align="left">
                	<input type="text" name="ogrNo" id="ogrNo" style="width:90%;" />
                </td>
                <td style="background:none;border:none;color:#F00; text-align:left;">*</td>
              </tr>
            </table>
		    <table width="100%" style="margin-top:10px;" border="0">
              <tr>
		        <td rowspan="2" class="soruTD" style="background:#FFB;">Bu b&ouml;l&uuml;m&uuml;n cevap ��klar� i&ccedil;in a&ccedil;�klama; <b>1- </b>Hi&ccedil; Emin De�ilim <b>7- </b>Kesinlikle Eminim aras�nda size en uygun de�eri i�aretleyiniz. </td>
		        <td colspan="7"><font face="Arial, Helvetica, sans-serif" size="2">Scractch Programlama</font></td>
		        <td style="border-bottom:none;">&nbsp;</td>
		        <td colspan="7"><font face="Arial, Helvetica, sans-serif" size="2">C Programlama</font></td>
	          </tr>
		      <tr>
		        <td style="width:25px;">1</td>
		        <td style="width:25px;">2</td>
		        <td style="width:25px;">3</td>
		        <td style="width:25px;">4</td>
		        <td style="width:25px;">5</td>
		        <td style="width:25px;">6</td>
		        <td style="width:25px;">7</td>
		        <td style="width:10px; border-top:none;border-bottom:none;">&nbsp;</td>
		        <td style="width:25px;">1</td>
		        <td style="width:25px;">2</td>
		        <td style="width:25px;">3</td>
		        <td style="width:25px;">4</td>
		        <td style="width:25px;">5</td>
		        <td style="width:25px;">6</td>
		        <td style="width:25px;">7</td>
	          </tr>
		      <tr>
		        <td class="soruTD">1. &quot;Merhaba D&uuml;nya&quot; mesaj�n�n g&ouml;r&uuml;nt&uuml;lenebilece�i bir program yazabilirim.</td>
		        <td colspan="7" id="G1_1soru1" class="InputGroup">
                	<input type="radio" name="G1_1soru1" value="1" />
                	<input type="radio" name="G1_1soru1" value="2" />
                    <input type="radio" name="G1_1soru1" value="3" />
                    <input type="radio" name="G1_1soru1" value="4" />
                    <input type="radio" name="G1_1soru1" value="5" />
                    <input type="radio" name="G1_1soru1" value="6" />
                    <input type="radio" name="G1_1soru1" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G1_2soru1" class="InputGroup">
                	<input type="radio" name="G1_2soru1" value="1" />
                    <input type="radio" name="G1_2soru1" value="2" />
                    <input type="radio" name="G1_2soru1" value="3" />
                    <input type="radio" name="G1_2soru1" value="4" />
                    <input type="radio" name="G1_2soru1" value="5" />
                    <input type="radio" name="G1_2soru1" value="6" />
                    <input type="radio" name="G1_2soru1" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">2. &Uuml;&ccedil; say�n�n ortalamas�n� hesaplayan bir program yazabilirim.</td>
		        <td colspan="7" id="G1_1soru2" class="InputGroup">
                	<input type="radio" name="G1_1soru2" value="1" />
                	<input type="radio" name="G1_1soru2" value="2" />
                    <input type="radio" name="G1_1soru2" value="3" />
                    <input type="radio" name="G1_1soru2" value="4" />
                    <input type="radio" name="G1_1soru2" value="5" />
                    <input type="radio" name="G1_1soru2" value="6" />
                    <input type="radio" name="G1_1soru2" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G1_2soru2" class="InputGroup">
                	<input type="radio" name="G1_2soru2" value="1" />
                    <input type="radio" name="G1_2soru2" value="2" />
                    <input type="radio" name="G1_2soru2" value="3" />
                    <input type="radio" name="G1_2soru2" value="4" />
                    <input type="radio" name="G1_2soru2" value="5" />
                    <input type="radio" name="G1_2soru2" value="6" />
                    <input type="radio" name="G1_2soru2" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">3. Verilen herhangi bir say� dizisinin ortalamas�n� hesaplayan bir program yazabilirim.</td>
		        <td colspan="7" id="G1_1soru3" class="InputGroup">
                	<input type="radio" name="G1_1soru3" value="1" />
                	<input type="radio" name="G1_1soru3" value="2" />
                    <input type="radio" name="G1_1soru3" value="3" />
                    <input type="radio" name="G1_1soru3" value="4" />
                    <input type="radio" name="G1_1soru3" value="5" />
                    <input type="radio" name="G1_1soru3" value="6" />
                    <input type="radio" name="G1_1soru3" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G1_2soru3" class="InputGroup">
                	<input type="radio" name="G1_2soru3" value="1" />
                    <input type="radio" name="G1_2soru3" value="2" />
                    <input type="radio" name="G1_2soru3" value="3" />
                    <input type="radio" name="G1_2soru3" value="4" />
                    <input type="radio" name="G1_2soru3" value="5" />
                    <input type="radio" name="G1_2soru3" value="6" />
                    <input type="radio" name="G1_2soru3" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">4. �stenilenler a&ccedil;�k&ccedil;a tan�mland���nda bir problemin &ccedil;&ouml;z&uuml;m&uuml;ne y&ouml;nelik olduk&ccedil;a karma��k ve uzun bir program yazabilirim.</td>
		        <td colspan="7" id="G1_1soru4" class="InputGroup">
                	<input type="radio" name="G1_1soru4" value="1" />
                	<input type="radio" name="G1_1soru4" value="2" />
                    <input type="radio" name="G1_1soru4" value="3" />
                    <input type="radio" name="G1_1soru4" value="4" />
                    <input type="radio" name="G1_1soru4" value="5" />
                    <input type="radio" name="G1_1soru4" value="6" />
                    <input type="radio" name="G1_1soru4" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G1_2soru4" class="InputGroup">
                	<input type="radio" name="G1_2soru4" value="1" />
                    <input type="radio" name="G1_2soru4" value="2" />
                    <input type="radio" name="G1_2soru4" value="3" />
                    <input type="radio" name="G1_2soru4" value="4" />
                    <input type="radio" name="G1_2soru4" value="5" />
                    <input type="radio" name="G1_2soru4" value="6" />
                    <input type="radio" name="G1_2soru4" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">5. Yazaca��m bir program� mod&uuml;ler bir bi&ccedil;imde organize edip tasarlayabilirim.</td>
		        <td colspan="7" id="G1_1soru5" class="InputGroup">
                	<input type="radio" name="G1_1soru5" value="1" />
                	<input type="radio" name="G1_1soru5" value="2" />
                    <input type="radio" name="G1_1soru5" value="3" />
                    <input type="radio" name="G1_1soru5" value="4" />
                    <input type="radio" name="G1_1soru5" value="5" />
                    <input type="radio" name="G1_1soru5" value="6" />
                    <input type="radio" name="G1_1soru5" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G1_2soru5" class="InputGroup">
                	<input type="radio" name="G1_2soru5" value="1" />
                    <input type="radio" name="G1_2soru5" value="2" />
                    <input type="radio" name="G1_2soru5" value="3" />
                    <input type="radio" name="G1_2soru5" value="4" />
                    <input type="radio" name="G1_2soru5" value="5" />
                    <input type="radio" name="G1_2soru5" value="6" />
                    <input type="radio" name="G1_2soru5" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">6. Yazd���m uzun ve karma��k bir programdaki t&uuml;m hatalar� ay�klayabilir ve &ccedil;al��abilir hale getirebilirim.</td>
		        <td colspan="7" id="G1_1soru6" class="InputGroup">
                	<input type="radio" name="G1_1soru6" value="1" />
                	<input type="radio" name="G1_1soru6" value="2" />
                    <input type="radio" name="G1_1soru6" value="3" />
                    <input type="radio" name="G1_1soru6" value="4" />
                    <input type="radio" name="G1_1soru6" value="5" />
                    <input type="radio" name="G1_1soru6" value="6" />
                    <input type="radio" name="G1_1soru6" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G1_2soru6" class="InputGroup">
                	<input type="radio" name="G1_2soru6" value="1" />
                    <input type="radio" name="G1_2soru6" value="2" />
                    <input type="radio" name="G1_2soru6" value="3" />
                    <input type="radio" name="G1_2soru6" value="4" />
                    <input type="radio" name="G1_2soru6" value="5" />
                    <input type="radio" name="G1_2soru6" value="6" />
                    <input type="radio" name="G1_2soru6" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">7. Uzun, karma��k ve birden fazla dosya gerektiren bir program� kavrayabilirim.</td>
		        <td colspan="7" id="G1_1soru7" class="InputGroup">
                	<input type="radio" name="G1_1soru7" value="1" />
                	<input type="radio" name="G1_1soru7" value="2" />
                    <input type="radio" name="G1_1soru7" value="3" />
                    <input type="radio" name="G1_1soru7" value="4" />
                    <input type="radio" name="G1_1soru7" value="5" />
                    <input type="radio" name="G1_1soru7" value="6" />
                    <input type="radio" name="G1_1soru7" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G1_2soru7" class="InputGroup">
                	<input type="radio" name="G1_2soru7" value="1" />
                    <input type="radio" name="G1_2soru7" value="2" />
                    <input type="radio" name="G1_2soru7" value="3" />
                    <input type="radio" name="G1_2soru7" value="4" />
                    <input type="radio" name="G1_2soru7" value="5" />
                    <input type="radio" name="G1_2soru7" value="6" />
                    <input type="radio" name="G1_2soru7" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">8. Bir program�n daha okunabilir ve a&ccedil;�k olmas� i&ccedil;in uzun ve karma��k k�s�mlar� yeniden yazabilirim.</td>
		        <td colspan="7" id="G1_1soru8" class="InputGroup">
                	<input type="radio" name="G1_1soru8" value="1" />
                	<input type="radio" name="G1_1soru8" value="2" />
                    <input type="radio" name="G1_1soru8" value="3" />
                    <input type="radio" name="G1_1soru8" value="4" />
                    <input type="radio" name="G1_1soru8" value="5" />
                    <input type="radio" name="G1_1soru8" value="6" />
                    <input type="radio" name="G1_1soru8" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G1_2soru8" class="InputGroup">
                	<input type="radio" name="G1_2soru8" value="1" />
                    <input type="radio" name="G1_2soru8" value="2" />
                    <input type="radio" name="G1_2soru8" value="3" />
                    <input type="radio" name="G1_2soru8" value="4" />
                    <input type="radio" name="G1_2soru8" value="5" />
                    <input type="radio" name="G1_2soru8" value="6" />
                    <input type="radio" name="G1_2soru8" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">9. &Ccedil;evrede bir s&uuml;r&uuml; dikkat da��t�c� olsa bile programa odaklanma yollar�n� bulabilirim.</td>
		        <td colspan="7" id="G1_1soru9" class="InputGroup">
                	<input type="radio" name="G1_1soru9" value="1" />
                	<input type="radio" name="G1_1soru9" value="2" />
                    <input type="radio" name="G1_1soru9" value="3" />
                    <input type="radio" name="G1_1soru9" value="4" />
                    <input type="radio" name="G1_1soru9" value="5" />
                    <input type="radio" name="G1_1soru9" value="6" />
                    <input type="radio" name="G1_1soru9" value="7" /></td>
		        <td style="border-top:none;">&nbsp;</td>
		        <td colspan="7" id="G1_2soru9" class="InputGroup">
                	<input type="radio" name="G1_2soru9" value="1" />
                    <input type="radio" name="G1_2soru9" value="2" />
                    <input type="radio" name="G1_2soru9" value="3" />
                    <input type="radio" name="G1_2soru9" value="4" />
                    <input type="radio" name="G1_2soru9" value="5" />
                    <input type="radio" name="G1_2soru9" value="6" />
                    <input type="radio" name="G1_2soru9" value="7" /></td>
	          </tr>
	        </table>
		    <table width="100%" border="0" style="margin-top:20px;">
		      <tr>
		        <td rowspan="2" class="soruTD" style="background:#FFB;">Bu b&ouml;l&uuml;m&uuml;n cevap ��klar� i&ccedil;in a&ccedil;�klama; <strong>1- </strong>Kesinlikle Kat�lm�yorum <strong>2- </strong>Kat�lm�yorum <strong>3- </strong>Karars�z�m <strong>4- </strong>Kat�l�yorum <strong>5- </strong>Kesinlikle Kat�l�yorum </td>
		        <td colspan="5"><font face="Arial, Helvetica, sans-serif" size="2">Scractch <br />Programlama</font></td>
		        <td style="border-bottom:none;">&nbsp;</td>
		        <td colspan="5"><font face="Arial, Helvetica, sans-serif" size="2">C Programlama </font></td>
	          </tr>
		      <tr>
		        <td style="width:25px;">1</td>
		        <td style="width:25px;">2</td>
		        <td style="width:25px;">3</td>
		        <td style="width:25px;">4</td>
		        <td style="width:25px;">5</td>
		        <td style="width:10px;border-top:none;border-bottom:none;">&nbsp;</td>
		        <td style="width:25px;">1</td>
		        <td style="width:25px;">2</td>
		        <td style="width:25px;">3</td>
		        <td style="width:25px;">4</td>
		        <td style="width:25px;">5</td>
	          </tr>
		      <tr>
		        <td class="soruTD">1. F�rsat verilse serbest zamanlar�mda farkl� b&ouml;l&uuml;mlerin programlama derslerine kat�lmay� isterim.</td>
		        <td colspan="5" id="G2_1soru1" class="InputGroup">
                	<input type="radio" name="G2_1soru1" value="1" />
                	<input type="radio" name="G2_1soru1" value="2" />
                    <input type="radio" name="G2_1soru1" value="3" />
                    <input type="radio" name="G2_1soru1" value="4" />
                    <input type="radio" name="G2_1soru1" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru1" class="InputGroup">
                	<input type="radio" name="G2_2soru1" value="1" />
                    <input type="radio" name="G2_2soru1" value="2" />
                    <input type="radio" name="G2_2soru1" value="3" />
                    <input type="radio" name="G2_2soru1" value="4" />
                    <input type="radio" name="G2_2soru1" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">2. Bilgisayar program� yazmak benim i&ccedil;in bir e�lencedir.</td>
		        <td colspan="5" id="G2_1soru2" class="InputGroup">
                	<input type="radio" name="G2_1soru2" value="1" />
                	<input type="radio" name="G2_1soru2" value="2" />
                    <input type="radio" name="G2_1soru2" value="3" />
                    <input type="radio" name="G2_1soru2" value="4" />
                    <input type="radio" name="G2_1soru2" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru2" class="InputGroup">
                	<input type="radio" name="G2_2soru2" value="1" />
                    <input type="radio" name="G2_2soru2" value="2" />
                    <input type="radio" name="G2_2soru2" value="3" />
                    <input type="radio" name="G2_2soru2" value="4" />
                    <input type="radio" name="G2_2soru2" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">3. Bilgisayar programlama ile ilgili bir kul&uuml;be &uuml;ye olmak isterim.</td>
		        <td colspan="5" id="G2_1soru3" class="InputGroup">
                	<input type="radio" name="G2_1soru3" value="1" />
                	<input type="radio" name="G2_1soru3" value="2" />
                    <input type="radio" name="G2_1soru3" value="3" />
                    <input type="radio" name="G2_1soru3" value="4" />
                    <input type="radio" name="G2_1soru3" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru3" class="InputGroup">
                	<input type="radio" name="G2_2soru3" value="1" />
                    <input type="radio" name="G2_2soru3" value="2" />
                    <input type="radio" name="G2_2soru3" value="3" />
                    <input type="radio" name="G2_2soru3" value="4" />
                    <input type="radio" name="G2_2soru3" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">4. Bilgisayar programlama dersleri en &ccedil;ok ho�land���m derslerin ba��ndad�r.</td>
		        <td colspan="5" id="G2_1soru4" class="InputGroup">
                	<input type="radio" name="G2_1soru4" value="1" />
                	<input type="radio" name="G2_1soru4" value="2" />
                    <input type="radio" name="G2_1soru4" value="3" />
                    <input type="radio" name="G2_1soru4" value="4" />
                    <input type="radio" name="G2_1soru4" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru4" class="InputGroup">
                	<input type="radio" name="G2_2soru4" value="1" />
                    <input type="radio" name="G2_2soru4" value="2" />
                    <input type="radio" name="G2_2soru4" value="3" />
                    <input type="radio" name="G2_2soru4" value="4" />
                    <input type="radio" name="G2_2soru4" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">5. Programlama becerisi ile ilgili ders saatlerinin az oldu�unu d&uuml;�&uuml;n&uuml;yorum.</td>
		        <td colspan="5" id="G2_1soru5" class="InputGroup">
                	<input type="radio" name="G2_1soru5" value="1" />
                	<input type="radio" name="G2_1soru5" value="2" />
                    <input type="radio" name="G2_1soru5" value="3" />
                    <input type="radio" name="G2_1soru5" value="4" />
                    <input type="radio" name="G2_1soru5" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru5" class="InputGroup">
                	<input type="radio" name="G2_2soru5" value="1" />
                    <input type="radio" name="G2_2soru5" value="2" />
                    <input type="radio" name="G2_2soru5" value="3" />
                    <input type="radio" name="G2_2soru5" value="4" />
                    <input type="radio" name="G2_2soru5" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">6. Bilgisayar programlama derslerinde kendimi rahat hissederim.</td>
		        <td colspan="5" id="G2_1soru6" class="InputGroup">
                	<input type="radio" name="G2_1soru6" value="1" />
                	<input type="radio" name="G2_1soru6" value="2" />
                    <input type="radio" name="G2_1soru6" value="3" />
                    <input type="radio" name="G2_1soru6" value="4" />
                    <input type="radio" name="G2_1soru6" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru6" class="InputGroup">
                	<input type="radio" name="G2_2soru6" value="1" />
                    <input type="radio" name="G2_2soru6" value="2" />
                    <input type="radio" name="G2_2soru6" value="3" />
                    <input type="radio" name="G2_2soru6" value="4" />
                    <input type="radio" name="G2_2soru6" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">7. Bilgisayarda program yapmay� &ouml;�renebilece�imden eminim.</td>
		        <td colspan="5" id="G2_1soru7" class="InputGroup">
                	<input type="radio" name="G2_1soru7" value="1" />
                	<input type="radio" name="G2_1soru7" value="2" />
                    <input type="radio" name="G2_1soru7" value="3" />
                    <input type="radio" name="G2_1soru7" value="4" />
                    <input type="radio" name="G2_1soru7" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru7" class="InputGroup">
                	<input type="radio" name="G2_2soru7" value="1" />
                    <input type="radio" name="G2_2soru7" value="2" />
                    <input type="radio" name="G2_2soru7" value="3" />
                    <input type="radio" name="G2_2soru7" value="4" />
                    <input type="radio" name="G2_2soru7" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">8. Programlama ile ilgili &uuml;st d&uuml;zey &uuml;r&uuml;nler ortaya koyabilece�imden eminim.</td>
		        <td colspan="5" id="G2_1soru8" class="InputGroup">
                	<input type="radio" name="G2_1soru8" value="1" />
                	<input type="radio" name="G2_1soru8" value="2" />
                    <input type="radio" name="G2_1soru8" value="3" />
                    <input type="radio" name="G2_1soru8" value="4" />
                    <input type="radio" name="G2_1soru8" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru8" class="InputGroup">
                	<input type="radio" name="G2_2soru8" value="1" />
                    <input type="radio" name="G2_2soru8" value="2" />
                    <input type="radio" name="G2_2soru8" value="3" />
                    <input type="radio" name="G2_2soru8" value="4" />
                    <input type="radio" name="G2_2soru8" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">9. Uzun ve karma��k programlar yazabilece�imi d&uuml;�&uuml;n&uuml;r&uuml;m.</td>
		        <td colspan="5" id="G2_1soru9" class="InputGroup">
                	<input type="radio" name="G2_1soru9" value="1" />
                	<input type="radio" name="G2_1soru9" value="2" />
                    <input type="radio" name="G2_1soru9" value="3" />
                    <input type="radio" name="G2_1soru9" value="4" />
                    <input type="radio" name="G2_1soru9" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru9" class="InputGroup">
                	<input type="radio" name="G2_2soru9" value="1" />
                    <input type="radio" name="G2_2soru9" value="2" />
                    <input type="radio" name="G2_2soru9" value="3" />
                    <input type="radio" name="G2_2soru9" value="4" />
                    <input type="radio" name="G2_2soru9" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">10. Bilgisayar programlama derslerinden korkar�m.</td>
		        <td colspan="5" id="G2_1soru10" class="InputGroup">
                	<input type="radio" name="G2_1soru10" value="1" />
                	<input type="radio" name="G2_1soru10" value="2" />
                    <input type="radio" name="G2_1soru10" value="3" />
                    <input type="radio" name="G2_1soru10" value="4" />
                    <input type="radio" name="G2_1soru10" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru10" class="InputGroup">
                	<input type="radio" name="G2_2soru10" value="1" />
                    <input type="radio" name="G2_2soru10" value="2" />
                    <input type="radio" name="G2_2soru10" value="3" />
                    <input type="radio" name="G2_2soru10" value="4" />
                    <input type="radio" name="G2_2soru10" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">11. Programlamada iyi de�ilim.</td>
		        <td colspan="5" id="G2_1soru11" class="InputGroup">
                	<input type="radio" name="G2_1soru11" value="1" />
                	<input type="radio" name="G2_1soru11" value="2" />
                    <input type="radio" name="G2_1soru11" value="3" />
                    <input type="radio" name="G2_1soru11" value="4" />
                    <input type="radio" name="G2_1soru11" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru11" class="InputGroup">
                	<input type="radio" name="G2_2soru11" value="1" />
                    <input type="radio" name="G2_2soru11" value="2" />
                    <input type="radio" name="G2_2soru11" value="3" />
                    <input type="radio" name="G2_2soru11" value="4" />
                    <input type="radio" name="G2_2soru11" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">12. Programlama bana &ccedil;ok zor geliyor.</td>
		        <td colspan="5" id="G2_1soru12" class="InputGroup">
                	<input type="radio" name="G2_1soru12" value="1" />
                	<input type="radio" name="G2_1soru12" value="2" />
                    <input type="radio" name="G2_1soru12" value="3" />
                    <input type="radio" name="G2_1soru12" value="4" />
                    <input type="radio" name="G2_1soru12" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru12" class="InputGroup">
                	<input type="radio" name="G2_2soru12" value="1" />
                    <input type="radio" name="G2_2soru12" value="2" />
                    <input type="radio" name="G2_2soru12" value="3" />
                    <input type="radio" name="G2_2soru12" value="4" />
                    <input type="radio" name="G2_2soru12" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">13. Bo� zamanlar�mda bilgisayar program� yazmayla u�ra�mak i&ccedil;imden gelmez.</td>
		        <td colspan="5" id="G2_1soru13" class="InputGroup">
                	<input type="radio" name="G2_1soru13" value="1" />
                	<input type="radio" name="G2_1soru13" value="2" />
                    <input type="radio" name="G2_1soru13" value="3" />
                    <input type="radio" name="G2_1soru13" value="4" />
                    <input type="radio" name="G2_1soru13" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru13" class="InputGroup">
                	<input type="radio" name="G2_2soru13" value="1" />
                    <input type="radio" name="G2_2soru13" value="2" />
                    <input type="radio" name="G2_2soru13" value="3" />
                    <input type="radio" name="G2_2soru13" value="4" />
                    <input type="radio" name="G2_2soru13" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">14. Programlama dersleri benim hep en k&ouml;t&uuml; dersim olmu�tur.</td>
		        <td colspan="5" id="G2_1soru14" class="InputGroup">
                	<input type="radio" name="G2_1soru14" value="1" />
                	<input type="radio" name="G2_1soru14" value="2" />
                    <input type="radio" name="G2_1soru14" value="3" />
                    <input type="radio" name="G2_1soru14" value="4" />
                    <input type="radio" name="G2_1soru14" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru14" class="InputGroup">
                	<input type="radio" name="G2_2soru14" value="1" />
                    <input type="radio" name="G2_2soru14" value="2" />
                    <input type="radio" name="G2_2soru14" value="3" />
                    <input type="radio" name="G2_2soru14" value="4" />
                    <input type="radio" name="G2_2soru14" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">15. Pek &ccedil;ok konunun &uuml;stesinden gelebilirim, fakat programlamayla ilgili iyi bir i� &ccedil;�karamam.</td>
		        <td colspan="5" id="G2_1soru15" class="InputGroup">
                	<input type="radio" name="G2_1soru15" value="1" />
                	<input type="radio" name="G2_1soru15" value="2" />
                    <input type="radio" name="G2_1soru15" value="3" />
                    <input type="radio" name="G2_1soru15" value="4" />
                    <input type="radio" name="G2_1soru15" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru15" class="InputGroup">
                	<input type="radio" name="G2_2soru15" value="1" />
                    <input type="radio" name="G2_2soru15" value="2" />
                    <input type="radio" name="G2_2soru15" value="3" />
                    <input type="radio" name="G2_2soru15" value="4" />
                    <input type="radio" name="G2_2soru15" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">16. Programlama benim i� hayat�m i&ccedil;in &ouml;nemli olmayacak.</td>
		        <td colspan="5" id="G2_1soru16" class="InputGroup">
                	<input type="radio" name="G2_1soru16" value="1" />
                	<input type="radio" name="G2_1soru16" value="2" />
                    <input type="radio" name="G2_1soru16" value="3" />
                    <input type="radio" name="G2_1soru16" value="4" />
                    <input type="radio" name="G2_1soru16" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru16" class="InputGroup">
                	<input type="radio" name="G2_2soru16" value="1" />
                    <input type="radio" name="G2_2soru16" value="2" />
                    <input type="radio" name="G2_2soru16" value="3" />
                    <input type="radio" name="G2_2soru16" value="4" />
                    <input type="radio" name="G2_2soru16" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">17. Okuldan mezun olduktan sonra programlama becerilerimi &ccedil;ok kullanaca��m� sanm�yorum.</td>
		        <td colspan="5" id="G2_1soru17" class="InputGroup">
                	<input type="radio" name="G2_1soru17" value="1" />
                	<input type="radio" name="G2_1soru17" value="2" />
                    <input type="radio" name="G2_1soru17" value="3" />
                    <input type="radio" name="G2_1soru17" value="4" />
                    <input type="radio" name="G2_1soru17" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru17" class="InputGroup">
                	<input type="radio" name="G2_2soru17" value="1" />
                    <input type="radio" name="G2_2soru17" value="2" />
                    <input type="radio" name="G2_2soru17" value="3" />
                    <input type="radio" name="G2_2soru17" value="4" />
                    <input type="radio" name="G2_2soru17" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">18. Programlama dersi almak benim i&ccedil;in zaman kayb�d�r.</td>
		        <td colspan="5" id="G2_1soru18" class="InputGroup">
                	<input type="radio" name="G2_1soru18" value="1" />
                	<input type="radio" name="G2_1soru18" value="2" />
                    <input type="radio" name="G2_1soru18" value="3" />
                    <input type="radio" name="G2_1soru18" value="4" />
                    <input type="radio" name="G2_1soru18" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru18" class="InputGroup">
                	<input type="radio" name="G2_2soru18" value="1" />
                    <input type="radio" name="G2_2soru18" value="2" />
                    <input type="radio" name="G2_2soru18" value="3" />
                    <input type="radio" name="G2_2soru18" value="4" />
                    <input type="radio" name="G2_2soru18" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">19. Programlamada iyi olmam, benim gelece�im i&ccedil;in &ouml;nemli de�il.</td>
		        <td colspan="5" id="G2_1soru19" class="InputGroup">
                	<input type="radio" name="G2_1soru19" value="1" />
                	<input type="radio" name="G2_1soru19" value="2" />
                    <input type="radio" name="G2_1soru19" value="3" />
                    <input type="radio" name="G2_1soru19" value="4" />
                    <input type="radio" name="G2_1soru19" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru19" class="InputGroup">
                	<input type="radio" name="G2_2soru19" value="1" />
                    <input type="radio" name="G2_2soru19" value="2" />
                    <input type="radio" name="G2_2soru19" value="3" />
                    <input type="radio" name="G2_2soru19" value="4" />
                    <input type="radio" name="G2_2soru19" value="5" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">20. Hocalar�m ileri programlaman�n benim i&ccedil;in zaman kayb� olaca��n� d&uuml;�&uuml;n&uuml;r.</td>
		        <td colspan="5" id="G2_1soru20" class="InputGroup">
                	<input type="radio" name="G2_1soru20" value="1" />
                	<input type="radio" name="G2_1soru20" value="2" />
                    <input type="radio" name="G2_1soru20" value="3" />
                    <input type="radio" name="G2_1soru20" value="4" />
                    <input type="radio" name="G2_1soru20" value="5" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="5" id="G2_2soru20" class="InputGroup">
                	<input type="radio" name="G2_2soru20" value="1" />
                    <input type="radio" name="G2_2soru20" value="2" />
                    <input type="radio" name="G2_2soru20" value="3" />
                    <input type="radio" name="G2_2soru20" value="4" />
                    <input type="radio" name="G2_2soru20" value="5" /></td>
	          </tr>
	        </table>
		    <table width="100%" border="0" style="margin-top:20px;">
		      <tr>
		        <td rowspan="2" class="soruTD" style="background:#FFB;">Bu b&ouml;l&uuml;m&uuml;n cevap ��klar� i&ccedil;in a&ccedil;�klama; <strong>1- </strong>Kesinlikle Yanl�� <strong>7- </strong>Kesinlikle Do�ru aras�nda size en uygun de�eri i�aretleyiniz. </td>
		        <td colspan="7"><font face="Arial, Helvetica, sans-serif" size="2">Scractch Programlama</font></td>
		        <td style="border-bottom:none;">&nbsp;</td>
		        <td colspan="7"><font face="Arial, Helvetica, sans-serif" size="2">C Programlama </font></td>
	          </tr>
		      <tr>
		        <td style="width:25px;">1</td>
		        <td style="width:25px;">2</td>
		        <td style="width:25px;">3</td>
		        <td style="width:25px;">4</td>
		        <td style="width:25px;">5</td>
		        <td style="width:25px;">6</td>
		        <td style="width:25px;">7</td>
		        <td style="width:10px; border-top:none;border-bottom:none;">&nbsp;</td>
		        <td style="width:25px;">1</td>
		        <td style="width:25px;">2</td>
		        <td style="width:25px;">3</td>
		        <td style="width:25px;">4</td>
		        <td style="width:25px;">5</td>
		        <td style="width:25px;">6</td>
		        <td style="width:25px;">7</td>
	          </tr>
		      <tr>
		        <td class="soruTD">1. Programlama i&ccedil;in gerekli materyalleri mant�ksal bir yap�da organize edebilirim.</td>
		        <td colspan="7" id="G3_1soru1" class="InputGroup">
                	<input type="radio" name="G3_1soru1" value="1" />
                	<input type="radio" name="G3_1soru1" value="2" />
                    <input type="radio" name="G3_1soru1" value="3" />
                    <input type="radio" name="G3_1soru1" value="4" />
                    <input type="radio" name="G3_1soru1" value="5" />
                    <input type="radio" name="G3_1soru1" value="6" />
                    <input type="radio" name="G3_1soru1" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G3_2soru1" class="InputGroup">
                	<input type="radio" name="G3_2soru1" value="1" />
                    <input type="radio" name="G3_2soru1" value="2" />
                    <input type="radio" name="G3_2soru1" value="3" />
                    <input type="radio" name="G3_2soru1" value="4" />
                    <input type="radio" name="G3_2soru1" value="5" />
                    <input type="radio" name="G3_2soru1" value="6" />
                    <input type="radio" name="G3_2soru1" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">2. Gelecekteki &ouml;�rencilere programlama e�itimi vermek i&ccedil;in bir &ccedil;al��ma rehberi &uuml;retemem.</td>
		        <td colspan="7" id="G3_1soru2" class="InputGroup">
                	<input type="radio" name="G3_1soru2" value="1" />
                	<input type="radio" name="G3_1soru2" value="2" />
                    <input type="radio" name="G3_1soru2" value="3" />
                    <input type="radio" name="G3_1soru2" value="4" />
                    <input type="radio" name="G3_1soru2" value="5" />
                    <input type="radio" name="G3_1soru2" value="6" />
                    <input type="radio" name="G3_1soru2" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G3_2soru2" class="InputGroup">
                	<input type="radio" name="G3_2soru2" value="1" />
                    <input type="radio" name="G3_2soru2" value="2" />
                    <input type="radio" name="G3_2soru2" value="3" />
                    <input type="radio" name="G3_2soru2" value="4" />
                    <input type="radio" name="G3_2soru2" value="5" />
                    <input type="radio" name="G3_2soru2" value="6" />
                    <input type="radio" name="G3_2soru2" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">3. Programlama yaparken, bu e�itimde &ouml;�rendi�im becerileri kullanabilirim.</td>
		        <td colspan="7" id="G3_1soru3" class="InputGroup">
                	<input type="radio" name="G3_1soru3" value="1" />
                	<input type="radio" name="G3_1soru3" value="2" />
                    <input type="radio" name="G3_1soru3" value="3" />
                    <input type="radio" name="G3_1soru3" value="4" />
                    <input type="radio" name="G3_1soru3" value="5" />
                    <input type="radio" name="G3_1soru3" value="6" />
                    <input type="radio" name="G3_1soru3" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G3_2soru3" class="InputGroup">
                	<input type="radio" name="G3_2soru3" value="1" />
                    <input type="radio" name="G3_2soru3" value="2" />
                    <input type="radio" name="G3_2soru3" value="3" />
                    <input type="radio" name="G3_2soru3" value="4" />
                    <input type="radio" name="G3_2soru3" value="5" />
                    <input type="radio" name="G3_2soru3" value="6" />
                    <input type="radio" name="G3_2soru3" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">4. Bu e�itim sonucunda programlama hakk�ndaki tutumum de�i�ti.</td>
		        <td colspan="7" id="G3_1soru4" class="InputGroup">
                	<input type="radio" name="G3_1soru4" value="1" />
                	<input type="radio" name="G3_1soru4" value="2" />
                    <input type="radio" name="G3_1soru4" value="3" />
                    <input type="radio" name="G3_1soru4" value="4" />
                    <input type="radio" name="G3_1soru4" value="5" />
                    <input type="radio" name="G3_1soru4" value="6" />
                    <input type="radio" name="G3_1soru4" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G3_2soru4" class="InputGroup">
                	<input type="radio" name="G3_2soru4" value="1" />
                    <input type="radio" name="G3_2soru4" value="2" />
                    <input type="radio" name="G3_2soru4" value="3" />
                    <input type="radio" name="G3_2soru4" value="4" />
                    <input type="radio" name="G3_2soru4" value="5" />
                    <input type="radio" name="G3_2soru4" value="6" />
                    <input type="radio" name="G3_2soru4" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">5. Programlamada kullan�lan metinleri mant�kl� bir �ekilde kritik edebilirim.</td>
		        <td colspan="7" id="G3_1soru5" class="InputGroup">
                	<input type="radio" name="G3_1soru5" value="1" />
                	<input type="radio" name="G3_1soru5" value="2" />
                    <input type="radio" name="G3_1soru5" value="3" />
                    <input type="radio" name="G3_1soru5" value="4" />
                    <input type="radio" name="G3_1soru5" value="5" />
                    <input type="radio" name="G3_1soru5" value="6" />
                    <input type="radio" name="G3_1soru5" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G3_2soru5" class="InputGroup">
                	<input type="radio" name="G3_2soru5" value="1" />
                    <input type="radio" name="G3_2soru5" value="2" />
                    <input type="radio" name="G3_2soru5" value="3" />
                    <input type="radio" name="G3_2soru5" value="4" />
                    <input type="radio" name="G3_2soru5" value="5" />
                    <input type="radio" name="G3_2soru5" value="6" />
                    <input type="radio" name="G3_2soru5" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">6. &Ouml;�rendi�im konular sayesinde programlamada kendime daha &ccedil;ok g&uuml;venirim.</td>
		        <td colspan="7" id="G3_1soru6" class="InputGroup">
                	<input type="radio" name="G3_1soru6" value="1" />
                	<input type="radio" name="G3_1soru6" value="2" />
                    <input type="radio" name="G3_1soru6" value="3" />
                    <input type="radio" name="G3_1soru6" value="4" />
                    <input type="radio" name="G3_1soru6" value="5" />
                    <input type="radio" name="G3_1soru6" value="6" />
                    <input type="radio" name="G3_1soru6" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G3_2soru6" class="InputGroup">
                	<input type="radio" name="G3_2soru6" value="1" />
                    <input type="radio" name="G3_2soru6" value="2" />
                    <input type="radio" name="G3_2soru6" value="3" />
                    <input type="radio" name="G3_2soru6" value="4" />
                    <input type="radio" name="G3_2soru6" value="5" />
                    <input type="radio" name="G3_2soru6" value="6" />
                    <input type="radio" name="G3_2soru6" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">7. Bu e�itim sonucunda, mevcut programlama becerilerimi geli�tiremedim.</td>
		        <td colspan="7" id="G3_1soru7" class="InputGroup">
                	<input type="radio" name="G3_1soru7" value="1" />
                	<input type="radio" name="G3_1soru7" value="2" />
                    <input type="radio" name="G3_1soru7" value="3" />
                    <input type="radio" name="G3_1soru7" value="4" />
                    <input type="radio" name="G3_1soru7" value="5" />
                    <input type="radio" name="G3_1soru7" value="6" />
                    <input type="radio" name="G3_1soru7" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G3_2soru7" class="InputGroup">
                	<input type="radio" name="G3_2soru7" value="1" />
                    <input type="radio" name="G3_2soru7" value="2" />
                    <input type="radio" name="G3_2soru7" value="3" />
                    <input type="radio" name="G3_2soru7" value="4" />
                    <input type="radio" name="G3_2soru7" value="5" />
                    <input type="radio" name="G3_2soru7" value="6" />
                    <input type="radio" name="G3_2soru7" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">8. Bu e�itimde edindi�im programlama becerilerimi di�erlerinde de g&ouml;sterebilirim.</td>
		        <td colspan="7" id="G3_1soru8" class="InputGroup">
                	<input type="radio" name="G3_1soru8" value="1" />
                	<input type="radio" name="G3_1soru8" value="2" />
                    <input type="radio" name="G3_1soru8" value="3" />
                    <input type="radio" name="G3_1soru8" value="4" />
                    <input type="radio" name="G3_1soru8" value="5" />
                    <input type="radio" name="G3_1soru8" value="6" />
                    <input type="radio" name="G3_1soru8" value="7" /></td>
		        <td style="border-top:none;border-bottom:none;">&nbsp;</td>
		        <td colspan="7" id="G3_2soru8" class="InputGroup">
                	<input type="radio" name="G3_2soru8" value="1" />
                    <input type="radio" name="G3_2soru8" value="2" />
                    <input type="radio" name="G3_2soru8" value="3" />
                    <input type="radio" name="G3_2soru8" value="4" />
                    <input type="radio" name="G3_2soru8" value="5" />
                    <input type="radio" name="G3_2soru8" value="6" />
                    <input type="radio" name="G3_2soru8" value="7" /></td>
	          </tr>
		      <tr>
		        <td class="soruTD">9. Bu e�itim sonucunda daha entelekt&uuml;el d&uuml;�&uuml;nen bir insan oldu�umu hissediyorum.</td>
		        <td colspan="7" id="G3_1soru9" class="InputGroup">
                	<input type="radio" name="G3_1soru9" value="1" />
                	<input type="radio" name="G3_1soru9" value="2" />
                    <input type="radio" name="G3_1soru9" value="3" />
                    <input type="radio" name="G3_1soru9" value="4" />
                    <input type="radio" name="G3_1soru9" value="5" />
                    <input type="radio" name="G3_1soru9" value="6" />
                    <input type="radio" name="G3_1soru9" value="7" /></td>
		        <td style="border-top:none;">&nbsp;</td>
		        <td colspan="7" id="G3_2soru9" class="InputGroup">
                	<input type="radio" name="G3_2soru9" value="1" />
                    <input type="radio" name="G3_2soru9" value="2" />
                    <input type="radio" name="G3_2soru9" value="3" />
                    <input type="radio" name="G3_2soru9" value="4" />
                    <input type="radio" name="G3_2soru9" value="5" />
                    <input type="radio" name="G3_2soru9" value="6" />
                    <input type="radio" name="G3_2soru9" value="7" /></td>
	          </tr>
	        </table>
            <table border="0" width="100%" style="margin-top:10px;">
            	<tr>
                	<td class="soruTD" style="background:#FFB;">
                    	1. Programlamay� ��retirken hangisini kullanmay� tercih edersiniz? Nedenlerini a��klay�n�z? <span style="color:#F00;">*</span>
                    </td>
                </tr>
                <tr>
                	<td class="soruTD">
                    	<textarea name="soru1" style="min-width:990px; max-width:990px;" id="soru1"></textarea>
                    </td>
                </tr>
            	<tr>
                	<td class="soruTD" style="background:#FFB;">
                    	2. Bu iki arac�n avantaj ve dezavantajlar�n� kar��la�t�r�n�z? <span style="color:#F00;">*</span>
                    </td>
                </tr>
                <tr>
                	<td class="soruTD">
                    	<textarea name="soru2" style="min-width:990px; max-width:990px;" id="soru2"></textarea>
                    </td>
                </tr>
            </table>
            <center><input type="submit" value="Anketi Tamamla" id="FormSubmit"/></center>
            </form>
	      </div>
		</div><!-- // ��erik Sonu -->
		<div id="footer">
			<p>&copy; 2016 Ercan KORKMAZ </p>
			
		</div><!-- // end #footer -->
	</div><!-- // end #container -->
</div><!-- // end #wrapper -->
	
	
</body>
</html>
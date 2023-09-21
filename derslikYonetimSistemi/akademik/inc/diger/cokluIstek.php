<?php	
	if(isset($_GET['kayitEkle']) and isset($_POST['ders']))
		@include("inc/diger/cokluIstekKaydet.php"); // Ýstek Ekler
	if(count($_POST["istek"])==0)
		header ("Location:index.php?diger");
?>
 		<div class="menuAdi">
        	<div class="ad">
            <?php
					if((isset($_GET["kayitEkle"])) and (count($_GET) == 1))
					{
						$istekler=NULL;
						foreach($_POST["istek"] as $deger)
						{	
							$istekler .= $deger."-";
						}
						$istekler=substr($istekler,0,-1);
						setcookie("istekler",$istekler);
					}
			?>
    
            <form action="index.php?kayitEkle&bildirim" method="post" target="_self">	
                <select name="ders" id="jumpMenu" style="margin-top:1px; padding:5px;">
                	<option style="border-bottom:1px solid #000; background:#333; color:#FFF;">Ders Seçiniz</option>
					<?php
                    	@include('../inc/baglan.php'); 
						$sorgu=mysql_query("select * from digerdersler where ogretmenID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
						while($alanlar=mysql_fetch_array($sorgu))
						{
							echo "<option value='$alanlar[id]'>$alanlar[ders] [$alanlar[kodu]]</option>";
						}
					?>
                </select>
                <select name="dTuru" id="jumpMenu" style="margin-top:1px; padding:5px;width:105px;text-align:center;">
					<option style="padding:3px;">TS</option>
                    <option style="padding:3px;">US</option>
                </select>
            &nbsp;
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Kaydet" style="padding:3px;width:110px;" /></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
		</form>
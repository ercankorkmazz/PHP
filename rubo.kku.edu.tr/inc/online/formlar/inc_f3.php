		<div class="container templatemo_wrapper_online">
            <!-- home start -->
            <div class="row">
              <div class="col-sm-6">
                <div class="col-sm-6"></div>
              </div>
              <div class="col-sm-6 templatemo_onlineSayfa">
                <?php 
					// aktif formu getirir
					@include("inc/inc_baglan.php");
					$sql_fotm=@mysql_query("select * from kullanici where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"]);
					$form=@mysql_fetch_array($sql_fotm);
					if($form["f3"] == 0){
				?>
                <form action="index.php" method="post">
                    <div class="aciklamalar">
                        <div class="baslik" style="position:static;">3. GÜN</div>
                        <div class="aciklama">
                            Arkadaþlar,<br /><br /> 
Robot kampýmýzda üç günü tamamladýk. Robot kampýnda yaþadýðýnýz deneyimleriniz bizimle paylaþýr mýsýnýz? Ýstediðiniz her þeyi yazabilirsiniz. Neler öðrendiðinizi, arakalarýnýzla yaþadýðýnýz sizi mutlu veya mutsuz eden olaylarý, eðitmenler ile yaþadýðýnýz deneyimleri ve önerilerinizi rahatça yazabilirsiniz.
                        </div>
                    </div>
                    <input type="text" name="adSoyad" class="textarea" style="min-height:30px; font-size:14px; padding:7px;" placeholder="Adýnýzý soyadýnýzý yazýnýz." />
                    <div class="clear">&nbsp;</div>
                    <textarea name="veri" class="textarea" placeholder="Düþüncelerinizi yazýnýz."></textarea>
                    <div class="btnDiv">
                    	<input type="submit" value="Gönder" />
                    </div>
                </form>
                <?php }else{?>
                    <div class="formBilgi">
                        <img src="images/ok.png" />
                        <div class="ortaBaslik">Katýlýmýnýz için teþekkürler!</div>
                    </div>
                <?php }?>
              </div>
          </div>
            <!-- home end -->   
		</div>  
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
                        <div class="baslik" style="position:static;">3. G�N</div>
                        <div class="aciklama">
                            Arkada�lar,<br /><br /> 
Robot kamp�m�zda �� g�n� tamamlad�k. Robot kamp�nda ya�ad���n�z deneyimleriniz bizimle payla��r m�s�n�z? �stedi�iniz her �eyi yazabilirsiniz. Neler ��rendi�inizi, arakalar�n�zla ya�ad���n�z sizi mutlu veya mutsuz eden olaylar�, e�itmenler ile ya�ad���n�z deneyimleri ve �nerilerinizi rahat�a yazabilirsiniz.
                        </div>
                    </div>
                    <input type="text" name="adSoyad" class="textarea" style="min-height:30px; font-size:14px; padding:7px;" placeholder="Ad�n�z� soyad�n�z� yaz�n�z." />
                    <div class="clear">&nbsp;</div>
                    <textarea name="veri" class="textarea" placeholder="D���ncelerinizi yaz�n�z."></textarea>
                    <div class="btnDiv">
                    	<input type="submit" value="G�nder" />
                    </div>
                </form>
                <?php }else{?>
                    <div class="formBilgi">
                        <img src="images/ok.png" />
                        <div class="ortaBaslik">Kat�l�m�n�z i�in te�ekk�rler!</div>
                    </div>
                <?php }?>
              </div>
          </div>
            <!-- home end -->   
		</div>  
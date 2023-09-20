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
					if($form["f4"] == 0){
				?>
                    <div class="aciklamalar">
                        <div class="baslik" style="position:static;">4. GÜN</div>
                        <div class="aciklama">
                            <span>Açýklama: </span> ... yazýnýz.
                        </div>
                    </div>
                    
                    <form action="index.php" method="post">
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
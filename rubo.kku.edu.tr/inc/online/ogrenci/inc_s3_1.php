        
        <script type="text/javascript">
			// göster/gizle						
			function showMe() {
				document.getElementById("uyariDivi").style.visibility = "visible"; }
			function hideMe() {
				document.getElementById("uyariDivi").style.visibility = "hidden";  }
				
			window.onload = function()
			{
				//Buraya yazýlan javascript kodlarý sayfa yüklendikten sonra çalýþýr...
				<?php 
					if($_COOKIE['bilgi'] == "kapsulAktifUyarisi")
						echo "showMe();";
					else 
						echo "hideMe();";
				?>
			}
			
		</script>
       
        <div class="container templatemo_wrapper_online min670px">
            <!-- home start -->
            <div class="row">
              <div class="col-sm-6">
                <div class="col-sm-6"></div>
              </div>
              <div class="col-sm-6 templatemo_onlineSayfa baslikli min670px" style="float:right;">
                    <div class="aciklamalar">
                        <div class="baslik">GÖREV 3</div>
                        <div class="aciklama">
                            <span>Açýklama: </span> Güç Kontrol Ünitesine girilebilmiþtir. Fakat güç kontrol ünitesindeki bir parçanýn deðiþtirilmesi gerekmektedir. Dünyadan gönderilen kapsülü bulup, Üsse getiriniz.
                        </div>
                    </div>
                    
                    <div class="clear"></div>
                    <form action="index.php" method="post">
                        <div id="uyariDivi" style="">
                            <div class="uyariKapatBTN">
                                <a href="javascript:;" onclick="hideMe();"><img src="images/close.png" /></a>
                            </div>
                            <div class="icerik">
                            	<img src="images/stopIcon.png" />
                                <div class="clear"></div>
                                <span>
                                	<strong>Dur bakalým, yakalandýn!</strong> <br />
                                    Baþka bir grubun kadunu kullanamazsýn.
                                </span>
                            </div>
                        </div>
                        <div class="s3_v1"><input type="text" name="s3_v1" placeholder="xxxxx" maxlength="5" /></div>
                        <div class="imgShadow">
                        	<img src="images/seviye3BG.jpg" style="width:640px;" />
                        </div>
                        <div class="btnDiv">
                            <input type="submit" value="Gönder" />
                        </div>
                    </form>
              </div>
          </div>
            <!-- home end -->   
		</div> 
        
        <script type="text/javascript">
			// g�ster/gizle						
			function showMe() {
				document.getElementById("uyariDivi").style.visibility = "visible"; }
			function hideMe() {
				document.getElementById("uyariDivi").style.visibility = "hidden";  }
				
			window.onload = function()
			{
				//Buraya yaz�lan javascript kodlar� sayfa y�klendikten sonra �al���r...
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
                        <div class="baslik">G�REV 3</div>
                        <div class="aciklama">
                            <span>A��klama: </span> G�� Kontrol �nitesine girilebilmi�tir. Fakat g�� kontrol �nitesindeki bir par�an�n de�i�tirilmesi gerekmektedir. D�nyadan g�nderilen kaps�l� bulup, �sse getiriniz.
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
                                	<strong>Dur bakal�m, yakaland�n!</strong> <br />
                                    Ba�ka bir grubun kadunu kullanamazs�n.
                                </span>
                            </div>
                        </div>
                        <div class="s3_v1"><input type="text" name="s3_v1" placeholder="xxxxx" maxlength="5" /></div>
                        <div class="imgShadow">
                        	<img src="images/seviye3BG.jpg" style="width:640px;" />
                        </div>
                        <div class="btnDiv">
                            <input type="submit" value="G�nder" />
                        </div>
                    </form>
              </div>
          </div>
            <!-- home end -->   
		</div> 
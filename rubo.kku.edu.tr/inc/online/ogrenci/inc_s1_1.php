		<div class="container templatemo_wrapper_online min670px">
            <!-- home start -->
            <div class="row">
              <div class="col-sm-6">
                <div class="col-sm-6"></div>
              </div>
              <div class="col-sm-6 templatemo_onlineSayfa basliksiz min670px" style="float:right;">
                <div class="aciklamalar">
                	<div class="baslik">&nbsp;</div>
                    <div class="aciklama">
                        <span>A��klama: </span> Ay �stasyonundan ge�en hafta gelen g�r�nt�leri izleyip, grup arkada�lar�n�zla neler oldu�u konusunda tart���n�z. 
                    </div>
                </div>
                <div id="player_a" class="projekktor"></div>
              	<div class="btnDiv">
                	<a href="index.php?kontrol=1585">Tan�t�m� ge� &raquo;</a>
                </div>

				<script type="text/javascript">
                $(document).ready(function() {
                    projekktor('#player_a', {
                    poster: 'media/intro.png',
                    title: 'this is projekktor',
                    autoplay: true,
                    playerFlashMP4: 'media/swf/StrobeMediaPlayback/StrobeMediaPlayback.swf',
                    playerFlashMP3: 'media/swf/StrobeMediaPlayback/StrobeMediaPlayback.swf',
                    width: 640,
                    height: 360,
                    playlist: [
                        {
                        0: {src: "media/RuboIntro.mp4", type: "video/mp4"},
                        1: {src: "media/intro.ogv", type: "video/ogg"},
                        2: {src: "media/intro.webm", type: "video/webm"}
                        }
                    ]    
                    }, function(player) {} // on ready 
                    );
                });
                </script>
              </div>
          </div>
            <!-- home end -->   
		</div>  
		<div class="container templatemo_wrapper_online">
            <!-- home start -->
            <div class="row">
              <div class="col-sm-6">
                <div class="col-sm-6"></div>
              </div>
              <div class="col-sm-6 templatemo_onlineSayfa">
              
              <!-- T�m kay�tlar� listeler -->              
              <?php 
			  	if(count($_GET) == 1 && $_GET["listele"] == "all") 
				{
					for($i=1; $i<=30; $i++)
					{
			  ?>
              	<div class="aciklamalar">
                    <div class="allBaslik"><?php echo "��renci $i"; ?></div>
                    <div class="aciklama" style="margin-top:20px;">
                    	<?php
                        	@include("inc/inc_baglan.php");
							$sql_veriler=@mysql_query("select * from veriler where ogrenciNo='$i' order by formNo");
							$kontrol = 0;
							
							while($alanlar=@mysql_fetch_array($sql_veriler))
							{
								$kontrol = 1;
								echo "<p><span>$alanlar[formNo]. G�n ($alanlar[adSoyad]): </span>$alanlar[veri]</p><hr style='border:1px dashed #888;'>";
							}
							
							if($kontrol == 0)
								echo "<p style='text-align:right;'><span>Kay�t bulunamad�.</span></p><hr style='border:1px dashed #888;'>";
						?>
                    </div>
                </div>              
              <?php } } ?>
              
              <!-- G�ne veya ��renciye g�re listeler -->              
              <?php if((!isset($_GET["O"]) && !isset($_GET["G"])) && (isset($_GET["Gun"]) || isset($_GET["Ogrenci"]))) {?>
                <div class="aciklamalar">
                    <div class="baslik" style="position:static;">
                    	<?php
                        	if(isset($_GET["Gun"]))
								echo $_GET["Gun"].". G�N";
							else if(isset($_GET["Ogrenci"]))
								echo "��RENC� ".$_GET["Ogrenci"];
						?>
                    </div>
                    <div class="aciklama" style="min-height:410px; margin-top:10px;">
                    	<?php
                        	if(isset($_GET["Gun"]))
							{
								@include("inc/inc_baglan.php");
								$sql=@mysql_query("select * from veriler where formNo='$_GET[Gun]' order by ogrenciNo");
								$kontrol=0;
								
								while($alanlar=@mysql_fetch_array($sql))
								{
									$kontrol = 1;									
									echo "<p><span>��renci $alanlar[ogrenciNo] ($alanlar[adSoyad]): </span>$alanlar[veri]</p><hr style='border:1px dashed #888;'>";
								}
							}
							else if(isset($_GET["Ogrenci"]))
							{
								@include("inc/inc_baglan.php");
								$sql=@mysql_query("select * from veriler where ogrenciNo='$_GET[Ogrenci]' order by formNo");
								$kontrol=0;
								
								while($alanlar=@mysql_fetch_array($sql))
								{
									$kontrol = 1;									
									echo "<p><span>$alanlar[formNo]. G�n ($alanlar[adSoyad]): </span>$alanlar[veri]</p><hr style='border:1px dashed #888;'>";
								}
							}
							
							if($kontrol == 0)
								echo "<p style='text-align:right;'><span>Kay�t bulunamad�.</span></p><hr style='border:1px dashed #888;'>";
						?>
                        
                    </div>
                </div>
              <?php } ?>
              
              <!-- G�n ve ��renciye g�re listeler -->  
              <?php 
			  	if((isset($_GET["O"]) && isset($_GET["G"])) && (!isset($_GET["Gun"]) && !isset($_GET["Ogrenci"])))
				{
					@include("inc/inc_baglan.php");
					$sql=@mysql_query("select * from veriler where ogrenciNo='$_GET[O]' && formNo='$_GET[G]'");
					$alanlar=@mysql_fetch_array($sql);
			  ?>
              	<div class="aciklamalar">
                    <div class="baslik" style="position:static;">��RENC� <?php echo $alanlar["ogrenciNo"]." ($alanlar[adSoyad])";?></div>
                    <div class="aciklama" style="min-height:410px; margin-top:10px;">
                        <p><span><?php echo $alanlar["formNo"];?>. G�N: </span><?php echo $alanlar["veri"];?></p>
                        <hr style='border:1px dashed #888;'>
                    </div>
                </div>
              <?php } ?>
              </div>
          </div>
            <!-- home end -->   
		</div>  
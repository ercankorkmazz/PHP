<style>
	section#contact-us  { 
		background-color: #09F;
		padding:50px;
		height:auto;
		min-height:573px;
	}
	section#contact-us  h5{ 
		text-shadow:#000 0px 0px 2px;
	}
</style>
<?php
	$kontrol="";
	if(isset($_GET["devam"]))
		$kontrol=",pActiveTab: 1";
	if(isset($_GET["koduDersler"]))
		$kontrol=",pActiveTab: 2";
	if(isset($_GET["koduDuzenle"]))
		$kontrol=",pActiveTab: 2";
?>
<script type="text/javascript">
	function apdersler(){
		window.location="index.php?kodu&koduDersler";	
	}
</script>

<section id="contact-us">  
  <div class="pTabGenel pTab2" style="width:1305px;">
        <h2 style="float:right;margin-right:55px;">KODU</h2>
		
        <ul class="pTabListe" style="float:left;">
			<li><a href="#" style="text-decoration:none;">HAKKINDA</a></li>
			<li><a href="#" style="text-decoration:none;">DERSLER</a></li>
            <?php if(isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturum"])){ ?> 
				<li><a href="index.php" style="text-decoration:none;" onclick="apdersler();">DERS EKLE</a></li>
            <?php } ?>
		</ul>
        
        <div style="clear:both;"></div>
        
        <div style="width:100%;">
            <div class="pTabContent" id="karsilama">
                <?php 
                    echo $kayit["kodu"];  // Hakkýnda bölümü 
                ?>
            </div>
            
            <div class="pTabContent">
                <!-- Seçili dersin içeriði -->
                <div id="metinAlan">
                    <?php
						include("inc/uyeDers/kodu/ders.php");
                    ?>
                    <!-- Seçili derse ait yorumlar -->
                    <div id="yorumlar">
						 <?php
							include("inc/uyeDers/yorum.php");
                  		  ?>                       
                    </div>
                    <!-- Seçili derse ait yorumlar sonu -->
                </div>
                <!-- Dersler -->
                <div id="blok">
                    <div class="dersSayisi">
                    <?php
                    	include("login/inc/baglan.php");
                        $sayi=mysql_num_rows(mysql_query("select * from kodu where onay='1' order by id desc"));
                        echo "Toplam - $sayi - ders kaydý listelendi.";
					?>
                    </div>
                    <div id="liste">
                        <ul>
                        <?php
                            include("login/inc/baglan.php");
                            $bul=mysql_query("select * from kodu where onay='1' and tanitim='1' order by puan desc");
                            while($veri=mysql_fetch_array($bul))
                            {
                        ?>
                            <div id='ders'>
                            <table width='99%' border="0" style="height:30px;">
                                <tr>
                                	<td style="width:30px;height:25px;">
                                    	<img src='img/logo_site.png' style='width:25px;height:25px;' />
                                	</td>
                                	<td style="height:25px;">
                                    	<li class="devamiBTN" style="width:100%;"><a href="index.php?kodu&devam=<?php echo $veri['id']; ?>" style="display:block;"><?php echo $veri['baslik']; ?> &raquo;</a>
                                	</td>
                                </tr>
                            </table>
                            </div> <!-- ders div sonu -->
                            <?php
                            }
                            include("login/inc/baglan.php");
                            $bul=mysql_query("select * from kodu where onay='1' and tanitim='0' order by puan desc");
                            while($veri=mysql_fetch_array($bul))
                            {
                        ?>
                            <div id='ders'>
                            <table width='99%' border="0" style="height:120px;">
                                <tr>
                                    <td rowspan="3" style="width:120px;">
                                        <li>
                                            <?php 
                                                $sql=@mysql_query("select * from uyelik where id=".$veri['yazarID']);
                                                $alanlar=@mysql_fetch_array($sql);
                                                
                                                if(empty($veri['yazarID']))
                                                    echo "<img src='img/logo_site.png' style='width:120px;height:120px;background:#333;' />";
                                                else if(empty($alanlar['resim']))
                                                    echo "<img src='img/uye/default-user.png' style='width:120px;height:120px;' />";
                                                else
                                                    echo "<img src='img/uye/".$alanlar['resim']."' style='width:120px;height:120px;' />";
                                            ?>
                                        </li>
                                    </td>
                                    <td colspan='3' valign="top" style="padding:0 5px 0 5px;overflow:hidden;">
                                        <li style="height:60px;"><?php echo $veri['baslik']; ?></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:25px;">
                                        <li><img src='img/ico_author.png' style="float:right;"><span style="float:right;padding-right:5px;padding-top:3px;">
                                        <?php
                                            if(!empty($veri['yazarID']))
                                                echo $alanlar["adSoyad"]; 
                                            else
                                                echo "Admin"; 
                                        ?>
                                        </span></li>
                                    </td>
                                </tr>
                                <tr>
                                  <td style="height:25px;">
                                    <li class="devamiBTN"><a href="index.php?kodu&devam=<?php echo $veri['id']; ?>" style="display:block;">Devamý &raquo;</a>
                                  </td>
                                </tr>
                            </table>
                            </div> <!-- ders div sonu -->
                            <?php } ?>
                            </ul>
                		</div>
                </div>
                <!-- Dersler sonu -->
                <div class="clear"></div>
        	</div>
             <?php if(isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturum"])){ ?> 
                <div class="pTabContent" id="karsilama">
                	<?php
						if(isset($_GET["koduDuzenle"]))
							include("inc/uyeDers/kodu/duzenle.php");
						else
							include("inc/uyeDers/kodu/dersler.php");	
					?>
                </div>
            <?php } ?>
		</div>
    </div>
</section>
<script type="text/javascript">
	$(".pTab2").pTab({
		pTab: '.pTabListe',
		pTabElem: 'li',
		pClass: 'pAktif',
		pContent: '.pTabContent',
		pDuration: 1000,
		pEffect: 'fadeIn'<?php echo $kontrol; ?>
	});
</script>
<a name="end"></a>
<?php
error_reporting(NULL);
session_start();
ob_start();
setcookie("bildirim","");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Web'de Eğitim</title>
    <meta charset="iso-8859-9">
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
	<script>
    $(document).ready(function () {
        $('.slider_wrapper')._TMS({
            show: 0,
            pauseOnHover: false,
            prevBu: '.prev',
            nextBu: '.next',
            playBu: false,
            duration: 800,
            preset: 'fade',
            pagination: true, //'.pagination',true,'<ul></ul>'
            pagNums: false,
            slideshow: 8000,
            numStatus: false,
            banners: 'fade',
            waitBannerAnimation: false,
            progressBar: false
        });
    });
    $(document).ready(function () {
        ! function () {
            var map = [],
                names = [],
                win = $(window),
                header = $('header'),
                currClass
                $('.content').each(function (n) {
                    map[n] = this.offsetTop
                    names[n] = $(this).attr('id')
                })
                win
                    .on('scroll', function () {
                        var i = 0
                        while (map[i++] <= win.scrollTop());
                        if (currClass !== names[i - 2])
                            currClass = names[i - 2]
                        header.removeAttr("class").addClass(names[i - 2])
                    })
        }();
    });
    function goToByScroll(id) {
        $('html,body').animate({
            scrollTop: $("#" + id).offset().top
        }, 'slow');
    }
    $(document).ready(function () {
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
    </script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body>
<?php
	if(!isset($_SESSION["$_SERVER[SERVER_NAME]"]))
		header ("Location:index.php");
	
	if(isset($_GET["oturumuKapat"]))
		@include("inc/oturumkapat.php"); // Oturum kapat
?>
<header class="page1">
  <div class="container_12">
    <div class="grid_12">
      <table border="0" style="float:left;margin-top:10px;">
        	<tr>
            	<td>
                	<a href="#" onClick="goToByScroll('page1'); return false;"><img src="images/logo.png" alt=""></a>
                </td>
                <td>
                	<h2 class="siteBasligi">Kantin Otomasyonu</h2>
                </td>
            </tr>
        </table>
      <div class="menu_block">
        <nav class="">
          <ul class="sf-menu">
            <li class="current men"><a onClick="goToByScroll('page1'); return false;" href="#">Faturalar</a> <strong class="hover"></strong></li>
            <li class="men1"><a onClick="goToByScroll('page2'); return false;" href="#">Fatura Ayrıntıları</a><strong class="hover"></strong></li>
            <li class=" men2"><a onClick="goToByScroll('page3'); return false;" href="#">Ayarlar</a> <strong class="hover"></strong></li>
            <li class="men4"><a href="uye.php?oturumuKapat">Çıkış Yap</a> <strong class="hover"></strong></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</header>
<div id="page1" class="content">
  <div class="container_12">
    <div class="box grid_12">
    	<div class="box" style="padding:0; background:none;" align="center">
        	<table border="0">
              <tr>
                <td><img src="images/bakiye.png" style="margin-top:9px;"></td>
                <td style="font-weight:bold; color:#FF9600; font-size:45px;"><strong>
                	<?php
						@include('inc/baglan.php'); 
						$kontrol=0;
						$sorgu=mysql_query("select * from uyeler where id = '".$_SESSION["$_SERVER[SERVER_NAME]kID"]."'");
						$alanlar=mysql_fetch_array($sorgu);
						echo $alanlar["Bakiye"]." TL";
					?>
                </strong></td>
              </tr>
            </table>
        </div>
        <hr>
    	<table width="100%" border="0" cellspacing="5">
          <?php
			@include('inc/baglan.php'); 
			$kontrol=0;
			$sorgu=mysql_query("select * from odemeler where KartNO = '".$_SESSION["$_SERVER[SERVER_NAME]kartNO"]."' order by id desc");
			if(mysql_num_rows($sorgu)>0)
				$kontrol=1;
			if($kontrol==1)
			{
		  ?>
          <tr>
            <td width="30%" class="tdBaslik">Tarih</td>
            <td width="30%" class="tdBaslik">Toplam Kalori</td>
            <td class="tdBaslik">Tutar</td>
            <td class="tdBaslik" style="width:120px;">&nbsp;</td>
          </tr>
          <?php	
			}
			while($alanlar=mysql_fetch_array($sorgu))
			{
				$tarih = explode("/",$alanlar['Tarih']);
				$tarih = "$tarih[2].$tarih[1].$tarih[0]";
		  ?>
          <tr>
            <td class="tdBG"><?php echo $tarih; ?></td>
            <td class="tdBG"><?php echo $alanlar['Kalori']; ?></td>
            <td class="tdBG"><?php echo $alanlar['OdenenTutar']; ?> TL</td>
            <td class="tdBG"><a href="uye.php?ayrinti=<?php echo $alanlar['id']; ?>&#page2">Ayrıntıyı Göster &raquo;</a></td>
          </tr>
        	<?php }
			if($kontrol==0)
				echo "<tr><td colspan='4' style='text-align:center;'>Fatura Kaydı Bulunamadı</td></tr>";
		 ?>
        </table>
    </div>
  </div>
</div>
<div id="page2" class="content">
  <div class="container_12">
    <div class="box grid_12">
    	<H1>Fatura Ayrıntıları</H1>
        <br>
        <div class="box">
        <table width="100%" border="0">
          <?php
			@include('inc/baglan.php'); 
			$kontrol=0;
			$sorgu=mysql_query("select * from faturaicerigi where FaturaID = '".$_GET["ayrinti"]."'");
			if(mysql_num_rows($sorgu)>0)
				$kontrol=1;
			if($kontrol==1)
			{
		  ?>
          <tr>
            <td class="tdBaslik">Ürün Adı</td>
            <td class="tdBaslik" style="width:40px;">Adet</td>
            <td class="tdBaslik" style="width:100px;">Toplam Kalori</td>
            <td class="tdBaslik" style="width:90px;">Birim Fiyatı</td>
            <td class="tdBaslik" style="width:100px;">Toplam Tutar</td>
          </tr>
          <?php	
			}
			while($alanlar=mysql_fetch_array($sorgu))
			{
		  ?>
          <tr>
            <td class="tdBG"><?php echo $alanlar['Urun']; ?></td>
            <td class="tdBG"><?php echo $alanlar['Adet']; ?></td>
            <td class="tdBG"><?php echo $alanlar['ToplamKalori']; ?></td>
            <td class="tdBG"><?php echo $alanlar['BirimFiyati']; ?></td>
            <td class="tdBG"><?php echo $alanlar['ToplamTutar']; ?></td>
          </tr>
        	<?php }
			if($kontrol==0)
				echo "<tr><td colspan='6' style='text-align:center;'>Fatura Seçiniz</td></tr>";
		 ?>
        </table>
        </div>
    </div>
  </div>
</div>
<div id="page3" class="content">
  <div class="container_12">
    <div class="box grid_12">
		<?php @include("inc/ayarlar/listele.php"); ?>
    </div>   
  </div>
</div>
<footer>
	<a onClick="goToByScroll('page1'); return false;" href="#">
</footer>
</body>
</html>
<?php ob_end_flush(); ?>
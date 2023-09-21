<?php
error_reporting(NULL);
session_start();
ob_start();
setcookie("bilgi","");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
<title>Kantin Otomasyonu &Uuml;ye Paneli</title>
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
</head>
<body>
<?php
	if(isset($_SESSION["$_SERVER[SERVER_NAME]"]))
		header ("Location:uye.php");
	
	if(isset($_GET["giris"]))
		@include("inc/oturumac.php"); // Oturum açar
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
            <li class="current men"><a onClick="goToByScroll('page1'); return false;" href="#">&Uuml;ye Girişi</a> <strong class="hover"></strong></li>
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
    <div class="box grid_12" style="width:33%;float:left;">
      <h1 align="right">Üye Girişi</h2>
      	<form method="post" action="index.php?giris" target="_self" style="margin-top:20px;">
        	<table border="0" cellspacing="5" style="width:100%; float:right;">
              <tr>
                <td align="right"><h4 style="margin:0;">Kullanıcı Adı : </h4></td>
                <td align="left"><input type="text" style="border:0;text-align:center; font-weight:bold;" name="Kadi"/></td>
              </tr>
              <tr>
                <td align="right"><h4 style="margin:0;">Şifre :</h4></td>
                <td align="left" style="width:180px;"><input style="border:0;text-align:center; font-weight:bold;" type="password" name="Sifre" /></td>
              </tr>
              <tr>
                <td height="48" colspan="2" align="right"><input type="submit" value="Giriş Yap" class="button" />
              </tr>
        	</table>
    	</form>
    </div>
  </div>
</div>
<?php if(!empty($_COOKIE["bilgi"])){?>
<center>
	<div class="bildirim" align="center" style="margin-top:15px;background:url(images/siyah.png);">
		<h3 style="padding:10px;">
			<?php echo $_COOKIE["bilgi"]; ?>
        </h3>
    </div>
</center>
<?php }?>
<footer>
	<a onClick="goToByScroll('page1'); return false;" href="#">
</footer>
</body>
</html>
<?php ob_end_flush(); ?>
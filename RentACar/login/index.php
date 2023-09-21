<?php
	error_reporting(NULL);
	session_start();
	ob_start();
	setcookie("bildirim","");
	@include("inc/dilislemleri.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Rent A Car | Oto Kiralama</title>
	<?php @include("inc/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <div id="genel">
        <?php @include("inc/banner.php"); ?>
        <!-- içerik -->
			<?php
				if($_COOKIE["bildirim"]!="")
					@include("inc/bildirim.php");
					
				if(isset($_GET["giris"]))
					@include("inc/oturumac.php"); // Oturum açar
			
				if(!isset($_SESSION["$_SERVER[SERVER_NAME]oturum"]))
					@include("inc/girisFormu.php"); // Kullanıcı Girişi Formu
				else
				{
					if(isset($_GET["oturumKapat"]))
						@include("inc/oturumkapat.php"); // Oturumu kapatır
						
					if(count($_GET) == 0)
						@include("inc/anasayfa.php");
						
					if(isset($_GET["sayfalar"]))
						@include("inc/sayfa/sayfalar.php");
					if(isset($_GET["sayfaduzenle"]))
						@include("inc/sayfa/sayfaduzenle.php");
						
					if(isset($_GET["hizmetler"]))
						@include("inc/hizmet/listele.php");
					if(isset($_GET["yenihizmet"]))
						@include("inc/hizmet/yeni.php");
					if(isset($_GET["hizmetduzenle"]))
						@include("inc/hizmet/duzenle.php");
					if(isset($_GET["hizmetsil"]))
						@include("inc/hizmet/sil.php");
						
					if(isset($_GET["aracfilosu"]))
						@include("inc/filo/listele.php");
					if(isset($_GET["yeniarac"]))
						@include("inc/filo/yeni.php");
					if(isset($_GET["aracduzenle"]))
						@include("inc/filo/duzenle.php");
					if(isset($_GET["aracsil"]))
						@include("inc/filo/sil.php");
						
					if(isset($_GET["ekstralar"]))
						@include("inc/ekstra/duzenle.php");
						
					if(isset($_GET["transferler"]))
						@include("inc/transfer/listele.php");
					if(isset($_GET["transfersil"]))
						@include("inc/transfer/sil.php");
					if(isset($_GET["yenitransfer"]))
						@include("inc/transfer/yeni.php");
					if(isset($_GET["transferduzenle"]))
						@include("inc/transfer/duzenle.php");
						
					if(isset($_GET["ayarlar"]))
						@include("inc/profil/duzenle.php");
				}
            ?>
        <!-- içerik sonu -->
    </div>
</body>
</html>
<?php ob_end_flush(); ?>
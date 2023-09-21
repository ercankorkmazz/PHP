<?php
	error_reporting(NULL);
	session_start();
	ob_start();
	setcookie("bildirim","");
	@include("inc/dilislemleri.php");
	@include("inc/dovizGetir.php");
	
	if(!isset($_COOKIE["paraBirimi"]))
		setcookie("paraBirimi","1");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Rent A Car | Oto Kiralama</title>
	<?php @include("inc/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body <?php if($_COOKIE["bildirim"]!="") echo "onLoad='bilgi()'"; ?>>
    <div id="genel">
        <?php @include("inc/banner.php"); ?>
        <!-- içerik -->
			<?php
                if(count($_GET) == 0)
                    @include("inc/anasayfa.php");
				else if(isset($_GET["hakkimizda"]))
					@include("inc/sayfa/hakkimizda.php");
				else if(isset($_GET["kiralamaKosullari"]))
					@include("inc/sayfa/kiralamaKosullari.php");
				else if(isset($_GET["SSS"]))
					@include("inc/sayfa/SSS.php");
				else if(isset($_GET["iletisim"]))
					@include("inc/sayfa/iletisim.php");
				else if(isset($_GET["hizmet"]))
					@include("inc/sayfa/hizmet.php");
					
				else if(isset($_GET["filomuz"]))
					@include("inc/flo.php");
				else if(isset($_GET["rezervasyon"]))
				{
					if(isset($_COOKIE["alisYeri"]))
						@include("inc/rezervasyon.php");
					else
					{
						setcookie("bildirim",$dil["reservasyonBilgileriniGiriniz"]);
						header("location:index.php?filomuz");
					}
				}
				else if(isset($_GET["transfer"]))
					@include("inc/transfer.php");
					
				else if(isset($_GET["form1"]))
					@include("inc/form1.php");
					
				else if(isset($_GET["parabirimi"]))
					@include("inc/parabirimi.php");	
					
				else if(isset($_GET["transferOnay"]))
					@include("inc/transferOnayi.php");
					
				else if(isset($_GET["rezervasyonTamamlandi"]))
					@include("inc/rezervasyonTamamlandi.php");
					
				else if(isset($_GET["mesajIletildi"]))
					@include("inc/mesajIletildi.php");
            ?>
        <!-- içerik sonu -->
        <?php @include("inc/taban.php"); ?>
    </div>
</body>
</html>
<?php ob_end_flush(); ?>
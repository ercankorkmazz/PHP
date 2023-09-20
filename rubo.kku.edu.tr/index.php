<?php 
	ob_start(); 
	session_start(); 
	setcookie("bilgi","");
?>
<!DOCTYPE html>
<head>
    <?php @include("inc/inc_head.php");?>
    <link rel="stylesheet" href="css/templatemo_style.css">
</head>
<body>
	<?php
        if(isset($_GET["oturumAc"]) and !isset($_SESSION["$_SERVER[SERVER_NAME]kullaniciID"]))
            include("inc/inc_oturumAc.php");
            
        if(isset($_GET["oturumKapat"]) and isset($_SESSION["$_SERVER[SERVER_NAME]kullaniciID"]))
            include("inc/inc_oturumKapat.php");
		
		if(!isset($_SESSION["$_SERVER[SERVER_NAME]kullaniciID"]))
		{
			// Oturum kapalý olduðunda çaðýrýlan dosyalar
			@include("inc/ofline/inc_menu.php");
			@include("inc/ofline/inc_projeHakkinda.php");
			@include("inc/ofline/inc_projeEkibi.php");
			@include("inc/ofline/inc_etkinlikler.php");
			@include("inc/ofline/inc_galeri.php");
			@include("inc/ofline/inc_iletisim.php");
			@include("inc/ofline/inc_girisPaneli.php");
			@include("inc/ofline/inc_footer.php");
		}
		else
		{
			// Oturum açýk olduðunda çaðýrýlan dosyalar
			if($_SESSION["$_SERVER[SERVER_NAME]kullaniciTipi"] == 1)
			{
				@include("inc/online/yonetici/inc_menu.php");
				if(count($_GET) == 0)
					@include("inc/online/yonetici/inc_anasayfa.php");
				else if(isset($_GET["listele"]))
					@include("inc/online/yonetici/inc_listele.php");
				else
					@include("inc/online/sayfa404.php");
					
				@include("inc/online/inc_footer.php");	
			}
			else if($_SESSION["$_SERVER[SERVER_NAME]kullaniciTipi"] == 2)
			{
				if($_SESSION["$_SERVER[SERVER_NAME]ceza"] == "0")
				{
					@include("inc/online/ogrenci/inc_menu.php");	
					@include("inc/online/ogrenci/kontrol.php");	
				}
				else
					header("Location:ceza");
					
				@include("inc/online/ogrenci/inc_footer.php");
			}
			else if($_SESSION["$_SERVER[SERVER_NAME]kullaniciTipi"] == 3)
			{
				@include("inc/online/formlar/inc_menu.php");
				if(isset($_POST["veri"]))
					@include("inc/online/formlar/islemler.php");
				else
				{
					$actForm = $_SESSION["$_SERVER[SERVER_NAME]actForm"];
					if($actForm == 1)
						@include("inc/online/formlar/inc_f1.php");
					elseif($actForm == 2)
						@include("inc/online/formlar/inc_f2.php");
					elseif($actForm == 3)
						@include("inc/online/formlar/inc_f3.php");
					elseif($actForm == 4)
						@include("inc/online/formlar/inc_f4.php");
					elseif($actForm == 5)
						@include("inc/online/formlar/inc_f5.php");
					elseif($actForm == 6)
						@include("inc/online/formlar/inc_f6.php");
					elseif($actForm == 7)
						@include("inc/online/formlar/inc_f7.php");
					elseif($actForm == 8)
						@include("inc/online/formlar/inc_f8.php");
					elseif($actForm == 9)
						@include("inc/online/formlar/inc_f9.php");
					elseif($actForm == 10)
						@include("inc/online/formlar/inc_f10.php");
					else
						@include("inc/online/sayfa404.php");						
				}
				@include("inc/online/inc_footer.php");
			}
		}
		
	?>
</body>
</html>
<?php ob_end_flush(); ?>
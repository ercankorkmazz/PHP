<?php
	error_reporting(NULL);
	session_start();
	ob_start();
	if(isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademik"])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Ders Programı</title>
<link href="../../css/yonetimCSS.css" rel="stylesheet" type="text/css" />
<style>
	.EDTable tr td
	{
		padding:1px;
	}
</style>
</head>
<body style="background:none; font-size:9px;">
<?php
if((!isset($_GET['kapat'])) and (!$_POST))
{
?>
<div class="arkaPlan" style="padding-top:0;padding-bottom:0;">
	<?php @include("EDFormuYazdir/izinGunleri.php"); ?>
</div>
<?php } ?>
	<h3 align="center">T.C<br>KIRIKKALE ÜNİVERSİTESİ<BR>EK DERS ÜCRET FORMU</h3>
	<?php include("EDFormuYazdir/bilgiler.php"); ?>
    <?php include("EDFormuYazdir/program.php"); ?>
    <?php include("EDFormuYazdir/dersler.php"); ?>
    <?php include("EDFormuYazdir/dersProgrami.php"); ?>
    <?php include("EDFormuYazdir/sonuc.php"); ?>
    <?php
    if(isset($_GET["kapat"]))
		echo "<script>window.print();</script>";
	?>
</body>
</html>
<?php }else{ header ("Location:../index.php"); }?>
<?php ob_end_flush(); ?>
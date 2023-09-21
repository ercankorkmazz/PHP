<?php if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar" or !isset($_SESSION["$_SERVER[SERVER_NAME]dil"])){ ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php }else{ ?>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<?php } ?>
<meta name="Description" content="rent a car, oto kiralama, adana rent a car, adana oto kiralama, adana araç kiralama, adana havaalanı rent a car, adana havaalanı oto kiralama">

<meta name="Keywords" content="rent a car, oto kiralama, adana rent a car, adana oto kiralama, adana araç kiralama, adana havaalanı rent a car, adana havaalanı oto kiralama">

<meta name="copyright" content="Ercan KORKMAZ">
<script src="js/jquery-2.0.3.min.js" type="text/javascript"></script>
<script src="js/notifIt.js" type="text/javascript"></script>
<link href="css/notifIt.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" ></script>
<script type="text/javascript" src="js/jquery.jqtransform.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/datePicker.js"></script>
<?php @include("js/date.php"); ?>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script src="js/languages/jquery.validationEngine-tr.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/vpcheck.js"></script>
<script type="text/javascript" src="js/ozel.js"></script>

<?php if(isset($_GET["transferOnay"]) || isset($_GET["iletisim"])){?>
	<script src="js/jquery-1.3.2.js" type="text/javascript"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script src="js/jquery.validation.functions.js" type="text/javascript"></script>
    <?php include("js/validation.php"); ?>
<?php } ?>
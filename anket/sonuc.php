<?php
	ob_start();
	if(count($_POST)==0)
		header("location:index.php");
		
	function trCevir($text){
		$text = trim($text);
		$search = array("'","&","^","$","<",">","{","}","[","]",'"');
		$replace = array(" ","ve"," "," ","küçüktür","büyüktür"," "," "," "," "," ");
		$new_text = str_replace($search,$replace,$text);
		return $new_text;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
    <meta name="description" content="Project Description" />
    <meta name="keywords" content="Project Keywords" />
    <title>Scratch / C Programlama Anketi</title>	
    <link href="css/style.css" rel="stylesheet" type="text/css" />			
    <!--[if IE]><link href="css/style-ie.css" rel="stylesheet" type="text/css" /><![endif]-->	
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="js/site.js"></script>
</head>
<?php
	$kontrol=0;
	$sql="insert into sonuclar (ogrNo,G1_1_1,G1_1_2,G1_1_3,G1_1_4,G1_1_5,G1_1_6,G1_1_7,G1_1_8,G1_1_9,G1_2_1,G1_2_2,G1_2_3,G1_2_4,G1_2_5,G1_2_6,G1_2_7,G1_2_8,G1_2_9,G2_1_1,G2_1_2,G2_1_3,G2_1_4,G2_1_5,G2_1_6,G2_1_7,G2_1_8,G2_1_9,G2_1_10,G2_1_11,G2_1_12,G2_1_13,G2_1_14,G2_1_15,G2_1_16,G2_1_17,G2_1_18,G2_1_19,G2_1_20,G2_2_1,G2_2_2,G2_2_3,G2_2_4,G2_2_5,G2_2_6,G2_2_7,G2_2_8,G2_2_9,G2_2_10,G2_2_11,G2_2_12,G2_2_13,G2_2_14,G2_2_15,G2_2_16,G2_2_17,G2_2_18,G2_2_19,G2_2_20,G3_1_1,G3_1_2,G3_1_3,G3_1_4,G3_1_5,G3_1_6,G3_1_7,G3_1_8,G3_1_9,G3_2_1,G3_2_2,G3_2_3,G3_2_4,G3_2_5,G3_2_6,G3_2_7,G3_2_8,G3_2_9,soru1,soru2) values ('$_POST[ogrNo]','$_POST[G1_1soru1]','$_POST[G1_1soru2]','$_POST[G1_1soru3]','$_POST[G1_1soru4]','$_POST[G1_1soru5]','$_POST[G1_1soru6]','$_POST[G1_1soru7]','$_POST[G1_1soru8]','$_POST[G1_1soru9]','$_POST[G1_2soru1]','$_POST[G1_2soru2]','$_POST[G1_2soru3]','$_POST[G1_2soru4]','$_POST[G1_2soru5]','$_POST[G1_2soru6]','$_POST[G1_2soru7]','$_POST[G1_2soru8]','$_POST[G1_2soru9]','$_POST[G2_1soru1]','$_POST[G2_1soru2]','$_POST[G2_1soru3]','$_POST[G2_1soru4]','$_POST[G2_1soru5]','$_POST[G2_1soru6]','$_POST[G2_1soru7]','$_POST[G2_1soru8]','$_POST[G2_1soru9]','$_POST[G2_1soru10]','$_POST[G2_1soru11]','$_POST[G2_1soru12]','$_POST[G2_1soru13]','$_POST[G2_1soru14]','$_POST[G2_1soru15]','$_POST[G2_1soru16]','$_POST[G2_1soru17]','$_POST[G2_1soru18]','$_POST[G2_1soru19]','$_POST[G2_1soru20]','$_POST[G2_2soru1]','$_POST[G2_2soru2]','$_POST[G2_2soru3]','$_POST[G2_2soru4]','$_POST[G2_2soru5]','$_POST[G2_2soru6]','$_POST[G2_2soru7]','$_POST[G2_2soru8]','$_POST[G2_2soru9]','$_POST[G2_2soru10]','$_POST[G2_2soru11]','$_POST[G2_2soru12]','$_POST[G2_2soru13]','$_POST[G2_2soru14]','$_POST[G2_2soru15]','$_POST[G2_2soru16]','$_POST[G2_2soru17]','$_POST[G2_2soru18]','$_POST[G2_2soru19]','$_POST[G2_2soru20]','$_POST[G3_1soru1]','$_POST[G3_1soru2]','$_POST[G3_1soru3]','$_POST[G3_1soru4]','$_POST[G3_1soru5]','$_POST[G3_1soru6]','$_POST[G3_1soru7]','$_POST[G3_1soru8]','$_POST[G3_1soru9]','$_POST[G3_2soru1]','$_POST[G3_2soru2]','$_POST[G3_2soru3]','$_POST[G3_2soru4]','$_POST[G3_2soru5]','$_POST[G3_2soru6]','$_POST[G3_2soru7]','$_POST[G3_2soru8]','$_POST[G3_2soru9]','".trCevir($_POST["soru1"])."','".trCevir($_POST["soru2"])."')";
	
	@include('baglan.php');
	if(@mysql_query($sql,$baglan))
		$kontrol=1;
?>
<body>
<div id="wrapper">
	<div id="container">
		<div id="header" class="clearfix">
		  <h1>Scratch / C Programlama Anketi</h1>
		</div><!-- // end #header -->
		<div id="banner" style="text-align:center;padding:20px 0 40px 0; margin-top:100px;">
			<font face="Arial,Helvetica,sans-serif">
                <br /><?php
                	if($kontrol==1)
						echo "Ankete katıldığınız için teşekkür ederiz.";
					else
						echo "Sunucuda bir sorun oluştur. Lütfen daha sonra tekrar deneyiniz.";
				?> 
			</font>
		</div>
		<div id="main" class="clearfix">
		  <div id="page" style="padding-bottom:100px;" align="center">
          	<a href="index.php" id="FormSubmit" style="font-size:12px;background:#FF7;border-color:#999;">Yeni Katılımcı</a>
	      </div>
		</div><!-- // İçerik Sonu -->
		<div id="footer">
			<p>&copy; 2016 Ercan KORKMAZ </p>
			
		</div><!-- // end #footer -->
	</div><!-- // end #container -->
</div><!-- // end #wrapper -->
<?php ob_end_flush(); ?>
	
	
</body>
</html>
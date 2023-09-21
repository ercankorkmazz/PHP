<?php
	if(count($_POST) > 0)
	{
		$tarihAlis = explode(".",$_POST["startdate"]);
		$tarihDonus = explode(".",$_POST["enddate"]);
		
		//////////////////////////////////////////////////////////////////////
		//PARA: Date Should In YYYY-MM-DD Format
		//RESULT FORMAT:
		// '%y Year %m Month %d Day %h Hours %i Minute %s Seconds'        =>  1 Year 3 Month 14 Day 11 Hours 49 Minute 36 Seconds
		// '%y Year %m Month %d Day'                                    =>  1 Year 3 Month 14 Days
		// '%m Month %d Day'                                            =>  3 Month 14 Day
		// '%d Day %h Hours'                                            =>  14 Day 11 Hours
		// '%d Day'                                                        =>  14 Days
		// '%h Hours %i Minute %s Seconds'                                =>  11 Hours 49 Minute 36 Seconds
		// '%i Minute %s Seconds'                                        =>  49 Minute 36 Seconds
		// '%h Hours                                                    =>  11 Hours
		// '%a Days                                                        =>  468 Days
		//////////////////////////////////////////////////////////////////////
		//function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
		//{
		//    $datetime1 = date_create($date_1);
		//    $datetime2 = date_create($date_2);
		//
		//    $interval = date_diff($datetime1, $datetime2);
		//   
		//    return $interval->format($differenceFormat);
		//   
		//}
		$tarih1 = new DateTime("$tarihAlis[2]-$tarihAlis[1]-$tarihAlis[0]");
		$tarih2 = new DateTime("$tarihDonus[2]-$tarihDonus[1]-$tarihDonus[0]");
		$fark = $tarih1->diff($tarih2);
		$gunSayisi = $fark->format('%a');
		
		if($gunSayisi > 0)
			setcookie("gunSayisi",$gunSayisi);
		else
		{
			setcookie("bildirim",$dil["gecerlitariharaligiseciniz"]);
			if(isset($_GET["kontrol"]))
				header("Location:index.php?filomuz");
			else if(isset($_GET["rezerve"]))
				header("Location:index.php?rezervasyon=".$_GET["rezerve"]);
			else
				header("Location:index.php");
		}
		
		if($_POST["alisYeri"]==0)
		{
			setcookie("bildirim",$dil["alisyeriseciniz"]);
			if(isset($_GET["kontrol"]))
				header("Location:index.php?filomuz");
			else if(isset($_GET["rezerve"]))
				header("Location:index.php?rezervasyon=".$_GET["rezerve"]);
			else
				header("Location:index.php");
		}
		else if($_POST["donusYeri"]==0)
		{
			setcookie("bildirim",$dil["donusyeriseciniz"]);
			if(isset($_GET["kontrol"]))
				header("Location:index.php?filomuz");
			else if(isset($_GET["rezerve"]))
				header("Location:index.php?rezervasyon=".$_GET["rezerve"]);
			else
				header("Location:index.php");
		}
		else
		{
			if(isset($_POST["alisYeri"]))
				setcookie("alisYeri",$_POST["alisYeri"]);
				
			if(isset($_POST["startdate"]))
				setcookie("startdate",$_POST["startdate"]);
				
			if(isset($_POST["alisSaati"]))
				setcookie("alisSaati",$_POST["alisSaati"]);
				
			if(isset($_POST["alisDakika"]))
				setcookie("alisDakika",$_POST["alisDakika"]);
				
			if(isset($_POST["donusYeri"]))
				setcookie("donusYeri",$_POST["donusYeri"]);
				
			if(isset($_POST["enddate"]))
				setcookie("enddate",$_POST["enddate"]);
				
			if(isset($_POST["donusSaati"]))
				setcookie("donusSaati",$_POST["donusSaati"]);
				
			if(isset($_POST["donusDakika"]))
				setcookie("donusDakika",$_POST["donusDakika"]);
				
			if(isset($_POST["paraBirimi"]))
				setcookie("paraBirimi",$_POST["paraBirimi"]);
				
			setcookie("bildirim",$dil["reservasyonbilgilerikaydedildi"]);
			
			if(isset($_GET["rezerve"]))
				header("Location:index.php?rezervasyon=".$_GET["rezerve"]);
			else
				header("Location:index.php?filomuz");
		}
	}
	else
		header("Location:index.php");
?>